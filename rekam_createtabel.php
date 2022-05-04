<?php

    include_once("dbkoneksi2.php");


    $sql = "CREATE TABLE rekam_medis(
        id_rekam varchar(10) PRIMARY KEY, 
        id_pasien varchar(10),
        id_dokter varchar(10),
        diagnosa varchar(100),
        tgl_periksa date
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Rekam Medis Berhasil Dibuat <br>";
    }else{
        echo "Tabel Rekam Medis Gagal Dibuat <br>";
    }
    mysqli_close($con);