<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Hotelier!</title>
	<?php echo $js;
	echo $css;?>
	<!-- <link rel="stylesheet" href="<?php echo base_url().'assets/colorlib/css/main.css';?>"> -->


	<!-- <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
	<!-- <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
	<!-- Font special for pages-->
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->

	<!-- Vendor CSS-->
	<!-- <link href="<?php echo base_url().'assets/colorlib/vendor/select2/select2.min.css';?>" rel="stylesheet" media="all">
	<link href="<?php echo base_url().'assets/colorlib/vendor/datepicker/daterangepicker.css';?>" rel="stylesheet" media="all"> -->

	<style>
	.searchbar{
		padding-top:10px;
		padding-bottom: 30px;
		width: 100%;

	}
	.bar{
		background: transparent;
	  position: relative;
	}
	.card{
		color:black;
		-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
	  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
		/* margin-right: 10px; */
		-webkit-border-radius: 10px;
	  -moz-border-radius: 10px;
	  border-radius: 10px;
		padding: 10px;
		float:left;
		min-height: 100px;
	}

	.btn-search{
		width:100px;
		height:100px;
		border-radius: 50%;
	}
	.hotelier{
		font-size: 80px;
		color: #fff;
		text-shadow: 4px 4px 8px #000;
		font-weight: bold;
	}



	@media screen and (max-width: 500px){
		.hotelier{
			font-size: 40px;
			color: #fff;
			text-shadow: 4px 4px 8px #000;
			font-weight: bold;
		}
		.form-label{
			font-size: 15px;
		}
		input[type="text"] {
			height:30px;
		}
		.card{
			min-height:0;
			margin-bottom:5px;
		}
		.datepicker{
			width:120px;
			height:20px;
			font-size: 13px;
		}

	}

	/* @media screen and (max-width: 650px){
		.hotelier{
			font-size: 40px;
			color: #fff;
			text-shadow: 4px 4px 8px #000;
			font-weight: bold;
		}
		.form-label{
			font-size: 10px;
		}
		input[type="text"] {
			height:20px;
			font-size: 10px;
		}
		.card{
			min-height:75px;
			margin-bottom:5px;
		}
		.btn-lg{
			padding: 9px;
			font-size: 10px;
			line-height: 1.2em;
		}

	} */




	</style>
</head>
<body>
	<div class="content">
		<?php echo $navbar; ?>
		<div class = "background">
			<?php if ($this->session->userdata('name')) {?>
				<br><br>
				<h4 class="hotelier">H O T E L I E R<h4>
				<p style ="font-size: 30px; color: #fff; text-shadow: 4px 4px 8px #000; font-weight: bold; padding-top: 10px; padding-bottom: 10px;">Hello, <?php echo $this->session->userdata('name'); ?></p>
				<div class="searchbar container">
					<div class="bar">
					<?php echo form_open_multipart(base_url().'index.php/customer/searchbar'); ?>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="card col-sm-2 justify-content-center">
									<label class="form-label"><i class="fa fa-map-marker" aria-hidden="true" style="color:black; "></i> Location</label>
										<input type="text" class="form-control" placeholder="Insert city name" name="location" >
							</div>
							<div class="card col-sm-6 justify-content-center">
								<table>
									<tr>
										<td><label class="form-label"><i class="fas fa-sign-in"></i> Check In </label>
									<input class="datepicker" id="checkin" type="text" placeholder="" />
										</td>
										<td><label class="form-label"><i class="fas fa-sign-out"></i> Check Out</label>
											<input class="datepicker" id="checkout" type="text" placeholder="" />
										</td>
								</tr>
								</table>
							</div>
							<div class="card col-sm-2 justify-content-center text-center my-auto">
								<div class="my-auto">
									<label class="form-label">Search</label>
									<button type="submit" class="btn btn-lg btn-light" style="color: white; background-color:#A8D1E7; border-radius: 50%;"><i class="fa fa-search" aria-hidden="true"></i></button>
								</div>
							</div>
							<div class="col-sm-1">
							</div>
						</div>
							<?php echo form_close(); ?>
					</div>
				</div>
				<div>
					<a class="btn btnBook" href="<?php echo base_url().'index.php/customer/hotel'; ?>" role="button" aria-pressed="true">
		        <span>Booking for good Hotel</span>
					</a>
					<br>
				</div>
				<?php } else{ ?>
				<br><br><br>
				<h4 class="hotelier">H O T E L I E R<h4>
				<div class="searchbar container">
					<div class="bar">
					<?php echo form_open_multipart(base_url().'index.php/customer/searchbar'); ?>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="card col-sm-2 justify-content-center">
									<label class="form-label"><i class="fa fa-map-marker" aria-hidden="true" style="color:black; "></i> Location</label>
										<input type="text" class="form-control" placeholder="Insert city name" name="location" >
							</div>
							<div class="card col-sm-6 justify-content-center">
								<table>
									<tr>
										<td><label class="form-label"><i class="fas fa-sign-in"></i> Check In</label>
									<input class="datepicker" id="checkin" type="text" placeholder="" />
										</td>
										<td><label class="form-label"><i class="fas fa-sign-out"></i> Check Out</label>
										  <input class="datepicker" id="checkout" type="text" placeholder="" />
										</td>
								</tr>
								</table>
							</div>
							<div class="card col-sm-2 justify-content-center text-center">
								<div class="my-auto">
									<label class="form-label">Search</label>
									<button type="submit" class="btn btn-lg btn-light" style="color: white; background-color:#A8D1E7; border-radius: 50%;"><i class="fa fa-search" aria-hidden="true"></i></button>
								</div>
							</div>
							<div class="col-sm-1">
							</div>
						</div>
							<?php echo form_close(); ?>
					</div>
				</div>
				<div>
					<a class="btn btnBook" href="<?php echo base_url().'index.php/customer/hotel'; ?>" role="button" aria-pressed="true">
 					 <span>Booking for good Hotel</span>
 				 	</a>
					<br>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php echo $footer; ?>
</body>
<!-- <script src="<?php echo base_url().'assets/colorlib/vendor/jquery/jquery.min.js';?>"></script> -->
	 <!-- Vendor JS-->
	 <!-- <script src="<?php echo base_url().'assets/colorlib/vendor/select2/select2.min.js';?>"></script>
	 <script src="<?php echo base_url().'assets/colorlib/vendor/jquery-validate/jquery.validate.min.js'?>"></script>
	 <script src="<?php echo base_url().'assets/colorlib/vendor/bootstrap-wizard/bootstrap.min.js';?>"></script>
	 <script src="<?php echo base_url().'assets/colorlib/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js';?>"></script>
	 <script src="<?php echo base_url().'assets/colorlib/vendor/datepicker/moment.min.js';?>"></script>
	 <script src="<?php echo base_url().'assets/colorlib/vendor/datepicker/daterangepicker.js'?>"></script>
 	<script src="<?php echo base_url().'assets/colorlib/js/global.js';?>"></script> -->

	<script>
	  $(function () {
	    var FLATPICKER_CHECKOUT = flatpickr('#checkout', {
	      altInput: true,
	      dateFormat: "d-m-Y",
	      defaultDate: "today"
	    });

	    $("#checkin").flatpickr(
	      {
	        altInput: true,
	        dateFormat: "d-m-Y",
	        minDate: "today",
	        defaultDate: "today",

	        onChange: function (dateStr, dateObj) {
	          FLATPICKER_CHECKOUT.set("minDate", dateObj);
	          FLATPICKER_CHECKOUT.setDate(dateObj);
	        }
	      });
	  });
	</script>
</html>
