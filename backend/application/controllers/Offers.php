<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Offers_model','offers');
	}

	public function get($view='json')
	{
		$keyword=$this->input->get('s');
		$price=$this->input->get('price');

		$ret=$this->offers->get($keyword,$price);

		if($view==='json') $this->load->view('json_view.php',array('data'=>$ret));
		else $this->load->view('offers_page.php',array('data'=>$ret));
	}

}
