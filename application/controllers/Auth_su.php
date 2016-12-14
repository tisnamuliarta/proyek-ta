<?php
/**
 * Login Superuser
 */
class Auth_su extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form','url','html'));
    $this->load->library(array('session', 'form_validation'));
    $this->load->database();
    $this->load->model('m_superuser');
    if ($this->session->userdata('login')) {
      redirect ('su/dashboard');
    }
  }

  public function addsuperuser()
  {
    $this->m_superuser->insertSu();
    redirect('auth_su/login');
  }

  // public function process()
  // {
  //   $this->load->view('admin/admin_content/login');
  // }

  public function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->form_validation->set_rules('username','','trim|required');
    $this->form_validation->set_rules('password','','trim|required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('admin/admin_content/login');
    }else
    {
      $login = $this->m_superuser->login();
      if (count($login) > 0)
      {
        $session_data = array(
          'login' => TRUE,
          'uname' =>$login[0]->username,
          'uid' => $login[0] -> id);
        $this->session->set_userdata($session_data);
        redirect("su/dashboard");
      }else
      {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Username or Password!</div>');
        redirect("auth_su/login");
      }
    }
  }
}
