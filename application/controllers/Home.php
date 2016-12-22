<?php
/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->library(array('form_validation', 'Template','session','parser'));
		$this->load->model(array('M_channel', 'm_member'));
	}

	public function index()
	{
		$data['channel'] = $this->M_channel->getChannel()->result();

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