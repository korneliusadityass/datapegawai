<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include 
?>

<!DOCTYPE html>
<html>

<head>
    <title> Website Penyimpanan Data Pegawai</title>
    <meta http-equiv="Contenr-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <style>
        body{
                background-image: url('gambar/p.jpg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
                background-attachment: fixed;
                margin-top: 0;
                margin-bottom: 0;
        }
        #navlist{
            background-color: black;
        }
    </style>
</head>

<body>
    <div id="navcontainer">
        <ul id="navlist">
            <li><a href="home_admin.php">Beranda</a></li>
            <li><a href="home_admin.php?page=masukandata">Masukkan Data Pegawai</a></li>
            <li><a href="lihatdatapegawai(admin).php">Lihat Data Pegawai</a></li>
            <li><a href="status(admin).php">Status Pegawai</a></li>
            <li><a href="logout.php?page=masukandata">Logout</a></li>
        </ul>
    </div>
    <div id="content">
        <?php
            $page =(isset($_GET['page']))? $_GET['page'] : "main";
            switch($page){
                case 'masukandata' : include "inputdatapegawai.php"; break;
                case 'main' : 
                    default : include 'catatan(admin).php';
            }
        ?>
</body>

</html>