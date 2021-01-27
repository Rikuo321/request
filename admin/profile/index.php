<?php
include '../../conn.php';
include 'navbar.php';
include 'action.php';


$id = $_GET['request'];
$query = mysqli_query($conn,"SELECT * FROM `users` WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/lightbox.css" rel="stylesheet">
   <link href="../../css/main.css" rel="stylesheet">
   <link href="../../css/responsive.css" rel="stylesheet">

   <link rel="shortcut icon" href="../../images/ico/go.png">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">

   <script type="text/javascript" src="../../js/jquery.js"></script>
   <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../../js/lightbox.min.js"></script>
   <script type="text/javascript" src="../../js/wow.min.js"></script>
   <script type="text/javascript" src="../../js/main.js"></script>
  </head>
  <style>
  #header .navbar-nav.navbar-right >li a {
   color: #cecece !important;
  }
   #header .navbar {
       background: #272626 !important;
   }

   body{

       background:#f5f5f5;
   }
   /**
    * Panels
    */
   /*** General styles ***/
   .panel {
     margin-left: 300px;
     box-shadow: none;
   }
   .panel-heading {
     border-bottom: 0;
   }
   .panel-title {
     font-size: 17px;
   }
   .panel-title > small {
     font-size: .75em;
     color: #999999;
   }
   .panel-body *:first-child {
     margin-top: 0;
   }
   .panel-footer {
     border-top: 0;
   }

   .panel-default > .panel-heading {
       color: #333333;
       background-color: transparent;
       border-color: rgba(0, 0, 0, 0.07);
   }

   form label {
       color: #999999;
       font-weight: 400;
   }

   .form-horizontal .form-group {
     margin-left: -15px;
     margin-right: -15px;
   }
   @media (min-width: 768px) {
     .form-horizontal .control-label {
       text-align: right;
       margin-bottom: 0;
       padding-top: 7px;
     }
   }

   .profile__contact-info-icon {
       float: left;
       font-size: 18px;
       color: #999999;
   }
   .profile__contact-info-body {
       overflow: hidden;
       padding-left: 20px;
       color: #999999;
   }
   .profile-avatar {
     width: 200px;
     position: relative;
     margin: 0px auto;
     margin-top: 196px;
     border: 4px solid #f3f3f3;
   }


  </style>
  <body>



      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="container bootstrap snippets bootdeys">
      <div class="row" style="padding-top: 15px;">
        <div class="col-xs-12 col-sm-9">
          <form class="form-horizontal" method="post" enctype="multipart/form-data">

              <div class="panel panel-default">
                <div class="panel-body text-center">
                 <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle profile-avatar" alt="User avatar">
                </div>
              </div>

            <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">User info</h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['username']; ?>" name="username" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['alamat']; ?>" name="alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Pos</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['kode_pos']; ?>" name="kode_pos" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sex</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="sex">
                      <option selected=""><?php echo $data['sex']; ?></option>
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">Contact info</h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mobile number</label>
                  <div class="col-sm-10">
                    <input type="tel" class="form-control" value="<?php echo $data['no_hp']; ?>" name="no_hp" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">E-mail address</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" value="<?php echo $data['email']; ?>" name="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">Security</h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Current password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password_lama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">New password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password_baru">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Confirm password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password_konf">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" name="change_password">Change Password</button>
                    
                  </div>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
      </div>



  </body>
</html>
