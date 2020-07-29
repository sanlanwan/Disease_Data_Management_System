<?php
include_once('include/config.php');
if (isset($_POST['submit'])) {
    $did = $_POST['did'];
    $dfield = $_POST['disattr'];
    $dvalue = $_POST['dnattr'];
    $sql = "UPDATE diseases SET $dfield='$dvalue' WHERE disease_id='$did'";
    $res = mysqli_query($con, $sql);
    echo "Successfully Updated.";
    header("refresh:3;url=doctor.php#editDis");
} else {
    die($con->error);
}

?>