<?php
/**
 * Member model
 */
class M_member extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function register()
  {
    $salt = $this->salt();
    $password = $this->makePassword($this->input->post('password'), $salt);

    $insertData = array(
      'full_name' => $this->input->post('full-name'),
      'email' =>$this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => $password,
      'salt' => $salt
    );

    $this->db->insert('member', $insertData);
  }

  public function salt()
  {
    return password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
  }

  public function makePassword($password = null, $salt = null)
  {
    if ($password & $salt) {
      return hash('sha512', $password.$salt);
    }
  }

  public function validate_username()
  {
    $username = $this->input->post('username');
    $sql = "SELECT * FROM member where username = ?";
    $query = $this->db->query($sql, array($username));
    return($query->num_rows() == 1) ? true: false;
  }

  public function fetchDataByUsername($username = null)
  {
    if ($username) {
      $sql = "SELECT salt FROM member WHERE username = ?";
      $query = $this->db->query($sql, array($username));
      $result = $query->row_array();

      return ($query->num_rows() == 1) ? $result : false;
      return $result;
    }
  }
  /**
   * login
   */
  public function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $userdata = $this->fetchDataByUsername($username);

    if ($userdata) {
      $password = $this->makePassword($password, $userdata['salt']);
      $sql = "SELECT * FROM member WHERE username = ? AND password = ?";
      $query = $this->db->query($sql, array($username, $password));
      $result = $query->row_array();

      return ($query->num_rows() == 1) ? $result['id'] : false;
    }else {
      return false;
    }
  }

  /**
   * display member
   */

  public function get_profile($uname)
  {
    $query = $this->db->get_where('member', array('username' => $uname));
    if ($query->num_rows()) {  
      return  $query->row_array();
      // return ($query->num_rows() == 1) ? $result['username'] : false;
    }else {
      show_404();
      exit;
    }
  }
}
