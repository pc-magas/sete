<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fagita_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function get($type=null)
	{
		if(empty($type)) return array();
		
		$d=$this->db->select('`name`')->where('type_id',$type)->get('foods');
		
		echo $this->db->last_query();
		return $d->result_array();
	}
}
