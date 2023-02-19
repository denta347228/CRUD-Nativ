<?php

require_once('../function/Link.php');
require_once('../function/koneksi.php');

$NAMA = $_POST['NAMA'];
$Nominal = $_POST['Nominal'];
$Transaksi = $_POST['Transaksi'];
$Tanggal = $_POST['Tanggal'];
$id = $_POST['id'];

// Pengecekan kelengkapan data
if (empty($NAMA) || empty($Nominal) || empty($Transaksi) || empty($Tanggal) ) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO pegawai(NAMA, Nominal, Transaksi, Tanggal) VALUES ('$NAMA','$Nominal', '$Transaksi', '$Tanggal')");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}
