<?php
/**
 * Member register class
 */
class Register extends CI_Controller
{
  /**
   * [__construct description]
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('M_member');
    $this->load->library(array('form_validation','session'));

    if($this->session->userdata('id')){
      redirect('/');
    }
  }

  public function index()
  {
    $this->load->view('user/register');
  }

  public function process()
  {
    $validator = array('success' => FALSE, 'message' => array());

    $validate_data = array(
      array(
        'field' => 'full-name',
        'label' => 'Full Name',
        'rules' => 'required'
      ),
      array(
        'field' => 'email',
        'label' => 'Your Email',
        'rules' => 'required|valid_email|is_unique[member.email]'
      ),
      array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required|is_unique[member.username]|min_length[3]|max_length[50]'
      ),
      array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|matches[repassword]|min_length[6]'
      ),
      array(
        'field' => 'repassword',
        'label' => 'Confirm Password',
        'rules' => 'required|min_length[6]'
      )
    );

    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_message('is_unique', 'The {field} is already axists' );
    $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

    if ($this->form_validation->run() === true) {
      $this->M_member->register();
      $validator['success'] = true;
      $validator['messages'] = '/login';
      // redirect('register');
    }else {
      // redirect('register');
      $validator['success'] = false;
      foreach ($_POST as $key => $value) {
        $validator['messages'][$key] = form_error($key);
      }
    }

    echo json_encode($validator);
  }
}
