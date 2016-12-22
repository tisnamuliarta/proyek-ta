<?php

class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('upload'));
    }
    function image_upload()
    {
        $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";
        $this->load->model('main_model');
        $data["image_data"] = $this->main_model->fetch_image();
        $this->load->view('image_upload', $data);
    }
    function ajax_upload()
    {
        $this->load->library(array('form_validation'));
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        if ($this->form_validation->run() == false) {
            $this->load->view('image_upload');
        }else {
            if(isset($_FILES["image_file"]["name"]))
            {
                $config['upload_path'] = './upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image_file'))
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$data["file_name"];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = TRUE;
                    $config['quality'] = '60%';
                    $config['width'] = 200;
                    $config['height'] = 'auto';
                    $config['new_image'] = './upload/'.$data["file_name"];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $this->load->model('main_model');
                    $image_data = array(
                        'description' => $this->input->post('description'),
                        'name'          =>     $data["file_name"]
                    );
                    $this->main_model->insert_image($image_data);


                    echo $this->main_model->fetch_image();
                    //echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
                }
            }
        }

    }
}