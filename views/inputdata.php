<?php 
include_once 'header.php';
require_once '../models/connection.php';
require_once '../controller/controller1.php';
?>
<div class="container">
    <h1>Input data</h1>
    <form method="POST" action="../controller/insertdata.php">
        <!-- nama -->
      <div class="form-group">
        <label for="nama">Nama</label> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
      <!-- email -->
      <div class="form-group">
        <label for="email">email</label> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
      <!-- agama -->
      <div class="form-group">
        <label for="agama">Agama</label> 
        <div>
        <select id="agama" name="agama" class="custom-select">
            <option value="default">pilih agama</option>
            <?php 
            $dtreli = new mahasiswa();
            $rs = $dtreli->dataAgama();
            foreach($rs as $agama){
              echo '<option value="' . $agama['idagama'] . '">' . $agama['agama'] . '</option>';
           } ?>
            
        </select>
        </div>
      </div>
      <!-- gender -->
      <div class="form-group">
        <label for="gender">Gender</label> 
        <div>
        <select id="gender" name="gender" class="custom-select">
            <option value="default">pilih gender</option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        </div>
      </div>
      <!-- asal -->
      <div class="form-group">
        <label for="asal">Asal Kampus</label> 
        <input id="asal" name="asal" type="text" class="form-control">
      </div>
      <!--hp  -->
      <div class="form-group">
        <label for="hp">No.hp</label> 
        <input id="hp" name="hp" type="text" class="form-control">
      </div> 
      <!-- sosmed -->
      <div class="form-group">
        <label for="sosmed">sosmed</label> 
        <input id="sosmed" name="sosmed" type="text" class="form-control">
      </div> 
      <div class="form-group">
        <label for="alamat">alamat</label> 
        <input id="alamat" name="alamat" type="text" class="form-control">
      </div> 
      <!-- submit -->
      <div class="form-group">
        <button name="proses" value="save" type="submit" class="btn btn-primary">save</button>
      </div>
    </form>

</div>
<?php include_once "footer.php"; ?>