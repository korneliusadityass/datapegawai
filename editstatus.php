<?php
include('koneksi.php');
$query=mysqli_query($db, "SELECT * FROM statuskaryawan WHERE idpegawai='$_GET[idpegawai]'");
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
            <form method="POST" action="" enctype="multipart/form-data">
                
                <section class="base">
                    <div>
                        <label>Nama</label>
                        <input type="hidden" name="idpegawai" value="<?php echo $data['idpegawai'] ?>"/>
                        <input type="text" name="nama" autofocus=""  value="<?php echo $data['nama'] ?>"/>
                    </div>
                    <div>
                        <label>Jabatan</label>
                        <input type="text" name="jabatan"  value="<?php echo $data['jabatan'] ?>"/>
                    </div>
                    <div>
                        <label>Status</label>
                        <select class="" name="statuspegawai">
                            <option value="Tetap">Tetap
                            <option value="Tidak Tetap">Tidak Tetap
                            <option value="Magang">Magang
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="submit" id="submit" value="Update">
                        <input type="reset" value="Clear">
                        <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                    </div>
                </section>
            </form>
            <?php
            require "koneksi.php";
            if(isset($_POST['submit'])){
                mysqli_query($db, "update statuskaryawan set 
                    nama='$_POST[nama]',
                    jabatan='$_POST[jabatan]',
                    statuspegawai='$_POST[statuspegawai]'
                    WHERE idpegawai='$_GET[idpegawai]'");
                    echo "Data  telah diubah";
                    echo "<meta http-equiv=refresh content=1;URL='status(admin).php'>";
            }
            ?>
    </body>
</html>