<?php
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "contact_us";
$koneksi = mysqli_connect($host, $user, $password, $database);

$nama = $_POST['nama'];
$email = $_POST['email'];
$wa = $_POST['wa'];
$isi = $_POST['isi'];

$sql = "INSERT INTO pesan_pertanyaan (nama,email,no_wa,isi)
VALUES ('$nama','$email','$wa','$isi')";

mysqli_query($koneksi, $sql);
mysqli_close($koneksi);

header("location:submit.html");

?>