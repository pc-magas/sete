<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function login($username,$password)
	{
		if($this->session->has_userdata('email')) return true;
		
		if(empty($username) && empty(emtpy($password))) return -1;
		
		$ret=$this->db->select('`id`,`name`,`city`,`surname`,`age`,`gender`,`handicap`,`password`,`email`')
			 ->from('`users`')->where('`email`',$username)->get();
		
		
				
		if($ret->num_rows()===0)
		{
			return false;
		}
		
		$ret=$ret->row_array();
		
		//echo $ret['password']."\n";
		//echo $password;
		
		$v=$password===trim($ret['password']);
		
		if($v)
		{
			
			$this->session->set_userdata($ret);
			return $ret;
		} 
		else return false;
	}
}
