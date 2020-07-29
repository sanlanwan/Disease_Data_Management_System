<?php
include("include/config.php");

$regDid = $_GET['id'];
$regDefele = $_POST['regDefele'];
$regPre = $_POST['regPre'];
$regSymp = $_POST['regSymp'];
$regReason = $_POST['regReason'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $UPDATE = "UPDATE deficiency SET def_element='$regDefele',precaution='$regPre',symptoms='$regSymp',reason='$regReason' WHERE disease_id='$regDid'";
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