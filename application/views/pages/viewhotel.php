<!DOCTYPE html>
<html>
<head>
  <?php echo $js;
	echo $css;?>
  <style>
  body{
    background-image: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v944-bb-16.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=b204c8b2d8b3e450514bdfcffad89cc3);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
	width: 800px;
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
	font-size: 16px;
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
.fa-star{
  color:#ffd11a;
}
.course img{
  height:220px;
  width:220px;
}

#footer {
  position: relative;
  bottom: 0;
  width: 100%;
}

@media screen and (max-width: 541px){
  .course {
    margin: 0px;
    max-height: 220px;
  }
  .course img{
    height:220px;
    width:160px;
  }
  .name h3{
    font-size:16px;
  }
  .city h6{
    font-size:12px;
  }
  .course-info{
    padding: 15px;
    max-height: 220px;
  }
  .progress-text {
    font-size: 12px;
  }
  .shortdesc {
    font-size: 12px;
  }
  .btn {
    font-size: 14px;
  	padding: 8px 12px;
  }
}


	@media screen and (max-width: 361px){
    .course {
    	margin: 0px;
      max-height: 220px;
    }
    .course img{
      height:220px;
      width:120px;
    }
    .name h3{
      font-size:15px;
    }
    .city h6{
      font-size:8px;
    }
    .course-info{
      padding: 5px;
      max-height: 220px;
    }
    .progress-text {
      font-size: 12px;
    }
    .shortdesc {
      font-size: 12px;
    }
    .btn {
      padding : 8px;
      font-size: 12px;
    }
  }

  </style>

  <title>Hotel List</title>

</head>
<body>
  <!-- <div class="background"> -->
  <div class="content">
    <?php echo $navbar; ?>
  </div>
  <?php echo $status;?>
<!-- </div> -->

  <!-- //navigasi category product -->
<!-- <div class="container"> -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-9">
      <?php foreach ($hotel as $row) {
        $star='';
        $id_hotel= $row['id_hotel'];
        $name = $row['name'];
        $address = $row['address'];
        $city = $row['city'];
        $image = $row['image'];
        $rating = $row['rating'];
        $shortdesc = $row['shortdescription'];
      ?>
      <?php for($x=0;$x<$rating;$x++){
        $star=$star.'<i class="fa fa-star" aria-hidden="true"></i>';
      }?>

        <div class="courses-container mt-3" data-aos="fade-down" data-aos-easing="linear">
          <div class="course">
            <div class="course-preview">
              <img src="<?php echo base_url().$image;?>">
            </div>
            <div class="course-info">
              <div class="progress-container">
                <span class="progress-text"><?php echo $star; ?></span>
              </div>
              <div class="city"><h6><?php echo $city; ?></h6></div>
              <div class="name"><h3><?php echo $name; ?></h3></div>
              <div class="shortdesc"><?php echo $shortdesc;?></div><br>
              <button class="btn"><a href="<?php echo base_url().'index.php/customer/hoteldetails/'.$id_hotel;?>" style="text-decoration: none; color: white;">View Rooms</a></button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="col-md-3">
      <div class="card mt-3 mb-3">
      <?php echo form_open_multipart(base_url(). 'index.php/customer/hotelfilter'); ?>
      <h4>Find Your Hotel</h4>
      <div>
        <label><i class="fa fa-map-marker" aria-hidden="true"></i> Destination</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Search location"><br>
      </div>
      <div>
        <label><i class="fa fa-money" aria-hidden="true"></i> Price Range </label>
        <input type="text" id="rangePrimary" name="rangePrimary" value="" /><br>
        <input type="hidden" name="min" id="min">
        <input type="hidden" name="max" id="max">
      </div>
      <label><i class="fa fa-star" aria-hidden="true"></i> Rating </label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="rating" id="1" value="1" checked>
          <label class="form-check-label" ><i class="fa fa-star" aria-hidden="true"></i></label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="rating" id="2" value="2">
          <label class="form-check-label"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="rating" id="3" value="3">
          <label class="form-check-label"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="rating" id="4" value="4">
          <label class="form-check-label"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="rating" id="5" value="5">
          <label class="form-check-label"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></label>
        </div>
        <div class="mt-2 mb-2 text-center">
        	<button type="submit" class="btn btn-light" style="background-color: #A8D1E7; color: white; border-radius: 20px;"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
        </div>
    <?php echo form_close(); ?>
    </div>


      <!-- <form method="post" action="/action_page_post.php"> -->
        <!-- <div data-role="rangeslider">
          <label for="price-min">Price:</label>
          <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
          <label for="price-max">Price:</label>
          <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
        </div>
          <input type="submit" data-inline="true" value="Submit"> -->



    </div>
  </div>
</div>
<footer id="footer"><?php echo $footer; ?></footer>
</body>
<script>
  // $(document).ready(function() {
  //   	$('#example').DataTable();
  //   });
  // $(".js-range-slider").ionRangeSlider({
  //       type: "double",
  //       min: 0,
  //       max: 1000,
  //       from: 200,
  //       to: 500,
  //       grid: true
  //   });
    $("#rangePrimary").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 2000000,
        from: 500000,
        to: 1200000,
        prefix: "Rp. "
    });
    $("#rangePrimary").on("change", function () {
      var $this = $(this),
          value = $this.prop("value").split(";");
          var minPrice = value[0];
          var maxPrice = value[1];
          $('.card #min').val(parseInt(minPrice));
 				  $('.card #max').val(parseInt(maxPrice));

          // $("#priceRangeSelected").text("Lower Price Range = Rp. " + minPrice + " , Upper Price Range = £" + maxPrice);
        });
	</script>
  <script>
    AOS.init();
  </script>

</html>
