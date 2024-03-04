<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(90deg, #ffffff 0%, #a5cee8 100%);
            margin: 0;
            padding: 0;
            color: #333; /* Changed text color */
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
            margin-top: 50px; /* Adjusted margin */
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 70px); /* Adjusted height */
        }

        .content {
            text-align: center;
        }

        .content img {
            max-width: 80%; /* Adjusted image size */
            height: auto;
            margin-bottom: 20px; /* Increased margin */
        }

        .content h1 {
            font-size: 3rem; /* Adjusted font size */
            font-weight: bold; /* Bold font */
            margin-bottom: 10px; /* Increased margin */
        }

        .content h2 {
            font-size: 2rem; /* Adjusted font size */
            font-weight: bold; /* Bold font */
            margin-bottom: 20px; /* Increased margin */
        }

        .content h3 {
            font-size: 1.5rem; /* Adjusted font size */
            font-weight: bold; /* Bold font */
            margin-bottom: 20px; /* Increased margin */
        }

        .content h4 {
            font-size: 1.2rem; /* Adjusted font size */
            margin-bottom: 30px; /* Increased margin */
        }

        .get-started-link {
            text-decoration: none;
            color: #fff; /* Changed text color */
            font-weight: bold;
            font-size: 1.2rem; /* Adjusted font size */
            padding: 10px 20px; /* Adjusted padding */
            background-color: #007bff; /* Changed background color */
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .get-started-link:hover {
            background-color: #0056b3; /* Darker color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <div class="content">
                <h1>Mulai jelajahi dunia pengetahuan dengan perpustakaan digital kami</h1>
                <h2>Klik untuk memulai!</h2>
                <a href="login.php" class="get-started-link">Get Started</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
