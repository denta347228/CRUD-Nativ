<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
        Semua formulir harus diisi
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Form Transaksi</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_add.php' ?>">
                <div class="mb-3">
                        <label for="NAMA" class="form-label">NAMA</label>
                        <input type="text" class="form-control" id="NAMA" name="NAMA">
                    </div>    
                <div class="mb-3">
                        <label for="Nominal" class="form-label">Nominal</label>
                        <input type="number" class="form-control" id="Nominal" name="Nominal">
                    </div>
                    <div class="mb-3">
                        <label for="sel1" class="form-label">Transaksi</label>
                        <input type="" class="form-control" id="Transaksi" name="Transaksi">
                    </div>
                    <div class="mb-3">
                        <label for="Tanggal" class="form-label">Tanggal</label>
                        <input type="date"date class="form-control" id="Tanggal" name="Tanggal">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>