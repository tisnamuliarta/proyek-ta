<?php
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Admin_template
{
  protected $CI;

  public fuction __construct()
  {
    $this->CI =& get_instance();
  }

  /**
   * display template
   * @param  [type] $template [description]
   * @param  [type] $data     [description]
   * @return [type]           [description]
   */
  public function display($template, $data=null)
  {
    $data['content'] = $this->CI->load->view($template, $data, true);
    $data['head'] = $this->CI->load->view('admin/head', $data, true);
    $data['navbar'] = $this->CI->load->view('admin/navbar', $data, true);
    $data['sidebar'] = $this->CI->load->view('admin/sidebar', $data, true);
    $data['aside_menu'] = $this->CI->load->view('admin/aside_menu', $data, true);
    $data['footer'] = $this->CI->load->view('admin/footer', $data, true);
    $this->CI->load->view('/admin.php', $data);
  }
}
