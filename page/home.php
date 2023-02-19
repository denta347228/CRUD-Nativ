<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>


<?php if ($process == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data behasil dimasukan
    </div>
<?php endif; ?>

<!-- mengambil data dari database -->
<?php

$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");

?>
 <div class="alert alert-danger" role="alert">
      Table Transaksi
    </div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Tanggal</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['Nominal'] ?></td>
                                <td><?= $p['Transaksi'] ?></td>
                                <td><?= $p['Tanggal'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['NAMA'] ?></td>
                                <td><?= $p['Nominal'] ?></td>
                            
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Tanggal</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['NAMA'] ?></td>
                                <td><?= $p['Nominal'] ?></td>
                                <td><?= $p['Transaksi'] ?></td>
                                <td><?= $p['Tanggal'] ?></td>

                                <td>
                                    <a class="btn btn-danger badge" href="<?= BASE_URL .'process/process_delet.php?id='.$p['id'] ?>">Delete</a>
                                    <a class="btn btn-info badge" href="<?= BASE_URL . 'dashboard.php?page=create&id=' . $p['id'] ?>">Tambah</a>
                                    <a class="btn btn-info badge" href="<?= BASE_URL . 'dashboard.php?page=edit&id=' . $p['id'] ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>