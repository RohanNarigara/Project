<?php
    require 'index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Mobile Shop Management System</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <!-- <style>
    #role {
      text-align: center;
      font-family: 'Poppins', sans-serif;
      font-size: 15px;
      background: transparent;
      border: none;
      outline: none;
      /* color: #e4e4e4; */
    }

    .role_val {
      background: transparent;
      text-align: center;
      color: black;
    }

    .buttonotp {
      padding: 6px 24px;
      border: 2px solid #fff;
      background: transparent;
      border-radius: 6px;
      cursor: pointer;
    }

    .buttonotp:active {
      transform: scale(0.98);
    }

    ul {
      display: flex;
      gap: 2.5rem;
    }

    li {
      display: block;
      transition: .5s;
      cursor: pointer;
    }

    ul:hover li {
      filter: blur(2px);
    }

    ul li:hover {
      filter: blur(0px);
    }
  </style> -->
</head>

<body>
      <!-- Home -->
  <!-- <section class="home"> -->
    <div class="form_container">
      <i class="uil uil-times form_close"></i>
      <!-- Login From -->
      <div class="form login_form">
        <form action="" method="POST">
          <h2>Signin</h2>

          <div class="input_box">
            <input type="email" placeholder="Enter your email" name="email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Enter your password" name="password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div class="option_field">
            <a href="forgot_pass.php" class="forgot_pw">Forgot password?</a>
          </div>

          <div>
            <input class="button" type="submit" value="Login Now" name="signin">
          </div>
          <!-- <button class="button">Login Now</button> -->

          <div class="login_signup">Don't have an account? <a href="registration_customer.php" id="signup">Signup</a></div>
        </form>
      </div>

      <!-- Signup From -->

      <!-- Forgot Password -->

    </div>
  <!-- </section> -->

  <!-- <script src="script.js"></script> -->
</body>

</html>