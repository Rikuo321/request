<?php
if (isset($_POST['ok'])) {
  $id = $_GET['request'];
  $judul = $_POST['judul'];
  $imbalan = $_POST['imbalan'];
  $tgl = $_POST['date'];
  $gambar_produk = $_FILES['gambar']['name'];
  $deksripsi = $_POST['deskripsi'];
  $tipe = $_POST['tipe'];

  //cek dulu jika ada gambar produk jalankan coding ini
  if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload
    $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $nama_gambar_baru = $_SESSION["user"].'-'.date("l_jS_n-h_i_s ").'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya

          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../add-item/gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar

                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "UPDATE `tabel_permintaan` SET `Judul`='$judul',`label`='$tipe',`imbalan`='$imbalan',`tgl_permintaan`='$tgl',`deskripsi`='$deksripsi',`gambar`='$nama_gambar_baru',`status`='aktif' WHERE id = $id";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error


                    if(!$result){
                           die ("Query gagal dijalankan: ".mysqli_errno($conn).
                                " - ".mysqli_error($conn));
                       } else {
                         //tampil alert dan akan redirect ke halaman index.php
                         //silahkan ganti index.php sesuai halaman yang akan dituju
                         echo "<script>alert('Data berhasil diubah.');window.location='index.php?request=$id';</script>";
                       }

                 } else {
                  //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                     echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index.php';</script>";
                 }
  } else {

     $query = "UPDATE `tabel_permintaan` SET `Judul`='$judul',`label`='$tipe',`imbalan`='$imbalan',`tgl_permintaan`='$tgl',`deskripsi`='$deksripsi',`status`='aktif' WHERE id = $id";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php?request=$id';</script>";
                    }
  }
}
