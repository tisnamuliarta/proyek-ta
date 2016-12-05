<?php
/**
 * admin class
 */
class Su extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('Admin_template');
    $this->load->helper(array('form','url','html'));
    $this->load->library(array('session', 'form_validation'));
    $this->load->database();
    $this->load->model('M_superuser');

    if (!$this->session->userdata('login')) {
      redirect ('auth_su/login');
    }
  }

  public function dashboard()
  {
    $data['title'] = "Superuser Dashboard";
    $this->admin_template->display('admin/admin_content/index', $data);
  }

  function logout()
	{
		// destroy session
    $data = array('login' => '', 'uname' => '', 'uid' => '');
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();
		redirect('auth_su/login');
	}
}
