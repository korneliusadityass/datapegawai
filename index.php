<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login Data Pegawai</title>

    <style>
        body{
                background-image: url('gambar/loginbg.jpg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
                background-attachment: fixed;
                margin: 0;
        }
    .container {
        width: 350px;
        background-image: url('gambar/formbg.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        opacity: 85%;
        /*meletakkan form ke tengah*/
        margin: 240px auto;
        /*padding: 50px 30px;*/
        box-shadow: 0px 0px 50px 4px #d6d6d6;
    }
    table tr td{
	color: white;
    }
    p{
        color: white;
    }
    </style>
</head>

<body>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

    <table class="container" align="center">
        <form action="cek_login.php" method="POST">
            <tr>
                <th align="center" colspan="2">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
                </th>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" placeholder="Username" name="username" value="" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" placeholder="Password" name="password" value="" required></td>
            </tr>
            <tr>
                <th align="center" colspan="2">
                    <br>
                    <input type="submit" name="submit" value="Login" />
                </th>
            <tr>
            <tr>
                <th align="center" colspan="2">
                    <p>Anda sudah memiliki akun? <a style="color:yellow;" href="register.php">Register</a></p>
                </th>
            </tr>
        </form>
    </table>
</body>

</html>