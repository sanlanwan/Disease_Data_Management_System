<?php
include_once("include/config.php");

$mid = $_POST['mid'];
$did = $_POST['did'];
$dcid = $_POST['dcid'];
$mname = $_POST['mname'];
$manuname = $_POST['manuname'];
$se = $_POST['se'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $SELECT = "SELECT med_id from medication where med_id = ? Limit 1";
    $INSERT = "INSERT into medication(med_id,med_name,manu_name,side_effects,disease_id,doc_id) values(?,?,?,?,?,?)";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("i", $mid);
    $stmt->execute();
    $stmt->bind_result($mid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if ($rnum == 0) {
        $stmt->close();
        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("isssii", $mid, $mname, $manuname, $se, $did, $dcid);
        $stmt->execute();
        echo "Successfully Entered.";
        header("refresh:3;url=medication.html");
    } else {
        echo "Failed to process. Please check the table.";
        header("refresh:3;url=medication.html");
    }
    $stmt->close();
    $con->close();
}
?>
