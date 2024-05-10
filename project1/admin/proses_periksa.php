<?php
require_once 'koneksi.php';

$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter = $_POST['dokter_id'];


// simpan data ke array $data

$data =[
      $tanggal, $berat, $tinggi, $tensi, $keterangan,  $pasien_id, $dokter
];

$_proses = $_POST['proses_periksa'];
if ($_proses == 'tambah_periksa') {
    $sql = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan,  pasien_id, dokter_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$tanggal,$berat,$tinggi,$tensi,$keterangan,$pasien_id,$dokter]);
}elseif ($_proses == 'edit_periksa') {
    $id_periksa = $_POST['id'];
    $data[] = $id_periksa;
    $sql = 'UPDATE periksa SET tanggal=?, berat=?,   tinggi=?, tensi=?, keterangan=?,
    pasien_id=?,dokter_id=? WHERE id=?';
    $stmt = $dbh->prepare($sql);    
    $stmt->execute($data);
}else{
    $id_periksa = $_GET['id'];
    $sql = "DELETE FROM periksa WHERE id=?";
    $stmt = $dbh->prepare($sql);    
    $stmt->execute([$id_periksa]);
}
header("Location: Periksa.php");
exit()
?>


