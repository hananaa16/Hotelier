<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('customermodel');

    }

	public function index()
	{


    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
    $this->form_validation->set_rules('firstname', 'First Name', 'required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required');
    $this->form_validation->set_rules('birthdate', 'Birth Date', 'required');
    $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required|numeric');
    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

      $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px"><div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');
      $this->form_validation->set_message('min_length', '<div class="alert alert-danger" style="margin-top: 3px"><div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus sama atau lebih dari 8 karakter </div></div>');
      $this->form_validation->set_message('matches', '<div class="alert alert-danger" style="margin-top: 3px"><div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> belum sesuai </div></div>');
      $this->form_validation->set_message('numeric', '<div class="alert alert-danger" style="margin-top: 3px"><div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus numerik </div></div>');

      if ($this->form_validation->run() == TRUE) {
        $email = $this->input->post('email');
        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $birthdate = $this->input->post('birthdate');
        $phonenumber = $this->input->post('phonenumber');
        $password = MD5($this->input->post('password'));
        $imagelink = 'assets/user/user0.jpg';
        $config['upload_path'] = './assets/user';
        $config['allowed_types'] = 'gif|jpg|png|jiff|jpeg';
        $config['file_name'] = $fname.$lname;
        $config['overwrite'] = false;
        $config['max_filename_increment']=100;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image'))
        {
            $upload_data = $this->upload->data();
            $imagelink = 'assets/user/'.$upload_data['file_name'];
        }
        $this->customermodel->insert_customer($email,$fname,$lname,$birthdate,$phonenumber,$password,$imagelink);
        redirect('login');

      }
        else{
          $data['css'] = $this->load->view('include/css.php',NULL,TRUE);
          $this->load->view('pages/signup', $data);
        }


	}
  

}
?>
