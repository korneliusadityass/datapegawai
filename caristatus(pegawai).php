<?php
include('koneksi.php');
?>
<html>

<head>
    <title>Menampilkan Data Pegawai</title>
    <style type="text/css">
         body {
        font-family: sans-serif;
        background-image: url('gambar/status.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        background-attachment: fixed;
        margin: 0;
        margin-top: 0;
        margin-bottom: 0;
    }
    .style1 {
        color: #FFFFFF;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10;
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

    .style7 {
        font-family:
            Arial,
            Helvetica,
            sans-serif;
        font-size:
            12px;
    }
    </style>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div id="navcontainer">
        <ul id="navlist">
        <li><a href="home_pegawai.php">Beranda</a></li>
            <li><a href="lihatdatapegawai(pegawai).php">Lihat Data Pegawai</a></li>
            <li><a href="status.php">Status Pegawai</a></li>
            <li><a href="logout.php?page=logout">Logout</a>

        </ul>
    </div>
    </div>

    <div align="center">
        <h1 align="center" class="style4" style="color: white;">Menampilkan Data Pegawai Dari Tabel</h1>
        <form method="post" action="caristatus(pegawai).php">
                                <input class="form-control" type="text" name="Search" placeholder="Search">
                                <input class="form-control1" type="submit" name="submit" value="Search">
                                <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                            </form>

        <table width="723" height="73" bordercolor="#000000" cellpadding="2" cellspacing="1" border="0">
            <tr>
                <td width="100" bgcolor="red;">
                    <div align="center" class="style3">NAMA</div>
                </td>
                <td width="103" bgcolor="red;">
                    <div align="center" class="style3">JABATAN</div>
                </td>
                <td width="250" bgcolor="red;">
                    <div align="center" class="style3">STATUS</div>
                </td>
            </tr>
            <?php 
      
      $query = "SELECT * FROM statuskaryawan ORDER BY idpegawai ASC";
      $result = mysqli_query($db, $query);
      
      if(!$result){
        die ("Query Error: ".mysqli_errno($db).
           " - ".mysqli_error($db));
      }

      ?>
      <?php 
$Search = $_POST['Search'];
$query = "SELECT * FROM statuskaryawan WHERE nama LIKE '%$Search%'";
$hasil = mysqli_query($db, $query);

while($data= mysqli_fetch_array($hasil)) {
    echo "<tr>
       <td>".$data['nama']."</td>
       <td>".$data['jabatan']."</td>
       <td>".$data['statuspegawai']."</td>
    <tr>";
   }
?>
        </table>
    </div>
</body>

</html>