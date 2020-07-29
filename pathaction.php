<?php
include("include/config.php");

$regDid = $_GET['id'];
$regPre = $_POST['regPre'];
$regOri = $_POST['regOri'];
$regSymp = $_POST['regSymp'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $UPDATE = "UPDATE pathology SET precaution='$regPre',origin='$regOri',symptoms='$regSymp' WHERE disease_id='$regDid'";
    if (mysqli_query($con, $UPDATE)) {
        header("refresh:3;url=disease.php");
        echo "Records were updated successfully.";
    } else {
        echo "Failed to process. Please check the inputs.";
        header("refresh:3;url=disease.php");
    }
    $con->close();
}
?>