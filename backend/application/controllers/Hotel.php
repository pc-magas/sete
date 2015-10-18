<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Hotel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel_model','enter');
	}
	
	public function get()
	{
		$entertainment=$this->input->get('location');
		
		$ret=$this->enter->get($entertainment);
		
		$this->load->view('hotels_html_view.php',array('data'=>$ret));
	}
}

