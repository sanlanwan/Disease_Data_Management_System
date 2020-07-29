<?php
include_once('include/config.php');
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['submit'])) {
    $mid = $_POST['mid'];
    $mfield = $_POST['mattr'];
    $mvalue = $_POST['mnattr'];
    $sql = "UPDATE medication SET $mfield='$mvalue' WHERE med_id='$mid'";
    $res = mysqli_query($con, $sql);
    echo "Successfully Updated.";
    header("refresh:3;url=doctor.php#editMed");
} else {
    echo "No entry found.";
    header("refresh:3;url=doctor.php#editMed");
}
?>