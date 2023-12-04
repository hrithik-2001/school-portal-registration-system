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
    

    $username = strtolower($username);

   // print "$username <br> $password <br>";

    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);       // explode every line

    // check username

    for($i = 0; $i < count($lines); $i++) 
    {
        $info = explode(",", $lines[$i]); // explode every comma in line
        $check = 0; 

        if($info[0] == $username and $info[1] == $password) // if found
        {
            
           $check = 1;
           


            break;
            
        }
  
    }


    if($check == 1)
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['fullname'] = $info[2]; 
        $_SESSION['major'] = $info[3];   
        
        
        

        //print $_SESSION['username'] . " is logged in.";
?>

        <h3><?=$_SESSION['username']?> is logged in.</h3>
        

<?php
    }
    else
        {

            //print $username . " not found";
            //print "The username and password you entered isn't connected to an account.";

?>
        <h3>The username and password you entered isn't connected to an account.<h3>
        


<?php

        
        }




?>








</body>

</html>