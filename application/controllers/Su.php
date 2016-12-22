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
    $this->load->library(array('session', 'form_validation','image_lib'));
    $this->load->database();
    $this->load->model(array('M_superuser','m_channel'));

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


  /**
   * Channel management
   */

  public function channel()
  {
    $data['title'] = "Channel";
    $this->admin_template->display('admin/admin_content/channel.php', $data);
  }

    /**
     * create channel function
     */
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
          )
        );

        $this->input->is_ajax_request(true);
        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if ($this->form_validation->run() === true) {
            $this->load->helper('url');
            $slug = url_title($this->input->post('channel_name', 'dash', true));
            $data = array(
                'name'        => $this->input->post('channel_name'),
                'description' => $this->input->post('channel_description'),
                'slug'        => $slug
            );
            $create_channel = $this->M_channel->create($data);


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



  public function upload_image()
  {
      if (isset($_FILES['channel_icon']['name'])) {
          $config['upload_path'] = './upload/channel/';
          $config['allowed_types'] = 'jpeg|png|jpg|gif';
          $config['encrypt_name'] = TRUE;
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('channel_icon')) {
              echo $this->upload->display_errors();
          }else {
              $data = $this->upload->data();
              $config['image_library'] = 'gd2';
              $config['source_image'] = './upload/channel/'.$data['file_name'];
              $config['create_thumb'] = FALSE;
              $config['maintain_ration'] = FALSE;
              $config['quality'] = '60%';
              $config['width'] = 460;
              $config['height'] = 460;
              $config['new_image'] = './upload/channel/'.$data['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();
              $image_data = array(
                  'icon' => $data['file_name']
              );
          }
      }
  }


    public function fetch_member()
    {
        $this->load->model('M_member');
        $result = array('data' => array());
        $data = $this->M_member->fetch_data_member();
        foreach ($data as $key =>  $value) {
            $avatar = '<img class="img-responsive img-avatar" height="60px" width="60px" src=" '.base_url().'profile/'.$value['avatar'].'" >';
            $button =
                '<div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action <span class="carret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="btn btn-success" type="button" onclick="editChannel('.$value['id'].')" >Grant As Admin</a></li>
                        <li><a class="btn btn-success" type="button" onclick="editChannel('.$value['id'].')" >Grant As Member</a></li>
                        <li><a class="btn btn-danger" type="button" onclick="deleteChannel('.$value['id'].')" >Delete</a></li>
                    </ul>
                </div>';
            $result['data'][$key] = array(
                $avatar,
                $value['full_name'],
                $value['email'],
                $value['username'],
                $value['date_created'],
                $value['role'],
                $button
            );
        }

        echo json_encode($result);
    }

    /**
     * fetch channel data
     */
    public static function fetch_channel()
    {
        $result = array('data' => array());

        $data = $this->m_channel->fetch_data_channel();
        foreach ($data as $key => $value) {
            $button =
                '<div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action <span class="carret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="btn btn-success" type="button" onclick="editChannel('.$value['id'].')" >Edit</a></li>
                        <li><a class="btn btn-danger" type="button" onclick="deleteChannel('.$value['id'].')" >Delete</a></li>
                    </ul>
                </div>';
            $icon = '<img class="img-responsive img-avatar" height="60px" width="60px" src=" '.base_url().'upload/channel/'.$value['icon'].'" >';
            $name = '<a target="_blank" href="'.site_url().'channel/show/'.$value["slug"].'" >'.$value["name"].'</a>';
            $result['data'][$key] = array(
                $name,
                $value['description'],
                $value['date_created'],
                $icon,
                $button
            );
        }

        echo json_encode($result);
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
