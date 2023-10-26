<?php // login

session_start();
require_once 'koneksi.php';
require_once 'kotroler.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$login = $_POST['login'];
$datalogin = [$user, $pass];
$objekuser = new member();
$cekuser = $objekuser->ceklogin($datalogin);
if (!empty($cekuser)) {
    $_SESSION['member'] = $cekuser;
    header('Location:http://localhost/mvc2/php6/index.php?hal=tabel');
} else {
    echo "<script>alert('ada yang salah gan');history.go(-1);</script>";
}
