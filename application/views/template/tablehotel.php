<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
  <tr>
          <th>No </th>
          <th>Hotel</th>
          <th>City</th>
          <th>Address</th>
          <th>Image Preview</th>
          <th>Rating</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $i=1;
    foreach ($hotel as $row){
      $id_hotel= $row['id_hotel'];
      $name = $row['name'];
      $address = $row['address'];
      $city = $row['city'];
      $image = $row['image'];
      $rating = $row['rating'];
        ?>
        <tr>
        <td><?php echo $i++;?></td>
        <td id="name"><?php echo $name;?></td>
        <td id="city"><?php echo $city;?></td>
        <td id="address"><?php echo $address;?></td>
        <td id="image"><img src="<?php echo base_url().$image;?>" style="width:100px;height:100px;"></td>

        <td id="rating"><?php echo $rating;?></td>
        <td><a href="<?php echo base_url().'index.php/customer/hoteldetails/'.$id_hotel;?>">Details</a></td>


   <?php } ?>
 </div>

  </tbody>
  <tfooter>

  </tfooter>
</table>
