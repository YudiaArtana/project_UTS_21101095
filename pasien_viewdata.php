<?php
include("pasien_fungsicrud.php");
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

        .active{
            color: #0d6efd !important;
        }
        
    </style>
    <title>Data Pasien</title>
</head>

<body>
    <nav class="navbar navbar-light py-4 shadow-sm">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand fw-bold fs-1" href="index.php">RUMAH SAKIT</a>
    </div>
    </nav>

    <div class="container vh-100">
        <div class="card border-0 p-3 shadow">
            <div class="card-header border-0">
                <div class="row align-items-center py-4">
                    <div class="col">
                        <h3 class="mt-1 fw-bold">List Data Pasien</h3>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <a href='pasien_insertdata.php'><input class="btn btn-success py-3 px-5 fw-bold rounded-pill" type="button" value="Tambah Data"></a>
                    </div>
                </div>
                <ul class="nav nav-tabs fw-bold">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="rekam_viewdata.php">Rekam Medis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="dokter_viewdata.php">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-primary active" aria-current="page" href="pasien_viewdata.php">Pasien</a>
                    </li>
                </ul>
            </div>
            <div class="card-body overflow-auto">
                <table class="table table-striped table-borderless align-middle">
                    <thead class="table-primary align-middle">
                        <tr>
                            <th class = "py-3">No</th>
                            <th class = "py-3">ID Pasien</th>
                            <th class = "py-3">Nama Pasien</th>
                            <th class = "py-3">Alamat</th>
                            <th class = "py-3">No Telepon</th>
                            <th class = "py-3">Jenis Kelamin</th>
                            <th class = "py-3">Tanggal Lahir</th>
                            <th class= "py-3" colspan="2"></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?=viewData();?>
                    </tbody>
                </table>
            </div>
        </div>
        
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>