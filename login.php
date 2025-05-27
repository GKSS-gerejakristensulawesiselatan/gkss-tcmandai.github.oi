<?php
session_start();

// Email dan sandi umum (default)
$valid_email = "gkss-tcmandai2025";
$valid_password = "123456";

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Cek kecocokan
if ($email === $valid_email && $password === $valid_password) {
  $_SESSION['login'] = true;
  $_SESSION['user'] = $email;
  header("Location: dashboard.php");
} else {
  echo "Email atau password salah. <a href='login.html'>Coba lagi</a>";
}
?>
