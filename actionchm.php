<?php
include_once("include/config.php");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$id = trim($_GET['id']);
$id = mysqli_real_escape_string($con, $id);
$queryn = "SELECT * FROM `diseases` WHERE `disease_id`='" . $id . "'";
$queryh = "SELECT * FROM `deficiency` WHERE `disease_id`='" . $id . "'";
$queryd = "SELECT * FROM `heredity` WHERE `disease_id`='" . $id . "'";
$querypa = "SELECT * FROM `pathology` WHERE `disease_id`='" . $id . "'";
$queryph = "SELECT * FROM `physiology` WHERE `disease_id`='" . $id . "'";

$resn = mysqli_query($con, $queryn);
$resh = mysqli_query($con, $queryh);
$resd = mysqli_query($con, $queryd);
$respa = mysqli_query($con, $querypa);
$resph = mysqli_query($con, $queryph);

if (mysqli_num_rows($resh) != 0) {
    while ($row = mysqli_fetch_array($resh)) {
        echo "<th>Deficient Element</th>";
        echo "<th>Precaution</th>";
        echo "<th>Symptoms</th>";
        echo "<th>Reason</th>";
        echo "</tr>";
        echo "</thead>";
        $rown = mysqli_fetch_array($resn);
        echo "<tr><td>" . $rown['disease_name'] . "</td>";
        echo "<td>" . $row['def_element'] . "</td>";
        echo "<td>" . $row['precaution'] . "</td>";
        echo "<td>" . $row['symptoms'] . "</td>";
        echo "<td>" . $row['reason'] . "</td></tr>";
        echo "</table>";

    }
} elseif (mysqli_num_rows($resd) != 0) {
    while ($row = mysqli_fetch_array($resd)) {
        echo "<th>Precaution</th>";
        echo "<th>Symptoms</th>";
        echo "</tr>";
        echo "</thead>";
        $rowm = mysqli_fetch_array($resn);
        echo "<tr><td>" . $rowm['disease_name'] . "</td>";
        echo "<td>" . $row['precaution'] . "</td>";
        echo "<td>" . $row['symptoms'] . "</td></tr>";
        echo "</table>";


    }
} elseif (mysqli_num_rows($respa) != 0) {
    while ($row = mysqli_fetch_array($respa)) {
        echo "<th>Deficient Element</th>";
        echo "<th>Precaution</th>";
        echo "<th>Origin</th>";
        echo "<th>Symptoms</th>";
        echo "</tr>";
        echo "</thead>";
        $rowm = mysqli_fetch_array($resn);
        echo "<tr><td>" . $rowm['disease_name'] . "</td>";
        echo "<td>" . $row['precaution'] . "</td>";
        echo "<td>" . $row['origin'] . "</td>";
        echo "<td>" . $row['symptoms'] . "</td></tr>";
        echo "</table>";


    }
} elseif (mysqli_num_rows($resph) != 0) {
    while ($row = mysqli_fetch_array($resph)) {
        echo "<th>Deficient Element</th>";
        echo "<th>Reason</th>";
        echo "<th>Symptoms</th>";
        echo "<th>Deteriorating Oragan</th>";
        echo "</tr>";
        echo "</thead>";
        $rowm = mysqli_fetch_array($resn);
        echo "<tr><td>" . $rowm['disease_name'] . "</td>";
        echo "<td>" . $row['reason'] . "</td>";
        echo "<td>" . $row['symptoms'] . "</td>";
        echo "<td>" . $row['det_organ'] . "</td></tr>";
        echo "</table>";

    }
} else {
    echo("");
}
?>