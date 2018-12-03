<?php

// test if we are working locally (on XAMMPP)

	if ($_SERVER['HTTP_HOST'] == 'localhost') {
                $database = "roster";
                $username = "root"; 
                $password = ""; 
				
            }
// if we are not we will use our infoweb login information			
	else {
                $database = "rosterdb";
                $username = 'lime02'; // put your infoweb username here
                $password = "cat33";  // put your infoweb password here
				
            }
// Now use the relevant details to connect to the database
			
			$link = mysqli_connect("localhost", $username, $password, $database);
				if(!$link)
				{
					exit ("Connection error: " . mysqli_connect_error());
				} 
?>

