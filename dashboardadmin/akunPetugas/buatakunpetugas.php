<?php
$conn = mysqli_connect("localhost", "root", "", "ukksipa");
session_start();

if(!isset($_SESSION["user_id"]) ) {
  header("Location: ../../login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title>Perpustakaanku - Registration</title>
  <link rel="stylesheet" href="../../register/registerr.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    /* Add your custom styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background-color: #fff;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 400px;
      width: 100%;
    }
    .title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }
    .input-group {
      margin-bottom: 20px;
    }
    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }
    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .button {
      text-align: center;
    }
    .button input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .button input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="title">Registration</div>
    <form action="../../backend/loginpetugas.php" method="post">
      <div class="input-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" placeholder="Enter your name" required name="fullname" />
      </div>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Enter your username" required name="username" />
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter your email" required name="email"/>
      </div>
      <div class="input-group">
        <label for="alamat">Address</label>
        <input type="text" id="alamat" placeholder="Enter your address" required name="alamat" />
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" required name="password" />
      </div>
      <div class="button">
        <input type="submit" style= "color: black;"value="Register" />
      </div>
    </form>
  </div>
</body>
</html>
