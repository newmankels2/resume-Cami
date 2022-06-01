<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>ITDESIGNERSP.com </title>
    
	<style>
	img{
		width: 150px;
		height: 150px;
		border-radius: 50%;
		margin-left: 320px;
		margin-top: 50px;
	}
	.contain {
		margin: 0 20% 30px 20%;
		border: 4px solid #00C5CB ;
		background-color: #EEEDEE  ;
	}
	h1{
		text-align: left;
		color: #45008E;
		font-family: Sans-serif;
		
	}
	.body-content h1 {
		text-align: left;
		margin-left: 30px;
	}
	h2{
		text-align: left;
		color: #283747 ;
		font-family: Helvetica;
	}
	.center h3 {
		text-align: center;
	}
	.body-content a {
		font-size:30px;
		margin-bottom: 30px;
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
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Logout</a></li>
		</ul>
	</nav>
    <div class="contain">
		<img src="pic33.jpeg" alt="pic not found">
		<h1><u>Personal Info</u></h1>
		<div class="center">
			<h3>Name : Camille K. Newman</h3>
			<h3>Phone (num) : (8765828597)</h3>
			<h3>Email :newmankels2@gmail.com</h3>
			<h3>Address : ST Catherine, Jamaica</h3>
		</div>
		
		<div class="body-content">
			<h1><u>Skills</u></h1>
			<ul>
				<li>GOOD LISTENING ABILITYS</li>
				<li>SINGER</li>
				<li>PUBLIC SPEAKING</li>
			</ul>
			<h1><u>Hobbies</u></h1>
			<h2>BOOK READING</h2>
			<h2>TRAVELLING</h2>
			<h1><u>Qualification</u></h1>

			<ul>
				<li>SOCIAL STUDIES</li>
				<li>HUMAN AND SOCIAL BIOLOGY</li>
				<li>AGRICULTURAL SCIENCE</li>
				<li>ENGLISH LANGUAGE</li>
			</ul>
				<h1><u>Institutions</u></h1>
				<h2>WATER FORD HIGH SCHOOL, Jamaica </h2>
				<h2>MARK OF EXCELLENCE, Jamaica </h2>
				
			
			<h1><u>Voluntarism</u></h1>
			<ul>
				<li>MIXOLOGIST AT A TAVERN</li>
				<li>VOLUNTARISM AT TEACHING SMALL CHILDREN AT A PRESCHOOL</li>
				<li>MAIL CLERK</li>
				<li>SALES REP</li> <BR>
			</ul>

			<a href="https://www.youtube.com/channel/UC40pqrOg11_L_CY86-kddmA/videos?view_as=subscriber">Click here for more info</a>

		</div>
		
    </div>
</body>
</html>