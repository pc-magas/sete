<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Entertainment_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($type_id)
	{
		return $this->db->where('type_id',$type_id)->select('`name`')->get('enterntainment')->result_array();	
	}
}
