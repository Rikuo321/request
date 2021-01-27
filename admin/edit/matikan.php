<?php
if (isset($_POST['matikan'])) {
  $id = $_GET['id'];

  $query = "UPDATE `tabel_permintaan` SET `status`='non aktif' WHERE id = $id";
  $result = mysqli_query($conn, $query);

  echo "<script>alert('Berhasil Di non aktif kan.');window.location='index.php?id=$id';</script>";
}
