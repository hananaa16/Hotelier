<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
	<?php echo $js;
	echo $css;?>
  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    position: relative;
  }

  html {
    box-sizing: border-box;
  }

  *, *:before, *:after {
    box-sizing: inherit;
  }


  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
    min-height: 100vh;
  }

  /* .container {
    /*padding: 0 16px;*/
  }

  .container::after, .row::after {
    content: "";
    clear: both;
    /*display: table;*/
  }

  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  } */

  .button:hover {
    background-color: #555;
  }
  .card{
    background-color: #F7E9A0;
    padding-bottom: 20px;
    padding-top: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
    color: #24305B;
    height: 450px;

  }

  @media screen and (max-width: 361px) {
    .card {
      height: 490px;
    }
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
    <?php echo $navbar; ?>
  </div>
  <div class="about-section">
    <h1 style="font-size: 40px; font-weight: bold; display:inline;">About </h1>
    <h1 style="font-size: 40px; font-weight: bold; color:#F7E9A0; display:inline;"> Us</h1>
    <p class="pt-2"style="text-align:center;">A guest is a jewel on the cushion of hospitality</p>
    <br>
    <br>
      <div class="container-fluid">
        <div class="row">
          <div class="column col-md-3 mb-3 text-center">
            <div class="card pt-4 pb-4">
              <div class="text-center pb-2">
                <img src="<?php echo base_url().'assets/picture/denden.png';?>" style="width:200px; height:200px; border-radius: 50%;">
              </div>
              <div class="container" style="line-height:0.75em">
                <h4 style="font-weight: bold;">Anastasia Denisha</h4>
                <p style="font-weight: bold; color: #006cff">Front End Developer</p>
                <p class="title">00000034981</p>
                <p class="pl-4 pr-4"style="line-height:1em;"><i>"When we do the best we can, we never know what miracle is wrought in our life."</i></p>
                <a href="https://www.instagram.com/denisha26/?hl=id" target="_blank"><i class="fa fa-instagram" aria-hidden="true"> </i> denisha26</a>
              </div>
            </div>
          </div>

          <div class="column col-md-3 mb-3" style="text-align: center;">
            <div class="card p-4">
              <div class="text-center pb-2">
                <img src="<?php echo base_url().'assets/picture/Hanhan.png';?>" style="width:200px; height:200px; border-radius: 50%;">
              </div>
              <div class="container" style="line-height:0.75em">
                <h4 style="font-weight: bold;">Hana Agatha</h4>
                <p style="font-weight: bold; color: #006cff">Back End Developer</p>
                <p class="title">00000035764</p>
                <p style="line-height:1em;"><i>"Life is like a coin. You can spend it any way you wish, but you only spend it once."</i></p>
                <a href="https://www.instagram.com/h_agatha/?hl=id" target="_blank"><i class="fa fa-instagram" aria-hidden="true"> </i> h_agatha</a>
              </div>
            </div>
          </div>

          <div class="column col-md-3 mb-3" style="text-align: center;">
            <div class="card">
              <div class="text-center pb-2">
                <img src="<?php echo base_url().'assets/picture/Renren.png';?>" style="width:200px; height:200px; border-radius: 50%;">
              </div>
              <div class="container" style="line-height:0.75em">
                <h4 style="font-weight: bold;">Tania Irena</h4>
                <p style="font-weight: bold; color: #006cff">Front End Developer</p>
                <p class="title">00000035961</p>
                <p style="line-height:1em;"><i>"Life is ten percent what happens to you and ninety percent how you respond to it. ehe ~"</i></p>
                <a href="https://www.instagram.com/tanikohiranuma/?hl=id" target="_blank"><i class="fa fa-instagram" aria-hidden="true"> </i> tanikohiranuma</a>
              </div>
            </div>
          </div>

          <div class="column col-md-3 mb-3" style="text-align: center;">
            <div class="card">
              <div class="text-center pb-2">
                <img src="<?php echo base_url().'assets/picture/Vivi.png';?>" style="width:200px; height:200px; border-radius: 50%;">
              </div>
              <div class="container" style="line-height:0.75em">
                <h4 style="font-weight: bold;">Violy Lislianty</h4>
                <p style= "font-weight: bold; color: #006cff;">UI Designer</p>
                <p class="title">00000036447</p>
                <p style="line-height:1em;"><i>"You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose."</i></p>
                <a href="https://www.instagram.com/https.violy/?hl=id" target="_blank"><i class="fa fa-instagram" aria-hidden="true"> </i> https.violy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer"><?php echo $footer; ?></footer>
</body>
</html>
