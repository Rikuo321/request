<?php include 'conn.php';
include 'assets/modal.php';

error_reporting(0);

if ($_SESSION["user"]) {
  echo "<script>setTimeout(function(){ window.location.href= 'dashboard';}, 0);</script>";
}else {

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
  #header .navbar-nav.navbar-right >li a {
   color: #cecece !important;
 }
 #header .navbar {
     background: #272626 !important;
 }


  </style>
  <body>

    <!-- Navbar -->
    <?php include 'assets/navbar.php' ?>
    <!-- Navbar END -->

    <!-- Form -->
    <div>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/animate.min.css" rel="stylesheet">
      <link href="css/lightbox.css" rel="stylesheet">
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/responsive.css" rel="stylesheet">
      <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" > -->
      <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/lightbox.min.js"></script>
      <script type="text/javascript" src="js/wow.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>






          <div class="container" style="margin-top: 50px; right: 0px;">
              <div id="loginbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <!-- Login -->
                <?php include 'assets/login.php';?>

                  <div class="panel panel-info" style="border: 1px solid #b0cfd2;border-radius: 5px;">
                          <div class="panel-heading" style="background-color: #d8d8d8; padding: 10px 15px; border-bottom: 1px solid transparent; border-top-right-radius: 3px; border-top-left-radius: 3px;">
                              <div class="panel-title" style="font-weight: bold;">Sign In</div>

                          </div>

                          <div style="padding-top:15px" class="panel-body" >

                              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                              <form id="loginform" method="post" class="form-horizontal" role="form" style="padding:15px">

                                  <div style="margin-bottom: 25px" class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                              <input id="login-username" type="text" class="form-control" name="username" autocomplete="off"
                                              value="<?php if (isset($fix)) {
                                                echo $_POST['username'];
                                              } ?>"
                                              placeholder="username"
                                              <?php
                                              if (isset($tombol)) {
                                                echo "disabled";
                                              }
                                              ?> >
                                          </div>

                                  <div style="margin-bottom: 25px" class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                              <input id="login-password" type="password" class="form-control" name="password" autocomplete="off"
                                              value="<?php if (isset($fix)) {
                                                echo $_POST['password'];
                                              } ?>"
                                              placeholder="password"
                                              <?php
                                              if (isset($tombol)) {
                                                echo "disabled";
                                              }
                                              ?> >
                                          </div>






                                      <div style="margin-top:10px" class="form-group">
                                          <!-- Button -->
                                          <div class="col-sm-12 controls">

                                            <?php
                                            if (isset($tombol)) { ?>
                                              <button class="btn btn-primary" type="button" disabled style="width:100%"> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" ></span> Loading... </button>
                                          <?php  } else{ ?>
                                            <input type="submit" class="btn btn-success" name='btn_login' value="Login" style="width: 100%;"></input>
                                        <?php  }
                                             ?>



                                          </div>
                                      </div>



                                      <div class="form-group">
                                          <div class="col-md-12 control">
                                              <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%;font-weight: bold;" >
                                                  Don't have an account?
                                              <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                  Sign Up Here
                                              </a>
                                              </div>
                                          </div>
                                      </div>
                                  </form>





                              </div>
                          </div>
              </div>
              <div id="signupbox" style="display:none;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                          <div class="panel panel-info" style="border: 1px solid #b0cfd2;border-radius: 5px;">
                              <div class="panel-heading" style="background-color: #d8d8d8; padding: 10px 15px; border-bottom: 1px solid transparent; border-top-right-radius: 3px; border-top-left-radius: 3px;">
                                  <div class="panel-title" style="font-weight: bold;">Sign Up</div>
                                  <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()" style="float: right; font-size: 98%; position: relative; top: -10px;color: #428bca;background: 0 0;font-weight:bold">Sign In</a></div>
                              </div>
                              <div class="panel-body" style="padding: 15px;">

                                  <form id="signupform" method="post" class="form-horizontal" role="form">

                                      <div id="signupalert" style="display:none" class="alert alert-danger">
                                          <p>Error:</p>
                                          <span></span>
                                      </div>


                                      <div class="form-group">
                                          <label for="firstname" class="col-md-3 control-label" >Username</label>
                                          <div class="col-md-9" style="max-width: 100%!important;">
                                              <input minlength="3" type="text" class="form-control" name="username_s" placeholder="Username" autocomplete="off" pattern="[^()/<>[\]\\.,*!#$%`~`'|\x22]+" title="Spesial Character tidak diperbolehkan!" required>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label for="email" class="col-md-3 control-label">Email</label>
                                          <div class="col-md-9" style="max-width: 100%!important;">
                                              <input type="email" class="form-control" name="email_s" placeholder="Email Address"  autocomplete="off" pattern="[^()/<>[\]\\,*!#$%`~`'|\x22]+" title="Spesial Character tidak diperbolehkan!" required>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label for="password" class="col-md-3 control-label">Password</label>
                                          <div class="col-md-9" style="max-width: 100%!important;">
                                              <input type="password" class="form-control" name="password_s" autocomplete="off" placeholder="Password" required>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="lastname" class="col-md-3 control-label">HP</label>
                                          <div class="col-md-9" style="max-width: 100%!important;position:initial!important">
                                              <input minlength="12" maxlength="12" type="number" class="form-control" name="hp" placeholder="HP" style="width:50%"  autocomplete="off" pattern="[^()/<>[\]\\.,*!#$%`~`'|\x22]+" title="Spesial Character tidak diperbolehkan!" required>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="lastname" class="col-md-3 control-label">Sex</label>
                                          <div class="col-md-9" style="max-width: 100%!important;" >

                                            <select name="sex" class="form-control" >
                                              <option value="Pria">Pria</option>
                                              <option value="Wanita">Wanita</option>
                                            </select>

                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="lastname" class="col-md-3 control-label">Kode Pos</label>
                                          <div class="col-md-9" style="max-width: 100%!important;position:initial!important">
                                              <input minlength="5" maxlength="7" type="number" class="form-control" name="kd_pos" placeholder="Kode Pos" style="width:75.5%;"  autocomplete="off" pattern="[^()/<>[\]\\.,*!#$%`~`'|\x22]+" title="Spesial Character tidak diperbolehkan!" required>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="lastname" class="col-md-3 control-label">Alamat</label>
                                          <div class="col-md-9" style="max-width: 100%!important;">
                                              <textarea class="form-control" name="alamat" placeholder="Alamat"  autocomplete="off" pattern="[^/<>[\]\\*!#$%`~`'|\x22]+" title="Spesial Character tidak diperbolehkan!" required></textarea>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <!-- Button -->
                                          <div class="col-md-offset-3 col-md-9">
                                              <button name="daftar" type="submit" id="btn-signup" type="button" class="btn btn-info" style="font-weight: bold;width:100%"><i class="icon-hand-right"></i> &nbsp Sign Up</button>

                                          </div>
                                      </div>

                                      <?php
                                      if (isset($_POST['daftar'])) {


                                        if (empty($_POST['username_s']) OR empty($_POST['email_s']) OR empty($_POST['password_s']) OR empty($_POST['hp']) OR empty($_POST['sex']) OR empty($_POST['kd_pos']) OR empty($_POST['alamat'])) {
                                           ?>
                                          <script type='text/javascript'>alert('Gagal!, Coba lagi');</script>
                                    <?php
                                       }else {
                                              $username_regis = $_POST['username_s'];
                                              $email = $_POST['email_s'];
                                              $password_regis = md5($_POST['password_s']);
                                              $hp = $_POST['hp'];
                                              $sex = $_POST['sex'];
                                              $kd = $_POST['kd_pos'];
                                              $alamat = $_POST['alamat'];
                                              mysqli_query($conn, "INSERT INTO `users`(`username`, `email`, `password`, `no_hp`, `sex`, `kode_pos`, `alamat`,`role`)
                                              VALUES ('$username_regis','$email','$password_regis','$hp','$sex','$kd','$alamat','user')"); ?>
                                              <script type='text/javascript'>alert('Sukses!, Silahkan Login..');</script>
                                    <?php
                                     }

                                      }
                                       ?>





                                  </form>
                               </div>
                          </div>




               </div>
          </div>

    </div>
    <!-- Form END -->

  </body>
</html>
