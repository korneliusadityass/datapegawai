<?php
include ('koneksi.php');
// menyimpan data kedalam variabel
$idpegawai      = $_POST['idpegawai'];
$nama           = $_POST['nama'];
$jabatan        = $_POST['jabatan'];
$status         = $_POST['status'];
// query SQL untuk insert data
$query="UPDATE statuskaryawan SET nama='$nama',jabatan='$jabatan',statuspegawai='$status', where idpegawai='$idpegawai'";
mysqli_query($db, $query);
// mengalihkan ke halaman index.php
header("location:status(admin).php");
?>
