<!DOCTYPE html>
<html>
<head><title>Physiology Disease Details Page</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body>
<div id="wrapper">
    <div id="main">
        <h3 class="major">Physiology Disease</h3>
        <?php
        $id=$_GET['id'];
        echo "<form method=\"post\" action=\"physioaction.php?id=$id\">";
        ?>
            <div class="fields">
<!--                <div class="field full">-->
<!--                    <label>Disease ID</label>-->
<!--                    <input type="text" name="regDid" id="reg-did"-->
<!--                           placeholder="Enter Disease ID"/>-->
<!--                </div>-->
                <div class="field full">
                    <label>Reason(s)</label>
                    <input type="text" name="regRea" id="reg-rea"
                           placeholder="Enter Symptom(s)"/>
                </div>
                <div class="field full">
                    <label>Symptom(s)</label>
                    <input type="text" name="regSymp" id="reg-symp"
                           placeholder="Enter Symptom(s)"/>
                </div>
                <div class="field full">
                    <label>Deteriorating Organ(s)</label>
                    <input type="text" name="regDeter" id="reg-deter"
                           placeholder="Enter Deteriorating Organ(s)"/>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Submit" class="primary"/></li>
                <li><input type="reset" value="Reset"/></li>
            </ul>
        </form>
    </div>
</div>
</body>
</html>