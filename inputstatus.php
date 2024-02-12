<?php
include 'koneksi.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="ROOT93" />

    <title>Input Status Pegawai</title>
    <style type="text/css">
         body {
        font-family: sans-serif;
        background-image: url('gambar/tambah.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        background-attachment: fixed;
        margin: 0;
        margin-top: 0;
        margin-bottom: 0;
    }
        .kotak {
        width: 350px;
        background-color: white;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        opacity: 85%;
        /*meletakkan form ke tengah*/
        margin: 100px auto;
        padding: 50px 30px;
        box-shadow: 0px 0px 50px 4px #d6d6d6;
        border-radius: 30px;
    }
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
        <h1 class="style4" style="color: white; ">Form Untuk Menambah Status Pegawai</h1>
        <center>
        <table class="kotak" align="center">
                <form method="POST" action="prosesinputstatus.php" enctype="multipart/form-data">
                    <section class="base">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" autofocus="" required="" /></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input type="text" name="jabatan" /></td>
                        </tr>
                            <td>Status</td>
                            <td>
                                <select class="status" name="statuspegawai">
                                    <option value="">
                                    <option value="Tetap">Tetap
                                    <option value="Tidak tetap">Tidak Tetap
                                    <option value="Magang">Magang
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th align="center" colspan="2">
                                <input type="submit" name="submit" id="submit" value="Kirim">
                                <input type="reset" value="Clear">
                                <input type="reset" class="btn btn-submit" value="Kembali" onclick="self.history.back();">
                            </th>
                        </tr>
                    </section>
                </form>
</table>
</body>

</html>