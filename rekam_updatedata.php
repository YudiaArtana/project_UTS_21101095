<?php
    if(isset($_POST["txSIMPAN"])){
        $data["ID1"] = $_POST["txIDLAMA"];
        $data["ID2"] = $_POST["txID"];
        $data["IDPS"] = $_POST["txIDPS"];
        $data["IDDK"] = $_POST["txIDDK"];
        $data["DIAGNOSA"] = $_POST["txDIAGNOSA"];
        $data["TGL"] = $_POST["txTGL"];

        include_once("rekam_fungsicrud.php");
        updateData($data);
        header("location: rekam_viewdata.php");
    }

    if(isset($_GET["id"])){
        include_once("dbkoneksi2.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM rekam_medis JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien JOIN dokter ON rekam_medis.id_dokter=dokter.id_dokter AND id_rekam='".$id."';";
        $hasil = mysqli_query($con, $sql);
        $h = mysqli_fetch_array($hasil);
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
    <title>Edit Data Rekam Medis</title>
</head>
<body>
    <nav class="navbar navbar-light py-4 shadow-sm">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand fw-bold fs-1" href="index.php">RUMAH SAKIT</a>
    </div>
    </nav>


    <div class="container vh-100">
        <div>
            <a href="rekam_viewdata.php" class="btn btn-danger px-5 py-3 mb-3 rounded-pill fw-bold">Kembali</a>
        </div>
        <div class="card border-0 p-3 shadow">
            <div class="card-header border-0">
                <h3 class="fw-bold">Edit Data Rekam Medis</h3>   
            </div>
            <div class="card-body">
                <form action="rekam_updatedata.php" method="POST">
                <input type="hidden" name="txIDLAMA" value="<?=$h['id_rekam'];?>">
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ID REKAM MEDIS</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan ID Rekam Medis ex : IDRM001" name="txID" value="<?=$h['id_rekam'];?>">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ID PASIEN</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txIDPS" id="">
                                <!-- Memperlihatkan Data Dari Tabel Relasi -->
                                <?php
                                    echo "<option selected value=$h[id_pasien]>$h[id_pasien] - $h[nama_pasien]</option>";
                                    $sql = "SELECT * FROM pasien";
                                    $hasil = mysqli_query($con, $sql);
                                    while($hsl = mysqli_fetch_array($hasil)){
                                        echo "<option value=$hsl[id_pasien]>$hsl[id_pasien] - $hsl[nama_pasien]</option>";  
                                    }
                                ?>
                            </select>
                        </div> 
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ID DOKTER</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txIDDK" id="">
                                <!-- Memperlihatkan Data Dari Tabel Relasi -->
                                <?php
                                    echo "<option selected value=$h[id_dokter]>$h[id_dokter] - $h[nama_dokter] (sp. $h[spesialisasi])</option>";
                                    $sql = "SELECT * FROM dokter";
                                    $hasil = mysqli_query($con, $sql);
                                    while($hsl = mysqli_fetch_array($hasil)){
                                        echo "<option value=$hsl[id_dokter]>$hsl[id_dokter] - $hsl[nama_dokter] (sp. $hsl[spesialisasi])</option>";  
                                    }
                                ?>
                            </select>
                        </div> 
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">DIAGNOSA</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan Diagnosa" name="txDIAGNOSA" value="<?=$h["diagnosa"];?>">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">TANGGAL PERIKSA</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="txTGL" value="<?=$h["tgl_periksa"];?>">
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