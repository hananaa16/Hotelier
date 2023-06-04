<!DOCTYPE html>
<html>
<head>
	<title>Admin Hotel</title>
	<?php echo $js;
	echo $css;?>

<script>

		$(document).ready(function() {
				$('#example tbody').on('click','.btnInput',function(e){
				let editModal=$('#formEdit');
				const id_hotel = $(this).data('id_hotel');
				const name = $(this).data('name');
				const rating = $(this).data('rating');
				const address = $(this).data('address');
				const city = $(this).data('city');
				const shortdesc = $(this).data('shortdesc');
				const longdesc = $(this).data('longdesc');
				// const description = $(this).data('description');
				 $('#formEdit #name').val(name);
				 $('#formEdit #rating').val(rating);
				 $('#formEdit #city').val(city);
				 $('#formEdit #address').val(address);
				 $('#formEdit #shortdesc').val(shortdesc);
				 $('#formEdit #longdesc').val(longdesc);
				 $('#formEdit #id_hotel').val(id_hotel);
				editModal.modal('show');
			})

				$('#example tbody').on('click','.btnDelete',function(e){
					let deleteModal=$('#formDelete');
					const id_hotel = $(this).data('id_hotel');
					$('#formDelete #id_hotel').val(id_hotel);
					deleteModal.modal('show');
				})
			});

	</script>
	<style>

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
		text-align: center;
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
		      <li class="nav-item active">
		        <a class="nav-link" href="#"><i class="fa fa-list" aria-hidden="true"></i> List Hotel<span class="sr-only">(current)</span></a>
		      </li>
					<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>index.php/admin/adminbooking"><i class="fa fa-list" aria-hidden="true"></i> List Booking</a>
		      </li>
		      <li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>index.php/home/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out </a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<!-- form input -->
		<div class="modal fade" id="formInput" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus" aria-hidden="true"></i> Add Hotel</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php echo form_open_multipart(base_url(). 'index.php/admin/do_upload_hotel'); ?>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">City : </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="city">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Rating :</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="rating" max="5" >
							</div>
						</div>
						<div class="form-group row">
						 <label  class="col-sm-4 col-form-label">Address :</label>
						 <div class="col-sm-8">
							 <textarea name="address" class="form-control" rows="2"></textarea>
						 </div>
					 </div>
					 <div class="form-group row">
						<label  class="col-sm-4 col-form-label">Short description:</label>
						<div class="col-sm-8">
							<textarea name="shortdesc" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group row">
					 <label  class="col-sm-4 col-form-label">Long description:</label>
					 <div class="col-sm-8">
						 <textarea name="longdesc" class="form-control" rows="4"></textarea>
					 </div>
				 </div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Image: </label>
							<div class="col-sm-8">
								<input type="file" name="image" accept="image/*">
							</div>
						</div>
					</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add</button>
							<button type="cancel" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>

	<!-- form edit -->
		<div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Edit room</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php echo form_open_multipart(base_url(). 'index.php/admin/edit_hotel'); ?>
						<div class="form-group row">
							<input type="hidden" name="id_hotel" id="id_hotel">
							<label class="col-sm-4 col-form-label">Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" id="name" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">City : </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="city" id="city">
							</div>
						</div>

						<div class="form-group row">
							<label  class="col-sm-4 col-form-label">Rating :</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" id="rating" name="rating" max="5" >
							</div>
						</div>
						<div class="form-group row">
						 <label  class="col-sm-4 col-form-label">Address :</label>
						 <div class="col-sm-8">
							 <textarea name="address" id="address"class="form-control" rows="3"></textarea>
						 </div>
					 </div>
					 <div class="form-group row">
						<label  class="col-sm-4 col-form-label">Short description:</label>
						<div class="col-sm-8">
							<textarea name="shortdesc" id="shortdesc" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group row">
					 <label  class="col-sm-4 col-form-label">Long description:</label>
					 <div class="col-sm-8">
						 <textarea name="longdesc" id="longdesc"class="form-control" rows="4"></textarea>
					 </div>
				 </div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Image: </label>
							<div class="col-sm-8">
								<input type="file" name="image" id="image" accept="image/*">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success"><i class="fa fa-upload" aria-hidden="true"></i> Update</button>
						<button type="cancel" data-dismiss="modal"class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button></div>
					<?php echo form_close(); ?>
					</div>
				</div>
			</div>

		<!-- form delete -->
			<div class="modal fade" id="formDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Delete room</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php echo form_open_multipart(base_url(). 'index.php/admin/delete_hotel'); ?>
							<input type="hidden" name="id_hotel" id="id_hotel">
							<h3>Are you sure you want to delete this hotel?</h3>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button></div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>


<h3 class="p-4">Welcome, Admin</h3>
<div class="container">
		<button type="button" class="btn btn-primary mb-2" style="float:right;"data-toggle="modal" data-target="#formInput"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Hotel</button>
</div>

	<div class="container">
		<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered fl-table" style="width:100%">
	  <thead>
	    <tr>
	            <th>No </th>
	            <th>Hotel</th>
							<th>City</th>
							<th>Address</th>
							<th>Image Preview</th>
	            <th>Rating</th>
							<th>Short Description</th>
							<th>Long Description</th>
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
						$shortdesc= $row['shortdescription'];
						$longdesc = $row['longdescription'];
						 ?>
						<tr>
						<td><?php echo $i++;?></td>
						<td id="name"><?php echo $name;?></td>
						<td id="city"><?php echo $city;?></td>
						<td id="address"><?php echo $address;?></td>
						<td id="image"><img src="<?php echo base_url().$image;?>" style="width:100px;height:100px;"></td>

						<td id="rating"><?php echo $rating;?></td>
						<td id="shortdesc"><?php echo $shortdesc;?></td>
						<td id="longdesc"><?php echo $longdesc;?></td>

						<td>
							<a href="<?php echo base_url().'index.php/admin/room/'.$id_hotel;?>" class="btn btn-warning btn-sm mb-2"><i class="fas fa-info-circle" style="color:white;"></i></a>
							<br>
							<a href="#" class="btn btn-success btn-sm btnInput mb-2" data-id_hotel="<?php echo $id_hotel;?>"  data-name="<?php echo $name;?>" data-city="<?php echo $city; ?>" data-address="<?php echo $address;?>" data-rating="<?php echo $rating;?>" data-shortdesc="<?php echo $shortdesc;?>" data-longdesc="<?php echo $longdesc;?>" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
							<br>
							<a href="#" class="btn btn-danger btn-sm btnDelete" data-id_hotel="<?php echo $id_hotel;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
