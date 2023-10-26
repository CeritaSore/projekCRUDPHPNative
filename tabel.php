<?php
include_once 'koneksi.php';
include_once 'kotroler.php';

$listmhs = new mahasiswa();
$cetak = $listmhs->index();
?>
<main class="satu bg-dark text-light">
    <div class="container">
        <div class="row pt-5 d-flex justify-content-around">
            <div class="col-9">
                <div class="card ">
                    <h4 class="card-header text-center">Data teman</h4>

                    <div class="card-body overflow-y-scroll" style="max-height: 500px;">
                        <div class="container ">
                            <table class="table table-dark text-light ">
                                <thead>
                                    <?php $no = 1;
                                    $listkolom = ['#', 'nama', 'nim', 'action'];
                                    foreach ($listkolom as $kolom) { ?>

                                        <th><?= $kolom ?></th>

                                    <?php
                                    } ?>
                                </thead>
                                <tbody>
                                    <?php foreach ($cetak as $mhs) { ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $mhs['nama'] ?></td>
                                            <td><?= $mhs['nim'] ?></td>
                                            <td>
                                                <a href="index.php?hal=update&id=<?= $mhs['idmhs'] ?>" class="btn btn-success">lihat</a>
                                            </td>

                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                            <?php if (isset($_SESSION['member']) && $_SESSION['member']['role'] != 'staf') { ?>
                                <a href="index.php?hal=input" class="btn btn-primary">tambah</a>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <h2 class="text-light">Selamat Datang!</h2>
                <?php if (!isset($_SESSION['member'])) { ?>
                    <a href="index.php?hal=login.php" class="text">User</a>
                <?php } else { ?>
                    <div class="d-flex justify-content-around">
                        <p class="h4"><?= $_SESSION['member']['username']; ?></p>
                        <a href="logout.php" class="h4">logout</a>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</main>