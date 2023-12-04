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

    <div class="signup">

    <form id="signupForm" action="signup-submit.php" method="post"> 
        
        <fieldset  class="signup_fieldset">

            <h1> Sign Up </h1>

            <div class="full_name">
                <input id="signupFirstName" type="text" name="fullname" placeholder="full name" autocomplete="off" required />
                <input id="signupLastName" type="text" name="major" placeholder="major" autocomplete="off" required />
            </div>  

            
            <input id="signupUsername" type="text" name="username" placeholder="username" autocomplete="off" required /> 
            <input id="signupPassword" type="password" name="password" placeholder="password" required /> <br> <br>

            <input  type="submit" name="submit" value="Sign up" />
        </fieldset>

        

    </form>

    <p class="already_have_account">Already have an account? Click <a id="link" href="login.php">here</a> to log in</p>

    </div>

</body>

</html>