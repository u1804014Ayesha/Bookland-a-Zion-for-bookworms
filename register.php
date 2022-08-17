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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="ayesha1">
            <h1> Sign Up</h1>
            <?php echo $msg; ?>
            <form action="" method="post">
            <label>First Name *</label>
             <input type="text" class="fname" name="fname" placeholder=" " value="<?php if (isset($_POST['submit'])) {
                                                                                                                                        echo $fname;
                                                                                                                                    } ?>" required>

            <label>Last Name *</label> <input type="text" class="lname" name="lname" placeholder=" " value="<?php if (isset($_POST['submit'])) {
                                                                                                                                    echo $lname;
                                                                                                                                } ?>" required>
            <label>Email *</label> <input type="email" class="email" name="email" placeholder=" " value="<?php if (isset($_POST['submit'])) {
                                                                                                                            echo $email;
                                                                                                                        } ?>" required>
            <label>Password *</label> <input type="password" class="password" name="password" placeholder=" " required>
            <label>Confirm Password *</label> <input type="password" class="confirm-password" name="confirm-password" placeholder=" " required>
            <button name="submit" class="ayesha2"class="btn" type="submit">Submit</button>
             </form>
         
            <div class="social-icons">
                <p class="ayesha3">Already have an account<a href="login.php" class="ayesha4">Login here</a>.</p>
            </div>
        </div>
    </div>
    </div>
</body>

</html>