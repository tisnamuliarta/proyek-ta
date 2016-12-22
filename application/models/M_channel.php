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
    $this->load->database();
  }

  public function getChannel()
  {
    return $this->db->get($this->table);
  }

  public function getChannelDetail($slug)
  {
    $query = $this->db->get_where($this->table, array('slug' => $slug));
    if ($query->num_rows()) {
      return $query->row_array();
    }else {
      show(404);
      exit;
    }
  }


    /**
     * create new channel
     * @return bool
     */
    public function create($data)
  {
      $query = $this->db->insert($this->table, $data);

      if ($query == true) {
          return true;
      }else {
          return false;
      }
  }

    /**
     * @return string
     */
    public function fetch_data_channel()
    {
        $sql = "SELECT * FROM channel";
        $query = $this->db->query($sql);

        return $query->result_array();
    }
}
