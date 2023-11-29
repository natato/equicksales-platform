<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;
class Platform extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($offset=0)
	{
		$this->load->library("session");
		$user=$this->session->userdata("user_name");
		if(isset($user)){
		    $this->load->model("Advert_model");
		    $adverts=$this->Advert_model->getadverts($offset);
		    $this->load->library('pagination');
            $config['base_url'] = 'http://www.equicksales.com/index.php/platform/index';
            $total_rows=$this->Advert_model->getTotal();
            $config['total_rows'] = $total_rows;
            $config['per_page'] = 10;
            $config['num_tag_open'] = "<li class='page-item'>";
            $config['num_tag_close'] = "</li>";
            
            $this->pagination->initialize($config);
            
            $links= $this->pagination->create_links();
			$this->load->view('home',array("user"=>$user,"adverts"=>$adverts,"links"=>$links,"total_rows"=>  $total_rows));
		}
		else{
			$this->load->view('signin');
		}
	}
	public function advert(){
		$this->load->library("session");
		$user=$this->session->userdata("user_name");
		if(isset($user)){
			$this->load->view("advert",array("user"=>$user));
		}
		else{
			redirect("platform/index");
		}
		
	}
	public function newadvert(){
		$this->load->library("session");
		$user=$this->session->userdata("user_name");
		$user_id=$this->session->userdata("user_id"); 
		if(isset($user)){
			$this->load->model("Advert_model");
			$title=$this->input->post("title");
			$description=$this->input->post("description");
			$contactperson=$this->input->post("contactperson");
			$contact=$this->input->post("contact");
			$posted_date=date("Y-m-d");
			$id=uniqid();
			$this->Advert_model->add($id,$title,$description,$contactperson,$contact,$posted_date,$user_id);
			$this->load->view("advert",array("user"=>$user,"msg"=>"Your advert has been published successfully "));
		}
		else{
			redirect("platform/index");
		}
	}
	public function profile(){
		$this->load->library("session");
		$user=$this->session->userdata("user_name");
		if(isset($user)){
			$this->load->view("profile",array("user"=>$user));
		}
		else{
			$this->load->view('signin');
		}
	}
	public function edit_profile(){
		$this->load->library("session");
		$user=$this->session->userdata("user_name");
		if(isset($user)){
			$name=$this->input->post("name");
			$this->load->model("User_model");
			$user_id=$this->session->userdata("user_id");
			$this->User_model->editname($user_id,$name);
			$u=$this->User_model->getuserbyid($user_id);
			$this->session->set_userdata("user_name",$u->name);
			$this->session->set_userdata("user_id",$u->id);
			$this->session->set_userdata("user_activated",$u->activated);
			$user=$this->session->userdata("user_name");
			$this->load->view("profile",array("user"=>$user));
		}
		else{
			$this->load->view('signin');
		}
	}
	public function verify($token){
		$this->load->model("user_model");
		$this->user_model->activateuser($token);
		$this->load->view("verify",array("msg"=>"Your account have been activated successfully."));
	}
	public function register(){
		$fullname=$this->input->post("fullname");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$category=$this->input->post("category");
		$this->load->model("User_model");
		$user=$this->User_model->getuser($email);
		if(isset($user)){
			echo "User already exits";
		}
		else{
			$this->User_model->adduser($email,md5($password),$fullname,$category);
			$token=md5($email);
			$url=site_url('platform/verify/'.$token);
			$client = new PostmarkClient("3c161207-01be-475a-b9c5-860d645c2990");
			// Send an email:
			$sendResult = $client->sendEmailWithTemplate(
			  "info@equicksales.com",
			  $email,
			  11656888,
			  [
			  "name" => $fullname,
			  "url" => $url,
			  "fullname" => $fullname,
			]);
			echo "User details saved";
		}
	}
	public function signin(){
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$this->load->model("user_model");
		$user=$this->user_model->authenticate($email,md5($password));
		if(isset($user)){
			if(($user->name!="")&&($user->activated==1)){
				$this->load->library("session");
				$this->session->set_userdata("user_name",$user->name);
				$this->session->set_userdata("user_id",$user->id);
				$this->session->set_userdata("user_activated",$user->activated);
				redirect("platform/index");
			}
		}
		else{
			$this->load->view('signin',array("msg"=>"Invalid login credentials"));
		}

	}
	public function passwordreset(){
		$this->load->model("user_model");
		$email=$this->input->post("email");
		$user=$this->user_model->getuser($email);
		if(isset($user)){
			$token=md5($email);
			$url=site_url('platform/resetpassword/'.$token."/2");
			$client = new PostmarkClient("3c161207-01be-475a-b9c5-860d645c2990");

			// Send an email:
			$sendResult = $client->sendEmailWithTemplate(
			  "info@equicksales.com",
			  $email,
			  12124415,
			  [
			  "email" =>$email,
			  "url" =>$url,
			]);
			echo "Reset password email sent";
		}
		else{
			echo "User email does not exist in our system";
		}
	}
	public function resetpassword($token,$i=1){
		if($i==1){
			$this->load->model("user_model");
			$newpassword=$this->input->post("password");
			$confirmpassword=$this->input->post("confirmpassword");
			if($newpassword==$confirmpassword){
				$this->user_model->editpassword($token,md5($newpassword));
				$this->load->view("passwordresetform",array("msg1"=>"Your password has been changed successfully","token"=>$token));
			}
			else{
				$this->load->view("passwordresetform",array("msg2"=>"The passwords you entered do not match","token"=>$token));
			}
			
		}
		else{
			$this->load->view("passwordresetform",array("token"=>$token));
		}
	}
	public function logout(){
		$this->load->library("session");
		$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("user_activated");
		redirect("platform/index");
	}
	public function youradverts(){
	    $this->load->model("advert_model");
	    $user=$this->session->userdata("user_name");
	    if(isset($user)){
	        $user_id=$this->session->userdata("user_id"); 
	        $adverts= $this->advert_model->getbyuserid($user_id);
	        $this->load->view("youradverts",array("user"=>$user,"adverts"=>$adverts->result()));
	    }
	   
	}
	public function editadvert($id,$p=1){
	    $this->load->model("advert_model");
        $user=$this->session->userdata("user_name");
        $advert=$this->advert_model->getbyid($id);
        $advert=$advert->row();
	    if($p==1){
    	   if(isset($user)){
    	       $this->load->view("editadvert",array("advert"=>$advert,"user"=>$user));
    	   }
	    }
	    else{
	        if(isset($user)){
	            $title=$this->input->post("title");
			    $description=$this->input->post("description");
			    $contactperson=$this->input->post("contactperson");
			    $contact=$this->input->post("contact");
			    $this->advert_model->editadvert($id,$title,$description,$contactperson,$contact);
			     $this->load->view("editadvert",array("advert"=>$advert,"user"=>$user,"msg"=>"Your advert has been edited successfully"));
	        }
	    }
	}
	public function deleteadvert($id,$p=1){
	    $this->load->model("advert_model");
        $user=$this->session->userdata("user_name");
        $advert=$this->advert_model->getbyid($id);
        $advert=$advert->row();
        if($p==1){
    	   if(isset($user)){
    	       $this->load->view("deleteadvert",array("advert"=>$advert,"user"=>$user,"p"=>$p,"msg"=>"Do you really want to delete the advert you selected?"));
    	   }
	    }
	    else{
	        if(isset($user)){
	            $this->advert_model->deleteadvert($id);
	            $this->load->view("deleteadvert",array("advert"=>$advert,"user"=>$user,"p"=>$p));
	            
	        }
	    }
	}

}
