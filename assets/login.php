<?php
if (isset($_POST['btn_login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $Login = mysqli_query($conn, "SELECT * FROM `users` WHERE username='$username' AND password='$password'");
  $ambil_role = mysqli_fetch_assoc($Login);
  $fix = 1;
  sleep(2);
  if (isset($ambil_role['role'])) {
    $_SESSION["user"] = $ambil_role['username'];
    $_SESSION["role"] = $ambil_role['role'];
    $tombol = 1;

    if ($ambil_role['role'] == 'admin') {

      echo "<script>setTimeout(function(){ window.location.href= 'admin';}, 2000);</script>";
      // header("Refresh:2; url=Admin");
      include 'notif/sukses.php';
    }
    elseif ($ambil_role['role'] == 'user') {

      echo "<script>setTimeout(function(){ window.location.href= 'dashboard';}, 2000);</script>";
      // header("Refresh:2; url=Dashboard");
      include 'notif/sukses.php';
    }

  }
  else {
    include 'notif/gagal.php';
   }
}
 ?>
