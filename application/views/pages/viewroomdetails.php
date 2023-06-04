<!DOCTYPE html>
<html>
<head>
  <?php echo $js;
	echo $css;?>
  <title>Room Details</title>
  <style>
  body {
    position: relative;
    min-height: 100vh;
  }
  .city {
    opacity: 0.6;
    margin: 0;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  .name h2 {
    /* font-weight: bold; */
    letter-spacing: 1px;
    margin: 10px 0;
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

  .image-details img{
    width:400px;
    height:400px;
  }

  @media screen and (max-width: 650px){
    .name h3{
      font-size:20px;
    }
    .city h6{
      font-size:10px;
    }
  }

  @media screen and (max-width: 540px){
    .name h3{
      font-size:18px;
    }
    .city h6{
      font-size:10px;
    }
  }


  @media screen and (max-width: 361px){
    .image-details img{
      text-align: center;
      width: 320px;
      height: 320px;
    }
  }
  </style>

  <script>

  		$(document).ready(function() {
  			$('#book').on('click','.btnInput',function(e){
          <?php if($this->session->userdata('id_customer')) { ?>
  				let editModal=$('#formEdit');
  				const id_hotel = $(this).data('id_hotel');
  			  const id_room = $(this).data('id_room');
  				const price = $(this).data('price');
          const category = $(this).data('category');

          $('#formEdit #id_hotel').val(id_hotel);
  				$('#formEdit #id_room').val(id_room);
  				$('#formEdit #price').val(price);
          $('#formEdit #category').val(category);
  				editModal.modal('show');

          <?php }else{ ?>
          window.location = "<?php echo base_url().'index.php/login'?>"
          <?php }?>

  			})

  		});

  	</script>

</head>
<body>
  <div class= "content">
  <?php echo $navbar;?>
  </div>
  <div class="container-fluid mt-4 mb-4" >
      <?php
      $i=1;
      foreach ($room as $row){
          $id_room= $row['id_room'];
          $id_hotel= $row['id_hotel'];
          $name = $row['name'];
          $qty = $row['qty'];
          $category = $row['category'];
          $image = $row['image'];
          $price0 = $row['price'];
          $price = number_format($row['price'],0,".",".");
          $description = $row['description'];
        ?>
        <div class="social">
          <ul>
            <li><a href="<?php echo base_url().'index.php/customer/hoteldetails/'.$id_hotel;?>" style="text-decoration:none;color:white;">Back to Rooms<i class="fa fa-angle-left"></i></a></li>
          </ul>
        </div>
    <div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Book Room</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
            <?php echo form_open_multipart(base_url(). 'index.php/customer/check_booking'); ?>
            <input type ="hidden" name="id_room" id="id_room">
            <input type ="hidden" name="id_hotel" id="id_hotel">
            <input type ="hidden" name="id_customer" id="id_customer" value="<?php echo $this->session->userdata('id_customer');?>">
            <input type ="hidden" name="category" id="category">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">First Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="fname" >
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Last Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="lname" >
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Phone Number : </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="phone">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Email : </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="email">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Check In :</label>
              <div class="col-sm-8">
                <input class="datepicker" name="checkin" id="checkin" type="text" placeholder="" />
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Check Out :</label>
              <div class="col-sm-8">
                <input class="datepicker" name="checkout" id="checkout" type="text" placeholder="" />
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Duration :</label>
              <div class="col-sm-8">
                <input name="howManyNights" id="howManyNights" type="number" value="1" disabled>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Rooms Qty :</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="qty" name="qty" onchange="myFunction()" min="1" value="1">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Total Price : </label>
              <div class="col-sm-8">
                <input type ="number" name="price" class="form-control" id="price" disabled>
                <input type ="hidden" name="pricefinal" class="form-control" id="pricefinal">
              </div>
            </div>

          </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;Book Now</button>
              <button type="cancel" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
            </div>
            <?php echo form_close(); ?>
					</div>
				</div>
			</div>


        <div class="row">
          <div class="col-lg-4">
            <div class="image-details">
              <img src="<?php echo base_url().$image;?>" >
            </div>
          </div>
          <div class="col-lg-8">
            <div class="city"><h5><?php echo $category; ?></h5></div>
            <div class="name"><h2><?php echo $name; ?></h2></div>
            <hr>
            <h3 style ="letter-spacing: 1px;">Room Amenities</h3><br>
            <!-- <h4><?php echo $description; ?></h4> -->
            <div class="row">
              <div class="col-md-4">
                <p><i class="fal fa-wifi"></i> WiFi</p>
                <p><i class="fal fa-utensils"></i> Breakfast</p>
                <p><i class="fal fa-shower"></i> Shower</p>
              </div>
              <div class="col-md-4">
                <p><i class="fal fa-air-conditioner"></i> AC</p>
                <p><i class="fal fa-tv"></i> TV</p>
                <p><i class="fal fa-lock"></i> Safe</p>
              </div>
              <div class="col-md-4">
                <p><i class="fal fa-user-clock"></i> 24/7 Services</p>
                <p><i class="fal fa-swimming-pool"></i> Swimming Pool</p>
                <p><i class="fal fa-parking-circle"></i> Parking</p>
              </div>
            </div>
            <hr>
            <div class="col-md-12" style="background-color: #e4f7e4; padding-top: 10px; padding-bottom: 10px;">
              <div class="row">
                <div class="col-md-6">
                  <h5 style="display: inline;">Rp. <?php echo $price; ?></h5>
                  <p style="display: inline;">/ night</p><br><br>
                </div>
                <div class="col-md-6 my-auto" id="book">
                  <!-- <button class="btn btn-primary" type="submit">Book Now</button> -->
                  	<a href="#" class="btn btn-info btn-sm btnInput" data-id_hotel="<?php echo $id_hotel;?>"  data-id_room="<?php echo $id_room;?>" data-category="<?php echo $category;?>"data-price="<?php echo $price0; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Book Now</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
  </div>
  <footer id="footer"><?php echo $footer; ?></footer>
</body>

<script>

    $(function () {
      var FLATPICKER_CHECKOUT = flatpickr('#checkout', {
        altInput: true,
        dateFormat: "Y-m-d",
        defaultDate: "today",
        onChange: function (dateStr, dateObj) {
          var start = new Date($('#checkin').val());
          var end   = new Date($('#checkout').val());
          days  = (end - start) / 1000 / 60 / 60 / 24;
          if(days==0){
            $('#howManyNights').val("1");
            let priceqty = '<?php echo $price0;?>';
            let qty=$('#formEdit #qty').val();
            $('#formEdit #price').val(priceqty*qty*days);
            $('#formEdit #pricefinal').val(priceqty*qty*days);
          }
          if(days > 0) {
            $('#howManyNights').val(days);
            let priceqty = '<?php echo $price0;?>';
            let qty=$('#formEdit #qty').val();
            $('#formEdit #price').val(priceqty*qty*days);
            $('#formEdit #pricefinal').val(priceqty*qty*days);

            // $('#formEdit #checkin').val(start);
            // $('#formEdit #checkout').val(end);

          }
        }
      });

      $("#checkin").flatpickr(
        {
          altInput: true,
          dateFormat: "Y-m-d",
          minDate: "today",
          defaultDate: "today",

          onChange: function (dateStr, dateObj) {
            FLATPICKER_CHECKOUT.set("minDate", dateObj);
            FLATPICKER_CHECKOUT.setDate(dateObj);

          }
        });
    });

    function myFunction() {
        let priceqty = '<?php echo $price0;?>';
        let qty=$('#formEdit #qty').val();
        let days= $('#formEdit #howManyNights').val();
        $('#formEdit #price').val(priceqty*qty*days);
        $('#formEdit #pricefinal').val(priceqty*qty*days);
    }



</script>

</html>
