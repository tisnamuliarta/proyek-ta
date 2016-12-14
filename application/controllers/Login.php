<?php
/**
 * Login class
 */
class Login extends CI_Controller
{

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
  /**
   * [index description]
   * @return [type] [description]
   */
  public function index()
  {
    $this->load->view('user/login');
  }
  public function process()
  {
    $validator = array('success' => FALSE, 'messages' => array());

    $validate_data = array(
      array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required|callback_validate_username'
      ),
      array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required'
      )
    );

    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

    if ($this->form_validation->run() === true) {
      // $this->M_member->login();
      $login = $this->M_member->login();
      if ($login) {
        $this->load->library('session');
        $newdata = array(
          'id'  => $login['id'],
          'username' => $login['username'],
          'logged_in' => TRUE
        );

        $this->session->set_userdata($newdata);
        $validator['success'] = true;
        $validator['messages'] = '/';
      }else {
        $validator['success'] = false;
        $validator['messages'] = 'Incorent username/password combination';
      }

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

  public function validate_username()
  {
    $username = $this->M_member->validate_username();
    if ($username === true) {
      return true;
    }else {
      $this->form_validation->set_message('validate_username', 'The {field} does not axists');
      return false;
    }
  }
}
