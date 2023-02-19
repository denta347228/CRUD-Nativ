<?php
require_once('function/Link.php');
require_once('function/koneksi.php');


if ($_SESSION["id"] == null) {
    header("location: " . BASE_URL);
    exit();
}

$error =  isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
$id =  isset($_GET['id']) ? ($_GET['id']) : false;

$pegawai = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id=$id"));


?>

<div class="card">
    <div class="card-body">
        <?php
        if ($error == "true") : ?>
            <div class="alert alert-danger" role="alert">
                Proses gagal, pastikan semuar formulir terisi
            </div>
        <?php endif; ?>
        <form method="POST" action="<?= BASE_URL . 'process/process_edit.php' ?>">
            <input name="id" value="<?= $pegawai['id'] ?>" type="hidden">
            <div class=" mb-3">
                <label for="Nominal" class="form-label">Nominal</label>
                <input type="number" name="Nominal" class="form-control" id="Nominal" value="<?= $pegawai['Nominal'] ?>">
            </div>
            <div class="mb-3">
                <label for="Transaksi" class="form-label">Transaksi</label>
                <input type="number" name="Transaksi" class="form-control" id="Transaksi" value="<?= $pegawai['Transaksi'] ?>">
            </div>
            <div class=" mb-3">
                <label for="Tanggal" class="form-label">Tanggal</label>
                <input type="date" name="Tanggal" class="form-control" id="Tanggal" value="<?= $pegawai['Tanggal'] ?>">
            </div>
        
            <button type=" submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>