<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda - GU&IM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(90deg, #ffffff 0%, #a5cee8 100%);
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ffffff;
            padding: 10px 20px;
            width: 100%;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }

        header img {
            max-width: 150px;
            height: auto;
        }

        .container {
            margin-top: 70px; /* Adjust as needed */
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 70px); /* Adjust for header height */
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .content img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1em;
        }

        .content h1, .content h2, .content h3, .content h4 {
            color: #000;
            margin: 0;
        }

        .content h1 {
            font-size: 5vw;
            font-weight: 300;
            -webkit-text-stroke-color: rgba(23, 10, 14, 0.66);
            -webkit-text-stroke-width: 1px;
        }

        .content h2 {
            font-size: 2vw;
            font-weight: 300;
        }

        .content h3 {
            font-size: 2.5vw;
            font-weight: 500;
        }

        .content h4 {
            font-size: 3vw;
            font-weight: 500;
        }

        .get-started-link {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 1.5vw;
            margin-top: 1em;
            padding: 0.5em 1em;
            border: 2px solid #000;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .get-started-link:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <a class="navbar-brand" href="#" style="color: black;">SeriBaca</a>

    <div class="container">
        <div class="content-wrapper">
            <div class="content">
                <img src="assets/orang.png" alt="Ilustrasi Orang Membaca">

                <div class="text">
                    <h1>GU&IM</h1>
                    <h2>Gudang Ilmu</h2>
                    <br>
                    <br>
                    <h3>Mari temukan petualangan baru didalam</h3>
                    <h4>buku!</h4>
                    <br>
                    <br>
                    <a href="login.php" class="get-started-link">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
