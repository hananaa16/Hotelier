<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
	<?php echo $js;
	echo $css;?>
  <style>
  body{
    background-image: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v944-bb-16.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=b204c8b2d8b3e450514bdfcffad89cc3);
    min-height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0;
    text-align: left;
    color: #525f7f;
    background-color: #f8f9fe;
    position: relative;
  }

  img {
  vertical-align: middle;
  border-style: none;
  }

  button {
  text-transform: none;
  }

  button,
  html [type='button'],
  [type='reset'],
  [type='submit'] {
  -webkit-appearance: button;
  }

  button::-moz-focus-inner,
  [type='button']::-moz-focus-inner,
  [type='reset']::-moz-focus-inner,
  [type='submit']::-moz-focus-inner {
  padding: 0;
  border-style: none;
  }

  input[type='radio'],
  input[type='checkbox'] {
  box-sizing: border-box;
  padding: 0;
  }

  input[type='date'],
  input[type='time'],
  input[type='datetime-local'],
  input[type='month'] {
  -webkit-appearance: listbox;
  }

  textarea {
  overflow: auto;
  resize: vertical;
  }

  legend {
  font-size: 1.5rem;
  line-height: inherit;
  display: block;
  width: 100%;
  max-width: 100%;
  margin-bottom: .5rem;
  padding: 0;
  white-space: normal;
  color: inherit;
  }

  progress {
  vertical-align: baseline;
  }

  [type='number']::-webkit-inner-spin-button,
  [type='number']::-webkit-outer-spin-button {
  height: auto;
  }

  [type='search'] {
  outline-offset: -2px;
  -webkit-appearance: none;
  }

  [type='search']::-webkit-search-cancel-button,
  [type='search']::-webkit-search-decoration {
  -webkit-appearance: none;
  }

  ::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
  }

  [hidden] {
  display: none !important;
  }

  hr {
  margin-top: 2rem;
  margin-bottom: 2rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, .1);
  }

  code {
  font-size: 87.5%;
  word-break: break-word;
  color: #f3a4b5;
  }

  a>code {
  color: inherit;
  }

  .form-control {
  font-size: 1rem;
  line-height: 1.5;
  display: block;
  width: 100%;
  height: calc(2.75rem + 2px);
  padding: .625rem .75rem;
  transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
  color: #8898aa;
  border: 1px solid #cad1d7;
  border-radius: .375rem;
  background-color: #fff;
  background-clip: padding-box;
  box-shadow: none;
  }

  .modal-body .form-control{
    color:black;
  }

  .modal-body .form-control:disabled{
    color: #8898aa;

  }

  .modal-body .form-control:focus{
    color: black;

  }
  @media screen and (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
  }

  .form-control::-ms-expand {
  border: 0;
  background-color: transparent;
  }

  .form-control:focus {
  color: #8898aa;
  border-color: rgba(50, 151, 211, .25);
  outline: 0;
  background-color: #fff;
  box-shadow: none, none;
  }

  .form-control:-ms-input-placeholder {
  opacity: 1;
  color: #adb5bd;
  }

  .form-control::-ms-input-placeholder {
  opacity: 1;
  color: #adb5bd;
  }

  .form-control::placeholder {
  opacity: 1;
  color: #adb5bd;
  }

  .form-control:disabled,
  .form-control[readonly] {
  opacity: 1;
  background-color: white;
  }

  textarea.form-control {
  height: auto;
  }

  .form-group {
  margin-bottom: 1.5rem;
  }

  .form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
  }

  @media (min-width: 576px) {
  .form-inline label {
    display: flex;
    margin-bottom: 0;
    align-items: center;
    justify-content: center;
  }

  .form-inline .form-group {
    display: flex;
    margin-bottom: 0;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
  }

  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }

  .form-inline .input-group {
    width: auto;
  }
  }

  .btn {
  font-size: 1rem;
  font-weight: 600;
  line-height: 1.5;
  display: inline-block;
  padding: .625rem 1.25rem;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  text-align: center;
  vertical-align: middle;
  white-space: nowrap;
  border: 1px solid transparent;
  border-radius: .375rem;
  }

  @media screen and (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
  }

  .btn:hover,
  .btn:focus {
  text-decoration: none;
  }

  .btn:focus {
  outline: 0;
  box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
  }

  .btn:disabled {
  opacity: .65;
  box-shadow: none;
  }

  .btn:not(:disabled):not(.disabled) {
  cursor: pointer;
  }

  .btn:not(:disabled):not(.disabled):active {
  box-shadow: none;
  }

  .btn:not(:disabled):not(.disabled):active:focus {
  box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
  }

  .btn-primary {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
  }

  .btn-primary:hover {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
  }

  .btn-primary:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(94, 114, 228, .5);
  }

  .btn-primary:disabled {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
  }

  .btn-primary:not(:disabled):not(.disabled):active {
  color: #fff;
  border-color: #5e72e4;
  background-color: #324cdd;
  }

  .btn-primary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none, 0 0 0 0 rgba(94, 114, 228, .5);
  }

  .btn-info {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
  }

  .btn-info:hover {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
  }

  .btn-info:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(17, 205, 239, .5);
  }

  .btn-info:disabled {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
  }

  .btn-info:not(:disabled):not(.disabled):active {
  color: #fff;
  border-color: #11cdef;
  background-color: #0da5c0;
  }

  .btn-info:not(:disabled):not(.disabled):active:focus {
  box-shadow: none, 0 0 0 0 rgba(17, 205, 239, .5);
  }

  .btn-default {
  color: #fff;
  border-color: #172b4d;
  background-color: #172b4d;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
  }

  .btn-default:hover {
  color: #fff;
  border-color: #172b4d;
  background-color: #172b4d;
  }

  .btn-default:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(23, 43, 77, .5);
  }

  .btn-default:disabled {
  color: #fff;
  border-color: #172b4d;
  background-color: #172b4d;
  }

  .btn-default:not(:disabled):not(.disabled):active {
  color: #fff;
  border-color: #172b4d;
  background-color: #0b1526;
  }

  .btn-default:not(:disabled):not(.disabled):active:focus {
  box-shadow: none, 0 0 0 0 rgba(23, 43, 77, .5);
  }

  .btn-sm {
  font-size: .875rem;
  line-height: 1.5;
  padding: .25rem .5rem;
  border-radius: .375rem;
  }

  .card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  border: 1px solid rgba(0, 0, 0, .05);
  border-radius: .375rem;
  background-color: #fff;
  background-clip: border-box;
  }

  .card>hr {
  margin-right: 0;
  margin-left: 0;
  }

  .card-body {
  padding: 1.5rem;
  flex: 1 1 auto;
  }

  .card-header {
  margin-bottom: 0;
  padding: 1.25rem 1.5rem;
  border-bottom: 1px solid rgba(0, 0, 0, .05);
  background-color: #fff;
  }

  .card-header:first-child {
  border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
  }

  @keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }

  to {
    background-position: 0 0;
  }
  }

  .progress {
  font-size: .75rem;
  display: flex;
  overflow: hidden;
  height: 1rem;
  border-radius: .375rem;
  background-color: #e9ecef;
  box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
  }

  .bg-secondary {
  background-color: #f7fafc !important;
  }

  figcaption,
  main {
  display: block;
  }

  main {
  overflow: hidden;
  }

  .opacity-8 {
  opacity: .8 !important;
  }

  .opacity-8 {
  opacity: .9 !important;
  }

  .center {
  left: 50%;
  transform: translateX(-50%);
  }

  [class*='shadow'] {
  transition: all .15s ease;
  }

  .btn {
  font-size: .875rem;
  position: relative;
  transition: all .15s ease;
  letter-spacing: .025em;
  text-transform: none;
  will-change: transform;
  }

  .btn:hover {
  transform: translateY(-1px);
  box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
  }

  .btn:not(:last-child) {
  margin-right: .5rem;
  }

  .btn i:not(:first-child) {
  margin-left: .5rem;
  }

  .btn i:not(:last-child) {
  margin-right: .5rem;
  }

  .input-group .btn {
  margin-right: 0;
  transform: translateY(0);
  }

  .btn-sm {
  font-size: .75rem;
  }

  [class*='btn-outline-'] {
  border-width: 1px;
  }

  .card-profile-image {
  position: relative;
  }

  .card-profile-image img {
  position: absolute;
  left: 50%;
  max-width: 180px;
  transition: all .15s ease;
  transform: translate(-50%, -30%);
  border-radius: .375rem;
  }

  .card-profile-image img:hover {
  transform: translate(-50%, -33%);
  }

  .card-profile-stats {
  padding: 1rem 0;
  }

  .card-profile-stats>div {
  margin-right: 1rem;
  padding: .875rem;
  text-align: center;
  }

  .card-profile-stats>div:last-child {
  margin-right: 0;
  }

  .card-profile-stats>div .heading {
  font-size: 1.1rem;
  font-weight: bold;
  display: block;
  }

  .card-profile-stats>div .description {
  font-size: .875rem;
  color: #adb5bd;
  }

  .main-content {
  position: relative;
  }

  .form-control-label {
  font-size: .875rem;
  font-weight: 600;
  color: #525f7f;
  }

  .form-control {
  font-size: .875rem;
  }

  .form-control:focus:-ms-input-placeholder {
  color: #adb5bd;
  }

  .form-control:focus::-ms-input-placeholder {
  color: #adb5bd;
  }

  .form-control:focus::placeholder {
  color: #adb5bd;
  }

  .form-control-alternative {
    background-color: white;
    transition: box-shadow .15s ease;
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
  }

  .form-control-alternative:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
  }

  .focused .input-group-alternative {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
  }

  .focused .input-group {
  box-shadow: none;
  }

  .focused .input-group-text {
  color: #8898aa;
  border-color: rgba(50, 151, 211, .25);
  background-color: #fff;
  }

  .focused .form-control {
  border-color: rgba(50, 151, 211, .25);
  }

  .header {
  position: relative;
  }

  .focused .input-group-alternative {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
  }

  .focused .input-group {
  box-shadow: none;
  }

  .focused .input-group-text {
  color: #8898aa;
  border-color: rgba(50, 151, 211, .25);
  background-color: #fff;
  }

  .focused .form-control {
  border-color: rgba(50, 151, 211, .25);
  }

  .mask {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all .15s ease;
  }

  .progress {
  overflow: hidden;
  height: 8px;
  margin-bottom: 1rem;
  border-radius: .25rem;
  background-color: #e9ecef;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
  }

  .description {
  font-size: .875rem;
  }

  .heading {
  font-size: .95rem;
  font-weight: 600;
  letter-spacing: .025em;
  text-transform: uppercase;
  }

  .heading-small {
  font-size: .75rem;
  padding-top: .25rem;
  padding-bottom: .25rem;
  letter-spacing: .04em;
  text-transform: uppercase;
  }

  .display-2 span {
  font-weight: 300;
  display: block;
  }

  @media (max-width: 768px) {
  .btn {
    margin-bottom: 10px;
  }
  }

  #footer {
    position: relative;
    bottom: 0;
    width: 100%;
  }
  </style>
  <script>
  $(document).ready(function() {
      $('#btnEdit').on('click',function(e){
      let editModal=$('#formEdit');
      const id_customer = $(this).data('id_customer');
      const firstname = $(this).data('firstname');
      const lastname = $(this).data('lastname');
      const birthdate = $(this).data('birthdate');
      const phonenumber = $(this).data('phonenumber');
      const email = $(this).data('email');
      const email0 = $(this).data('email');

       $('#formEdit #firstname').val(firstname);
       $('#formEdit #lastname').val(lastname);
       $('#formEdit #birthdate').val(birthdate);
       $('#formEdit #phonenumber').val(phonenumber);
       $('#formEdit #email').val(email);
        $('#formEdit #email0').val(email0);
       $('#formEdit #id_customer').val(id_customer);
      editModal.modal('show');
    })
  });



  </script>
</head>
<body>
  <div class="content">
    <?php echo $navbar; ?>
  </div>

  <div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart(base_url(). 'index.php/customer/edit_customer'); ?>
          <input type="hidden" name="id_customer" id="id_customer">
          <div class="form-group">
            <label>Profile Image</label>
            <div class="input-container" style="color-background: #FBB80E; border-radius: 47%;">
              <input type="file" name="image" accept="image/*">
            </div>
            </div>
          <div class="form-group">
            <label>Email</label>
            <div class="input-container" style="color-background: #FBB80E; border-radius: 47%;">
              <i class="fa fa-envelope icon" aria-hidden="true"></i>
              <input type="hidden" name="email" id="email" class="form-control" placeholder="Email">
              <input type="text" name="email0" id="email0"class="form-control" placeholder="Email" disabled>
            </div>
            <p><?php echo form_error('email'); ?></p>
          </div>
          <div class="form-group">
            <label>First Name</label>
            <div class="input-container">
              <i class="fa fa-user-o icon"></i><input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
            </div>
            <p><?php echo form_error('firstname'); ?></p>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <div class="input-container">
              <i class="fa fa-user-o icon"></i><input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
            </div>
            <p><?php echo form_error('lastname'); ?></p>
          </div>
          <div class="form-group">
            <label>Birth Date</label>
            <div class="input-container">
              <i class="fa fa-calendar icon"></i><input type="date" name="birthdate" id="birthdate" class="form-control" placeholder="Birth Date">
            </div>
            <p><?php echo form_error('birthdate'); ?></p>
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <div class="input-container">
              <i class="fa fa-phone icon"></i><div class="input-group-prepend"><div class="input-group-text">+62</div></div><input type="text" name="phonenumber" id="phonenumber"class="form-control" placeholder="Phone Number">
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
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="fa fa-upload" aria-hidden="true"></i> Update</button>
          <button type="cancel" data-dismiss="modal"class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button></div>
        <?php echo form_close(); ?>
        </div>
      </div>
    </div>



  <div class="main-content">
    <!-- Header -->
    <div class="header pb-4 pt-5 d-flex align-items-center" style="min-height: 200px;">
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 m-auto order-xl-2 mb-5 mb-xl-0">
          <div class="card bg-secondary shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?php echo base_url().$this->session->userdata('image');?>" class="rounded-circle" style="width: 100px; height: 100px;">
                  </a>
                </div>
              </div>
            </div>
            <?php foreach($customer as $row){
              $id_customer= $row['id_customer'];
  						$fname= $row['first_name'];
  	          $lname = $row['last_name'];
  	          $no_telp = $row['no_telp'];
  						$email = $row['email'];
              $password = $row['password'];
  						$image = $row['image'];
              $birthdate = $row['birthdate'];
              ?>
            <div class="card-header bg-white border-0">
              <div class="card-body pt-5">

                <div class="text-center">
                  <h3 class="pt-4" style="font-weight: bold;">
                    <?php echo $fname." ".$lname; ?>
                  </h3>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#" id="btnEdit" class="btn btn-sm btn-primary" data-firstname="<?php echo $fname;?>" data-lastname="<?php echo $lname;?>" data-id_customer="<?php echo $id_customer;?>"
                    data-phonenumber="<?php echo $no_telp?>" data-email="<?php echo $email;?>" data-birthdate="<?php echo $birthdate;?>"

                  >Edit Profile</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User Information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label">First Name</label>
                        <input type="text" class="form-control form-control-alternative" value="<?php echo $fname; ?>" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label">Last Name</label>
                        <input type="text" class="form-control form-control-alternative" value="<?php echo $lname; ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <label class="form-control-label">Birth Date</label>
                      <input type="date" class="form-control form-control-alternative" value="<?php echo $birthdate; ?>" disabled>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Private Details</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group focused">
                        <label class="form-control-label">Email Address</label>
                        <input type="email" class="form-control form-control-alternative" value="<?php echo $email; ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group focused">
                        <label class="form-control-label">Phone Number</label>
                        <input type="text" class="form-control form-control-alternative" value="<?php echo "+62".$no_telp; ?>" disabled>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
              </form>
              <div class="justify-content-center text-center">
                <button class="btn btn-danger"><a href="<?php echo base_url() ?>index.php/home/logout" style="text-decoration: none; color: white;">Sign Out</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>
</body>
<br>
<footer id="footer"><?php echo $footer; ?></footer>

</html>
