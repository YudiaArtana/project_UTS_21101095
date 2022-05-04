<?php
    function insertData($data){
        

        $sqlINSERT = "INSERT INTO pasien(id_pasien, nama_pasien, alamat, no_telepon, jenis_kelamin, tanggal_lahir)
        VALUES ('".$data["ID"]."', '".$data["NAMA"]."', '".$data["ALAMAT"]."', '".$data["NOHP"]."', '".$data["JK"]."', '".$data["TGL"]."');";
    
        include_once("dbkoneksi2.php");
        $hasil = mysqli_query($con, $sqlINSERT);
    
        return $hasil;
    }


    function updateData($data){
    
        $sql = "UPDATE pasien SET
            id_pasien = '".$data["ID2"]."',
            nama_pasien = '".$data["NAMA"]."',
            alamat = '".$data["ALAMAT"]."',
            no_telepon = '".$data["NOHP"]."',
            jenis_kelamin = '".$data["JK"]."',
            tanggal_lahir = '".$data["TGL"]."'
            WHERE id_pasien = '".$data["ID1"]."';";

        include_once("dbkoneksi2.php");
        $hasil = mysqli_query($con, $sql);

        return $hasil;

    }


    function viewData(){
        include_once("dbkoneksi2.php");
        $sql = "SELECT * FROM pasien;";
        $hasil = mysqli_query($con, $sql);
        $hasil1 = "";
        $i = 1;
        while($h = mysqli_fetch_array($hasil)){
            if($h["jenis_kelamin"]=="L"){
                $jk = "Laki-Laki";
            }else if($h["jenis_kelamin"]=="P"){
                $jk = "Perempuan";
            }else{
                $jk = "";
            }
            $hasil1 .= '<tr>
            <td class = "text-center">'.$i.'</td>
            <td>'.$h["id_pasien"].'</td>
            <td>'.$h["nama_pasien"].'</td>
            <td>'.$h["alamat"].'</td>
            <td>'.$h["no_telepon"].'</td>
            <td>'.$jk.'</td>
            <td>'.$h["tanggal_lahir"].'</td>
            <td class = "text-center">
                <a class="btn btn-primary fw-bold" href="pasien_updatedata.php?id='.$h["id_pasien"].'">
                Edit
                </a>
            </td>
            <td>
                <a class="btn btn-danger fw-bold" href="pasien_deletedata.php?id='.$h["id_pasien"].'" onClick=\'return confirm("Apakah anda yakin akan menghapus data ini?");\'>
                Hapus
                </a>
            </td>
        </tr>';

        $i++;
        }
        return $hasil1;
    }



    

