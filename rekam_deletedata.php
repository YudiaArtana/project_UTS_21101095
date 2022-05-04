<?php
    include_once("dbkoneksi2.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM rekam_medis WHERE id_rekam = '".$_GET["id"]."'";
        $hasil = mysqli_query($con, $sql);
    }
    mysqli_close($con);
    header("location: rekam_viewdata.php");