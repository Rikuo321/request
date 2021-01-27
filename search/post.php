<section class="published_area pt-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title pb-15">
                    <h3 class="title" style="font-size:25px">Sedang <text style="color:#e00000;font-weight:bold;font-size:25px">Mencari..</text><br> <?php echo $_GET['nilai']; ?> </h3>
                </div>
            </div>
        </div>

        <div class="published_wrapper">
            <div class="row">

              <?php

              	if(isset($_GET['nilai'])){
              		$cari = $_GET['nilai'];
              		$data = mysqli_query($conn,"select * from tabel_permintaan where Judul LIKE '%".$cari."%'");
              	}else{
              		$data = mysqli_query($conn,"select * from tabel_permintaan");
              	}



          		while($d = mysqli_fetch_array($data)){
          		?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ads_card mt-30">
                        <div class="ads_card_image">
                            <a href="<?php echo "../dashboard/page.php?request=$d[id]"; ?>"><img src="../dashboard/add-item/gambar/<?php echo $d['gambar']; ?>" alt="ads"></a>
                        </div>
                        <div class="ads_card_content">
                            <div class="meta d-flex justify-content-between">
                                <p><?php echo $d['label']; ?></p>
                                <a class="like" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <h4 class="title"><a href="<?php echo "../dashboard/page.php?request=$d[id]"; ?>"><?php echo $d['Judul']; ?></a></h4>
                            <p><i class="fas fa-bullhorn"></i>By <?php echo $d['user']; ?></p>
                            <div class="ads_price_date d-flex justify-content-between">
                                <span class="price"><?php $hasil_rupiah = "Rp " . number_format($d['imbalan'],0,',','.'); echo $hasil_rupiah; ?></span>
                                <span class="date"><?php echo $d['tgl_permintaan']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>

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
        <div class="category_btn" style="position:initial !important;padding:15px;text-align: center;">
            <a class="main-btn" href="categories.html" style="background-color: #b70019;"> <text> Load More </text> </a>
        </div>
    </div>

</section>
