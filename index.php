<!DOCTYPE HTML>
<html>
<head>
    <title>Disease Data Management System</title>
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
            <span class="fa fa-hand-holding-heart"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1>Disease Data Management System</h1>
                <p>The one place to know about the diseases!</p>
            </div>
        </div>
        <nav>
            <ul class="actions">
                <li><a href="#login">Doctor Log In</a></li>
                <li><a href="viewdisease.php">Disease Info</a></li>
                <li><a href="mviewuser.php">Medication Info</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <article id="login">
            <h3 class="major">Login</h3>
            <form method="post" action="login.php">
                <div class="fields">
                    <div class="field full">
                        <label for="ddms-email">Email</label>
                        <input type="email" name="email" id="ddms-email" required
                               placeholder="Enter your mail"/>
                    </div>
                    <div class="field full">
                        <label for="ddms-pass">Password</label>
                        <input type="password" name="pass" id="ddms-pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                               placeholder="Enter your password"/>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Log In" class="primary"/></li>
                    <li><a href="#register" class="button">Sign Up</a></li>
                    <li><a href="#forgotPass" value="Reset Password" class="button">Reset Password</a></li>
                </ul>
            </form>
        </article>

        <article id="forgotPass">
            <h3 class="major">Reset Password</h3>
            <form method="post" action="forgotPass.php">
                <div class="fields">
                    <div class="field full">
                        <label for="ddms-email">Email</label>
                        <input type="email" name="cur-email" id="ddms-email" required
                               placeholder="Enter your mail"/>
                    </div>
                    <div class="field full">
                        <label for="ddms-pass">Password</label>
                        <input type="password" name="new-pass" id="ddms-pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                               placeholder="Enter your password"/>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Reset Password" class="primary"/></li>
                </ul>
            </form>
        </article>

        <article id="register">
            <h3 class="major">Sign Up</h3>
            <form method="post" action="regdocaction.php">
                <div class="fields">
                    <div class="field full">
                        <label for="ddms-name">Name</label>
                        <input type="text" name="regName" id="ddms-name" placeholder="Enter your name" pattern="[a-zA-Z\s]+" required/>
                    </div>
                    <div class="field full">
                        <label for="ddms-email">Email</label>
                        <input type="email" name="regEmail" id="reg-email"
                               placeholder="Enter your mail" required/>
                    </div>
                    <div class="field full">
                        <label for="ddms-spec">Specialisation</label>
                        <input type="text" name="regSpec" id="reg-spec"
                               placeholder="Enter your specialisation" pattern="([a-z]\s)[A-Z]\s)" required/>
                    </div>
                    <div class="field full">
                        <label for="ddms-pass">Password</label>
                        <input type="password" name="regPass" id="reg-pass"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                               title="At least one number and one uppercase and lowercase letter, and at least 8 or more characters."
                               placeholder="Enter your password" required/>
                    </div>
                    <div class="field full">
                        <label for="ddms-lno">License Number</label>
                        <input type="text" name="regLno" id="reg-lno"
                               placeholder="Enter your License Number" pattern="[0-9]" required/>
                    </div>
                    <div class="field full">
                        <label for="ddms-pno">Phone Number</label>
                        <input type="tel" name="regPno" id="reg-pno"
                               placeholder="Enter your Phone Number" pattern="+[0-9]{2}[0-9]{8}" required/>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Submit" class="primary"/></li>
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
