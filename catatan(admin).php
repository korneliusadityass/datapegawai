<?php
session_start();
$_SESSION['username'];
?>

<html>

<head>
    <title>Welcome To Application</title>
    <style type="text/css">
        .style1 {
        font-family: Arial, Helvetica, sans-serif;
        color: white;
        font-weight: bold;
        }

        .style2 {
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        }

        .style5 {
        color: #FFFFFF;
        font-family: Arial, Helvetica, sans-serif;
        }

        .style6 {
        color: #FFFFFF;
        font-style: italic;
        font-weight: bold;
        }

        .style7 {
        font-size: 14px
        }

        .style8 {
        font-family: Arial, Helvetica, sans-serif;
        color: #000000;
        }
        </style>
</head>

<body>
    <table width="642" height="53" border="1" align="center" bordercolor="#000000" bgcolor="#999999">
        <tr>
            <th align="center" valign="middle" scope="row">
                <h2 align="center" class="style5">Selamat Datang <?php echo $_SESSION['username']; ?>, Di
                    Halaman Data Pegawai</h2>
                <table width="590" border="1" cellpadding="8" bordercolor="#FFFFFF" bgcolor="#FFFF00">
                    <tr>
                        <th width="570" scope="row">
                            <p align="left" class="style1">1. Untuk memasukan data baru klik menu &quot;Masukan Data
                                Pegawai&quot;</p>
                            <p align="left" class="style2">2. Untuk melihat data pegawai silahkan klik meny &quot;Lihat
                                Data Pegawai&quot;</p>
                            <p align="left" class="style2">3. Untuk keluar klik &quot;Logout&quot;</p>

                        </th>
                    </tr>
                </table>

                <p align="center" class="style6"style="color: white;">&copy;Copyright@KorneliusAdityaSeptemedi</p>
        </tr>
    </table>
    <p align="center" class="style1">&nbsp;</p>
    <p align="center" class="style1">&nbsp;</p>
    <p>&nbsp;</p>
</body>

</html>