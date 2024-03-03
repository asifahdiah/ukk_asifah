<?php
if(!isset($_SESSION["user_id"]) ) 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Eperpus</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      background-image: url('assets/background.jpeg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      padding: 0;
    }
    .container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 30px;
      border-radius: 10px;
      width: 320px;
    }
    .title {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .form-control {
      border-radius: 5px;
      margin-bottom: 20px;
    }
    .button {
      text-align: center;
    }
    .signup-link {
      text-align: center;
      margin-top: 20px;
    }
    hr {
      border-top: 2px solid #333;
      width: 100%;
      margin: 20px 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="title">Login</div>
    <hr>
    <form action="backend/login.php" method="post">
      <div class="user-details">
        <div class="input-box">
          <input type="text" class="form-control" placeholder="Username/Email" required name="username_email" />
        </div>
        <div class="input-box">
          <input type="password" class="form-control" placeholder="Password" required name="password" />
        </div>
      </div>
      <div class="button">
        <input type="submit" class="btn btn-primary" value="Login">
      </div>
      <div class="signup-link">
        <p>Don't have an account yet? <a href="register/register.html" class="text-primary">Sign Up</a></p>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

