<?php
$conn = mysqli_connect("localhost", "root", "", "ukksipa");
session_start();

if(!isset($_SESSION["user_id"]) ) {
  header("Location: ../../login.php");
  exit;
}

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    // Buat query pencarian
    $query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
              JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
              JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id
              WHERE buku.judul LIKE '%$keyword%'
              OR kategoribuku.nama_kategori LIKE '%$keyword%'";
  } else {
    // Jika tidak ada pencarian, ambil semua buku
    $query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
              JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
              JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id";
  }

$result = mysqli_query($conn, $query);
$buku = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Buku || Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous" rel="stylesheet">
    <style>
        body {
            background-image: url('../../assets/background.jpeg');
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
            color: #fff;
        }
        .navbar-brand {
            color: #000;
            font-size: 30px;
            font-weight: bold;
        }
        .back-btn {
            background-color: #3c4a6b;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #2c3859;
        }
        .title {
            text-align: center;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.8rem;
            font-weight: bold;
            text-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
        }
        .search-form {
            margin-bottom: 1rem;
            text-align: center;
        }
        .search-input {
            width: 60%;
            padding: 10px;
            border: none;
            border-radius: 5px 0 0 5px;
        }
        .search-btn {
            background-color: #3c4a6b;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .search-btn:hover {
            background-color: #2c3859;
        }
        .layout-card-custom {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
        }
        .card {
            border: 2px solid #000;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-title {
            font-weight: bold;
            margin: 0.5rem 0;
        }
        .list-group-item {
            margin-bottom: 0.5rem;
        }
        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
        }
        .btn {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">SeriBaca</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="../dashboardpetugas.php" class="btn back-btn"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2 class="title">Daftar Buku</h2>
        <form action="" method="post" class="search-form">
            <div class="input-group mb-3">
                <input class="form-control search-input" type="text" name="keyword" id="keyword" placeholder="Cari data buku...">
                <button class="btn search-btn" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            </div>
        </form>
        <div class="layout-card-custom">
            <?php foreach ($buku as $item) : ?>
                <div class="card" style="width: 15rem;">
                    <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item["judul"]; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kategori : <?= $item["nama_kategori"]; ?></li>
                        <li class="list-group-item">Id Buku : <?= $item["id"]; ?></li>
                    </ul>
                    <div class="card-body">
                        <a class="btn btn-success" href="updatebuku.php?id=<?= $item["id"]; ?>" id="review">Edit</a>
                        <a name="delete" class="btn btn-danger" href="../../backend/deletebuku.php?id=<?= $item["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data buku ? ');">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
