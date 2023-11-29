<?php
class Advert_model extends CI_Model{
	public function __construct(){
	}
	public function add($id,$title,$description,$contactperson,$contact,$posted_date,$user_id){
		$data=array(
			"id"=>$id,
			"title"=>$title,
			"description"=>$description,
			"contactperson"=>$contactperson,
			"contact"=>$contact,
			"posted_date"=>$posted_date,
			"user_id"=>$user_id
		);
		$this->db->insert("advert",$data);
		
	}
	public function getadverts($offset=0, $limit=10){
		$this->db->select("id,title,description,contactperson,contact,posted_date");
		$this->db->from("advert");
		$this->db->order_by("posted_date", "desc");
		$this->db->limit($limit,$offset);
		$adverts=$this->db->get();
		return $adverts;
	}
	public function getbyuserid($user_id){
	    $this->db->select("id,title,description,contactperson,contact,posted_date");
		$this->db->from("advert");
		$this->db->order_by("posted_date", "desc");
		$this->db->where("user_id",$user_id);
		$adverts=$this->db->get();
		return $adverts;
	}
	public function getbyid($id){
	    $this->db->select("id,title,description,contactperson,contact,posted_date");
		$this->db->from("advert");
		$this->db->order_by("posted_date", "desc");
		$this->db->where("id",$id);
		$adverts=$this->db->get();
		return $adverts;
	}
    public function getTotal(){
        $this->db->select("id,title,description,contactperson,contact,posted_date");
		$this->db->from("advert");
		$allAdverts=$this->db->get();
		return $allAdverts->num_rows();
    }
	public function editadvert($id,$title,$description,$contactperson,$contact){
		$data=array(
			"title"=>$title,
			"description"=>$description,
			"contactperson"=>$contactperson,
			"contact"=>$contact,
		);
		$this->db->where("id",$id);
		$this->db->update("advert",$data);
	
	}
	public function deleteadvert($id){
	    $this->db->where("id",$id);
		$this->db->delete("advert");
	}

}

?>