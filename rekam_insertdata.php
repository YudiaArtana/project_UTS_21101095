<?php
    if(isset($_POST["txSIMPAN"])){
        $data["ID"] = $_POST["txID"];
        $data["IDPS"] = $_POST["txIDPS"];
        $data["IDDK"] = $_POST["txIDDK"];
        $data["DIAGNOSA"] = $_POST["txDIAGNOSA"];
        $data["TGL"] = $_POST["txTGL"];

        include_once("rekam_fungsicrud.php");
        insertData($data);
        header("location: rekam_viewdata.php");
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
    <title>Tambah Data Rekam Medis</title>
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
                <h3 class="fw-bold">Tambah Data Rekam Medis</h3>   
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ID REKAM</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan ID Rekam Medis ex : IRM123" name="txID">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ID PASIEN</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txIDPS" id="">
                                <option selected value="">--Pilih ID Pasien--</option>
                                <?php
                                    include("dbkoneksi2.php");
                                    $sql = "SELECT * FROM pasien";
                                    $hasil = mysqli_query($con, $sql);
                                    while($h = mysqli_fetch_array($hasil)){
                                        echo "<option value=$h[id_pasien]>$h[id_pasien] - $h[nama_pasien]</option>";
                                    }
                                ?>
                            </select>
                        </div> 
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">ID DOKTER</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txIDDK" id="">
                                <option selected value="">--Pilih ID Dokter--</option>
                                <?php
                                    include("dbkoneksi2.php");
                                    $sql = "SELECT * FROM dokter";
                                    $hasil = mysqli_query($con, $sql);
                                    while($h = mysqli_fetch_array($hasil)){
                                        echo "<option value=$h[id_dokter]>$h[id_dokter] - $h[nama_dokter] (sp. $h[spesialisasi])</option>";
                                    }
                                ?>
                            </select>
                        </div> 
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">DIAGNOSA</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Masukkan Diagnosa" name="txDIAGNOSA">
                        </div>
                    </div>
                    <div class="mb-3 fw-bold row">
                        <label class="col-md-2 col-form-label">TANGGAL PERIKSA</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="txTGL">
                        </div>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary p-3 fw-bold" type="submit" name="txSIMPAN">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>