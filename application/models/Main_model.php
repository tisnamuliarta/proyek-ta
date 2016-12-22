<?php
/**
 * Created by PhpStorm.
 * User: Tisna
 * Date: 12/21/2016
 * Time: 10:23 PM
 */
class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insert_image($data)
    {
        $this->db->insert("tbl_images", $data);
    }
    function fetch_image()
    {
        $output = '';
        $this->db->select("name");
        $this->db->from("tbl_images");
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        foreach($query->result() as $row)
        {
            $output .= '  
                     <div class="col-md-3">  
                          <img src="'.base_url().'upload/'.$row->name.'" class="img-responsive img-thumbnail" />  
                     </div>  
                ';
        }
        return $output;
    }
}