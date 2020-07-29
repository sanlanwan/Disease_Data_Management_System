<?php
include("include/config.php");

$regDid = $_GET['id'];
$regRea = $_POST['regRea'];
$regSymp = $_POST['regSymp'];
$regDeter = $_POST['regDeter'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $UPDATE = "UPDATE physiology SET reason='$regRea',symptoms='$regSymp',det_organ='$regDeter' WHERE disease_id='$regDid'";
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