<?php
	 include("connect.php");
	
       //print_r($_POST); die;
		$email	    = 	$_REQUEST['email'];
		$password	= 	$_REQUEST['password'];
		$select_query = "SELECT * FROM easy WHERE email = '$email' and password = '$password'"; 
        //print_r($select_query); die;
		$count = mysqli_query($con,$select_query);
		if(mysqli_num_rows($count)> 0)
		{	
		  //die('test');
            $success = 0;	
			header("location:dashboard/index.php?success=$success");
		}
        {
			//do stuff
			//die('sdsd');
			echo "Record already exists .Try another one....!!";
		}

?>