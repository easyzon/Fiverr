<?php
	require("connect.php");
	
	//CREATE Operation
	 //print_r($_POST); die;
	    $fname     =  $_REQUEST['fname'];
		$lname     =  $_REQUEST['lname'];
		$email     =  $_REQUEST['email'];
		$password  =  $_REQUEST['password'];
		//print($username); die;
		$select_query = "SELECT * FROM easy WHERE email = '$email'"; 
		//print_r($select_query); die;
        //print_r(mysqli_query($con,$select_query)); die;
		$count = mysqli_query($con,$select_query);
		if(mysqli_num_rows($count)> 0)
		{	
			
			$success = 0;	
			header("location:index.php?success=$success");	
			//echo "Record already exists .Try another one....!!"; die;
		}
 
		else
		{
        
		$insert_query = "INSERT INTO `easy` (`firstname`,`lastname`,`email`,`password` ) VALUES ('$fname','$lname','$email','$password')";
		// print_r($insert_query); die;/
		mysqli_query($con,$insert_query);
		//mysql_query("INSERT INTO `users` ( ``, `password`) VALUES ( '', '$password');");
		$success = 1;
		header("location:index.php?success=$success");

		}

?>