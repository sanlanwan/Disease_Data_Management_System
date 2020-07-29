<!doctype html>
<html>
<head>
    <title>View Medicines | DDMS</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body>
<div id="wrapper">
    <h3 class="major">Medicines</h3>
    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th>Medicine ID</th>
                <th>Medicine Name</th>
                <th>Manufacturer</th>
                <th>Side Effects</th>
                <th>Disease Name</th>
                <th>Doctor ID</th>
            </tr>
            </thead>
            <?php
            include_once("include/config.php");
            $sql = "CALL viewmedicine();";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["med_id"] . "</td><td>" . $row["med_name"] . "</td><td>" . $row["manu_name"] . "</td><td>" . $row["side_effects"] . "</td><td>" . $row["disease_name"] . "</td><td>" . $row["doc_id"] . "</td></tr>" ;
                }
                echo "</table>";
            } else {
                echo "No data.";
            }
            $con->close();
            ?>
        </table>
        <br><br><input type="button" value="BACK" onclick="window.location.href='doctor.php'">
    </div>
</div>
</body>
</html>