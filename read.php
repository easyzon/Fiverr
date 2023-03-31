<?php
	require("connect.php");
	
	$id=$_GET['id'];
	
	$users=mysql_query("SELECT * FROM easy WHERE ID=$id");
	$user=mysql_fetch_array($users);

?>

<html>
	<head>
		<title>Profile of <?php echo $user[0];?></title>
	</head>
	<body>
		<h2>Following is the complete profile of <u><?php echo $user[1];?></u></h2>
		<p>Firstname: <?php  echo $user[1]?></p>
		<p>Lastname: <?php  echo $user[2]?></p>
		<p>Email: <?php  echo $user[3]?></p>
		<p>Password: <?php  echo $user[4]?></p>
		
	</body>
</html>
           