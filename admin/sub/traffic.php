<div class="col-xl-3 col-lg-6" style="height: 10px;">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Total Profit</div>
                    <span class="stat-digit">Rp</span> <span class="stat-digit count"> <?php echo "1000000"; ?> </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.col-->


<div class="col-xl-3 col-lg-6" style="height: 10px;">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Member Online</div>
                    <div class="stat-digit count">5</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-stats-up text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Daily Sales</div>
                        <div class="stat-text">Total: $76,58,714</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-four">
                <div class="stat-icon dib">
                    <i class="ti-server text-muted"></i>
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-heading">Database</div>
                        <div class="stat-text">Total: 765</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.col-->
<div class="container">

  <h2 style="text-align: center;padding-top: 30px;"><text style="color:#ea880d;">Request</text> List</h2>
  <div class="table-responsive table-bordered" style="height:250px;box-shadow: 1px 3px #d2cfcf; border: 1px solid #c2c3d4; border-radius: 5px;">
  <table class="table">
    <thead>
      <tr>
        <th style="width: 10%;text-align: center;">No</th>
        <th style="text-align: center;">Judul Request</th>
        <th style="text-align: center;">Posted by</th>
        <th style="text-align: center;">Waktu</th>
        <th style="width: 15%;text-align: center;">Status</th>
        <th style="width: 15%;text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $sql = mysqli_query($conn,"SELECT * FROM `tabel_permintaan`");
      $inc = 0;
      while($data = mysqli_fetch_assoc($sql)){
        $inc++;
        ?>

        <tr>
          <td style="text-align: center;font-weight:bold"><?php echo $inc; ?></td>
          <td><?php echo $data['Judul']; ?></td>
          <td><?php echo $data['user']; ?></td>
          <td><?php echo $data['tgl_permintaan']; ?></td>
          <td style="text-align: center;"><?php echo $data['status']; ?></td>
          <td style="text-align: center;"><a href="edit/index.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-warning" style="border-radius: 5px;">Setting</button></a>
          </td>
        </tr>

    <?php  } ?>


    </tbody>
  </table>
  </div>

  <h2 style="text-align: center;padding-top: 30px;"><text style="color:blue">User</text> List</h2>

  <div class="table-responsive table-bordered" style="height:250px;box-shadow: 1px 3px #d2cfcf; border: 1px solid #c2c3d4; border-radius: 5px;">
  <table class="table">
    <thead>
      <tr>
        <th style="width: 10%;text-align: center;">No</th>
        <th style="text-align: center;">Nama User</th>
        <th style="text-align: center;">Saldo</th>
        <th style="width: 15%;text-align: center;">Status</th>
        <th style="width: 15%;text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $sql = mysqli_query($conn,"SELECT * FROM `users`");
      $inc = 0;
      while($data = mysqli_fetch_assoc($sql)){
        $inc++;
        ?>

        <tr>
          <td style="text-align: center;font-weight:bold"><?php echo $inc; ?></td>
          <td><?php echo $data['username']; ?></td>
          <td><?php echo $data['saldo']; ?></td>
          <td style="text-align: center;"><?php echo $data['status']; ?></td>
          <td style="text-align: center;"><a href="profile/index.php?request=<?php echo $data['id']; ?>"><button type="button" class="btn btn-primary" style="border-radius: 5px;">Setting</button></a>
          </td>
        </tr>

    <?php  } ?>


    </tbody>
  </table>
  </div>


  <h2 style="text-align: center;padding-top: 30px;"><text style="color:red">Report</text> List</h2>

  <div class="table-responsive table-bordered" style="height:250px;box-shadow: 1px 3px #d2cfcf; border: 1px solid #c2c3d4; border-radius: 5px;">
  <table class="table">
    <thead>
      <tr>
        <th style="width: 10%;text-align: center;">No</th>
        <th style="text-align: center;">Judul Post</th>
        <th style="text-align: center;">Posted By</th>
        <th style="width: 15%;text-align: center;">Pelapor</th>
        <th style="width: 15%;text-align: center;">Message</th>
        <th style="width: 15%;text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $sql = mysqli_query($conn,"SELECT * FROM `report`");
      $inc = 0;
      while($data = mysqli_fetch_assoc($sql)){
        $inc++;
        ?>

        <tr>
          <td style="text-align: center;font-weight:bold"><?php echo $inc; ?></td>
          <td><?php echo $data['judul_post']; ?></td>
          <td><?php echo $data['posted_by']; ?></td>
          <td style="text-align: center;"><?php echo $data['pelapor']; ?></td>
          <td style="text-align: center;"> <textarea name="name" rows="1" cols="55" disabled style="background-color: #fbfbfb;"><?php echo $data['isi_report']; ?></textarea> </td>
          <td style="text-align: center;">

            <?php
            if ($data['status'] == 'not fixed') { ?>
              <form method='post'><button type="submit" name='button_fix_<?php echo $data['id']; ?>' class="btn btn-primary" style="border-radius: 5px;">Fix</button></form>
          <?php  } else{ ?>
              <button type="button" class="btn btn-primary" style="border-radius: 5px;background-color:gray;border: 1px solid gray;">Fixed</button>
        <?php  }
             ?>

             <?php

              if (isset($_POST["button_fix_$data[id]"])) {
                mysqli_query($conn,"UPDATE `report` SET `status`='fixed' WHERE id=$data[id]");
                echo "<script type='text/javascript'>alert('Report sudah ditangani');</script>";
                echo "<script>setTimeout(function(){ window.location.href= '';}, 0);</script>";
              }
              ?>

          </td>
        </tr>

    <?php  } ?>


    </tbody>
  </table>
  </div>


</div>
