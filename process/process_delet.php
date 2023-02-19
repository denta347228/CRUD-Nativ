<?php

require_once('../function/Link.php');
require_once('../function/koneksi.php');

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pegawai where id = $id");
header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
