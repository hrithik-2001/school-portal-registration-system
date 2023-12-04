<?php
session_start();
//var_dump($_SESSION);


?>

<!DOCTYPE html>
<html lang = en>
	
	<head>
		<title>UniversalUni</title>
		
		<meta charset="utf-8" />

		<link href="logo.png" type="image/png" rel="shortcut icon"/> 
		<link href="home.css" type="text/css" rel="stylesheet" />
		<link href="school.css" type="text/css" rel="stylesheet" />
		<link href="course.css" type="text/css" rel="stylesheet" />
		<script src="main.js"></script>
	</head>

	

	<body>

	<span id="fullname" style="display: none;"><?php echo $_SESSION['fullname']; ?></span>
	<span id="major" style="display: none;"><?php echo $_SESSION['major']; ?></span>

        <div id="banner">
            <a href="home.php" >
                <img id="logo" src="logo.png"  />
            </a>

			<?php
				if(!isset($_SESSION['username']))
					{
					?>

						<div id="login-signup-link">
							<a href="login.php" id="login-link">Log In</a>
							
							<a href="signup.php" id="signup-link">Sign Up</a>
						</div>

					<?php
				}
				else
				{
					?>

						<a href="profile.php" id="profile-link">Profile</a>
					
					<?php
				}
			?>


        </div>
    
		
		
		