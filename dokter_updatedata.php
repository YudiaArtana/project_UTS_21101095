<?php
    if(isset($_POST["txSIMPAN"])){
        $data["ID1"] = $_POST["txIDLAMA"];
        $data["ID2"] = $_POST["txID"];
        $data["NAMA"] = $_POST["txNAMA"];
        $data["ALAMAT"] = $_POST["txALAMAT"];
        $data["NOHP"] = $_POST["txNOHP"];
        $data["JK"] = $_POST["txJK"];
        $data["SP"] = $_POST["txSP"];

        include_once("dokter_fungsicrud.php");
        updateData($data);
        header("location: dokter_viewdata.php");
    }

    if(isset($_GET["id"])){
        include_once("dbkoneksi2.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM dokter WHERE id_dokter='".$id."';";
        $hasil = mysqli_query($con, $sql);
        $h = mysqli_fetch_array($hasil);
          

        
        if($h["jenis_kelamin"]=="L"){
            $selectL = "selected";
            $selectP = "";
        }else if($h["jenis_kelamin"]=="P"){
            $selectL = "";
            $selectP = "selected";
        }else{
            $selectL = "";
            $selectP = "";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <style type="text/css">
        body{
            font-family: 'Nunito', sans-serif;
            background-color: #F0F1F1;
        }

        nav{
            background-color: white;
        }

        .container{
            margin-top: 4rem;
        }

        .card-header{
            background-color: white;
        }
        
    </style>
    <title>Edit Data Dokter</title>
</head>
<body>
    <nav class="navbar navbar-light py-4 shadow-sm">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand fw-bold fs-1" href="index.php">RUMAH SAKIT</a>
    </div>
    </nav>


    <div class="container vh-100">
        <div>
            <a href="dokter_viewdata.php" class="btn btn-danger px-5 py-3 mb-3 rounded-pill fw-bold">Kembali</a>
        </div>
        <div class="card border-0 p-3 shadow">
            <div class="card-header border-0">
                <h3 class="fw-bold">Edit Data Dokter</h3>   
            </div>
            <div class="card-body">
                <form action="dokter_updatedata.php" method="POST">
                <input type="hidden" name="txIDLAMA" value="<?=$h['id_dokter'];?>">
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ID DOKTER</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan ID Dokter ex : IDDK123" name="txID" value="<?=$h['id_dokter'];?>">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">NAMA</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan Nama Dokter" name="txNAMA" value="<?=$h["nama_dokter"];?>">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ALAMAT</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan Alamat Dokter" name="txALAMAT" value="<?=$h["alamat"];?>">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">NOMOR TELEPON</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan No Telepon Dokter" name="txNOHP" value="<?=$h["no_telepon"];?>">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">JENIS KELAMIN</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txJK" id="">
                                <option selected value="">--Pilih Jenis Kelamin--</option>
                                <option value="L"<?=$selectL;?>>Laki - Laki</option>
                                <option value="P"<?=$selectP;?>>Perempuan</option>
                            </select>
                        </div> 
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">SPESIALISASI</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan Spesialisasi Dokter" name="txSP" value="<?=$h["spesialisasi"];?>">
                        </div>
                        
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary p-3 fw-bold" type="submit" name="txSIMPAN">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>