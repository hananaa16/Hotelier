<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model
{

    function logged_id()
    {
        return $this->session->userdata('username');
    }


    function check_login($email,$pass)
    {
        $sql = "SELECT * FROM admin WHERE email = ? AND password = ?";
        $query=$this->db->query($sql, array($email, $pass));

        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }

    }

    public function get_hotel()
    {
      $query = $this->db->query("SELECT * FROM hotel");
      return $query->result_array();
    }

    public function get_hotel_room($id_hotel)
    {
      $query = $this->db->get_where('room', array('id_hotel' => $id_hotel));
      return $query->result_array();
    }

    public function get_room()
    {
      $query = $this->db->query("SELECT * FROM room");
      return $query->result_array();
    }

    public function insert_room($name,$id_hotel,$category,$qty,$price,$description,$imagelink){
        $values = array(
        'name' => $name,
        'id_hotel' => $id_hotel,
        'category' => $category,
        'qty'=> $qty,
        'price' => $price,
        'description' => $description,
        'image' => $imagelink
        );

        $this->db->insert('room',$values);
        $insert_id = $this->db->insert_id();
        return $insert_id;

    }

    public function insert_room_details($id_room,$id_hotel,$category){
        $values = array(
        'id_room' => $id_room,
        'id_hotel' => $id_hotel,
        'category' => $category
        );

        $this->db->insert('roomdetails',$values);

    }

    public function delete_room_details($id_room){
      $this->db->where('id_room', $id_room);
      $this->db->delete('roomdetails');
    }


    public function edit_room($id_room,$id_hotel,$name,$category,$qty,$price,$description,$imagelink){
      $values = array(
			  'name' => $name,
        'id_hotel'=> $id_hotel,
        'category' => $category,
        'qty'=> $qty,
        'price' => $price,
        'description' => $description,
        'image' => $imagelink
			);
			$this->db->update('room', $values, array('id_room' => $id_room));
    }

    public function delete_room($id){
      $this->db->where('id_room', $id);
      $this->db->delete('room');
    }

    public function insert_hotel($name,$address,$rating,$city,$imagelink,$shortdesc,$longdesc){
        $values = array(
        'name' => $name,
        'address' => $address,
        'rating'=> $rating,
        'city' => $city,
        'image' => $imagelink,
        'shortdescription'=> $shortdesc,
        'longdescription'=> $longdesc
        );
        $this->db->insert('hotel',$values);

    }
    public function edit_hotel($id_hotel,$name,$address,$rating,$city,$imagelink,$shortdesc,$longdesc){
      $values = array(
        'name' => $name,
        'address' => $address,
        'rating'=> $rating,
        'city' => $city,
        'image' => $imagelink,
        'shortdescription'=> $shortdesc,
        'longdescription'=> $longdesc
			);
			$this->db->update('hotel', $values, array('id_hotel' => $id_hotel));
    }

    public function delete_hotel($id){
      $this->db->where('id_hotel', $id);
      $this->db->delete('hotel');
      $this->db->where('id_hotel', $id);
      $this->db->delete('room');
      $this->db->where('id_hotel', $id);
      $this->db->delete('roomdetails');
    }

    public function get_booking(){
      $query = $this->db->query("SELECT * FROM booking");
      return $query->result_array();
    }


}
?>
