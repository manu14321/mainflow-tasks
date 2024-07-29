<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MAIN FLOW</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Newpage.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="service.html">SERVICE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div> 
        <div class="content">
            <h1>Web Design & <br><span>Development</span> <br>Course</h1>
            <p class="par">welcome to main flow services and techologies
                <br> "the great growling engine of change techology." 
                <br> "techology should improve your life .... not become your life."</p>

            <button class="cn"><a href="#">JOIN US</a></button>
            <b><p><button class="out"><a href="logout.php">Logout</a></button></p>
         </div>
</body>
</html>

