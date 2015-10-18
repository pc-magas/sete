<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Userprice_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function add_price($price,$offer)
	{
		if(empty($price) && empty($offer)) return -1;
		
		if(!$this->session->has_userdata('id')) return -3;
		
		$user_id=$this->session->userdata('id');
		
		$ci=&get_instance();
		$ci->load->model('Offers_model','offer');
		
		$ret=$ci->offer->get(null,$offer);
		
		if(empty($ret)) 
		{
			echo "Here";
			return -1;
		}
		
		$this->db->set('`price`',$price)->set('`offer_id`',$offer)->set('`user_id`',$user_id);
		
		$this->db->insert('`User_Price`');
		
		return true;
	}
}
