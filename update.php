<?php 
require_once 'koneksi.php';
require_once 'kotroler.php';

// $id = $_REQUEST['id'];
// $targetid = new mahasiswa();
// $cetak = $targetid->cariID($id);

// var_dump($cetak['idmhs']);

$id = $_REQUEST['id'];
$objekdata = new mahasiswa();
$rs = [];
if (!empty($id)) {
    $rs = $objekdata->cariID($id);
} 
// var_dump($id)
?>
<div class="input bg-dark">
    <div class="container ">
        <div class="card" style="width: 45%; margin-top:5rem;">
            <h4 class="card-header text-center">Update Data</h4>
            <div class="card-body">
                <form method="POST" action="index.php?hal=proses">
                    <div class="form-group row justify-content-center">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" value="<?=$rs['nama'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label for="nim" class="col-4 col-form-label">Nim</label>
                        <div class="col-8">
                            <input id="nim" name="nim" value="<?=$rs['nim'] ?>" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="offset-4 col-8">
                            <?php if(isset($_SESSION['member']) && $_SESSION['member']['role'] != 'staf') {?>
                            <button name="proses" type="submit" value="ubah" class="btn btn-primary ">Simpan</button>
                            <button type="submit" name="proses" value="hapus" class="btn btn-danger" onclick="return confirm('yakin untuk menghapus data?')" >Hapus Data</button>
                            <?php } ?>
                            <button type="submit" value="batalkan" class="btn btn-secondary">Kembali</button>
                            <input type="hidden" name="idx" value="<?= $id ?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>