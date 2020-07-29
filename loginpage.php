<!DOCTYPE html>
<html>
<head><title>Dimension by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body>
<div id="main">
    <h3 class="major">Login</h3>
    <form method="post" action="login.php">
        <div class="fields">
            <div class="field full">
                <label for="ddms-email">Email</label>
                <input type="email" name="email" id="ddms-email" value=""
                       placeholder="Enter your mail"/>
            </div>
            <div class="field full">
                <label for="ddms-pass">Password</label>
                <input type="password" name="pass" id="ddms-pass" value=""
                       placeholder="Enter your password"/>
            </div>
        </div>
        <ul class="actions">
            <li><input type="submit" value="Log In" class="primary"/></li>
            <li><a href="index.php#register" class="button">Sign Up</a></li>
            <li><a href="index.php" class="button">Home</a></li>
        </ul>
        <?php
        if (isset($_GET['error']) == true) {
            echo '<div style="text-align: center;"><span  style="font-size: large; color: orange; ">Check the credentials.</span></div>';
        }
        ?>
    </form>
</div>
</body>
</html>
