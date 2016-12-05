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

  public function getSu($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('password', sha1($password));
    $query = $this->db->get('su');
    return $query->result();
  }
}
