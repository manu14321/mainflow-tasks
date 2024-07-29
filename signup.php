<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2; 
    margin: 0;
    padding: 0;
}

.main {
	width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(background.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; 
}

header {
    background-color: #333;
    color:whitesmoke;
    padding: 1rem 0;
    text-align: center;
}

#box {
    background-color: #333; 
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 300px; 
}

form {
    display: flex;
    flex-direction: column;
}

form div {
    font-size: 20px;
    margin: 10px;
    color: white;
    text-align: center;
}

input[type=text], input[type=password] {
    width: 100%; 
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50; 
    color: white; 
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

a {
    color: #4CAF50;
    text-align: center;
    display: block;
    margin-top: 10px;
    text-decoration: none;
}

a:hover {
    text-decoration: underline; 
}

	</style>
	<header>
        <h2>Welcome to MAIN FLOW SERVICEs And TECHNOLOGIES</h2>
        </header>
<div class="main">
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"placeholder="Enter user_name Here"><br><br>
			<input id="text" type="password" name="password"placeholder="Enter password Here"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</div>
</body>
</html>