<style>
.navbar{
	min-height:76px;
}
.nav-item {
	background: transparent;
	font-size: 18px;
  font-weight: 400;
  font-style: italic;
  text-transform: capitalize;
	margin-right: 5px;
  padding: 3px 15px;
  border-radius: 0;
  /* box-shadow: 4px 4px 0 rgba(255, 255, 255, 0.3), 8px 8px 0 rgba(255, 255, 255, 0.2); */
  position: relative;
  z-index: 1;
  transition: all 0.3s ease 0.1s;
}

.nav-item:hover{
    color: #fff;
    box-shadow: 0 0 10px -2px rgba(255, 255, 255, 0.3);
		border: 2px solid rgba(255,255,255,0.2);
    transform:scale(1.0);
}
.nav-item .nav-link{ display: block; }
.nav-item:before,
.nav-item:after,
.nav-item .nav-link:before,
.nav-item .nav-link:after{
    content: '';
    background-color: #fff;
    width: 50%;
    height: 2px;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    left: 25%;
    top: -2px;
    transition: all 0.3s ease 0s;
}
.nav-item:after{
    top: auto;
    bottom: -2px;
}
.nav-item .nav-link:before,
.nav-item .nav-link:after{
    height: 50%;
    width: 2px;
    top: 25%;
    left: -2px;
}
.nav-item .nav-link:after{
    left: auto;
    right: -2px;
}
.nav-item:hover:before,
.nav-item:hover:after,
.nav-item:hover .nav-link:before,
.nav-item:hover .nav-link:after{
    opacity: 1;
    visibility: visible;
}
.nav-item:hover:before{ left: 0; }
.nav-item:hover:after{ left: 50%; }
.nav-item:hover .nav-link:before{ top: 50%; }
.nav-item:hover .nav-link:after{ top: 0; }
@media only screen and (max-width: 767px){
    .nav-item{ margin-bottom: 20px; }
}
</style>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A8D1E7">
  <a class="navbar-brand" href="<?php echo base_url() ?>index.php/home"><img src="<?php echo base_url();?>assets/picture/Logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/home">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/customer/hotel">Hotel</a>
      </li>
			<?php if ($this->session->userdata('name')) {?>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/customer/bookinglist">Booking List</a>
      </li>
		<?php }?>

			<li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/home/aboutus">About Us</a>
      </li>
			<?php if (!$this->session->userdata('name')) {?>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/login">Sign In</a>
      </li>
			<?php }?>
			<?php if ($this->session->userdata('name')) {?>
				<li>
					<a class="nav-link" href="<?php echo base_url() ?>index.php/customer/aboutuser"><img src="<?php echo base_url().$this->session->userdata('image');?>" style="border-radius: 50%; width: 35px; height: 35px; box-shadow: 0px 2px 4px #000;"></a>
				</li>
			<!-- <li class="dropdown">
					<a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>index.php/customer/aboutuser" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $this->session->userdata('name');?></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url().'index.php/customer/aboutuser'?>">User Profile</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url() ?>index.php/home/logout">Sign Out</a>
					</div>
			</li> -->
				<?php }?>
    </ul>
  </div>
</nav>
