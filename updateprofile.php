<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['save_profile'])) {
    // Retrieve data from form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    // Perform insertion query
    $insert_sql = "INSERT INTO tblCustomer (name, email, gender, address, cityId, stateId, status) VALUES ('$name', '$email', '$gender', '$address', '$city', '$state', 0)";
    mysqli_query($conn, $insert_sql);
    echo "<script>alert('Data Updated successfully!')</script>";
    echo "<script>location.href='cust_panel.php'</script>";
    // if () {
    //     echo "<script>alert('Data inserted successfully!')</script>";
    // } else {
    //     echo "Error: " . $insert_sql . "<br>" . $conn->error;
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="updateprofile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
        .myglass {
            backdrop-filter: blur(9px) saturate(200%);
            -webkit-backdrop-filter: blur(9px) saturate(200%);
            background-color: rgba(17, 25, 40, 0.59);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
        }
        h4{
            color: while;
            font-size: 20px;
        }
    </style>
</head>

<body style="background-image: url('neon-texture-abstract-art.jpg');">
    <form method="post" >
        <div class="container rounded myglass mt-5 mb-5">
            <div class="row ">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span style="color: white;">Profile</span><span class="text-white-50"> </span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 style="color: white;">Profile Settings</h4>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Name</label><input name="name" type="text" class="form-control" placeholder="enter name" value=""></div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input name="email" type="text" class="form-control" placeholder="enter email id" value=""></div>
                            <div class="col-md-12"><label class="labels">Gender</label><input name="gender" type="text" class="form-control" placeholder="enter Gender" value=""></div>
                            <div class="col-md-12"><label class="labels">Address </label><input name="address" type="text" class="form-control" placeholder="enter address " value=""></div>

                            <div class="col-md-12"><label class="labels">City</label><input name="city" type="text" class="form-control" placeholder="enter city" value=""></div>

                            <div class="col-md-12"><label class="labels">State</label><input name="state" type="text" class="form-control" placeholder="enter state" value=""></div>

                            <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" name="save_profile" value="Save Profile"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>

<?php
    // if(isset($_POST['save_profile'])){
    //     echo "<script>alert('Data Updated successfully!')</script>";
    //     echo "<script>location.href='cust_panel.php'</script>";
    // }
?>