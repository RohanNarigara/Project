<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="displayprofile.css ">
    <!-- Add your CSS and JavaScript includes here -->
</head>

<body>
    <?php
    // Assuming you have a database connection established
    // Replace 'your_database_name', 'your_username', and 'your_password' with actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $usermail = $_POST['email'];    
    $sql = "SELECT name,email,gender,address,cityId,stateId FROM tblcustomer";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_array($result);
    // print_r($users);
    if ($result->num_rows > 0) {
        // $row = $result->fetch_assoc();
        $name = $users['name'];
        $email = $users['email'];
        $gender = $users['gender'];
        $address = $users['address'];
        $cityId = $users['cityId'];
        $stateId = $users['stateId'];
    } else {
        echo "0 results";
    }


    
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Me</title>
        <link rel="stylesheet" href="styles.css"> <!-- Include your stylesheet link here -->
    </head>

    <body>
        <form action="#" method="post">
            <section class="section about-section gray-bg" id="about">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6">
                            <div class="about-text go-to">
                                <h3 class="dark-color">About Me</h3>

                                <div class="row about-list">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <label>Name</label>
                                            <p>
                                                <?php echo $name; ?>
                                            </p>
                                        </div>
                                        <div class="media">
                                            <label>Email </label>
                                            <p>
                                                <?php echo $email; ?>
                                            </p>
                                        </div>
                                        <div class="media">
                                            <label>Gender</label>
                                            <p>
                                                <?php echo $gender; ?>
                                            </p>
                                        </div>
                                        <div class="media">
                                            <label>Address</label>
                                            <p>
                                                <?php echo $address; ?>
                                            </p>
                                        </div>
                                        <div class="media">
                                            <label>City</label>
                                            <p>
                                                <?php echo $cityId; ?>
                                            </p>
                                        </div>
                                        <div class="media">
                                            <label>State</label>
                                            <p>
                                                <?php echo $stateId; ?>
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </form>
    </body>

    </html>