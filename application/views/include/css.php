<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesomepro/css/all.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesomepro/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="icon" href="<?php echo base_url();?>assets/picture/Logo.png">
<style>
    .container{
      color-background:#0F1923;
      border-radius: 56px;
    }
    .input-container {
       display: flex;
       width: 100%;
       margin-bottom: 15px;
       color-background: #FBB80E;
       radius-border: 30px;
       color: #111111;
     }
    .icon {
      padding:10px;
      background: #342628;
      color: white;
      max-width: 30px;
      text-align: center;
      font-size: 12px;
     }
     .navbar-brand img {
       width:80px;
     }
     /* .navbar-brand {
       padding: 2px;
     } */


  .background{
    width: 100%;
    height: 100vh;
    background-image : url(https://cf.bstatic.com/images/hotel/max1024x768/141/141260808.jpg);
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
    z-index: 1;
    opacity: 90%;
}
.content{
    color: white;
    text-align: center;
}

.btnBook{
    color: #fff;
    background-color: #A8D0E6;
    /* font-family: 'Comfortaa', cursive; */
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 10px 20px;
    border: none;
    border-radius: 15px;
    overflow: hidden;
    position: relative;
    transition: all 0.3s cubic-bezier(0.02, 0.01, 0.47, 1);
}
.btnBook:hover{
    color: #fff;
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    animation: rotate 0.7s ease-in-out both;
}
.btnBook:before,
.btnBook:after{
    content: '';
    background: #fff;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    opacity: 0;
    transform: translate(100%, -25%) translate3d(0, 0, 0);
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
    transition: all 0.15s cubic-bezier(0.02, 0.01, 0.47, 1);
}
.btnBook:hover:before,
.btnBook:hover:after{
    opacity: 0.15;
}
.btnBook:hover:before{ transform: translate3d(50%, 0, 0) scale(0.9); }
.btnBook:hover:after{ transform: translate(50%, 0) scale(1.1); }
@keyframes rotate{
    0%{ transform: rotate(0deg); }
    25%{ transform: rotate(3deg); }
    50%{ transform: rotate(-3deg); }
    75%{ transform: rotate(1deg); }
    100%{ transform: rotate(0deg); }
}
@media only screen and (max-width: 767px){
    .btnBook{ margin-bottom: 20px; }
}
</style>
