<!DOCTYPE html>
<html>
<head>
	<title>Admin Room</title>
	<?php echo $js;
	echo $css;?>

<script>

		$(document).ready(function() {

				$('#example tbody').on('click','.btnInput',function(e){
				let editModal=$('#formEdit');
				const id_hotel = "<?php echo $id;?>";
				const id_room = $(this).data('id_room');
				const name = $(this).data('name');
				const qty = $(this).data('qty');
				// const qtybefore= $(this).data('qty');
				const category = $(this).data('category');
				const price = $(this).data('price');
				const description = $(this).data('description');
				 $('#formEdit #name').val(name);
				 $('#formEdit #price').val(price);
				 // $('#formEdit #qtybefore').val(qtybefore);
				 $('#formEdit #qty').val(qty);
				 $('#formEdit #category').val(category);
				 $('#formEdit #description').val(description);
				 $('#formEdit #id_room').val(id_room);
				 $('#formEdit #id_hotel').val(id_hotel);

				editModal.modal('show');
			})
				$('#example tbody').on('click','.btnDelete',function(e){
					let deleteModal=$('#formDelete');
					const id_room = $(this).data('id_room');
					const id_hotel = $(this).data('id_hotel');
					$('#formDelete #id_room').val(id_room);
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
		        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus" aria-hidden="true"></i> Add Room</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
						<?php echo form_open_multipart(base_url(). 'index.php/admin/do_upload_room'); ?>
							<input type="hidden" name="id_hotel" value="<?php echo $id;?>">
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label"> Room Type: </label>
						 <div class="col-sm-8">
							 <select class="form-control" name="category" id="">
								 <option selected>Choose...</option>
								 <option>Single Room</option>
								 <option>Superior Double Room</option>
								 <option>Superior Twin Room</option>
						 </select>
							</div>
					 </div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Qty: </label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="qty" min="0">
							</div>
						</div>
						<div class="form-group row">
							<label  class="col-sm-4 col-form-label">Price :</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="price" min="0">
							</div>
						</div>
						<div class="form-group row">
						 <label  class="col-sm-4 col-form-label">Description :</label>
						 <div class="col-sm-8">
							 <textarea name="description" class="form-control" rows="3"></textarea>
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
		        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fal fa-edit" aria-hidden="true"></i> Edit room</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
						<?php echo form_open_multipart(base_url(). 'index.php/admin/edit_room'); ?>
						<div class="form-group row">
							<input type="hidden" name="id_room" id="id_room">
							<input type="hidden" name="id_hotel" id="id_hotel">
							<label class="col-sm-4 col-form-label">Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" id="name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Category: </label>
						 <div class="col-sm-8">
							 <select class="form-control" name="category" id="category">
								 <option selected>Choose...</option>
								 <option>Single Room</option>
								 <option>Superior Double Room</option>
								 <option>Superior Twin Room</option>
						 </select>
							</div>
					 </div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Stocks: </label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="qty" id="qty" min="0">
							</div>
						</div>
						<div class="form-group row">
							<label  class="col-sm-4 col-form-label">Price :</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="price" id="price" min="0">
							</div>
						</div>
						<div class="form-group row">
						 <label  class="col-sm-4 col-form-label">Description :</label>
						 <div class="col-sm-8">
							 <textarea name="description" id="description" class="form-control" rows="3"></textarea>
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
							<?php echo form_open_multipart(base_url(). 'index.php/admin/delete_room'); ?>
							<input type="hidden" name="id_room" id="id_room">
							<input type="hidden" name="id_hotel" id="id_hotel">
							<h3>Are you sure you want to delete this room?</h3>
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
		<button type="button" class="btn btn-primary mb-2" style="float:right;"data-toggle="modal" data-target="#formInput"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Room</button>
</div>

	<div class="container" >
		<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered fl-table" style="width:100%">
	  <thead>
	    <tr>
	            <th>No </th>
	            <th>Room Name</th>
							<th>Room Type</th>
							<th>Qty</th>
							<th>Image Preview</th>
	            <th>Price</th>
	            <th>Description</th>
							<th>Action</th>
	        </tr>
	    </thead>
	    <tbody class="text-center">
	      <?php
				$i=1;
				foreach ($room as $row){
	          $id_room= $row['id_room'];
						$id_hotel= $row['id_hotel'];
	          $name = $row['name'];
	          $qty = $row['qty'];
						$category = $row['category'];
						$image = $row['image'];
	          $price = $row['price'];
						$price0 = number_format($row['price'],0,".",".");
						$description = $row['description'];
					 ?>
						<tr>
						<td><?php echo $i++;?></td>
						<td id="name"><?php echo $name;?></td>
						<td id="category"><?php echo $category;?></td>
						<td id="qty"><?php echo $qty;?></td>
						<td id="image"><img src="<?php echo base_url().$image;?>" style="width:100px;height:100px;"></td>
						<td id="price">Rp. <?php echo $price0;?></td>
						<td id="description"><?php echo $description;?></td>
						<td>
							<a href="#" class="btn btn-success btn-sm btnInput mb-2" data-id_room="<?php echo $id_room;?>" data-id_hotel="<?php echo $id_hotel;?>"  data-name="<?php echo $name;?>" data-qty="<?php echo $qty; ?>" data-category="<?php echo $category;?>" data-price="<?php echo $price;?>" data-description="<?php echo $description;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							<br>
							<a href="#" class="btn btn-danger btn-sm btnDelete mb-2" data-id_room="<?php echo $id_room;?>" data-id_hotel="<?php echo $id_hotel;?>"> <i class="fa fa-trash" aria-hidden="true"></i></a>
							<br>
							<a href="<?php echo base_url().'index.php/admin';?>" class="btn btn-warning btn-sm"><i class="far fa-arrow-left" style="color:black;"></i></a>
						</td>
					</tr>
	      <?php } ?>
	    </tbody>
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
