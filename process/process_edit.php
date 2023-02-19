<?php

require_once('../function/Link.php');
require_once('../function/koneksi.php');

$Nominal = $_POST['Nominal'];
$Transaksi = $_POST['Transaksi'];
$Tanggal = $_POST['Tanggal'];
$id = $_POST['id'];

if (empty($nama) || empty($noid) || empty($email) ) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE pegawai SET Nominal='$Nominal', Transaksi = '$Transaksi', Tanggal='$Tanggal',  WHERE id='$id'");
    header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
}
