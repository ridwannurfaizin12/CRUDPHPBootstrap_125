<?php
//include koneksi database

include './config.php';

// Menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// Menginput data ke database
$result = $koneksi->
    query("INSERT INTO data_mahasiswa VALUES(0,'$nama', '$nim', '$alamat')");
    if($result){
        header("location:./index.php");
    }else {
        echo $koneksi->error; 
    }
?>