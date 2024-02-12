<?php
include 'koneksi.php';
$idpegawai = $_GET['idpegawai'];
$query="DELETE from datakaryawan where idpegawai='$idpegawai'";
$hasil= mysqli_query($db, $query);

if($hasil == true){
    header('location: lihatdatapegawai(admin).php');
}
else{
    header('location: inputdatapegawai.php');
}
/*if(!$hasil == true){
    die("Data Gagal Dihapus".mysqli_errno($db,$query)."-".mysqli_error($db));
}
else{
    echo"<script>alret('Data Berhasil Dihapus!.');window.location='lihatdatapegawai(admin).php';</script>";
}*/

?>