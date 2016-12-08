<?php
/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'Template','session'));
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['app_name'] = "BPRENER";
		$this->template->display('home/index', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}