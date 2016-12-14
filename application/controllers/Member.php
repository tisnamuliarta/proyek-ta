<?php
/**
* profile classs
*/
class Member extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_member');
		$this->load->database();
		$this->load->library(array('form_validation', 'Template','session'));
	}

	public function index($uname)
	{
		// $profile = $this->M_member->get_profile($uname);
		// $data['full_name'] = $profile['full_name'];
		// $data['username'] = $profile['username'];
		// $data['email'] = $profile['email'];
		// $data['avatar'] = $profile['avatar'];
		$data['member'] = $this->M_member->get_profile($uname);
		$data['title'] = "Profile Page";
		$data['app_name'] = "BPRENER";
		$this->template->display('profile/index', $data);
	}
}