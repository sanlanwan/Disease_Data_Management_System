<?php
include("include/config.php");
$id = $_GET['disease_id'];
mysqli_query($con, "DELETE FROM diseases WHERE disease_id=$id");
header("Location:../doctor.php");
?>
