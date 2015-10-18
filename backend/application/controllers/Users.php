<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Users_model','users');
	}
	
	function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$ret=$this->users->login($username,$password);
		
		$status='err';
		$message='';
		$data=null;
		if($ret=== -1)
		{	
			$message="No username and password hhas given";		
		}
		else if($ret === true)
		{
			$status='OK';
			$message="User already loged in";
		}
		else if($ret === false)
		{
			$message="User does not exist perhaps you've given incorect parameters";
		}
		else 
		{
			$status='OK';
			$data=$ret;
			$message="User successfuly loged in";	
		}
		
		$this->load->view('json_view.php',array('status'=>$status,'message'=>$message,'data'=>$data));
	}
}
