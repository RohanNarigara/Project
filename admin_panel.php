<?php
require "header_admin.php";
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