<?php
/**
 * User class
 */
class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form','url','html'));
    $this->load->database();
    $this->load->model('M_member');
    $this->load->library(array('form_validation'));
  }

  public function login()
  {
    $this->load->view('user/login');
  }

  public function register()
  {
    $validator = array('success' => false, 'messages' => array());

    $validate_data = array(
      array(
        'field' => 'full-name',
        'label' => 'Full Name',
        'rules' => 'required'
      ),
      array(
        'field' => 'email',
        'label' => 'Your Email',
        'rules' => 'required|valid_email'
      ),
      array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required|is_unique[member.username]'
      ),
      array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|matches[repassword]'
      ),
      array(
        'field' => 'repassword',
        'label' => 'Confirm Password',
        'rules' => 'required'
      )
    );

    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_message('is_unique', 'The {field} already axists' );
    $this->form_validation->set_error_delimiters('<p class="text-danger"','</p>');

    if ($this->form_validation->run() == true) {
      $validator['success'] = true;
      $validator['messages'] = 'Successfull register';
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
