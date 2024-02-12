<?php
include ('koneksi.php');
$idpegawai     = $_POST['idpegawai'];
$nama           = $_POST['nama'];
$nik            = $_POST['nik'];
$jeniskelamin   = $_POST['jeniskelamin'];
$email          = $_POST['email'];
$notelpon       = $_POST['notelpon'];
$jabatan        = $_POST['jabatan'];
$gaji           = $_POST['gaji'];
$alamat         = $_POST['alamat'];
$foto           = $_FILES['foto']['name'];
$foto_lama = $_POST['foto_lama'];
$tmp = $_FILES['foto']['tmp_name'];
$ex = explode('.',$foto);
$nama_baru = 'foto'.time().'.'.strtolower($ex[0]);
 
$daftar_extensi = ['jpg','png','jpeg'];
$extensi = strtolower(end($ex));
 
if (in_array($extensi,$daftar_extensi) === true) {
  $pindah = move_uploaded_file($tmp,'gambar/'.$nama_baru);
  $query = $db->query("UPDATE datakaryawan SET nama='$nama', nik='$nik', jeniskelamin='$jeniskelamin', email='$email', notelpon='$jabatan', gaji='$gaji', alamat='$alamat', foto='$nama_baru' WHERE idpegawai='$idpegawai'");
  if (file_exists('gambar/'.$foto_lama)) {
    unlink('gambar/'.$foto_lama);
  }
  header('location:lihatdatapegawai(admin).php');
}else{
  echo "Type File Salah !!! <a href='edit.php'> << Kembali</a>";
}
/*$query="UPDATE datakaryawan SET idkaryawan='$idkaryawan', nama='$nama', nik='$nik', jeniskelamin='$jeniskelamin', email='$email', notelpon='$notelpon', jabatan='$jabatan', gaji='$gaji', alamat='$alamat', foto='$foto'"
$hasil = mysqli_query($db, $query);*/

?>