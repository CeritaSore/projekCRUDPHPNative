<?php
require_once 'koneksi.php';
require_once 'kotroler.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tombol = $_POST['proses'];

$data = [$nama, $nim];
$initsimpan = new mahasiswa();
switch ($tombol) {
    case 'simpan':
        $initsimpan->simpan($data);
        header('Location:http://localhost/mvc2/php6/index.php?hal=tabel');
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $initsimpan->ubah($data);
        header('Location:http://localhost/mvc2/php6/index.php?hal=tabel');
        break;
    case 'hapus':
        unset($data);
        $data[] = $_POST['idx'];
        $initsimpan->hapus($data);
        header('Location:http://localhost/mvc2/php6/index.php?hal=tabel');
        break;

    default:
        header('Location:http://localhost/mvc2/php6/index.php?hal=tabel');
}

