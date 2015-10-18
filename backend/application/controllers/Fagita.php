<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fagita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fagita_model','fagita');
	}
	
	public function get()
	{
		$type_id=$this->input->get('fagito');
		$ret=$this->fagita->get($type_id);
		
		$this->load->view('fagita_html_view.php',array('data'=>$ret));
	}
}
