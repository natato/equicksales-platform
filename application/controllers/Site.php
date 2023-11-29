<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
	public function advert($offset=0){
	    $this->load->model("Advert_model");
	    $adverts=$this->Advert_model->getadverts($offset);
		$this->load->library('pagination');
        $config['base_url'] = 'http://www.equicksales.com/index.php/site/adverts';
        $total_rows=$this->Advert_model->getTotal();
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 10;
        $config['num_tag_open'] = "<li class='page-item'>";
        $config['num_tag_close'] = "</li>";
            
        $this->pagination->initialize($config);
            
        $links= $this->pagination->create_links();
			$this->load->view('siteadvert',array("adverts"=>$adverts,"links"=>$links,"total_rows"=>  $total_rows));
	
		
	}
	/*
	public function index()
	{
		$this->load->view('index');
	}
	public function services(){
		$this->load->view('services');
	}
	public function products(){
		$this->load->view("products");
	}
	*/
	public function registration(){
		$this->load->view("registration");
	}
	public function signin(){
		$this->load->view('signin');
	}
	public function passwordreset(){
		$this->load->view('passwordreset');
	}
	/*
	public function about(){
		$this->load->view("about");
	}
	public function contact(){
		$this->load->view("contact");
	}
	public function search(){
		$this->load->view("searchresults");
	}
	*/
}
