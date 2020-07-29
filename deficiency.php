<!DOCTYPE html>
<html>
<head><title>Deficiency Disease Details Page</title>
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
        <h3 class="major">Deficiency Disease</h3>
        <?php
        $id=$_GET['id'];
        echo "<form method=\"post\" action=\"defaction.php?id=$id\">";
        ?>
            <div class="fields">
<!--                <div class="field full">-->
<!--                    <label>Disease ID</label>-->
<!--                    <input type="text" name="regDid" id="reg-did"-->
<!--                           placeholder="Enter Disease ID"/>-->
<!--                </div>-->
                <div class="field full">
                    <label>Deficient Element</label>
                    <input type="text" name="regDefele" id="reg-defele" placeholder="Enter Deficient Element"/>
                </div>
                <div class="field full">
                    <label>Precaution(s)</label>
                    <input type="text" name="regPre" id="reg-pre"
                           placeholder="Enter Precautions"/>
                </div>
                <div class="field full">
                    <label>Symptom(s)</label>
                    <input type="text" name="regSymp" id="reg-symp"
                           placeholder="Enter Symptoms"/>
                </div>
                <div class="field full">
                    <label>Reason(s)</label>
                    <input type="text" name="regReason" id="reg-rea"
                           placeholder="Enter Reasons"/>
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