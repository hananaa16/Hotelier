<!DOCTYPE html>
<html>
<head>
	<?php echo $js;
	echo $css;?>
  <title>Admin Booking List</title>
	<style>
	.fas{
		color:white;

	}

  .nav-item {
    padding-right: 20px;
  }
  .nav-link {
  text-decoration: none;
  /* border: 1px solid rgb(146, 148, 248); */
  position: relative;
  overflow: hidden;
}

.nav-link:before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent,
    #fff,
    transparent
  );
  transition: all 650ms;
}

.nav-link:hover:before {
  left: 100%;
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    background-color: white;
}

.fl-table thead th {
    color: #000;
    background: #F7E9A0;
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url() ?>index.php/home"><img src="<?php echo base_url();?>assets/picture/Logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/admin'?>"><i class="fa fa-list" aria-hidden="true"></i> List Hotel</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/adminbooking"><i class="fa fa-list" aria-hidden="true"></i> List Booking<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/home/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out </a>
      </li>
    </ul>
  </div>
</nav>


<h3 class="p-4">Welcome, Admin </h3>
	<div class="container">
		<div class="table-responsive ">
		<table id="example" class="table fl-table table-striped table-bordered" style="width:100%">
	  <thead>
	    <tr>
	            <th>No </th>
	            <th>Customer Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Hotel Name</th>
              <th>Room Name</th>
              <th>Qty</th>
              <th>Check In</th>
              <th>Check Out</th>
              <th>Total Price</th>
              <th>View Invoice</th>
	        </tr>
	    </thead>
	    <tbody class="text-center">
				<?php $i=1;?>
	      <?php
				foreach ($booking as $row){
	          $id_booking = $row['id_booking'];
            $id_hotel = $row['id_hotel'];
            $id_customer = $row['id_customer'];
            $id_room = $row['id_room'];
	          $customer_name = $row['customer_name'];
	          $price = $row['total_price'];
						$no_telp = "+62".$row['no_telp'];
            $hotel_name = $row['hotel_name'];
            $room_name = $row['room_name'];
						$email = $row['email'];
						$qty = $row['qty'];
            $checkin =$row['check_in'];
            $checkout=$row['check_out'];

					?>
						<tr>
						<td><?php echo $i++;?></td>
						<td><?php echo $customer_name;?></td>
						<td><?php echo $email;?></td>
            <td><?php echo $no_telp;?></td>
            <td><?php echo $hotel_name; ?></td>
            <td><?php echo $room_name; ?></td>
            <td><?php echo $qty; ?></td>
            <td><?php echo $checkin; ?></td>
            <td><?php echo $checkout; ?></td>
						<td><?php echo 'Rp. '.number_format($price,0,".",".");?></td>

						<td>
								<a href="<?php echo base_url().'index.php/customer/invoice/'.$id_booking;?>" class="btn btn-light" style="background-color: #A8D1E7; border: none; box-shadow: 0px 2px 8px #000"><i class="fas fa-file-alt fa"></i></a>
						</td>
						</tr>



	     <?php } ?>
	    </tbody>
			<tfooter>

			</tfooter>
	  </table>
	</div>
	</div>

</body>
<script>
	$(document).ready(function() {
	    	$('#example').DataTable();
	    });
	</script>
</html>
