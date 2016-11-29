<?php
/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'Template'));
	}

	public function index()
	{
		$data['title'] = "Home";
		$this->template->display('home/index', $data);
	}
}