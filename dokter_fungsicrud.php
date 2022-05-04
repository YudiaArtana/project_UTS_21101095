<?php
    function insertData($data){

        $sqlINSERT = "INSERT INTO dokter(id_dokter, nama_dokter, alamat, no_telepon, jenis_kelamin, spesialisasi)
        VALUES ('".$data["ID"]."', '".$data["NAMA"]."', '".$data["ALAMAT"]."', '".$data["NOHP"]."', '".$data["JK"]."', '".$data["SP"]."');";

        include_once("dbkoneksi2.php");
        $hasil = mysqli_query($con, $sqlINSERT);

        return $hasil;
    }


    function updateData($data){
    
        $sql = "UPDATE dokter SET
            id_dokter = '".$data["ID2"]."',
            nama_dokter = '".$data["NAMA"]."',
            alamat = '".$data["ALAMAT"]."',
            no_telepon = '".$data["NOHP"]."',
            jenis_kelamin = '".$data["JK"]."',
            spesialisasi = '".$data["SP"]."'
            WHERE id_dokter = '".$data["ID1"]."';";

        include_once("dbkoneksi2.php");
        $hasil = mysqli_query($con, $sql);

        return $hasil;
        
    }

    function viewData(){
        include_once("dbkoneksi2.php");
        $sql = "SELECT * FROM dokter;";
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
            <td>'.$h["id_dokter"].'</td>
            <td>'.$h["nama_dokter"].'</td>
            <td>'.$h["alamat"].'</td>
            <td>'.$h["no_telepon"].'</td>
            <td>'.$jk.'</td>
            <td>'.$h["spesialisasi"].'</td>
            <td class = "text-center">
                <a class="btn btn-primary fw-bold" href="dokter_updatedata.php?id='.$h["id_dokter"].'">
                Edit
                </a>
            </td>
            <td>
                <a class="btn btn-danger fw-bold" href="dokter_deletedata.php?id='.$h["id_dokter"].'" onClick=\'return confirm("Apakah anda yakin akan menghapus data ini?");\'>
                Hapus
                </a>
            </td>
        </tr>';

        $i++;
        }
        return $hasil1;
    }



    

