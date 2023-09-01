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
    <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->

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

                <div class="login_signup">Already have an account? <a href="login.php" id="login">Login</a></div>
            </form>
        </div>

        <!-- Forgot Password -->

    </div>
    <!-- <section class="home">
    </section> -->
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos necessitatibus molestias quibusdam obcaecati, saepe harum corrupti debitis ipsam totam repellendus exercitationem laudantium ea fuga! Ea magni debitis expedita quasi nobis?</p>
    <!-- <script src="script.js"></script> -->
</body>

</html>

<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $role = "customer";
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