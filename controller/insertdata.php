<?php 
include_once 'controller1.php';
require_once '../models/connection.php';
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$gender = $_POST['gender'];
$hp= $_POST['hp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$sosmed = $_POST['sosmed'];
$agama = $_POST['agama'];


$no = 0;
$totaldata = [$no,$nama,$asal,$gender,$hp,$email,$alamat,$sosmed,$agama];
// idmahasiswa,nama,asalkampus,gender,hp,email,alamat,sosmed,agafma_idagama
$getObject = new mahasiswa();
$getObject->saveData($totaldata);
header('Location:http://localhost/mvc/app/views');
?>