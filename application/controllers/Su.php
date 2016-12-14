<?php
/**
 * admin class
 */
class Su extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('Admin_template');
    $this->load->helper(array('form','url','html'));
    $this->load->library(array('session', 'form_validation'));
    $this->load->database();
    $this->load->model('M_superuser');

    if (!$this->session->userdata('login')) {
      redirect ('auth_su/login');
    }
  }
  /**
   * [dashboard description]
   * @return [type] [description]
   */
  public function dashboard()
  {
    // print($this->session->userdata('login'));
    $data['title'] = "Superuser Dashboard";
    $this->admin_template->display('admin/admin_content/index', $data);
  }

  public function traffic()
  {
    $data['title'] = "Web Traffics";
    $this->admin_template->display('admin/admin_content/traffic', $data);
  }

  public function member()
  {
    $data['title'] = "Member List";
    $this->admin_template->display('admin/admin_content/member_list', $data);
  }

  public function fetch_member()
  {
    $this->load->model('M_member');
    $fetch_data = $this->M_member->make_datatables();
    $data = array();
    foreach ($fetch_data as $row ) {
      $sub_array = array();
      $sub_array[] = '<img src="'.base_url().'upload/profiles/'.$row->avatar.'" class="img-responsive img-thumbnail" />';
      $sub_array[] = $row->full_name;
      $sub_array[] = $row->email;
      $sub_array[] = $row->username;
      $sub_array[] = $row->date_created;
      $sub_array[] = '<button class="btn btn-danger btn-xs" type="button" name="delete" id="'.$row->id.'">Delete</button>';
      $data[] = $sub_array;
    }

    $output = array(
      "draw" => intval($_POST['draw']),
      "recordsTotal" => $this->M_member->get_all_data(),
      "recordsFiltered" => $this->M_member->get_filtered_data(),
      "data" => $data
    );

    echo json_encode($output);
  }

  /**
   * Channel management
   */

  public function channel()
  {
    $data['title'] = "Channel";
    $this->admin_template->display('admin/admin_content/channel.php', $data);
  }

  public function create_channel()
  {
    $this->load->model('M_channel');
    $validator = array('success' => false, 'messages' => array());
    $config = array(
      array(
        'field' => 'channel_name',
        'label' => 'Channel Name',
        'rules' => 'required'
      ),
      array(
        'field' => 'channel_description',
        'label' => 'Channel Description',
        'rules' => 'required'
      ),
      array(
        'field' => 'channel_icon',
        'label' => 'Channel Icon',
        'rules' => ''
      )
    );

    $this->input->is_ajax_request(true);
    $this->form_validation->set_rules($config);
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

    if ($this->form_validation->run() === true) {
      $create_channel = $this->M_channel->create();

      if ($create_channel === true) {
        $validator['success'] = true;
        $validator['messages'] = "Successfuly add data";
      }else {
        $validator['success'] = false;
        $validator['messages'] = "Error while creating channel";
      }

    }else {
      $validator['success'] = false;
      foreach ($_POST as $key => $value) {
        $validator['messages'][$key] = form_error($key);
      }
    }

    echo json_encode($validator);
  }

  /**
   * [logout description]
   * @return [type] [description]
   */
  function logout()
	{
		// destroy session
    $data = array('login' => '', 'uname' => '', 'uid' => '');
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();
		redirect('auth_su/login');
	}
}
