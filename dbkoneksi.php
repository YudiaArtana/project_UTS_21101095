<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASSCODE","");
    define("DBNAME","db_rekam_medis");
    define("DBPORT","3306");

    $con = mysqli_connect(DBHOST, DBUSER, DBPASSCODE) or die("Koneksi ke DBMS MySQL GAGAL<br>");
    echo "Koneksi ke DBMS MySQL SUKSES <br>";