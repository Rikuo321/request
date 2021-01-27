<?php session_start(); ?>
<section class="published_area pt-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title pb-15">
                    <h3 class="title">New <br> <text style="color:#e00000;font-weight:bold">Request</text> Post </h3>
                </div>
            </div>
        </div>

        <div class="published_wrapper">
            <div class="row">

              <?php

              $timeout = 1; // setting timeout dalam menit
            	// $logout = "index.php"; // redirect halaman logout

            	$timeout = $timeout * 2; // menit ke detik
            	if(isset($_SESSION['waktu'])){
            		$elapsed_time = time()-$_SESSION['waktu'];
            		if($elapsed_time >= $timeout){
            			unset($_SESSION["waktu"]);
                  unset($_SESSION["hitungan"]);
            			// echo "<script type='text/javascript'>alert('Sesi telah berakhir');window.location='$logout'</script>";
            		}
            	}

              $_SESSION['waktu']=time();

              if ($_SESSION['hitungan'] === NULL) {

                $_SESSION['hitungan'] = 8;
                $hitungan = $_SESSION['hitungan'];

              }else {

                $hitungan = $_SESSION['hitungan'];


              }

              $inc;
          		$query_mysql = mysqli_query($conn,"SELECT * FROM `tabel_permintaan` WHERE status = 'aktif' ORDER BY id DESC LIMIT $hitungan")or die(mysql_error());

          		while($data = mysqli_fetch_array($query_mysql)){
                $inc=$inc+1;
          		?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ads_card mt-30">
                        <div class="ads_card_image">
                            <a href="<?php echo "page.php?request=$data[id]"; ?>"><img src="add-item/gambar/<?php echo $data['gambar']; ?>" alt="ads"></a>
                        </div>
                        <div class="ads_card_content">
                            <div class="meta d-flex justify-content-between">
                                <p><?php echo $data['label']; ?></p>

                                <form method="post">

                                  <?php
                                  $sesi = $_SESSION['user'];
                                  $query_like = mysqli_query($conn,"SELECT * FROM `favorit` WHERE judul_post = '$data[Judul]' AND  user_liked = '$sesi' ");
                                  $ambil_like = mysqli_fetch_assoc($query_like);
                                  // var_dump($ambil_like);
                                  // echo "<br>";
                                  // var_dump($_SESSION['user']);
                                  if ($ambil_like['status'] == 'liked' && $_SESSION['user'] == $ambil_like['user_liked']) { ?>

                                    <button type="submit" class="like" href="#" name="unline_heart_<?php echo $data['id']; ?>" style="color:blue;background: transparent;border: 0 none;text-decoration: underline;font: inherit;cursor: pointer;">
                                      <i class="fas fa-heart" id="heart_<?php echo $data['id']; ?>" ></i>
                                    </button>

                            <?php      }else { ?>

                                    <button type="submit" class="like" href="#" name="heart_<?php echo ("$data[id]_$_SESSION[user]"); ?>" style="background: transparent;border: 0 none;text-decoration: underline;font: inherit;cursor: pointer;">
                                      <i class="fas fa-heart" id="heart_<?php echo $data['id']; ?>" ></i>
                                    </button>

                      <?php      } ?>

                                </form>

                                <?php

                                if (isset($_POST["unline_heart_$data[id]"])) {
                                  mysqli_query($conn,"UPDATE `favorit` SET `status`='unlike' WHERE judul_post = '$data[Judul]' AND user_liked = '$sesi' ");
                                  echo "<script>setTimeout(function(){ window.location.href= '';}, 0);</script>";
                                 }

                                if (isset($_POST["heart_$data[id]_$_SESSION[user]"])) {

                                  if ($ambil_like['status'] == 'liked' && $ambil_like['user_liked'] == $_SESSION['user']) {
                                    mysqli_query($conn,"UPDATE `favorit` SET `status`='unlike' WHERE judul_post = '$data[Judul]' ");
                                    echo "<script>setTimeout(function(){ window.location.href= '';}, 0);</script>";


                                  }

                                  elseif ($ambil_like['status'] == 'unlike' && $ambil_like['user_liked'] == $_SESSION['user']) {
                                    mysqli_query($conn,"UPDATE `favorit` SET `status`='liked' WHERE judul_post = '$data[Judul]' ");
                                    echo "<script>setTimeout(function(){ window.location.href= '';}, 0);</script>";
                                  }

                                  else {
                                    mysqli_query($conn,"INSERT INTO `favorit`(`judul_post`, `user_liked`, `status`) VALUES ('$data[Judul]','$_SESSION[user]','liked')");
                                    echo "<script>setTimeout(function(){ window.location.href= '';}, 0);</script>";
                                  }



                                }
                                 ?>

                            </div>
                            <h4 class="title"><a href="<?php echo "page.php?request=$data[id]"; ?>"><?php echo $data['Judul']; ?></a></h4>
                            <p><i class="fas fa-bullhorn"></i>By <?php echo $data['user']; ?></p>
                            <div class="ads_price_date d-flex justify-content-between">
                                <span class="price"><?php $hasil_rupiah = "Rp " . number_format($data['imbalan'],0,',','.'); echo $hasil_rupiah; ?></span>
                                <span class="date"><?php echo $data['tgl_permintaan']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

              <?php

                    if ($inc % 8 == 0) {
                      $_SESSION['last_id'] = $inc;
                    }

 } ?>

            </div>

            <div class="published_btn">
              <!--  -->
              <!-- Button trigger modal -->
              <?php
              $ambil_id = mysqli_query($conn,"SELECT * FROM `users` WHERE `username` = '$_SESSION[user]' ");
              $id = mysqli_fetch_assoc($ambil_id);

               ?>
              <a href="profile/index.php?request=<?php echo $id['id']; ?>">
                <button type="button" class="btn btn-dark" style="margin-right: 200px;background-color:#353535;color:white;text-decoration:none">
                  My Account
                </button>
              </a>
            </div>

            <div class="published_btn">
              <!--  -->
              <!-- Button trigger modal -->
              <a href="inventory.php">
                <button type="button" class="btn btn-primary" style="margin-right: 80px;">
                  My Inventory
                </button>
              </a>
            </div>

            <a href="../assets/logout.php">
              <div class="published_btn">
                <button type="button" class="btn btn-danger">
                 Logout
                </button>
              </div>
            </a>

        </div>

        <?php
        // $id_terakhir = $_SESSION['last_id'];
        // $tuss = mysqli_query($conn,"SELECT * FROM `tabel_permintaan` WHERE status = 'aktif' ORDER BY id DESC LIMIT 8 OFFSET $id_terakhir")or die(mysql_error());
        // $hitungg = mysqli_num_rows($tuss);
         ?>

        <div class="category_btn" style="position:initial !important;padding:15px;text-align: center;">
            <!-- <a class="main-btn" href="categories.html" style="background-color: #b70019;"> <text> Load More </text> </a> -->
            <form method="post">
              <button class="main-btn" id="load_button" type="submit" style="background-color: #b70019;" name="tes">Load More</button>
            </form>

        </div>
    </div>

    <!-- debugging load more -->
      <?php
        if (isset($_POST['tes'])) {
          $_SESSION['hitungan'] = $_SESSION['hitungan'] + $_SESSION['last_id'];

          echo "<script>setTimeout(function(){ window.location.href= '';}, 0);</script>";
          // echo $_SESSION['hitungan'];
          // echo $_SESSION['hitungan'];
          // echo ($hitungg);
          // echo "<br>";
          // echo $_SESSION['last_id'];
          // echo "<script type='text/javascript'>alert('$_SESSION[last_id]');</script>";
        }
       ?>



</section>
