<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>

    <form action="" method="post">
        <label for="name"> First Name</label>
        <input type="text" name="fname" required placeholder="Enter First Name"><br>
        
        <label for="name"> Last Name</label>
        <input type="text" name="lname" required placeholder="Enter Last Name"><br>
        
        <label for="Email"> Email</label>
        <input type="email" name="email" required placeholder="Enter Email"><br>

       
        <label for="name"> Address</label>
        <input type="text" name="address" required placeholder="Enter Address"><br>
        <label for="name"> State</label>
        <input type="text" name="state" required placeholder="Enter State"><br>
        <label for="name"> Pincode</label>
        <input type="text" name="Pincode" required placeholder="Enter Pincode"><br>
        <label for="name"> Language</label>
        <input type="text" name="language" required placeholder="Enter Laguage"><br>

        <input type="submit" name="submit" value="Update">

    </form>

</body>
</html>

<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $language = $_POST['language'];
    $userid = $_POST['userid'];
    if(isset($_POST['submit'])){
        if($fname=="" || $lname=="" || $email=="" || $address=="" || $state=="" || $pincode=="" || $language=="" )
        {
                echo "<script>alert('Fill All Details')</script>";
            }
            else{
                $con = mysqli_connect("localhost", "root", "", "profile");

                if (!$con) {
                    die("Database Connection Failed: " . mysqli_connect_error());
                }
               
                $update = "UPDATE tbl_profile SET fname='$fname', lname='$lname', email='$email', address='$address', state='$state', pincode=$pincode, language='$language' WHERE user_id=$user_id";
        
                if (mysqli_query($con, $update)) {
                    echo "<script>alert('Data Updated Successfully')</script>";
                } else {
                    echo "<script>alert('Update Failed: " . mysqli_error($con) . "')</script>";
                }
        
                mysqli_close($con);
            
        }
    }


?>