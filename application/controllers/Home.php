<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminmodel');
    }

	public function index()
	{
		if($this->adminmodel->logged_id())
		{
      $data['js']=$this->load->view('include/js.php',NULL,TRUE);
      $data['css']=$this->load->view('include/css.php',NULL,TRUE);
      $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
      $data['hotel']=$this->adminmodel->get_hotel();
      $this->load->view("pages/adminhotel",$data);
		}
    else{
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $this->load->view("pages/home",$data);
    }
	}

  public function aboutus()
	{
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $this->load->view("pages/aboutus",$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}


}
