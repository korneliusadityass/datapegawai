<?php
include 'koneksi.php';
    $nama           = $_POST['nama'];
    $nik            = $_POST['nik'];
    $jeniskelamin   = $_POST['jeniskelamin'];
    $email          = $_POST['email'];
    $notelpon       = $_POST['notelpon'];
    $jabatan        = $_POST['jabatan'];
    $gaji           = $_POST['gaji'];
    $alamat         = $_POST['alamat'];
    $foto           = $_FILES['foto']['name'];

if($foto != "") {
$ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
$x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
$ekstensi = strtolower(end($x));
$file_tmp = $_FILES['foto']['tmp_name'];   
$angka_acak     = rand(1,999);
$nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
              move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                $query = "INSERT INTO datakaryawan (nama, nik, jeniskelamin, email, notelpon, jabatan, gaji, alamat, foto)
                VALUES ('$nama', $nik, '$jeniskelamin', '$email', '$notelpon','$jabatan', '$gaji', '$alamat', '$nama_gambar_baru')";
                $result=mysqli_query($db, $query);
                // periska query apakah ada error
                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($db).
                         " - ".mysqli_error($db));
                } else {
                  //tampil alert dan akan redirect ke halaman index.php
                  //silahkan ganti index.php sesuai halaman yang akan dituju
                  echo "<script>alert('Data berhasil ditambah.');window.location='lihatdatapegawai(admin).php';</script>";
                }

          } else {     
           //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
              echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='inputdatapegawai.php';</script>";
          }
        }
?>