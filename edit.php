<?php
include('koneksi.php');
$query=mysqli_query($db, "SELECT * FROM datakaryawan WHERE idpegawai='$_GET[idpegawai]'");
$data=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="in">
    <head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="ROOT93" />

    <title>Edit Data Pegawai</title>
    <style type="text/css">
     .style3 {
        color: #FFFFFF;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12;
        font-weight: bold;
    }

    .style4 {

        color: #0000FF;
        font: Arial,
            Helvetica,
            sans-serif;
        font-weight:
            bold;
    }
    </style>
    <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
    <center>
        <h1 class="style4">Form Untuk Edit Data Pegawai</h1>
        <center>
            <form method="POST" action="editproses.php" enctype="multipart/form-data">
                <section class="base">
                    <div>
                        <label>Nama</label>
                        <input type="hidden" name="idpegawai" value="<?php echo $data['idpegawai'] ?>"/>
                        <input type="text" name="nama" autofocus=""  value="<?php echo $data['nama'] ?>"/>
                    </div>
                    <div>
                        <label>NIK</label>
                        <input type="text" name="nik" value="<?php echo $data['nik'] ?>"/>
                    </div>
                    <div>
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jeniskelamin" value="<?php echo $data['jeniskelamin'] ?>" />L
                        <input type="radio" name="jeniskelamin" value="<?php echo $data['jeniskelamin'] ?>"/>P
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $data['email'] ?>"/>
                    </div>
                    <div>
                        <label>NO Telpon</label>
                        <input type="text" name="notelpon"  value="<?php echo $data['notelpon'] ?>"/>
                    </div>
                    <div>
                        <label>Jabatan</label>
                        <input type="text" name="jabatan"  value="<?php echo $data['jabatan'] ?>"/>
                    </div>
                    <div>
                        <label>Gaji</label>
                        <input type="text" name="gaji"  value="<?php echo $data['gaji'] ?>"/>
                    </div>
                    <div>
                        <label>Alamat</label>
                        <input type="text" name="alamat"  value="<?php echo $data['alamat'] ?>"/>
                    </div>
                    <div>
                        <label>Foto</label>
                        <input type="file" name="foto" value="<?php echo $data['foto'] ?>"/>
                        <input type="hidden" name="foto_lama" value="<?php echo $data['foto'] ?>"/>
                    </div>
                    <div>
                        <input type="submit" name="submit" id="submit" value="Update">
                        <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                    </div>
                </section>
            </form>
    </body>
</html>