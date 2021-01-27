<?php
if (isset($_POST['ok'])) {
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
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar

                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "INSERT INTO `tabel_permintaan`(`Judul`, `label`, `imbalan`, `tgl_permintaan`, `deskripsi`, `gambar`, `status`,`user`)
                    VALUES ('$judul','$tipe','$imbalan','$tgl','$deksripsi','$nama_gambar_baru','aktif','$_SESSION[user]')";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error


                    if(!$result){
                           die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                " - ".mysqli_error($koneksi));
                       } else {
                         //tampil alert dan akan redirect ke halaman index.php
                         //silahkan ganti index.php sesuai halaman yang akan dituju
                         echo "<script>alert('Data berhasil ditambah.');window.location='../inventory.php';</script>";
                       }

                 } else {
                  //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                     echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index.php';</script>";
                 }
  } else {
     $query = "INSERT INTO `tabel_permintaan`(`Judul`, `label`, `imbalan`, `tgl_permintaan`, `deskripsi`, `gambar`, `status`,`user`)
     VALUES ('$judul','$tipe','$imbalan','$tgl','$deksripsi',null,'aktif','$_SESSION[user]')";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='../inventory.php';</script>";
                    }
  }
}
