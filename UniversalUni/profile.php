<?php include("top.php"); ?>

<?php


    if(!isset($_SESSION['username']))
    {
        //print "Nobody logged in.";
?>

        <h3>Unexpected Error</h3>

<?php
    }
    else
    {
        //print "Hi, " . $_SESSION['username'];
?>
	
        <div class="profile">
		
        <br>
        <h3 class="profile_header"><span id="profile">&nbsp;&nbsp;&nbsp;PROFILE</span><h3>
        

		
		<?php $file = file_get_contents("users.txt");
                $lines = explode("\n", $file);       // explode every line
                foreach ($lines as $line){
                $line = explode(",", $line);
                if( $_SESSION['username'] == $line[0])
                {
                    break;
                }
			}
		?>
		
        <br>
        <h3>&nbsp;&nbsp;&nbsp;full name: <span id="info"><?=$_SESSION['fullname']?></span></h3>
        <h3>&nbsp;&nbsp;&nbsp;major: <span id="info"><?=$_SESSION['major']?></span></h3>
        <h3>&nbsp;&nbsp;&nbsp;username: <span id="info"><?=$_SESSION['username']?></span></h3>
        <h3>&nbsp;&nbsp;&nbsp;password: <span id="info"><?=$_SESSION['password']?></span></h3>
        
        

       <p class="logout"><a id="logout_link" href="log-out.php">Log out</a></p>
        </div>

        <script>

        </script>




    

<?php
    }


?>

<?php include("bottom.php"); ?>