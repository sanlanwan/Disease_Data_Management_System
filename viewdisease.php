<!doctype html>
<html>
<head>
    <title>View Diseases | DDMS</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body>
<div id="wrapper">
    <h3 class="major">Diseases</h3>
    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th>Disease ID</th>
                <th>Disease Name</th>
                <th>Doctor ID</th>
                <th>Contagious Property</th>
                <th>Activity Date</th>
            </tr>
            </thead>
            <?php
            include_once("include/config.php");
            $sql = "CALL viewdisease();";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["disease_id"] . "</td><td><a href='dmoreaction.php/?id=" . $row["disease_id"] . "'>" . $row["disease_name"] . "</a></td><td>" . $row["doc_id"] . "</td><td>" . $row["contagious_property"] . "</td><td>" . $row["activity_date"] . "</td></tr>";
                }
            } else {
                echo "0 result";
            }
            $con->close();
            ?>
        </table>
        <br><br><input type="button" value="BACK" onclick="window.location.href='index.php'">
    </div>
</div>
</body>
</html>