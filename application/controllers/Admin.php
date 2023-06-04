<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminmodel');
        $this->load->model('customermodel');

    }


	public function index()
	{
    if($this->adminmodel->logged_id())
		{
      $data['js']=$this->load->view('include/js.php',NULL,TRUE);
      $data['css']=$this->load->view('include/css.php',NULL,TRUE);
      $data['hotel']=$this->adminmodel->get_hotel();
      $this->load->view("pages/adminhotel",$data);
    }else{
      redirect('home');
    }
  }

  public function room($id_hotel){
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['room']=$this->adminmodel->get_hotel_room($id_hotel);
    $data['id']=$id_hotel;
    $this->load->view("pages/adminroom",$data);
  }

  // public function booking(){
  //   $data['js']=$this->load->view('include/js.php',NULL,TRUE);
  //   $data['css']=$this->load->view('include/css.php',NULL,TRUE);
  //   $data['booking']=$this->adminmodel->get_booking();
  //   $this->load->view("pages/admindetails",$data);
  // }


  public function do_upload_room(){
    $name = $this->input->post('name');
    $id_hotel = $this->input->post('id_hotel');
    $category = $this->input->post('category');
    $qty = $this->input->post('qty');
    $price = $this->input->post('price');
    $description = $this->input->post('description');

    $config['upload_path'] = './assets/room';
    $config['allowed_types'] = 'gif|jpg|png|jiff|jpeg';
    $config['file_name'] = $name;
    $config['overwrite'] = false;
    $config['max_filename_increment']=100;
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);
    if ($this->upload->do_upload('image'))
    {
        $upload_data = $this->upload->data();
        $imagelink = 'assets/room/'.$upload_data['file_name'];
        $id_room=$this->adminmodel->insert_room($name,$id_hotel,$category,$qty,$price,$description,$imagelink);

        for($x=0;$x<$qty;$x++){
          $this->adminmodel->insert_room_details($id_room,$id_hotel,$category);
        }

        redirect('admin/room/'.$id_hotel);
    }
  }

  public function edit_room(){
    $id_room = $this->input->post('id_room');
    $id_hotel = $this->input->post('id_hotel');
    $name = $this->input->post('name');
    $category = $this->input->post('category');
    $qty = $this->input->post('qty');
    $price = $this->input->post('price');
    $description = $this->input->post('description');

    $config['upload_path'] = './assets/room';
    $config['allowed_types'] = 'gif|jpg|png|jiff|jpeg';
    $config['file_name'] = $name;
    $config['overwrite'] = false;
    $config['max_filename_increment']=100;
    $this->load->library('upload', $config);

		if ( $this->upload->do_upload('image')){

					$upload_data = $this->upload->data();
          $imagelink = 'assets/room/'.$upload_data['file_name'];
          $this->adminmodel->edit_room($id_room,$id_hotel,$name,$category,$qty,$price,$description,$imagelink);

          // for($x=0;$x<$qty;$x++){
            $this->adminmodel->delete_room_details($id_room);
          // }

          for($x=0;$x<$qty;$x++){
            $this->adminmodel->insert_room_details($id_room,$id_hotel,$category);
          }

          redirect('admin/room/'.$id_hotel);
			}

  }

  public function delete_room(){
    $id_room = $this->input->post('id_room');
    $id_hotel = $this->input->post('id_hotel');
    $this->adminmodel->delete_room($id_room);
    $this->adminmodel->delete_room_details($id_room);
    redirect('admin/room/'.$id_hotel);

  }

  public function do_upload_hotel(){
    $name = $this->input->post('name');
    $address = $this->input->post('address');
    $rating = $this->input->post('rating');
    $city = $this->input->post('city');
    $shortdesc = $this->input->post('shortdesc');
    $longdesc = $this->input->post('longdesc');


    $config['upload_path'] = './assets/hotel';
    $config['allowed_types'] = 'gif|jpg|png|jiff|jpeg';
    $config['file_name'] = $name;
    $config['overwrite'] = false;
    $config['max_filename_increment']=100;
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);
    if ($this->upload->do_upload('image'))
    {
        $upload_data = $this->upload->data();
        $imagelink = 'assets/hotel/'.$upload_data['file_name'];
        $this->adminmodel->insert_hotel($name,$address,$rating,$city,$imagelink,$shortdesc,$longdesc);
        redirect('admin');
    }
  }

  public function edit_hotel(){
    $id_hotel = $this->input->post('id_hotel');
    $name = $this->input->post('name');
    $address = $this->input->post('address');
    $rating = $this->input->post('rating');
    $city = $this->input->post('city');
    $shortdesc = $this->input->post('shortdesc');
    $longdesc = $this->input->post('longdesc');

    $config['upload_path'] = './assets/hotel';
    $config['allowed_types'] = 'gif|jpg|png|jiff|jpeg';
    $config['file_name'] = $name;
    $config['overwrite'] = false;
    $config['max_filename_increment']=100;
    $this->load->library('upload', $config);

    if ( $this->upload->do_upload('image')){
        $upload_data = $this->upload->data();
        $imagelink = 'assets/hotel/'.$upload_data['file_name'];
        $this->adminmodel->edit_hotel($id_hotel,$name,$address,$rating,$city,$imagelink,$shortdesc,$longdesc);
        redirect('admin');
      }

  }

  public function delete_hotel(){
    $id = $this->input->post('id_hotel');
    $this->adminmodel->delete_hotel($id);
    redirect('admin');

  }

  public function adminbooking(){
    $data['booking']=$this->adminmodel->get_booking();
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $this->load->view("pages/admindetails",$data);
  }






}
?>
