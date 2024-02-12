<?php
include ('koneksi.php');
    $nama           = $_POST['nama'];
    $jabatan        = $_POST['jabatan'];
    $status         = $_POST['status'];

    $query="INSERT INTO statuskaryawan(nama, jabatan, status) VALUES ('$nama', '$jabatan', '$status')";
    $result=mysqli_query($db, $query);
    
    if($result==true){
        header('Location: status(admin).php');
    }
    else{
        header('Location: inputstatus.php');
    }
    ?>