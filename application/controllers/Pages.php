<?php

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('index_view.php');
	}
	
	public function order_page()
	{
		$this->load->view('offers_page.php');
	}
}

?>