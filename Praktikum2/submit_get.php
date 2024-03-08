<?php 
$namaLengkap= $_GET['nama_lengkap'];
$Username = $_GET['username'];
$password = $_GET['Password'];

echo "<h1>Selamat {$namaLengkap}. Kamu sudah daftar</h1>";
echo "<h3>Username : {$Username}.</h3>";
echo "<h3>Password : {$password}.</h3>";


?>