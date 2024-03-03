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
function isBookSaved($userId, $bookId, $connection) {
    $query = "SELECT * FROM koleksi WHERE userid = $userId AND bukuid = $bookId";
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result) > 0;
}

// Handle simpan dan hapus simpan
if(isset($_POST['simpan'])) {
    $userId = $_SESSION["user_id"];
    $bookId = $_POST['bukuid'];
    $isSaved = isBookSaved($userId, $bookId, $conn);
    
    if($isSaved) {
        // Hapus penyimpanan buku
        $deleteQuery = "DELETE FROM koleksi WHERE userid = $userId AND bukuid = $bookId";
        mysqli_query($conn, $deleteQuery);
    } else {
        // Simpan buku
        $insertQuery = "INSERT INTO koleksi (userid, bukuid) VALUES ($userId, $bookId)";
        mysqli_query($conn, $insertQuery);
    }
    // Redirect kembali ke halaman setelah simpan atau hapus simpan
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous" rel="stylesheet">
    <style>
        body {
            background-image: url('../../assets/background.jpeg');
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
            color: #000; /* Warna tulisan hitam */
        }
        .navbar-brand {
            margin: 10px;
            color: #000; /* Warna tulisan hitam */
            font-size: 30px;
            font-weight: bold;
        }
        .title {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            color: #000; /* Warna tulisan hitam */
        }
        .back-btn {
            margin-top: 20px;
            margin-bottom: 20px;
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
        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }
        .search-input {
            width: 60%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }
        .search-btn {
            background-color: #3c4a6b;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-left: 10px;
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
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease;
            width: 15rem;
            margin-bottom: 20px;
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
            color: #000; /* Warna tulisan hitam */
        }
        .list-group-item {
            margin-bottom: 0.5rem;
            color: #000; /* Warna tulisan hitam */
        }
        .card-body {
            padding: 1rem;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
        }
        .btn {
            margin: 0 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">SeriBaca</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="../dashboardmember.php" class="btn back-btn"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2 class="title">Daftar Buku</h2>
        <form action="" method="post" class="search-form">
            <div class="input-group mb-3">
                <input class="form-control search-input" type="text" name="keyword" id="keyword" placeholder="Cari judul atau kategori buku...">
                <button class="btn search-btn" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            </div>
        </form>
        <div class="layout-card-custom">
            <?php foreach ($buku as $item) : ?>
                <?php
                $isSaved = isBookSaved($_SESSION["user_id"], $item["id"], $conn);
                $buttonColor = $isSaved ? 'pink' : '#3c4a6b';
                $buttonLabel = $isSaved ? '<i class="fas fa-check"></i> Disimpan' : '<i class="far fa-bookmark"></i> Simpan';
                ?>
                <div class="card">
                    <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item["judul"]; ?></h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kategori : <?= $item["nama_kategori"]; ?></li>
                        </ul>
                        <div class="btn-group">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="userid" value="<?php echo $_SESSION["user_id"]; ?>">
                                <input type="hidden" name="bukuid" value="<?= $item["id"]; ?>">
                                <button type="submit" name="simpan" class="btn btn-tandai" style="background-color: <?= $buttonColor; ?>">
                                    <?= $buttonLabel; ?>
                                </button>
                            </form>
                            <a class="btn btn-primary btn-ulasan" href="ulasan.php?id=<?= $item["id"]; ?>">Ulasan</a>
                            <a class="btn btn-success" href="detailBuku.php?id=<?= $item["id"]; ?>">Pinjam</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
