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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">

*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(background.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
	display: flex;
    justify-content: center;
    align-items: center;
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
    width: 300px; /* Fixed width */
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
    width: 100%; /* Full width */
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%; /* Full width */
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049; /* Darker green on hover */
}

a {
    color: #4CAF50; /* Green text */
    text-align: center;
    display: block;
    margin-top: 10px;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.links {
            display: flex;
            justify-content: space-between;
        }

        .links a {
            width: 45%; /* Make each link take half of the available space */
            text-align: center;
        }
	
	

	</style>
	<header>
        <h2>Welcome to MAIN FLOW SERVICEs And TECHNOLOGIES</h2>
        </header>
	<div class="main">

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"placeholder="Enter user_name Here"><br><br>
			<input id="text" type="password" name="password"placeholder="Enter password Here"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
			<a href="forgot_password.php">Forgot Password?</a>
		</form>
	</div>
	</div>
</body>
</html>