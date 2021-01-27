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

          		$query_mysql = mysqli_query($conn,"SELECT * FROM `tabel_permintaan` WHERE status = 'aktif' ORDER BY id DESC")or die(mysql_error());

          		while($data = mysqli_fetch_array($query_mysql)){
          		?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ads_card mt-30">
                        <div class="ads_card_image">
                            <a href="<?php echo "page.php?request=$data[id]"; ?>"><img src="add-item/gambar/<?php echo $data['gambar']; ?>" alt="ads"></a>
                        </div>
                        <div class="ads_card_content">
                            <div class="meta d-flex justify-content-between">
                                <p><?php echo $data['label']; ?></p>
                                <a class="like" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <h4 class="title"><a href="<?php echo "page.php?request=$data[id]"; ?>"><?php echo $data['Judul']; ?></a></h4>
                            <p><i class="fas fa-bullhorn"></i>By <?php echo $data['user']; ?></p>
                            <div class="ads_price_date d-flex justify-content-between">
                                <span class="price"><?php echo $data['imbalan']; ?></span>
                                <span class="date"><?php echo $data['tgl_permintaan']; ?></span>
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
