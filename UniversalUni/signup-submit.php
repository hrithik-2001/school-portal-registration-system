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



<br>

<?php

    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];
    $major = $_POST["major"];

    $username = strtolower($username);

    //print $username . "\n" . $number . "\n" . $password . "\n";

    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);   		// explode eevry line

    for($i = 0; $i < count($lines); $i++) 
    {

        $info = explode(",", $lines[$i]); 	// explode every comma
		$check = 0;
        
        if($info[0] == $username)
        {
			$check = 1;

			break;
		}
	}

    if($check == 0) // if user doesn't exist
	{

		$string = $username . "," . $password . "," . $fullname . "," . $major . "\n"; 
		file_put_contents("users.txt", $string, FILE_APPEND);
        //print "Success <br>";
    ?>

    <div>
        <h3>Welcome, <?=$username?>!<h3>
        <h3>Click <a id="link" href="login.php">here</a> to log in.<h3>

    </div>




<?php
    }
	else //if user exists
	{

?>

    <div>
        <h3>This user already exists. Try again.<h3>
        <h3>Click <a id="link" href="signup.php">here</a> to sign up.<h3>

    </div>

<?php
		//print "This user already exists. Try again. <br>";
		
	}

?>


</body>

</html>