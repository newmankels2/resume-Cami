<?php
session_start();
include "chatbox2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            background-image: url("beach.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        nav {
            width: 100%;
            height: 65px;
        }
        nav ul {
            position: absolute;
		    list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            top: 40px;
            right: 80px;
            
        }
        nav ul li {
            margin: 0 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: black;
            font-size: 24px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 3px;
        }
    </style>

<body>
    <nav>
		<ul>
			<li><a href="loginform.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
		</ul>
	</nav> 
</body>
</html>