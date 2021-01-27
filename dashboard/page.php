<?php
include '../conn.php';
include 'navbar.php';

$id = $_GET['request'];
$query = mysqli_query($conn,"SELECT * FROM `tabel_permintaan` WHERE id='$id'");
$data = mysqli_fetch_array($query);

$query1 = mysqli_query($conn,"SELECT * FROM `pesan` WHERE user='$_SESSION[user]' AND postingan = '$data[Judul]' ");
$data1 = mysqli_fetch_array($query1);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Detail Page</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/lightbox.css" rel="stylesheet">
   <link href="../css/main.css" rel="stylesheet">
   <link href="../css/responsive.css" rel="stylesheet">

   <link rel="shortcut icon" href="../images/ico/go.png">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">

   <script type="text/javascript" src="../js/jquery.js"></script>
   <script type="text/javascript" src="../js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../js/lightbox.min.js"></script>
   <script type="text/javascript" src="../js/wow.min.js"></script>
   <script type="text/javascript" src="../js/main.js"></script>
</head>
    <style>
      ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
      li.active{border-bottom:3px solid silver;}

      .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
      .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
      .btn-success{width:100%;border-radius:0;}
      .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
      .title-price{margin-top:30px;margin-bottom:0;color:black}
      .title-attr{margin-top:0;margin-bottom:0;color:black;}
      .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
      .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
      div.section > div {width:100%;display:inline-flex;}
      div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
      .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
      .attr.active,.attr2.active{ border:1px solid orange;}

      @media (max-width: 426px) {
        .container {margin-top:0px !important;}
        .container > .row{padding:0 !important;}
        .container > .row > .col-xs-12.col-sm-5{
            padding-right:0 ;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > p{
            padding-left:0 !important;
            padding-right:0 !important;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > ul{
            padding-left:10px !important;

        }
        .section{width:104%;}
        .menu-items{padding-left:0;}
      }

      #header .navbar-nav.navbar-right >li a {
       color: #cecece !important;
      }
       #header .navbar {
           background: #272626 !important;
       }

    </style>

    <body>

        <div class="container">
        	<div class="row" style="margin-top: 40px;background-color: #8a858124; border-radius: 50px;">
               <div class="col-xs-4 item-photo" style="margin-top: 30px;margin-left: 10%;padding-bottom: 20px;">
                    <img style="max-width:100%;" src="add-item/gambar/<?php echo $data['gambar']; ?>" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->


                    <script>
                    function myFunction() {
                      document.getElementById("tombol").style.display = "none";
                      document.getElementById("pesan").style.display = "initial";
                      document.getElementById("btn").style.display = "initial";
                    }
                    </script>

                    <script>
                    function sudah() {
                      alert('Anda sudah menawarkan!, Tunggu pesan konfirmasi');
                    }
                    </script>

                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;margin-top: 30px; padding-bottom: 20px; padding-top: 1px;">
                      <h3><?php echo $data['Judul']; ?></h3>
                      <h5 style="color:#337ab7">Posted <a href="#"><?php echo $data['tgl_permintaan']; ?></a> - <small style="color:#337ab7;padding-top:20px">by <?php echo $data['user']; ?></small></h5>

                      <!-- Precios -->
                      <h6 class="title-price"><medium><b>Imbalan :</b></medium></h6>
                      <h3 style="margin-top:8px;"><?php $hasil_rupiah = "- Rp " . number_format($data['imbalan'],2,',','.'); echo $hasil_rupiah; ?></h3>

                        <?php
                        if ($data1) { ?>
                          <button style="width:100%" class="btn btn-danger" onclick="sudah()"><span style="margin-right:20px;"  class="glyphicon glyphicon-send" aria-hidden="true"></span>Sudah menawarkan barang!!</button>

                <?php    } elseif ($data['user'] == $_SESSION['user']) { ?>
                          <button style="width:100%" class="btn btn-info" ><span style="margin-right:20px;"  class="glyphicon glyphicon-send" aria-hidden="true"></span>Tidak bisa menawarkan postingan sendiri!!</button>

                <?php  }  else { ?>
                          <button style="width:100%" class="btn btn-success" id="tombol" onclick="myFunction()"><span style="margin-right:20px"  class="glyphicon glyphicon-send" aria-hidden="true"></span>Tawarkan Barang</button>
                <?php     }
                         ?>


                        <form method="post">

                        <input type="text" id="pesan" name="pesan" placeholder="Masukan penawaran anda!" autocomplete="off"  style="width:100%;display:none">
                        <button type="submit" name="btn" class="btn btn-warning" id="btn" style="width:100%;display:none"><span style="margin-right:20px"  class="glyphicon glyphicon-send" aria-hidden="true"></span>Tawarkan Barang</button>

                        </form>
                        <?php
                        if (isset($_POST['btn'])) {
                          $waktu = date("l_jS_n-h_i_s ");
                          mysqli_query($conn,"INSERT INTO `pesan`(`pesan`, `user`, `postingan`,`posted`,`sender`,`waktu`) VALUES ('$_POST[pesan]','$_SESSION[user]','$data[Judul]','$data[user]','$_SESSION[user]','$waktu')");
                          echo "<script>alert('Pesan berhasil dikirim!');window.location='index.php';</script>";
                        }
                         ?>

                        <h6 style="font-weight: bold;"><a href="#" onclick="report()" id="report"><span class="glyphicon glyphicon-info-sign" style="cursor:pointer;"></span> Report</a></h6>

                        <h6 style="font-weight: bold;"> <form action="" method="post"><textarea name="form_report" id="form_report" rows="4" cols="50" style="display:none"  maxlength="50"></textarea>  </h6>
                        <h6 style="font-weight: bold;"> <button type="submit" id="btn_report" name="btn_report" class="btn btn-success " style="display:none;font-size:10px;width:23%;border-radius:2px">Send Report</button></form>
                        <button type="button" id="btn_cancel" class="btn btn-danger btn-sm" name="button" style="display:none;height: 3.5%;" onclick="cancel()">Cancel</button> </h6>
                    </div>
                </div>

                <script>
                function cancel() {
                  document.getElementById("report").style.display = "initial";
                  document.getElementById("btn_report").style.display = "none";
                  document.getElementById("form_report").style.display = "none";
                  document.getElementById("btn_cancel").style.display = "none";
                }
                </script>

                <script>
                function report() {
                  document.getElementById("report").style.display = "none";
                  document.getElementById("btn_report").style.display = "initial";
                  document.getElementById("form_report").style.display = "initial";
                  document.getElementById("btn_cancel").style.display = "initial";
                }
                </script>

                <?php
                $waktu2 = date("l_jS_n-h_i_s ");
                if (isset($_POST['btn_report'])) {
                  mysqli_query($conn,"INSERT INTO `report`(`pelapor`, `judul_post`, `posted_by`, `isi_report`, `tgl`,`status`) VALUES ('$_SESSION[user]','$data[Judul]','$data[user]','$_POST[form_report]','$waktu2','not fixed')");
                  echo "<script type='text/javascript'>alert('Report Terkirim');</script>";
                }

                 ?>



                <div style="margin-left: 10%;">
                    <ul class="menu-items" style="font-size: 14px;margin-left: 20%;">
                        <li style="font-weight:bold">Detail Permintaan</li>
                        <li></li>

                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="font-size: 15px;">
                            <small>
                              <?php echo $data['deskripsi']; ?>
                            </small>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
