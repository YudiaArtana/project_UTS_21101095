
<?php
include_once("dbkoneksi2.php");

if($con){
    $sql = "ALTER TABLE rekam_medis add constraint fk_dokter foreign key (id_dokter) references dokter (id_dokter),
    add constraint fk_pasien foreign key (id_pasien) references pasien (id_pasien)";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Relasi Berhasil Dibuat <br>";
    }else{
        echo "Relasi Gagal Dibuat <br>";
    }
    mysqli_close($con);
}
