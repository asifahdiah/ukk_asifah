<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Admin Dashboard</title>
    <style>
        body {
            background-image: url('../assets/background.jpeg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .navbar-brand {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #000;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-nav .nav-item .nav-link {
            color: #000;
        }

        .dropdown {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .dropdown-toggle::after {
            display: none; /* Hide default caret */
        }

        .dropdown-menu {
            margin-top: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .dropdown-item {
            padding: 10px;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
        }

        .card-custom {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
            text-align: center;
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .btn-custom {
            background-color: #3c4a6b;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 15px 30px;
            margin-top: 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #2c3756;
        }

        .btn-custom i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SeriBaca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/lgoadmin.jpg" alt="adminLogo" width="40px">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item text-center" href="#"><img src="../assets/lgoadmin.jpg" alt="adminLogo" width="30px"></a></li>
                            <hr>
                            <li><a class="dropdown-item text-center bg-danger text-light rounded" href="signout.php">Sign Out <i class="fas fa-sign-out-alt"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card-custom">
                    <button onclick="location.href='generatelaporan/generatelaporan.php';" class="btn-custom"><i class="fas fa-file-alt"></i> Generate Laporan</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom">
                    <button onclick="location.href='buku/tambahBuku.php';" class="btn-custom"><i class="fas fa-plus"></i> Tambah Buku/Kategori</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom">
                    <button onclick="location.href='peminjaman/daftarpinjam.php';" class="btn-custom"><i class="fas fa-book-open"></i> Peminjaman</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card-custom">
                    <button onclick="location.href='pengembalian/daftarpengembalian.php';" class="btn-custom"><i class="fas fa-book-return"></i> Pengembalian</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom">
                    <button onclick="location.href='akunPetugas/buatakunpetugas.php';" class="btn-custom"><i class="fas fa-user-plus"></i> Buat Akun Petugas</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom">
                    <button onclick="location.href='buku/daftarbuku.php';" class="btn-custom"><i class="fas fa-book"></i> Daftar Buku</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
