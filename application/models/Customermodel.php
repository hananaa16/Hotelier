<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customermodel extends CI_Model
{

    function logged_id()
    {
        return $this->session->userdata('username');
    }


    function check_login($email,$pass)
    {
        $sql = "SELECT * FROM customer WHERE email = ? AND password = ?";
        $query=$this->db->query($sql, array($email, $pass));
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }

    }

    public function get_hotel()
    {
      $query = $this->db->query('SELECT * FROM hotel');
      return $query->result_array();
    }

    public function get_hotel_details($id_hotel)
    {
      $query = $this->db->get_where('hotel', array('id_hotel' => $id_hotel));
      return $query->result_array();
    }

    public function get_hotel_room($id_hotel)
    {
      $query = $this->db->get_where('room', array('id_hotel' => $id_hotel));
      return $query->result_array();
    }

    public function get_room_details($id_room)
    {
      $query = $this->db->get_where('room', array('id_room' => $id_room));
      return $query->result_array();
    }

    public function insert_customer($email,$fname,$lname,$birthdate,$phonenumber,$password,$imagelink){
        $values = array(
        'first_name' => $fname,
        'last_name' => $lname,
        'no_telp' => $phonenumber,
        'email'=> $email,
        'password' => $password,
        'birthdate' => $birthdate,
        'image' => $imagelink
        );
        $this->db->insert('customer',$values);

    }


    public function findhotel($city,$rating){
        $query = $this->db->where('city', $city)
                          ->where('rating', $rating)
                          ->get('hotel');
        $data=$query->row();
        if($query->num_rows() > 0){
            return $data->id_hotel;
        } else {
            return FALSE;
        }
    }

    public function findroom($id_hotel,$min,$max){
      $query = $this->db->where('price >=', $min)
                        ->where('price <=', $max)
                        ->where('id_hotel', $id_hotel)
                        ->get('room');
        $data=$query->row();
        // $query = $this->db->where('id_hotel', $id_hotel)
        //                   ->get('room');
        if($query->num_rows() > 0){
            return $data->id_hotel;
        } else {
            return FALSE;
        }
    }

    public function get_hotel_filter($id_hotel)
    {
      $query = $this->db->where('id_hotel', $id_hotel)
                        ->get('hotel');
      if($query->num_rows() > 0){
          return $query->result_array();
      } else {
          return array();
      }

    }

    public function insert_booking($fname,$lname,$phone,$email,$qty,$checkin,$checkout,$price,
    $category,$id_customer,$id_hotel,$id_room,$hotelname,$roomname){
      $values = array(
      'customer_name' => $fname." ".$lname,
      'no_telp' => $phone,
      'email'=> $email,
      'qty'=> $qty,
      'check_in'=> $checkin,
      'check_out'=> $checkout,
      'total_price' => $price,
      'id_customer' => $id_customer,
      'id_hotel' => $id_hotel,
      'id_room' => $id_room,
      'hotel_name' => $hotelname,
      'room_name' => $roomname

      );
      $this->db->insert('booking',$values);
    }

    public function check_booking($id_room,$checkin,$checkout){
        $flag=FALSE;
        $query = $this->db->where('check_in =', 0)
                        ->where('check_out =', 0)
                        ->where('id_room', $id_room)
                        ->get('roomdetails');

        if($query->num_rows() > 0){
            $flag=TRUE;
        }

        else {
          $query2 = $this->db->where('check_in <=', $checkout)
                            ->where('check_out >=', $checkin)
                            ->where('id_room', $id_room)
                            ->get('roomdetails');
          if($query2->num_rows() > 0){
          $flag=TRUE;
          }

        }

        return $flag;
    }

    public function check_booking_reservation($id_room,$checkin,$checkout){
      $query = $this->db->where('check_in =', 0)
                      ->where('check_out =', 0)
                      ->where('id_room', $id_room)
                      ->get('roomdetails');

      if($query->num_rows() > 0){
          return $query->row();
      }

      else {
        $query2 = $this->db->where('check_in <=', $checkout)
                          ->where('check_out >=', $checkin)
                          ->where('id_room', $id_room)
                          ->get('roomdetails');
        if($query2->num_rows() > 0){
          return $query2->row();
        }

      }

    }


    public function update_reservation($id_roomdetails,$id_room,$id_hotel,$checkin,$checkout,$id_customer){

      $values = array(
        'check_in'=> $checkin,
        'check_out'=> $checkout,
        'id_customer' => $id_customer,
        'id_hotel' => $id_hotel,
        'id_room' => $id_room

      );
      $this->db->update('roomdetails', $values, array('id_roomdetails' => $id_roomdetails));

    }

    public function get_customer($id_customer){
      $query = $this->db->get_where('customer', array('id_customer' => $id_customer));
      return $query->result_array();
    }

    public function get_booking($id_customer){
      $query = $this->db->get_where('booking', array('id_customer' => $id_customer));
      return $query->result_array();
    }

    public function get_invoice($id_booking){
      $query = $this->db->get_where('booking', array('id_booking' => $id_booking));
      return $query->result_array();
    }

    public function edit_customer($id_customer,$email,$fname,$lname,$birthdate,$phonenumber,$password,$imagelink){
      $values = array(
      'first_name' => $fname,
      'last_name' => $lname,
      'no_telp' => $phonenumber,
      'email'=> $email,
      'password' => $password,
      'birthdate' => $birthdate,
      'image' => $imagelink
      );
      $this->db->update('customer', $values, array('id_customer' => $id_customer));

    }


    public function get_hotel_location($location){
        $query = $this->db->get_where('hotel', array('city' => $location));
        if($query->num_rows() > 0){
          return $query->row();
        }
        else{
          return FALSE;
        }

    }




}
?>
