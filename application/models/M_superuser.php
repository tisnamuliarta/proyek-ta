<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Superuser Model
 */
class M_superuser extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function insertSu()
  {
    $salt = $this->salt();
    $password = $this->makePassword('superstrongpassword', $salt);
    $insertData = array(
      'username' => 'admin',
      'password' => $password,
      'salt' => $salt
    );

    $this->db->insert('su', $insertData);
  }

  public function salt()
  {
    return password_hash('MySuperScretKey248123456789', PASSWORD_BCRYPT);
  }

  public function makePassword($password = null, $salt = null)
  {
    if ($password & $salt) {
      return hash('sha512', $password.$salt);
    }
  }

  /**
   * get data by username
   * @param  [type] $username [description]
   * @return [type]           [description]
   */
  public function getDataByUsername($username = null)
  {
    if ($username) {
      $sql = "SELECT salt FROM su WHERE username = ?";
      $query = $this->db->query($sql, array($username));
      $result = $query->row_array();

      return ($query->num_rows == 1) ? $result : false;
      return $result;
    }
  }
  /**
   * Super user login
   * @return [type] [description]
   */
  public function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $suData = $this->getDataByUsername($username);
    if ($suData) {
      $password = $this->makePassword($password, $suData['salt']);
      $sql = "SELECT * FROM su WHERE username = ? AND password = ?";
      $query = $this->db->query($sql, array($username, $password));

      return $query->result();
      // $result = $query->row_array();
      //
      // return ($query->num_rows() == 1) ? $result['id'] : false;
    }else {
      return false;
    }
  }

  public function getSu($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('password', sha1($password));
    $query = $this->db->get('su');
    return $query->result();
  }
}
