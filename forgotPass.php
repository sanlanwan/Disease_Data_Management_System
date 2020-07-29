<?php
include_once('include/config.php');
if (isset($_POST['resetPass'])) {
    $curemail = $_POST['cur-email'];
    $newpass = $_POST['new-pass'];
    $sql = "UPDATE doctors SET pass='$newpass' WHERE email_id='$curemail'";
    $res = mysqli_query($con, $sql);
    echo "Successfully Updated. Please use your new password";
    header("refresh:3;url=index.php#Login");
} else {
    echo("Sorry, no user exists on our system with that email");
    header("refresh:3;url=index.php#Login");
}
//else {
//    die($con->error);
//}
?>