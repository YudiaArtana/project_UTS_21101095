<?php
    function insertData($data){
        

        $sqlINSERT = "INSERT INTO rekam_medis(id_rekam, id_pasien, id_dokter, diagnosa, tgl_periksa)
        VALUES ('".$data["ID"]."', '".$data["IDPS"]."', '".$data["IDDK"]."', '".$data["DIAGNOSA"]."', '".$data["TGL"]."');";
    
        include_once("dbkoneksi2.php");
        $hasil = mysqli_query($con, $sqlINSERT);
    
        return $hasil;
    }


    function updateData($data){

    
        $sql = "UPDATE rekam_medis SET
            id_rekam = '".$data["ID2"]."',
            id_pasien = '".$data["IDPS"]."',
            id_dokter = '".$data["IDDK"]."',
            diagnosa = '".$data["DIAGNOSA"]."',
            tgl_periksa = '".$data["TGL"]."'
            WHERE id_rekam = '".$data["ID1"]."';";

        include_once("dbkoneksi2.php");
        $hasil = mysqli_query($con, $sql);

        return $hasil;

    }

    

    function viewData(){
        include_once("dbkoneksi2.php");
        $sql = "SELECT * FROM rekam_medis;";
        $hasil = mysqli_query($con, $sql);
        $hasil1 = "";
        $i = 1;
        while($h = mysqli_fetch_array($hasil)){

            $hasil1 .= '<tr>
            <td class = "text-center">'.$i.'</td>
            <td>'.$h["id_rekam"].'</td>
            <td>'.$h["id_pasien"].'</td>
            <td>'.$h["id_dokter"].'</td>
            <td>'.$h["diagnosa"].'</td>
            <td>'.$h["tgl_periksa"].'</td>
            <td class = "text-center">
                <a class="btn btn-primary fw-bold" href="rekam_updatedata.php?id='.$h["id_rekam"].'">
                Edit
                </a>
            </td>
            <td>
                <a class="btn btn-danger fw-bold" href="rekam_deletedata.php?id='.$h["id_rekam"].'" onClick=\'return confirm("Apakah anda yakin akan menghapus data ini?");\'>
                Hapus
                </a>
            </td>
        </tr>';

        $i++;
        }
        return $hasil1;
    }



    

