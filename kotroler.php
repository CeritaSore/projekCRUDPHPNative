<?php
include_once 'koneksi.php';
class mahasiswa
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    // cetak data
    public function index()
    {
        $sql = "SELECT * FROM mhs ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    // simpan data
    public function simpan($data)
    {
        // $sql = "INSERT INTO mahasiswa (nama, asalkampus, gender, hp, email, alamat, sosmed, agama_idagama) VALUES (?,?,?,?,?,?,?,?)";
        //PDO prepare statement
        $sql = 'INSERT INTO mhs (nama, nim) VALUES (?, ?)';
        $ps = $this->koneksi->prepare($sql);
        // var_dump($data);
        $ps->execute($data);
    }
    // cari data
    public function cariID($id)
    {
        $sql = "SELECT * FROM mhs WHERE idmhs = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch(PDO::FETCH_ASSOC); // 
        return $rs;
    }
    // ganti data
    public function ubah($data)
    {
        $sql = "UPDATE mhs SET nama = ?, nim =? WHERE mhs.idmhs = ?";
        $ps = $this->koneksi->prepare($sql);
        // $ps->bindParam(1, $nama, PDO::PARAM_STR);
        // $ps->bindParam(2, $nim, PDO::PARAM_STR);
        // $ps->bindParam(3, $idmhs, PDO::PARAM_INT);
        $ps->execute($data);
    }
    // hapus data
    public function hapus($data)
    {
        $sql = "DELETE FROM mhs WHERE mhs.idmhs = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
// cek user
class member
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function ceklogin($data)
    {
        $sql = "SELECT * FROM member WHERE member.username = ? AND member.password = SHA1(?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}
