<?php
include("include/config.php");

$regName = $_POST['regName'];
$regSpec = $_POST['regSpec'];
$regEmail = $_POST['regEmail'];
$regPass = $_POST['regPass'];
$regPno = $_POST['regPno'];
$regLno = $_POST['regLno'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $SELECT = "SELECT license_no from doctors where license_no = ? Limit 1";
    $INSERT = "INSERT into doctors (doc_name,specialisation,email_id,pass,contact_detail,license_no) values(?,?,?,?,?,?)";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("i", $regLno);
    $stmt->execute();
    $stmt->bind_result($regLno);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if ($rnum == 0) {
        $stmt->close();

        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("ssssii", $regName, $regSpec, $regEmail, $regPass, $regPno, $regLno);
        $stmt->execute();
        echo "Successfully Registered.";
        header( "refresh:3;url=index.php#login" );
    } else {
        echo "User already present.";
        header( "refresh:5;url=index.php#login" );
    }
    $stmt->close();
    $con->close();
}
?>