<?php

    include_once("dbkoneksi2.php");


    $sql = "CREATE TABLE pasien(
        id_pasien varchar(10) PRIMARY KEY, 
        nama_pasien varchar(50),
        alamat varchar(50),
        no_telepon varchar(20),
        jenis_kelamin varchar(1),
        tanggal_lahir date
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Pasien Berhasil Dibuat <br>";
    }else{
        echo "Tabel Pasien Gagal Dibuat <br>";
    }
    mysqli_close($con);