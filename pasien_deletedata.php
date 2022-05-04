<?php
    include_once("dbkoneksi2.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM pasien WHERE id_pasien = '".$_GET["id"]."'";
        $hasil = mysqli_query($con, $sql);
    }
    mysqli_close($con);
    header("location: pasien_viewdata.php");