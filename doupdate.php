<?php
include_once('include/config.php');
if (isset($_POST['submit'])) {
    $disocat = $_POST['disocat'];
    $did = $_POST['did'];
    $dfield = $_POST['dfield'];
    $dvalue = $_POST['dnattr'];
    $sql = "UPDATE $disocat SET $dfield='$dvalue' WHERE disease_id='$did'";
    $res = mysqli_query($con, $sql);
    echo "Successfully Updated.";
    header("refresh:3;url=doctor.php#editDisO");
} else {
    die($con->error);
}
?>