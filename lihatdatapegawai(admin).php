<?php
include('koneksi.php');
?>
<html>

<head>
    <title>Menampilkan Data Pegawai</title>
    <style type="text/css">
        body{
                background-image: url('gambar/tambah.jpg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
                background-attachment: fixed;
                margin: 0px 0px 0px 0px;
        }
        #navlist{
            background-color: black;
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
        color: #FFFFFF;
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
            <li><a href="home_admin.php">Beranda</a></li>
            <li><a href="home_admin.php?page=masukandata">Masukkan Data Pegawai</a></li>
            <li><a href="lihatdatapegawai(admin).php">Lihat Data Pegawai</a></li>
            <li><a href="status(admin).php">Status Pegawai</a></li>
            <li><a href="logout.php?page=logout">Logout</a>

        </ul>
    </div>
    </div>

    <div align="center">
        <h1 align="center" class="style4" style="color: white;">Menampilkan Data Pegawai Dari Tabel</h1>

        <form method="post" action="cari(admin).php">
                                <input class="form-control" type="text" name="Search" placeholder="Search">
                                <input class="form-control1" type="submit" name="submit" value="Search">
                                
                            </form>

        <table width="723" height="73" bordercolor="#000000" cellpadding="2" cellspacing="1" border="0">
            <tr>
                <td width="33" bgcolor="#FF0000">
                    <div align="center" class="style3">
                        <div align="center">No</div>
                    </div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">ID PEGAWAI</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">NAMA</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">NIK</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">JENIS KELAMIN</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">EMAIL</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">NO TELPON</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">JABATAN</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">GAJI</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">ALAMAT</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">FOTO</div>
                </td>
                <td width="250" bgcolor="#FF0000">
                    <div align="center" class="style3">ACTION</div>
                </td>
            </tr>
            <?php 
      
      $query = "SELECT * FROM datakaryawan ORDER BY idpegawai ASC";
      $result = mysqli_query($db, $query);
      
      if(!$result){
        die ("Query Error: ".mysqli_errno($db).
           " - ".mysqli_error($db));
      }

      
      $no = 1; 
      while($data = mysqli_fetch_assoc($result))
      {
      ?> <tr>
                <td height="42" bgcolor="#99FFFF">
                    <div align="center" class="style7"><?php echo $no++; ?></div>
                </td>
                <td align="left" bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['idpegawai']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['nama']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['nik']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['jeniskelamin']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['email']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['notelpon']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['jabatan']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7">Rp. <?php echo $data['gaji']; ?></div>
                </td>
                <td bgcolor="#99FFFF">
                    <div align="left" class="style7"><?php echo $data['alamat']; ?></div>
                </td>
                <td bgcolor="#99FFFF" style="text-align: center;">
                    <img src="gambar/<?php echo $data['foto']; ?>"width="100" height="100">
                </td>
                <td bgcolor="#99FFFF" style="text-align: center;">
                    <a href="edit.php?idpegawai=<?php echo $data['idpegawai'];?>" class="edit">Edit</a>
                    <a href="delete.php?idpegawai=<?php echo $data['idpegawai'];?>" class="delete" onclick="return confirm('Yakin menghapus data?');">Hapus</a>
                </td>
            </tr>
            <?php  } ?>
        </table>
    </div>
</body>

</html>