<?php
include '../conn.php';

if ($_POST) {
  $id = $_POST['id'];
  $query_mysql = mysqli_query($conn,"SELECT * FROM `pesan` WHERE id=$id")or die(mysql_error());
  $data2 = mysqli_fetch_array($query_mysql);
  $tgl = date("l_jS_n-h_i_s ");
  mysqli_query($conn,"INSERT INTO `pesan`(`pesan`, `user`, `postingan`, `posted`, `waktu`) VALUES ('$_POST[pesan]','$_SESSION[user]','$data2[postingan]','none','$tgl')");
  
}
 ?>
