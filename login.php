<?php
include("include/config.php");
$email = $_POST['email'];
$pass = $_POST['pass'];

if (!empty($email) || !empty($pass)) {
    $sql = "select * from doctors where email_id='" . $email . "' and pass='" . $pass . "'limit 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['email_id'] == $email && $row['pass'] == $pass) {
        header("Location:doctor.php");


    } else {
        header("Location:loginpage.php?error=1");
    }
} else {
    header("Location:loginpage.php?error=1");
}
?>
