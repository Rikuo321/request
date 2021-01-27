<?php
include '../conn.php';
include 'navbar.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Item</title>
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
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <style>
  #header .navbar-nav.navbar-right >li a {
   color: #cecece !important;
  }
   #header .navbar {
       background: #272626 !important;
   }

   .w3-black, .w3-hover-black:hover {
    color: #fff!important;
    background-color: #d67649!important;
}

   @media only screen and (max-width: 768px){
   .tour-button {
       background-image:none;
   }
   }

   .navbar {
     border-radius: initial;
   }

   .cont{
     display: flex;
     background-color: blue;
     flex-wrap: wrap;
     justify-content: center;
   }

   .cont > div{
    background-color: #f1f1f1;
    margin: 10px;
    padding: 20px;
   }

   .td {
     text-align: center;
   }
  </style>
  <body>

    <div class="cont" style="background-color:#3e059a26;height:100%">
      <div class="container">


        <div style="padding-bottom:10px">
          <a href="inventory.php"> <button type="button" class="btn btn-info">Inventory</button> </a>
          <a href="add-item"> <button type="button" class="btn btn-success">Request Item</button> </a>
          <a href="penawaran.php"> <button type="button" class="btn btn-primary">Penawaran Diterima</button> </a>
          <a href="dikirim.php"> <button type="button" class="btn btn-warning">Penawaran Dikirim</button> </a>
        </div>


        <div class="table-responsive table-bordered" style="height:250px;box-shadow: 1px 3px #d2cfcf; border: 1px solid #c2c3d4; border-radius: 5px;">

        <table class="table">
          <thead>
            <tr>
              <th style="width: 10%;text-align: center;">No</th>
              <th style="text-align: center;">Judul Lapakmu</th>
              <th style="text-align: center;">Pesan Dikirim</th>
              <th style="width: 15%;text-align: center;">Penawar</th>
              <th style="width: 15%;text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>


            <?php

            $query_mysql = mysqli_query($conn,"SELECT * FROM `pesan` WHERE sender='$_SESSION[user]'")or die(mysql_error());
            $no = 1;
            while($data = mysqli_fetch_array($query_mysql)){

            ?>
            <tr>
              <td style="text-align: center;font-weight:bold"><?php echo $no++; ?></td>
              <td style="text-align: center;"><?php echo $data['postingan']; ?></td>
              <td style="text-align: center;"><?php echo $data['waktu']; ?></td>
              <td style="text-align: center;"><?php echo $data['user']; ?></td>
              <td style="text-align: center;"><a href='chat.php?id=<?php echo $data['id']; ?>'><button type="button" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" style="border-radius: 5px;background-color: #d0d0d0;">Lihat Pesan</button></a>
              </td>
            </tr>

            <?php } ?>

          </div>

          </tbody>
        </table>
        </div>
      </div>
    </div>

  </body>
</html>
