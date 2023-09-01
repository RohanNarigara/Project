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
    <link rel="stylesheet" href="style2.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <style>
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
            color: #ffffff;
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
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <a href="#" class="nav_logo">Mobile Shop</a>

            <ul class="nav_items">
                <li class="nav_item">
                    <a href="#" class="nav_link">Home</a>
                    <a href="#" class="nav_link">Product</a>
                    <a href="#" class="nav_link">About Us</a>
                    <a href="#" class="nav_link">Contact</a>
                </li>
            </ul>

            <button class="button" id="form-open">Forget Password</button>
        </nav>
    </header>

    <!-- Home -->
    <section class="home show">
        <div class="form_container">
            <a href="/Project/">
                <i class="uil uil-times form_close"></i>
            </a>
            <!-- Forgot Password -->
            <div class="form login_form">
                <form action="#" method="POST">
                    <h2>Forgot Password?</h2>

                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" name="email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Create new password" name="new_password1" id="" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Confirm new password" name="new_password2" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <!-- <div class="input_box">
                        <i class="uil uil-dialpad-alt"></i>
                        <input type="text" placeholder="Enter your OTP" name="otp" required />
                    </div> -->

                    <div>
                        <input class="button" type="submit" value="Change Now" name="forgot_pass">
                    </div>
                    <!-- <button class="button">Change Now</button> -->
                </form>
            </div>
        </div>
    </section>

    <script src="script2.js"></script>
</body>

</html>

<?php
if (isset($_POST['forgot_pass'])) {
    $email = $_POST['email'];
    $new_password1 = $_POST['new_password1'];
    $new_password2 = $_POST['new_password2'];

    if ($email == '' || $new_password1 == '' || $new_password2 == '') {
        echo "<script>alert('Please fill all the fields')</script>";
    } elseif ($new_password1 == $new_password2) {
        $query = "UPDATE tblUser SET password='$new_password1' WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            // echo "<script>alert('Password Changed Successfully')</script>";
            echo "<script>location.href='index.php'</script>";
        } else {
            echo "<script>alert('Password Change Failed')</script>";
        }
    } else {
        echo "<script>alert('Password does not match')</script>";
    }
}
?>