<?php

require_once 'koneksi.php';

$_tanggal = $_POST['tanggal'];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];
$_tensi = $_POST['tensi'];
$_keterangan = $_POST['keterangan'];
$_pasien_id = $_POST['pasien_id'];
$_dokter = $_POST['dokter_id'];

$data = array($_tanggal, $_berat, $_tinggi, $_tensi, $_keterangan, $_pasien_id, $_dokter);

$_proses = $_POST['proses_periksa'];
if ($_proses == "Simpan") {
    $sql = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else if ($_proses == "Edit") {
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE periksa SET tanggal=?, berat=?, tinggi=?, tensi=?, keterangan=?, pasien_id=?, dokter_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else {
    if (isset($_GET['idx'])) {
        $idx = $_GET['idx'];
        $sql = "DELETE FROM periksa WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$idx]);
    }
}

// Redirect ke halaman data_pasien.php
header("Location: data_pemeriksaan.php");
exit();
