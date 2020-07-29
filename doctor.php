<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Doctor Page | DDMS</title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport"/>
    <link href="assets/css/main.css" rel="stylesheet"/>
    <noscript>
        <link href="assets/css/noscript.css" rel="stylesheet"/>
    </noscript>
</head>

<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="logo">
            <span class="fa fa-stethoscope"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1>Hello Doctor</h1>
                <p>Welcome to Disease Data Management System</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="dview.php">View Diseases</a></li>
                <li><a href="mview.php">View Medication</a></li>
                <li><a href="#manDis">Manage Disease(s)</a></li>
                <li><a href="#manMed">Manage Medicine(s)</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->

        <article id="manDis">
            <h3 class="major">Manage Disease(s)</h3>
            <ul class="actions">
                <li><a href="disease.php" class="button">Insert</a></li>
                <li><a href="#editDis" class="button">Edit</a></li>
                <li><a href="#editDisO" class="button">Edit OTHERS</a></li>
                <li><a href="#delDis" class="button">Delete</a></li>
            </ul>
        </article>


        <article id="editDis">
            <h2 class="major">Edit Disease</h2>
            <form action="dupdateaction.php" method="POST">
                <div class="fields">
                    <div class="field">
                        <label>Enter the ID of the Disease to be updated:
                            <input type="text" name="did">
                        </label>
                    </div>
                    <div class="field">
                        <label>Select the attribute to be updated</label>
                        <select name="disattr" id="disattr" required>
                            <option>--- Choose Category Here ---</option>
                            <option value="disease_name">Disease Name</option>
                            <option value="contagious_property">Contagious Property</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Enter new value of the attribute:
                            <input type="text" name="dnattr">
                        </label>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="submit" name="submit" class="primary"/></li>
                    <li><input type="reset" value="Reset"/></li>
                </ul>
            </form>
        </article>

        <article id="editDisO">
            <h2 class="major">Edit Disease Properties</h2>
            <form action="doupdate.php" method="POST">
                <div class="fields">
                    <div class="field">
                        <label>Enter the ID of the Disease to be updated:
                            <input type="text" name="did">
                        </label>
                    </div>
                    <div class="field">
                        <label>Category</label>
                        <select name="disocat" id="disocat" required>
                            <option>--- Choose Category Here ---</option>
                            <option value="deficiency">Deficiency</option>
                            <option value="heredity">Heredity</option>
                            <option value="pathology">Pathology</option>
                            <option value="physiology">Physiology</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Enter the attribute to be updated:
                            <input type="text" name="dfield">
                        </label>
                    </div>
                    <div class="field full">
                        <label>Enter new value of the attribute:
                            <input type="text" name="dnattr">
                        </label>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="submit" name="submit" class="primary"/></li>
                    <li><input type="reset" value="Reset"/></li>
                </ul>
            </form>
        </article>

        <article id="delDis">
            <h3 class="major">Delete Disease</h3>
            <form action="disdeletion.php" method="POST">
                <div class="fields">
                    <div class="field">
                        <label>Enter Disease ID :</label>
                        <label>
                            <input type="text" name="did">
                        </label>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="submit" name="submit" class="primary"/></li>
                    <li><input type="reset" value="Reset"/></li>
                </ul>
            </form>
        </article>

        <article id="manMed">
            <h3 class="major">Manage Medicine(s)</h3>
            <ul class="actions">
                <li><a href="medication.html" class="button">Insert</a></li>
                <li><a href="#editMed" class="button">Edit</a></li>
                <li><a href="#delMed" class="button">Delete</a></li>
            </ul>
        </article>

        <article id="editMed">
            <h2 class="major">Edit Medicine</h2>
            <form action="medupdateaction.php" method="POST">
                <div class="fields">
                    <div class="field">
                        <label>Enter the ID of the Medicine to be updated:
                            <input type="text" name="mid">
                        </label>
                    </div>
                    <div class="field">
                        <label>Enter the attribute to be updated:
                            <input type="text" name="mattr">
                        </label>
                    </div>
                    <div class="field full">
                        <label>Enter new value of the attribute:
                            <input type="text" name="mnattr">
                        </label>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="submit" name="submit" class="primary"/></li>
                    <li><input type="reset" value="Reset"/></li>
                </ul>
            </form>
        </article>

        <article id="delMed">
            <h3 class="major">Delete Medicine</h3>
            <form action="meddeletion.php" method="POST">
                <div class="fields">
                    <div class="field">
                        <label>Enter Medicine ID :
                            <input type="text" name="name">
                        </label>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="submit" name="submit" class="primary"/></li>
                    <li><input type="reset" value="Reset"/></li>
                </ul>
            </form>
        </article>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; Disease Data Management System | 2019</p>
    </footer>

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
