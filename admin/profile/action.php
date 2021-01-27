<?php
//tombol submit
if (isset($_POST['submit'])) {

  $id = $_GET['request'];
  $username = $_POST['username'];
  $alamat = $_POST['alamat'];
  $kode_pos = $_POST['kode_pos'];
  $sex = $_POST['sex'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];

          // update data ke database
          $query = "UPDATE `users` SET `alamat`='$alamat',`kode_pos`='$kode_pos',`sex`='$sex',`no_hp`='$no_hp',`email`='$email' WHERE id = $id";
          $result = mysqli_query($conn, $query);
          // periska query apakah ada error
          if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($conn).
                   " - ".mysqli_error($conn));
          } else {
            echo "<script>alert('Data berhasil diubah.');window.location='index.php?request=$id';</script>";
          }

 }

//tombol password
 elseif (isset($_POST['change_password'])) {
   $id = $_GET['request'];
   $password_lama = md5($_POST['password_lama']);
   $password_baru = md5($_POST['password_baru']);
   $password_konf = md5($_POST['password_konf']);

    $query = "SELECT * FROM users WHERE id='$id' AND password='$password_lama'";
    $sql = mysqli_query ($conn,$query);
    $hasil = mysqli_num_rows($sql);
    //validasi data data kosong
  if (empty($_POST['password_lama']) || empty($_POST['password_baru']) || empty($_POST['password_konf'])) {
            echo "<h3><font color=red>Ganti Password Gagal! Data Tidak Boleh Kosong.</font></h3>";
    }
  else if (! $hasil >= 1) {

      echo "<div class='alert alert-success alert-dismissible' role='alert'>
        <strong>Sukses!</strong> Anda akan diarahkan ke dashboard!.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";

    }


   //validasi input konfirm password
   else if (($_POST['password_baru']) != ($_POST['password_konf'])) {
           echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";
   }
   else {
   //update data
   $query = "UPDATE users SET password='$password_baru' WHERE id='$id'";
   $sql = mysqli_query ($conn,$query);
   //setelah berhasil update
   if ($sql) {
       echo "<h3><font color=#8BB2D9><center>Ganti Password Berhasil!</center></font></h3>";
   } else {
       echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";
   }
   }
   }

 ?>
