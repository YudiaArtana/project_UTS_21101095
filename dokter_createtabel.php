<?php

    include_once("dbkoneksi2.php");


    $sql = "CREATE TABLE dokter(
        id_dokter varchar(10) PRIMARY KEY, 
        nama_dokter varchar(50),
        alamat varchar(50),
        no_telepon varchar(20),
        jenis_kelamin varchar(1),
        spesialisasi varchar(20)
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Dokter Berhasil Dibuat <br>";
    }else{
        echo "Tabel Dokter Gagal Dibuat <br>";
    }
    mysqli_close($con);