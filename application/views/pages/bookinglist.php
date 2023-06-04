<!DOCTYPE html>
<html>
<head>
	<?php echo $js;
	echo $css;?>
  <title>Booking List</title>
	<style>
	body{
		background-image: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v944-bb-20_1_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=dd324e893bb3dc6b70c803e263a096fb);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
		min-height: 100vh;
	}
	.fa{
		color:white;

	}
	table{
		box-shadow: 0 4px 8px 0 #888888;
	}

	.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    background: white;
	}

	.fl-table thead th {
		text-align: center;
    color: #000;
    background: #F7E9A0;
}

.fl-table tr:nth-child(even) {
    background: #fff;

}
#footer {
	position: relative;
	bottom: 0;
	width: 100%;
}

	</style>
</head>
<body>
	<div class="content">
		<?php echo $navbar;?>
	</div>

<h2 class="p-4" style="color: #F7E9A0; font-weight: bold; text-align: center; text-shadow: 0px 2px 4px #000;">Welcome, <?php echo $this->session->userdata('name'); ?></h2>
<div class="container-fluid">
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
	<footer id="footer"><?php echo $footer;?></footer>

</html>
