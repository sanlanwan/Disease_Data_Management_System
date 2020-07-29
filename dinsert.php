<?php
include_once("include/config.php");

$did = $_POST['did'];
$dname = $_POST['dname'];
$dcid = $_POST['dcid'];
$cp = $_POST['cp'];
$discat = $_POST['discat'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $SELECT = "SELECT disease_id from diseases where disease_id = ? Limit 1";
    $INSERT = "INSERT into diseases(disease_id,disease_name,doc_id,contagious_property) values(?,?,?,?)";
    $INSERTDID = "INSERT into $discat(disease_id) values(?)";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("i", $did);
    $stmt->execute();
    $stmt->bind_result($did);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if ($rnum == 0) {
        $stmt->close();

        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("isis", $did, $dname, $dcid, $cp);
        $stmt->execute();
        $stmt = $con->prepare($INSERTDID);
        $stmt->bind_param("i", $did);
        $stmt->execute();
        echo "Successfully Entered.";
        header("refresh:3;url=$discat.php?id=$did");
    } else {
        echo "Failed to process. Please check the table.";
        header("refresh:3;url=disease.php");
    }
    $stmt->close();
    $con->close();
}
?>