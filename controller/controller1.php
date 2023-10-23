<?php 
require_once '../models/connection.php';
class mahasiswa {
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function datamahasiswa(){
        $sql = "select mahasiswa.* , agama.* from mahasiswa inner join agama on agama.idagama = mahasiswa.agama_idagama";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;

    }
    public function dataAgama(){
        $sql = "select * from agama";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }
    public function saveData($isi){
        $sql = "insert into mahasiswa(idmahasiswa,nama,asalkampus,gender,hp,email,alamat,sosmed,agama_idagama) values (?,?,?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($isi);
    }

}
?>