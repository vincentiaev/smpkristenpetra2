<?php

$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "form_pendaftaran";
$koneksi = mysqli_connect($host, $user, $password, $database);

$jenis_pendaftaran = $_POST['jenis_pendaftaran'];
$asal_sekolah = $_POST['asal_sekolah'];

$nama_siswa = $_POST['nama_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$anak_ke = $_POST['anak_ke'];
$no_hp_siswa = $_POST['no_hp_siswa'];
$email = $_POST['email'];

$nama_ayah = $_POST['nama_ayah'];
$thn_lahir_ayah = $_POST['thn_lahir_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$no_hp_ayah = $_POST['no_hp_ayah'];

$nama_ibu = $_POST['nama_ibu'];
$thn_lahir_ibu = $_POST['thn_lahir_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$no_hp_ibu = $_POST['no_hp_ibu'];

$sql = "INSERT INTO regist (nisn,jenis_pendaftaran,asal_sekolah)
VALUES ('$nisn','$jenis_pendaftaran','$asal_sekolah')";

$sql2 = "INSERT INTO data_pribadi (nama,jenis_kelamin,nisn,nik,tempat_lahir,tanggal_lahir,agama,alamat,tempat_tinggal,anak_ke,no_hp,email)
VALUES ('$nama_siswa','$jenis_kelamin','$nisn','$nik','$tempat_lahir','$tgl_lahir','$agama','$alamat','$tempat_tinggal','$anak_ke','$no_hp_siswa','$email')";

$sql3 = "INSERT INTO data_ortu (nisn,nama_ayah,thn_lahir_ayah,pendidikan_ayah,pekerjaan_ayah,no_hp_ayah,nama_ibu,thn_lahir_ibu,pendidikan_ibu,pekerjaan_ibu,no_hp_ibu)
VALUES ('$nisn','$nama_ayah','$thn_lahir_ayah','$pendidikan_ayah','$pekerjaan_ayah','$no_hp_ayah','$nama_ibu','$thn_lahir_ibu','$pendidikan_ibu','$pekerjaan_ibu','$no_hp_ibu')";


mysqli_query($koneksi, $sql2);
mysqli_query($koneksi, $sql);
mysqli_query($koneksi, $sql3);
mysqli_close($koneksi);

header("location:submit.html");
?>