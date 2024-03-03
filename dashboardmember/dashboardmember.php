<?php
session_start();

if(!isset($_SESSION["user_id"]) ) {
  header("Location: ../login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('../assets/background.jpeg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        .navbar-brand {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #fff;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
        }

        .dropdown {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .dropdown-menu {
            margin-top: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            padding: 10px;
        }

        .dropdown-item {
            padding: 10px;
            color: #000;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
        }

        .btn-custom {
            background-color: #3c4a6b;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 20px 40px;
            margin-top: 20px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .btn-custom:hover {
            background-color: #2c3756;
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .btn-custom i {
            margin-right: 10px;
        }

        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            z-index: -1;
            transition: all 0.3s ease;
        }

        .btn-custom:hover::before {
            transform: scale(1.5);
        }

        .welcome-msg {
            color: #fff;
            text-align: center;
            margin-top: 100px;
            font-size: 24px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <a class="navbar-brand" href="#" style="color: black;">SeriBaca</a>

    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assets/memberlogo.png" alt="memberLogo" width="40px">
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item text-center" href="#"><img src="../assets/memberlogo.png" alt="adminLogo" width="30px"></a></li>
            <div class="alert alert-success welcome-msg" role="alert">Selamat datang, <?php echo $_SESSION['username']; ?>!</div>
            <hr>
            <li><a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signout.php">Sign Out <i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <button onclick="location.href='buku/daftarbuku.php';" class="btn-custom"><i class="fas fa-book"></i> Daftar Buku</button>
            </div>
            <div class="col-md-4">
                <button onclick="location.href='buku/detailpeminjaman.php';" class="btn-custom"><i class="fas fa-book-open"></i> Peminjaman</button>
            </div>
            <div class="col-md-4">
                <button onclick="location.href='buku/koleksibuku.php';" class="btn-custom"><i class="fas fa-bookmark"></i> Koleksi</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
