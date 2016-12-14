<?php
/**
 *
 */
class M_channel extends CI_Model
{
  var $table = 'channel';

  function __construct()
  {
    parent::__construct();
  }

  public function create()
  {
    $this->load->helper('url');
    $slug = url_title($this->input->post('channel_name', 'dash', true));
    $data = array(
      'name'        => $this->input->post('channel_name'),
      'description' => $this->input->post('channel_description'),
      'slug'        => $slug
    );

    $query = $this->db->insert($this->table, $data);

    if ($query == true) {
      return true;
    }else {
      return false;
    }
  }
}
