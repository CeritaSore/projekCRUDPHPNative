<?php 
require_once '../controller/controller1.php';
?>

<?php require_once "header.php"; ?>
    <h1>Hello, world!</h1>
    <table class="table table-dark">
      <thead>
        <?php 
        $no=1;
        $judul = ['no','nama','asal kampus','gender','hp','email','alamat','sosmed','agama'];
        foreach ($judul as $jdl){
          echo '<th>'.$jdl.'</th>';
        }
        ?>
      </thead>
      <tbody>
        <?php 
        $objmhs = new mahasiswa();
        $rs = $objmhs->datamahasiswa();
        foreach($rs as $datamhs){
          echo '<tr>';
          echo '<td>'.$datamhs['idmahasiswa'].'</td>';
          echo '<td>'.$datamhs['nama'].'</td>';
          echo '<td>'.$datamhs['asalkampus'].'</td>';
          echo '<td>'.$datamhs['gender'].'</td>';
          echo '<td>'.$datamhs['hp'].'</td>';
          echo '<td>'.$datamhs['email'].'</td>';
          echo '<td>'.$datamhs['alamat'].'</td>';
          echo '<td>'.$datamhs['sosmed'].'</td>';
          echo '<td>'.$datamhs['agama'].'</td>';
          echo '<td><a href="inputdata.php"><i class="bi bi-pencil-square text-light"></i></a></td>';
          echo '<td><a href="inputdata.php"><i class="bi bi-dash-square text-light"></i></a></td>';
          echo '</tr>';
          
        }
        ?>
        <tr>
          <td><a href="inputdata.php"><i class="bi bi-plus text-light"></i></a></td>
        </tr>
      </tbody>
    </table>
    <?php include_once "footer.php"; ?>