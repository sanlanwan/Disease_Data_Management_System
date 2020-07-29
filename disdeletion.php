<?php
include_once('include/config.php');
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['submit'])) {
    $did = $_POST['did'];
    $sql = "DELETE FROM diseases WHERE disease_id='$did'";
    $res = mysqli_query($con, $sql);
    echo "Successfully Deleted.";
    header("refresh:3;url=doctor.php#delDis");

} else {
    echo "No entry found.";
    header("refresh:3;url=doctor.php#delDis");
}
?>

