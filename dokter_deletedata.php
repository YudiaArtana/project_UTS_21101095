<?php
    include_once("dbkoneksi2.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM dokter WHERE id_dokter = '".$_GET["id"]."'";
        $hasil = mysqli_query($con, $sql);
    }
    mysqli_close($con);
    header("location: dokter_viewdata.php");