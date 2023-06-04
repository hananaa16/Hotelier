<html>
<head>
  <title>Sign Up</title>
	<?php echo $css; ?>
  <style>
  body
      {
          background: url('https://cdna.artstation.com/p/assets/images/images/022/521/258/original/bogdan-mb0sco-coffee-shop-animationfullhd.gif?1575731432');
          background-repeat: no-repeat !important;
          background-size: cover !important;
          background-position: center;
          background-attachment: fixed;
          width: 100%;
          height: auto;
      }
    .input-container
    {
      color : #FBB80E;
      border-radius: 47%;
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
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A8D1E7;">
	  <a class="navbar-brand" href="<?php echo base_url() ?>index.php/home"><img src="<?php echo base_url();?>assets/picture/Logo.png"></a>
	</nav>
  <div class="row p-4">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <div class="card p-4">
        <h3>REGISTER NEW MEMBER</h3><br>
				<?php echo form_open_multipart(base_url(). 'index.php/signup'); ?>
          <div class="form-group">
          <label>Profile Image</label>
          <div class="input-container" style="color-background: #FBB80E; border-radius: 47%;">
            <input type="file" name="image" accept="image/*">
          </div>
          </div>
        <!-- <div class="form-group row">
          <label class="col-sm-4 col-form-label">Image: </label>
          <div class="col-sm-8">
            <input type="file" name="image" accept="image/*">
          </div>
        </div> -->
          <div class="form-group">
            <label>Email</label>
            <div class="input-container" style="color-background: #FBB80E; border-radius: 47%;">
              <i class="fa fa-envelope icon" aria-hidden="true"></i><input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <p><?php echo form_error('email'); ?></p>
          </div>
          <div class="form-group">
            <label>First Name</label>
            <div class="input-container">
              <i class="fa fa-user-o icon"></i><input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
            <p><?php echo form_error('firstname'); ?></p>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <div class="input-container">
              <i class="fa fa-user-o icon"></i><input type="text" name="lastname" class="form-control" placeholder="Last Name">
            </div>
            <p><?php echo form_error('lastname'); ?></p>
          </div>
          <div class="form-group">
            <label>Birth Date</label>
            <div class="input-container">
              <i class="fa fa-calendar icon"></i><input type="date" name="birthdate" class="form-control" placeholder="Birth Date">
            </div>
            <p><?php echo form_error('birthdate'); ?></p>
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <div class="input-container">
              <i class="fa fa-phone icon"></i><div class="input-group-prepend"><div class="input-group-text">+62</div></div><input type="text" name="phonenumber" class="form-control" placeholder="Phone Number">
            </div>
            <p><?php echo form_error('phonenumber'); ?></p>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-container">
              <i class="fa fa-key icon"></i><input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <p><?php echo form_error('password'); ?></p>
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <div class="input-container">
              <i class="fa fa-key icon"></i><input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <p><?php echo form_error('cpassword'); ?></p>
          </div><br>
          <div class="form-group">
            <div class="justify-content-center text-center">
              <button class="name noselect" style="width:80%" name="btn-register" type="submit">
              Register</button>
            </div>
          </div>
        </form>
        <p class="footer">Already a member? <a href="<?php echo base_url() ?>index.php/login">Login here</a>.</p>
      </div>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</body>
</html>
