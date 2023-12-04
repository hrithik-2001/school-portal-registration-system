<?php
	session_start();
?>

<!DOCTYPE html>
<html lang = en>
	
<head>
    <title>UniversalUni</title>
    
    <meta charset="utf-8" />

    <link href="logo.png" type="image/png" rel="shortcut icon"/> 
    <link href="login-signup.css" type="text/css" rel="stylesheet" />
    <script src="user.js"></script>
    <script src="student.js"></script>
    <script src="main.js"></script>
</head>

<body>

    <div id="banner">
        <a href="home.php" >
            <img id="logo" src="logo.png"  />
        </a>
    </div>

<?php
    session_destroy();
?>

<h3>Successfully logged out.</h3>

</body>

</html>