<?php
$dbname = 'satugrup';
$dsn = 'mysql:dbname='.$dbname.';host=localhost';
$user = 'dosen'; $password = 'dsn123';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "koneksi berhasil"; 
} catch (PDOException $e) {
echo 'Terjadi Kesalahan Koneksi DB dengan sebab: ' .
    $e->getMessage();
}
