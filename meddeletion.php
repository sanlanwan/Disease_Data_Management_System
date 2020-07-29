<?php
include_once('include/config.php');
?>
<?php
if (isset($_POST['submit'])) {
    $did = $_POST['name'];
    $sql = "DELETE FROM medication WHERE med_id='$did'";
    $res = mysqli_query($con, $sql) or die("Failed " . mysqli_error($con));
    echo "Successfully Deleted.";
    header("refresh:3;url=doctor.php#delMed");
} else {
    die($con->error);
}
?>

