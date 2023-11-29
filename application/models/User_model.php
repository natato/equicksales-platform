<?php
class User_model extends CI_Model{
	public function __construct(){
	}
	public function authenticate($email,$password){
		$this->db->select("users.Name AS name, users.Email AS email, users.id AS id, users.activated AS activated");
		$this->db->from("users");
		$this->db->where("users.Email",$email);
		$this->db->where("users.Password",$password);
		$user=$this->db->get();
		return $user->row();
	}
	public function getuser($email){
		$this->db->select("users.Name AS name, users.Email AS email, users.id AS id, users.activated AS activated");
		$this->db->from("users");
		$this->db->where("users.Email",$email);
		$user=$this->db->get();
		return $user->row();
	}
	public function getuserbyid($id){
		$this->db->select("users.Name AS name, users.Email AS email, users.id AS id, users.activated AS activated");
		$this->db->from("users");
		$this->db->where("users.id",$id);
		$user=$this->db->get();
		return $user->row();
	}
	public function editpassword($token,$newpassword){
		$data=array(
			"Password"=>$newpassword
		);
		$this->db->update("users",$data);
		$this->db->where("token",$token);
	}
	public function activateuser($token){
		$data=array(
			"activated"=>1
		);
		$this->db->update("users",$data);
		$this->db->where("token",$token);
	}
	public function adduser($email,$password,$name,$category){
		$token=md5($email);
		$datetime=Date("Y-m-d H:i:s");
		$data=array(
			"Email"=>$email,
			"Password"=>$password,
			"Name"=>$name,
			"Category_id"=>$category,
			"token"=>$token,
			"Created_on"=>$datetime,
			"activated"=>0
		);
		$this->db->insert("users",$data);
	}
	public function editname($id,$newname){
		$data=array(
			"Name"=>$newname
		);
		$this->db->update("users",$data);
		$this->db->where("id",$id);
	}
}

?>