<?php
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
	//something was posted
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];

if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
//read from database
	
	$query="select * from users where user_name='$user_name' limit 1";
	$result= mysqli_query($con, $query);
	if($result){
		if($result &&  mysqli_num_rows($result)>0)
		{
			$user_data=mysqli_fetch_assoc($result);
			if($user_data['password'] === $password)
			{
				$_SESSION['user_id']= $user_data['user_id'];
				header("Location: page2.html");
				die;
			}
		}
	}
	
}else
{
	echo "please enter some valid information!";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
</head>
<body>
	<style type="text/css">
		#text{
			height:25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;


		}
		#button
		{
			padding:10px;
			width: 100px;
			color: white;
			background-color: #11c9c9f8;
			border: none;
			margin-left: 35%;
			font-size: 20px

		}
		#box{
			/* background-color: #11c9c9f8; */
			margin-top: 250px;
			margin-left: 500px;
			width: 300px;
			padding: 20px; 
			height:300px;

		}
		body {
  background-image: url('home-bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
   margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
	</style>
	
	<div id="box">
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: black;text-align: center;">Login</div>
			<input id="text" type="text" name="user_name" placeholder="User Name" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>
			<input id="button" type="submit" value="Login"><br><br>
			<h2 style="color: Black;">Are you a new user?</h2><a href="signup.php" style="color: #11c9c9f8;">Signup here</a><br><br>
		</form>

	</div>

</body>
</html>