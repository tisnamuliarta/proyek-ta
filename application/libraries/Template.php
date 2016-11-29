<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Template
*/
class Template
{
	protected $_CI;
	
	function __construct()
	{
		$this->_CI =& get_instance();
	}

	public function display($template, $data=null)
	{
		$data['_content'] = $this->_CI->load->view($template, $data, true);
		$data['_head'] = $this->_CI->load->view('template/head', $data, true);
		$data['_navbar'] = $this->_CI->load->view('template/navbar', $data, true);
		$data['_header'] = $this->_CI->load->view('template/header', $data, true);
		$data['_footer'] = $this->_CI->load->view('template/footer', $data, true);
		$this->_CI->load->view('/template.php', $data);
	}
}