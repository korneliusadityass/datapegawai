<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
        font-family: sans-serif;
        background-image: url('gambar/loginbg.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        background-attachment: fixed;
        margin: 0;
    }

    h1 {
        text-align: center;
        /*ketebalan font*/
        font-weight: 300;
    }

    .tulisan_login {
        text-align: center;
        color: white;
        /*membuat semua huruf menjadi kapital*/
        text-transform: uppercase;
    }

    .kotak_login {
        width: 350px;
        background-image: url('gambar/formreg.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        opacity: 85%;
        /*meletakkan form ke tengah*/
        margin: 100px auto;
        padding: 50px 30px;
        box-shadow: 0px 0px 50px 4px #d6d6d6;
    }

    label {
        font-size: 11pt;
        color: white;
    }

    .form_login {
        /*membuat lebar form penuh*/
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 20px;
    }

    .tombol_login {
        background: #2aa7e2;
        color: white;
        font-size: 11pt;
        width: 100%;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
    }

    .link {
        color: yellow;
        text-decoration: none;
        font-size: 10pt;
    }

    .alert {
        background: #e44e4e;
        color: white;
        padding: 10px;
        text-align: center;
        border: 1px solid #b32929;
    }
    table tr td{
	color: white;
    }
    p{
        color: white;
    }
    th{
        color: white;
    }
    </style>
</head>

<body>
    <?php
require('koneksi.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($db,$username); 
	$password = md5($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
	$level = stripslashes($_REQUEST['level']);
	$level = mysqli_real_escape_string($db,$level);
    $email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($db,$email);
	$nama = stripslashes($_REQUEST['nama']);
	$nama = mysqli_real_escape_string($db,$nama);
        $query = "INSERT into `karyawan` (username, password, nama, email, level) 
		VALUES ('$username', '$password', '$nama', '$email', '$level')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<div class='form'>
<h3>Registrasi Berhasil.</h3>
<br/>Klik disini untuk <a href='index.php'>Login</a></div>";
        }
    }else{
?>
    <table class="kotak_login" align="center">
        <form name="registration" action="" method="post">
            <tr>
                <th align="center" colspan="2">Registrasi</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input class="form_login" type="text" name="nama" placeholder="Nama" required /></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input class="form_login" type="text" name="username" placeholder="Username" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input class="form_login" type="password" name="password" placeholder="Password" required /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form_login" type="email" name="email" placeholder="email" required /></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select class="form_login" name="level">
                        <option value="admin">Admin
                        <option value="pegawai">Pegawai
                    </select>
                </td>
            </tr>

            <tr>
                <th align="center" colspan="2"><input class="tombol_login" type="submit" name="submit"
                        value="Register" /></th>
            </tr>

            <tr>
                <th align="center" colspan="2">
                    <br>
                    <p>Anda sudah memiliki akun? <a style="color: yellow;" href="index.php">Login</a></p>
                </th>
            </tr>
        </form>
    </table>
    <?php } ?>
</body>

</html>