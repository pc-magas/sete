<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Entertainment extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Entertainment_model','enter');
	}
	
	public function get()
	{
		$entertainment=$this->input->get('entertainment');
		
		$ret=$this->enter->get($entertainment);
		
		$this->load->view('fagita_html_view.php',array('data'=>$ret));
	}
}

