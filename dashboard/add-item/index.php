<?php
include '../../conn.php';
include 'navbar.php';
include 'action.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Item</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">


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


    <style>
      .bg-gra-02 {
        background-image: url("food.jpg");
      }

      #header .navbar-nav.navbar-right >li a {
       color: #cecece !important;
      }
       #header .navbar {
           background: #272626 !important;
       }

       .p-t-130 {
          padding-top: 60px;
      }
    </style>
</head>


<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <text style="font-weight:bold;font-size: 30px;margin-left: 25%;">Tambah <text style="color:red">Request</text></text>

                    <form method="POST" enctype="multipart/form-data">

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">judul</label>
                                    <input class="input--style-4" type="text" name="judul" autocomplete="off" placeholder="Judul">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">imbalan</label>
                                    <input class="input--style-4" type="number" name="imbalan" autocomplete="off" placeholder="imbalan">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="date" placeholder="Tanggal"  value="<?php echo date("d/m/Y"); ?>" readonly >
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar" autocomplete="off"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">File</label>
                                    <input class="input--style-4" type="file" name="gambar" autocomplete="off" required>
                                </div>
                            </div>

                        </div>


                        <div class="input-group" style="display: initial !important;">
                            <label class="label">Deskripsi</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <textarea class="input--style-4" type="input" name="deskripsi" style="width: 100%;" autocomplete="off" placeholder="Deskripsi"></textarea>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group"  style="display: initial !important;">
                            <label class="label">Tipe</label>

                                <select name="tipe" style="width: 100%; height: 30px; border-radius: 50px; background-color: #f9f9f9;">
                                    <option disabled="disabled" selected="selected">  Label</option>
                                    <option disabled="disabled" selected="selected">  Label</option>
                                    <option value="makanan">Makanan</option>
                                    <option value="pakaian">Pakaian</option>
                                    <option value="elektronik">Elektronik</option>
                                    <option value="kesehatan">Kesehatan</option>
                                    <option value="aksesoris">Aksesoris</option>
                                </select>
                                <div class="select-dropdown"></div>

                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="ok">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
