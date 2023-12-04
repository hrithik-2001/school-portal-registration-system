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

    <div class="login">

        <form id="loginForm" action="login-submit.php" method="post"> 
            
            <fieldset class="login_fieldset">
                
                <h1> Log in </h1>
                
                <input id="username" type="text" name="username" placeholder="username" autocomplete="off" required /> 
                <input id="password" type="password" name="password" placeholder="password" required /> <br> <br>

                <input  type="submit" name="submit" value="Log in" />
            </fieldset>

            

        </form>

        <p class="dont_have_account">Don't have an account? <a id="link" href="signup.php">Let's create one</a></p>

    </div>


</body>

</html>