<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'project');
if (mysqli_error($conn)) {
  echo "Error in connecting to database";
}
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
  <!-- Header -->
  <header class="header">
    <nav class="nav">
      <a href="#" class="nav_logo">Mobile Shop</a>

      <ul class="nav_items">
        <li class="nav_item">
          <a href="#" class="nav_link">Home</a>
        </li>
        <li class="nav_item">
          <a href="#" class="nav_link">Product</a>
        </li>
        <li class="nav_item">
          <a href="#" class="nav_link">About Us</a>
        </li>
        <li class="nav_item">
          <a href="#" class="nav_link">Contact</a>
        </li>
      </ul>

      <button class="button" id="form-open">Login</button>
    </nav>
  </header>

  <!-- Home -->
  <section class="home">
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

          <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
        </form>
      </div>

      <!-- Signup From -->
      <div class="form signup_form">
        <form action="#" method="POST">
          <h2>Signup</h2>
          <!-- <div>
            <select name="role" id="role" style="width: 60%; height: 20px; margin-top: 30px; margin-left: 40px;">
              <option class="role_val" value="" name="">--Select Role--</option>
              <option class="role_val" value="admin" name="role">Admin</option>
              <option class="role_val" value="employee" name="role">Employee</option>
              <option class="role_val" value="customer" name="role">Customer</option>
            </select>
          </div> -->
          <div class="input_box">
            <i class="uil uil-user"></i>
            <input type="text" placeholder="Enter your name" name="name" required />
          </div>
          <div class="input_box">
            <input type="email" placeholder="Enter your email" name="email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Create password" name="password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Confirm password" name="confirm_password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div>
            <input class="button" type="submit" value="Signup Now" name="signup">
          </div>

          <!-- <button class="button">Signup Now</button> -->

          <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
      </div>

      <!-- Forgot Password -->

    </div>
  </section>

  <script src="script.js"></script>
</body>

</html>

<?php
// if (isset($_POST['forgot_pass'])) {
//   $email = $_POST['email'];
//   $new_password1 = $_POST['new_password1'];
//   $new_password2 = $_POST['new_password2'];
//   $otp = $_POST['otp'];

//   if ($email == '' || $new_password1 == '' || $new_password2 == '' || $otp == '') {
//     echo "<script>alert('Please fill all the fields')</script>";
//   } elseif ($new_password1 == $new_password2) {
//     $query = "UPDATE tblUser SET password='$new_password1' WHERE email='$email'";
//     $result = mysqli_query($conn, $query);
//     if ($result) {
//       echo "<script>alert('Password Changed Successfully')</script>";
//     } else {
//       echo "<script>alert('Password Change Failed')</script>";
//     }
//   } else {
//     echo "<script>alert('Password does not match')</script>";
//   }
// }
?>

<?php
if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $role = $_POST['role'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if ($name == '' || $role == '' || $email == '' || $password == '' || $confirm_password == '') {
    echo "<script>alert('Please fill all the fields')</script>";
  } elseif ($password == $confirm_password) {
    $query = "INSERT INTO tblUser (name, role, email, password) VALUES ('$name', '$role', '$email', '$password')";
    $result = mysqli_query($conn, $query);
    if ($result) {
      echo "<script>alert('Signup Successful')</script>";
    } else {
      echo "<script>alert('Signup Failed')</script>";
    }
  } else {
    echo "<script>alert('Password does not match')</script>";
  }
}
?>

<?php
if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email != '' || $password != '') {
    $role_fetch = "SELECT role FROM tblUser WHERE email='$email' AND password='$password'";
    $role_result = mysqli_query($conn, $role_fetch);
    // $role = mysqli_fetch_row($role_result);
    if (mysqli_num_rows($role_result) > 0) {
      while ($row = mysqli_fetch_assoc($role_result)) {
        $role = $row['role'];
      }
    }

    $query = "SELECT * FROM tblUser WHERE email='$email' AND password='$password' AND role='$role'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if ($row['email'] == $email && $row['password'] == $password && $row['role'] == $role) {
      if ($role == 'admin') {
        echo "<script> location.href = 'admin_panel.php'</script>";
      } else if ($role == 'employee') {
        echo "<script>location.href = 'admin_panel.php'</script>";
      } else if ($role == 'customer') {
        echo "<script>location.href = 'cust_panel.php'</script>";
      }
    } else {
      echo "<script>alert('Invalid Information')</script>";
    }
  } else {
    echo "<script>alert('Please fill all the fields')</script>";
  }
}
?>