<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customermodel');
        $this->load->model('adminmodel');
        $this->load->library('form_validation');

    }


	public function index()
	{
      $data['js']=$this->load->view('include/js.php',NULL,TRUE);
      $data['css']=$this->load->view('include/css.php',NULL,TRUE);
      $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
      $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
      // $data['customer']="";
      // if ($this->session->userdata('name'))
  		// {
      //   $data['customer']=$this->customermodel->get_customer($this->session->userdata('id_customer'));
      // }
      $this->load->view("pages/home",$data);
  }

  public function hotel(){
      $data['js']=$this->load->view('include/js.php',NULL,TRUE);
      $data['css']=$this->load->view('include/css.php',NULL,TRUE);
      $hotel['hotel']=$this->customermodel->get_hotel();
      $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
      $data['table']=$this->load->view('template/tablehotel.php',$hotel,TRUE);
      $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
      $data['status']="";
      $this->load->view("pages/viewhotel",$data);
  }

  public function hoteldetails($id_hotel){
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['hotel']=$this->customermodel->get_hotel_details($id_hotel);
    $data['room']=$this->customermodel->get_hotel_room($id_hotel);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    // $data['table']=$this->load->view('template/tableproduct.php',$product,TRUE);
    $data['status']="";
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $this->load->view("pages/viewhoteldetails",$data);
  }

  public function roomdetails(){
    // $id_hotel = $this->input->post('id_hotel');
    $id_room = $this->input->post('id_room');
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['room']=$this->customermodel->get_room_details($id_room);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    // $data['table']=$this->load->view('template/tableproduct.php',$product,TRUE);
    $data['status']="";
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $this->load->view("pages/viewroomdetails",$data);

  }

  public function invalidroomdetails($id_room){

    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['room']=$this->customermodel->get_room_details($id_room);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    // $data['table']=$this->load->view('template/tableproduct.php',$product,TRUE);
    $data['status']="<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Not Available! </strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $this->load->view("pages/viewroomdetails",$data);
  }


  public function bookinglist(){
    if ($this->session->userdata('name'))
		{
      $id= $this->session->userdata('id_customer');
      $data['booking']=$this->customermodel->get_booking($id);
      $data['js']=$this->load->view('include/js.php',NULL,TRUE);
      $data['css']=$this->load->view('include/css.php',NULL,TRUE);
      $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
      $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
      $this->load->view("pages/bookinglist",$data);
    }else{
      redirect('login');
    }
  }

  public function aboutuser(){
    if ($this->session->userdata('name'))
		{
      $data['js']=$this->load->view('include/js.php',NULL,TRUE);
      $data['css']=$this->load->view('include/css.php',NULL,TRUE);
      $data['customer']=$this->customermodel->get_customer($this->session->userdata('id_customer'));
      $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
      $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
      $this->load->view("pages/aboutuser",$data);
    }else{
      redirect('login');
    }
  }

  public function searchbar(){
    $data['status']="";
    $location = $this->input->post('location');
    $checkin = $this->input->post('checkin');
    $checkout = $this->input->post('checkout');
    $datahotel= $this->customermodel->get_hotel_location($location);
    if($datahotel){
      $dataroom= $this->customermodel->get_hotel_room($datahotel->id_hotel);

      foreach($dataroom as $items){
          $databooking=$this->customermodel->check_booking($items['id_room'],$checkin,$checkout);
          if($databooking){
            break;
          }
      }

      if($databooking){
          $datafinal=$this->customermodel->get_hotel_details($datahotel->id_hotel);
      }
      else{
        $datafinal= $this->customermodel->get_hotel();
          $data['status']="<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Not Available! </strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
      }
    }
    else{
      $datafinal= $this->customermodel->get_hotel();
        $data['status']="<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Not Available! </strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    }

    $hotel['hotel']=$datafinal;
    // $hotel['hotel']=$this->customermodel->get_hotel_search($location,$checkin,$checkout);
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    $data['table']=$this->load->view('template/tablehotel.php',$hotel,TRUE);
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);

    $this->load->view("pages/viewhotel",$data);

  }

  public function hotelfilter(){
    $city= $this->input->post('city');
    $rating= $this->input->post('rating');
    $min= $this->input->post('min');
    $max= $this->input->post('max');
    $data['status']="";

    $datahotel = $this->customermodel->findhotel($city,$rating);
    $dataroom= $this->customermodel->findroom($datahotel,$min,$max);
    if($dataroom){
      $datafinal= $this->customermodel->get_hotel_filter($dataroom);
    }
    else{
      $datafinal= $this->customermodel->get_hotel();
        $data['status']="<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Not Available! </strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    }

    $hotel['hotel']=$datafinal;

    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    $data['table']=$this->load->view('template/tablehotel.php',$hotel,TRUE);
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $this->load->view("pages/viewhotel",$data);

  }

  public function check_booking(){
    $fname= $this->input->post('fname');
    $lname= $this->input->post('lname');
    $phone= $this->input->post('phone');
    $email=$this->input->post('email');
    $qty=$this->input->post('qty');
    $checkin=$this->input->post('checkin');
    $checkout=$this->input->post('checkout');
    $price=$this->input->post('pricefinal');
    $id_customer= $this->input->post('id_customer');
    $id_hotel= $this->input->post('id_hotel');
    $id_room= $this->input->post('id_room');
    $category= $this->input->post('category');


    $hotel=$this->customermodel->get_hotel_details($id_hotel);
    $room=$this->customermodel->get_room_details($id_room);
    foreach($hotel as $items){
      $hotelname=$items['name'];
    }
    foreach($room as $items2){
      $roomname=$items2['name'];
    }

    for($x=0;$x<$qty;$x++){
      $check=$this->customermodel->check_booking($id_room,$checkin,$checkout);
      if(!$check){
        break;
        redirect('customer/invalidroomdetails/'.$id_room);
      }
    }


    for($x=0;$x<$qty;$x++){
      $data=$this->customermodel->check_booking_reservation($id_room,$checkin,$checkout);
      $this->customermodel->update_reservation($data->id_roomdetails,$id_room,$id_hotel,$checkin,$checkout,$id_customer);
    }

    $this->customermodel->insert_booking($fname,$lname,$phone,$email,$qty,$checkin,$checkout,$price,$category,$id_customer,$id_hotel,$id_room,$hotelname,$roomname);
    redirect ('customer/hotel');

  }


  public function invoice($id_booking){
    $data['js']=$this->load->view('include/js.php',NULL,TRUE);
    $data['css']=$this->load->view('include/css.php',NULL,TRUE);
    $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
    $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
    $data['invoice']= $this->customermodel->get_invoice($id_booking);
    $this->load->view("pages/invoice",$data);

  }

  public function edit_customer(){
    $this->load->library('form_validation');
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
        $id_customer = $this->input->post('id_customer');
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

        $this->customermodel->edit_customer($id_customer,$email,$fname,$lname,$birthdate,$phonenumber,$password,$imagelink);
        $session_data = array(
          'image' => $imagelink,
          'name' => $fname." ".$lname
        );
        $this->session->set_userdata($session_data);
        redirect('customer/aboutuser');

      }

      else{
        $data['js']=$this->load->view('include/js.php',NULL,TRUE);
        $data['css']=$this->load->view('include/css.php',NULL,TRUE);
        $data['customer']=$this->customermodel->get_customer($this->session->userdata('id_customer'));
        $data['navbar']=$this->load->view('template/navbar.php',NULL,TRUE);
        $data['footer']=$this->load->view('template/footer.php',NULL,TRUE);
        $this->load->view("pages/aboutuser",$data);
      }


  }





}

?>
