<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



     <!-- Bootstrap CSS & Icon -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


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
        
        .rekam{
            height: 416px;
        }

        .data{
            height: 200px;
        }

        .icon-size{
            font-size: 80px;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-light py-4 shadow-sm">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand fw-bold fs-1" href="#">RUMAH SAKIT</a>
    </div>
    </nav>

    <div class="container vh-100">
        <br>
        <h2 class="fw-bold">Dashboard</h1>
        <hr>
        <div class="row g-3">
            <div class="col-md-6">
                <a href="rekam_viewdata.php" class="text-decoration-none">
                    <div class="card text-center bg-warning text-white border-0 rounded-3 rekam d-flex align-items-center justify-content-center shadow-sm">
                        <i class="bi bi-clipboard2-pulse-fill icon-size"></i>
                        <h3 class="card-title fw-bold">Data Rekam Medis</h3>
                    </div>
                </a>
                
            </div>
            <div class="col-md-6">
                <a href="dokter_viewdata.php" class="text-decoration-none link-dark">
                    <div class="card mb-3 border-0 rounded-3 overflow-auto shadow-sm">
                        <div class="row g-0 data">
                            <div class="col-md-4 bg-primary text-white d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-plus-fill icon-size"></i>
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="card-title ms-3 fw-bold">Data Dokter</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="pasien_viewdata.php" class="text-decoration-none link-dark">
                    <div class="card border-0 rounded-3 overflow-auto shadow-sm">
                        <div class="row g-0 data">
                            <div class="col-md-4 bg-success text-white d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-fill icon-size"></i>
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="card-title ms-3 fw-bold">Data Pasien</h3>                            
                            </div>
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>