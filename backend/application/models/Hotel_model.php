<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($location)
	{
		if(empty($location)) return array();
		
		 $this->db->select('`hotels`.`name`')
		 		  ->select('`hotels`.`src`')
						->select('`src`')
						->from('`hotels`')
						->join('`Places`','Places.id=Places.id')
						->where('location',$location);
		
		return $this->db->get()->result_array();
	}
}
