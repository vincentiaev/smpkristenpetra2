<?php
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "form_beasiswa";
$koneksi = mysqli_connect($host, $user, $password, $database);

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$nilai4 = $_POST['nilai4'];
$nilai5 = $_POST['nilai5'];
$nilai6 = $_POST['nilai6'];
$agama = $_POST['agama'];
$jml_sdr = $_POST['jml_sdr'];
$nama_ortu = $_POST['nama_ortu'];
$no_telp = $_POST['no_telp']; 
$pekerjaan = $_POST['pekerjaan'];
$penghasilan = $_POST['penghasilan'];

$sql = "INSERT INTO beasiswa (nama,jenis_kelamin,tempat_lahir,tanggal_lahir,nilai_kls_4,nilai_kls_5,nilai_kls_6,agama,jml_saudara,nama_ortu,no_telp,pekerjaan,penghasilan)
VALUES ('$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$nilai4','$nilai5','$nilai6','$agama','$jml_sdr','$nama_ortu','$no_telp','$pekerjaan','$penghasilan')";

mysqli_query($koneksi, $sql);
mysqli_close($koneksi);

header("location:submit.html");

?>