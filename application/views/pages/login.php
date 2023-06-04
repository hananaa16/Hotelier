<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<?php echo $css; ?>
	<style>
	body
      {
          background: url('https://themeparkrider.com/wp-content/uploads/2018/01/WDW-Summer-2014-Mom-179.jpg');
          background-repeat: no-repeat !important;
          background-size: cover !important;
          background-position: center;
          background-attachment: fixed;
          width: 100%;
          height: auto;
      }
	.row{
		width:100%;
	}

	.noselect {
  -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
		-webkit-tap-highlight-color: transparent;
}

button {
	width: 150px;
	height: 50px;
	cursor: pointer;
	font-size: 20px;
	/* font-weight: bold; */
	color: black;
	background: white;
	border: 2px solid #A8D1E7;
	box-shadow: 5px 5px 0 #A8D1E7,
		-5px -5px 0 #A8D1E7,
		-5px 5px 0 #A8D1E7,
		5px -5px 0 #A8D1E7;
	transition: 100ms ease-in-out;
}

button:hover {
	box-shadow: 20px 5px 0 #A8D1E7, -20px -5px 0 #A8D1E7;
}

button:focus {

	outline: none;
}


	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #A8D1E7">
	  <a class="navbar-brand" href="<?php echo base_url() ?>index.php/home"><img src="<?php echo base_url();?>assets/picture/Logo.png"></a>
	</nav>

	<div class="row">
		<div class="container col-sm-8" style="margin-top: 50px">
		</div>
		<div class="col-sm-4 justify-content-center p-4">
			<div class="card p-3">
				<h3>LOGIN</h3>
				<?php echo form_open('Login'); ?>
					<?php if(isset($error)) { echo $error; }; ?>
				<div class="form-group">
					<label>Email</label>
					<div class="input-container">
						<i class="fa fa-user-o icon"></i><input type="text" class="form-control" name="email" placeholder="Enter Email" autofocus>
					</div>
					<p><?php echo form_error('email'); ?></p>
				</div>
				<div class="form-group">
					<label>Password</label>
					<div class="input-container">
						<i class="fa fa-key icon"></i><input type="password" name="password" class="form-control" placeholder="Enter Password">
					</div>
					<p><?php echo form_error('password'); ?></p>
				</div>
				<div class="form-group">
					<label>Captcha</label><br>
					<span><?php echo $captcha_image;?></span>
					<a href="#" onclick="parent.window.location.reload(true)"> <i class="fa fa-refresh" aria-hidden="true"></i></a><br><br>
					<div class="input-container">
						<i class="fa fa-key icon"></i><input type="text" name="captcha" class="form-control" placeholder="Enter Captcha">
					</div>
					<p><?php echo form_error('captcha'); ?></p>
				</div>
				<div class="justify-content-center text-center mb-3">
					<button class="name noselect" style="width:80%" name="btn-login" id="btn-login" type="submit">
						Login
					</button>
  			</div>
				</form>
				<p class="footer">Not a member yet? <a href="<?php echo base_url() ?>index.php/signup">Sign Up Here</a>.</p>
			</div>
	</div>
</div>
<div id="error" style="margin-top: 10px"></div>

</body>
</html>
