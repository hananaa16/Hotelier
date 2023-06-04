<!DOCTYPE html>
<html>
<head>
  <?php echo $js;
	echo $css;?>
  <title>Hotel Details</title>
  <style>
  body {
    position: relative;
    min-height: 100vh;
  }
  table{
    max-width: none;
         table-layout: fixed;
         word-wrap: break-word;
  }
  .courses-container {

  }

  .course {
  	background-color: #fff;
  	border-radius: 10px;
  	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
  	display: flex;
  	max-width: 100%;
  	margin: 20px;
  	overflow: hidden;
  	width: 1000px;
  }

  .city {
  	opacity: 0.6;
  	margin: 0;
  	letter-spacing: 1px;
  	text-transform: uppercase;
  }

  .name {
  	letter-spacing: 1px;
  	margin: 10px 0;
  }

  .course .city {
  	opacity: 0.6;
  	margin: 0;
  	letter-spacing: 1px;
  	text-transform: uppercase;
  }

  .course .name {
  	letter-spacing: 1px;
  	margin: 10px 0;
  }

  .course-preview {
  	background-color: #2A265F;
  	color: #fff;
  	/* padding: 10px; */
  	/* max-width: 250px; */
  }

  .course-info {
  	padding: 20px;
  	position: relative;
  	width: 100%;
    min-height:220px;
    /* max-height:250px; */
  }

  .progress-container {
  	/* position: absolute; */
  	/* top: 10px;
  	right: 30px; */
    float: right;
  	text-align: right;
  	width: 150px;
  }

  .progress-text {
  	font-size: 24px;
  	/* opacity: 0.6; */
  	letter-spacing: 1px;
  }

  .progress-text-3 {
  	font-size: 20px;
  	letter-spacing: 1px;
    font-weight: bold;
  }

  .progress-text-2 {
  	font-size: 18px;
  	opacity: 0.6;
  	letter-spacing: 1px;
  }

  .btn {
  	background-color: #2A265F;
  	border: 0;
  	border-radius: 50px;
  	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
  	color: #fff;
  	font-size: 16px;
  	padding: 10px 20px;
  	/* position: absolute; */
  	/* bottom: 8px; */
  	float:right;
  	letter-spacing: 1px;
  }
  .card{
    padding:20px;
    /* color:white; */
    /* background-color: maroon; */
    border-radius: 10px;
  	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);

  }

  hr.solid {
  border-top: 1px solid #000;
}
  .fa-star{
    color:#ffd11a;
  }
  .course img{
    height:220px;
    width:220px;
  }
  .image-details img{
    width:400px;
    height:400px;
  }

  @media screen and (max-width: 650px){
    .course {
      margin: 0px;
    }
    .course img{
      height:260px;
      width:220px;

    }
    .name h3{
      font-size:20px;
    }
    .city h6{
      font-size:10px;
    }
    .course-info{
      padding:15px;
      max-height: 280px;
    }
  }

  @media screen and (max-width: 540px){
    .course {
      margin: 0px;
    }
    .course img{
      height:240px;
      width:180px;
    }
    .name h3{
      font-size:18px;
    }
    .city h6{
      font-size:10px;
    }
    .course-info{
      padding:15px;
      max-height: 240px;
    }
    .progress-text-3 {
      font-size: 14px;
    }
  }


  @media screen and (max-width: 361px){
    .course {
      margin: 0px;
      max-height: 200px;
    }
    .course img{
      height:200px;
      width:130px;
    }
    .course-info p{
      font-size: 10px;
    }
    .name h3{
      font-size:15px;
    }
    .city h6{
      font-size:8px;
    }
    .btn{
      font-size: 12px;
      padding: 8px;
    }
    .course-info{
      padding: 3px;
      max-height: 200px;
    }
    .image-details img{
      text-align: center;
      width: 320px;
      height: 320px;
    }
    .progress-text-3{
      font-size: 10px;
    }
  }

    .social {
      top: 20px;
    }
    .social ul {
      padding: 0px;
      -webkit-transform: translate(-270px, 0);
      -moz-transform: translate(-270px, 0);
      -ms-transform: translate(-270px, 0);
      -o-transform: translate(-270px, 0);
      transform: translate(-270px, 0);
    }
    .social ul li {
      display: block;
      margin: 5px;
      background: #374785;
      width: 290px;
      text-align: right;
      padding: 10px;
      -webkit-border-radius: 0 30px 30px 0;
      -moz-border-radius: 0 30px 30px 0;
      border-radius: 0 30px 30px 0;
      -webkit-transition: all 1s;
      -moz-transition: all 1s;
      -ms-transition: all 1s;
      -o-transition: all 1s;
      transition: all 1s;
    }
    .social ul li:hover {
      -webkit-transform: translate(130px, 0);
      -moz-transform: translate(130px, 0);
      -ms-transform: translate(130px, 0);
      -o-transform: translate(130px, 0);
      transform: translate(130px, 0);
      background: #A8D1E7;

    }
    .social ul li:hover a {
      color: #000;
    }
    .social ul li:hover i {
      color: white;
      background: #374785;
      -webkit-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      transform: rotate(360deg);
      -webkit-transition: all 1s;
      -moz-transition: all 1s;
      -ms-transition: all 1s;
      -o-transition: all 1s;
      transition: all 1s;
    }
    .social ul li i {
      margin-left: 10px;
      color: #000;
      background: #fff;
      padding-right: 7px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      font-size: 20px;
      background: #ffffff;
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    #footer {
      position: relative;
      bottom: 0;
      width: 100%;
    }

  </style>
</head>
<body>
  <div class= "content">
  <?php echo $navbar;?>
  </div>

  <div class="container-fluid mt-4 mb-4" >
    <div class="social">
      <ul>
        <li><a href="<?php echo base_url().'index.php/customer/hotel'?>" style="text-decoration:none;color:white;">Back to Hotels<i class="fa fa-angle-left"></i></a></li>
      </ul>
    </div>
        <?php
        $i=1;
        $star='';
        foreach ($hotel as $row){
          $id_hotel= $row['id_hotel'];
          $name = $row['name'];
          $address = $row['address'];
          $city = $row['city'];
          $image = $row['image'];
          $rating = $row['rating'];
          $longdesc = $row['longdescription'];
            ?>
            <?php for($x=0;$x<$rating;$x++){
              $star=$star.'<i class="fa fa-star" aria-hidden="true"></i>';
            }?>

            <div class="row">
              <div class="col-lg-4">
                <div class="image-details">
                  <img src="<?php echo base_url().$image;?>">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="progress-container">
                  <span class="progress-text"><?php echo $star; ?></span>
                </div>
                <div class="name"><h3 style:"color: #FF4655;"><?php echo $name; ?></h3></div>
                <div class="city"><h5><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $city; ?></h5></div>
                <p><i class="fa fa-map" aria-hidden="true"></i> <?php echo $address; ?></p>
                <div class="longdesc"><p style="font-size: 20px;"><i><?php echo $longdesc; ?></i></p></div>
              </div>
            </div>
            <br>
            <div class="container-fluid" style="background-color: #A8D1E7; padding-bottom :10px;">
              <h2 style="color: #fff; text-align: center; padding-top: 10px; font-weight: bold;">AVAILABLE ROOMS</h2>
            </div>
            <div class="container-fluid" style="background-image: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm309-adj-01.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=2204002a48c0d2dc60c1a27a4cc4fd97); background-repeat: no-repeat;   background-position: center; background-size: cover; border: 1px solid grey;  padding-bottom :10px;">
        	      <?php
        				$i=1;
        				foreach ($room as $row){
      	          $id_room= $row['id_room'];
      	          $name = $row['name'];
      	          $qty = $row['qty'];
      						$category = $row['category'];
      						$image = $row['image'];
      	          $price = number_format($row['price'],0,".",".");
      						$description = $row['description'];
                ?>

                  <div class="courses-container d-flex justify-content-center mt-3" data-aos="fade-down" data-aos-easing="linear">
                    <div class="course">
                      <div class="course-preview">
                        <img src="<?php echo base_url().$image;?>">
                      </div>
                      <div class="course-info">
                        <div class="progress-container">
                          <span class="progress-text-3">Rp. <?php echo $price; ?></span>
                        </div>
                        <div class="city"><h6><?php echo $category; ?></h6></div>
                        <div class="name"><h3><?php echo $name; ?></h3></div>

                        <p><?php echo $description; ?></p>
                        <?php echo form_open_multipart(base_url(). 'index.php/customer/roomdetails'); ?>
                        <input type="hidden" name="id_room" value="<?php echo $id_room;?>">
                        <input type="hidden" name="id_hotel" value="<?php echo $id_hotel;?>">

                        <button type="submit" class="btn" style="text-decoration: none; color: white;"><i class="far fa-info"></i> Details</button>
                        <?php echo form_close(); ?>
                      </div>
                    </div>
                  </div>
      	      <?php } ?>
          	</div>
          </div>
       <?php } ?>
	</div>
  <footer id="footer"><?php echo $footer; ?></footer>
</body>
<script>
  $(document).ready(function() {
    	$('#example').DataTable();
    });
</script>
<script>
  AOS.init();
</script>
</html>
