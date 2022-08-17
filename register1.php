<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    echo "Connection Failed";
}
$msg = "";
$_SESSION['logged']=false;
if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

    $_SESSION['logged']=false;
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
    } else {
        if ($password === $confirm_password) {
            $sql = "INSERT INTO users (fname,lname, email, password) VALUES ('{$fname}', '{$lname}','{$email}', '{$password}')";
            $result = mysqli_query($conn, $sql);
             
            if ($result) {    
                $_SESSION['logged']=true;
                $_SESSION['user_name']=$fname;
                $_SESSION['last_name']=$lname;
                $msg = "Account Verification Complete";
                header("Location: home2.php");
            } else {
                $_SESSION['logged']=false;
                $msg = "Something went wrong";
            }
        } else {
            $msg = "Password and Confirm Password do not match";
        }
    }
}
?>

