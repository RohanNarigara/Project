<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "project");
if (mysqli_error($conn)) {
    echo "<script>alert('Error in connecting to database')</script>";
}
?>

<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <style>
        .dropbtn {
            background-color: transparent;
            padding: 16px;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* .dropbtn:hover{
      color: #d9d9d9;
    } */
        .dropdown {
            position: relative;
            display: inline-block;
            padding-top: 16px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 190px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #8718b5;
        }

        .dropdown:hover .dropdown-content {
            display: block;
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
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <a href="#" class="nav_logo">Mobile Shop</a>

            <ul class="nav_items">
                <li class="nav_item">
                    <a href="cust_panel.php" class="nav_link dropdown">Home</a>
                    <!-- <button class="dropbtn"><a href=".php" class="nav_link">Home</a></button> -->
                </li>
                <li class="nav_item">
                    <a href="" class="nav_link dropdown">Products</a>
                    <!-- <button class="dropbtn"><a href=".php" class="nav_link">Home</a></button> -->
                </li>
                <li class="nav_item">
                    <div class="dropdown">
                        <!-- <button class="dropbtn">Orders</button> -->
                        <a href="" class="nav_link">Orders</a>
                        <div class="dropdown-content">
                            <a href="Order.php">View Orders</a>
                            <a href="Order.php">Track Orders</a>
                            <a href="Order.php">Update Orders</a>
                        </div>
                    </div>
                </li>
                <li class="nav_item">
                    <div class="dropdown">
                        <!-- <button class="dropbtn"><a href="about.php" class="nav_link">About us</a></button> -->
                        <a href="" class="nav_link">About us</a>
                    </div>
                </li>
            </ul>

            <button class="button" id="form-open"><a href="index.php" class="nav_link" onclick="return signout()">Sign Out</a></button>
            <!-- <input class="button" type="submit" value="Log Out" name="signout" onclick="return signout()"> -->
        </nav>
    </header>

    <!-- Home -->
    <section class="home"></section>

    <script src="script.js"></script>
</body>

</html>

<?php
// if(isset($_REQUEST['signout'])){
//   echo "<script>location.href='index.php'</script>";
//   session_destroy();
//   session_abort();
// }
function signout()
{
    session_destroy();
    session_abort();
    echo "<script>location.href='index.php'</script>";
}

?>