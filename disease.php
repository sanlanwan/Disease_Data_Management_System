<!DOCTYPE html>
<html>
<head><title>Disease Data Insertion Page</title>
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
        <h3 class="major">Add A Disease</h3>
        <form id="myform" method="post" action="dinsert.php">
            <div class="fields">
                <div class="field full">
                    <label>Disease ID</label>
                    <input type="text" name="did" required/>
                </div>
                <div class="field">
                    <label>Category</label>
                    <select name="discat" id="discat" required>
                        <option>--- Choose Category Here ---</option>
                        <option value="deficiency">Deficiency</option>
                        <option value="heredity">Heredity</option>
                        <option value="pathology">Pathology</option>
                        <option value="physiology">Physiology</option>
                    </select>
                </div>
                <div class="field full">
                    <label>Disease Name</label>
                    <input type="text" name="dname" required/>
                </div>
                <div class="field full">
                    <label>Doc ID</label>
                    <input type="text" name="dcid" required/>
                </div>
                <div class="field full">
                    <label>Contagious Property</label>
                    <input type="text" name="cp" required/>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Submit" class="primary"/></li>
                <li><input type="reset" value="Reset"/></li>
                <li><a href="doctor.php" class="button">Home</a></li>
            </ul>
        </form>
        <article id="contact">
            <h2 class="major">Contact</h2>
        </article>
    </div>
</div>
</body>
</html>