<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Workout & Programs</title>
		<link rel="stylesheet" href="workoutmain.css">
	</head>
	<body>
		<div class="navbar">
			<a class="logo" href="#">Fitness Blender</a>
			<ul class="navoptions">
				<li><a class="option" href="main.php">Home</a></li>
				<li><a class="option" href="healthyliving.php">Healthy Living</a></li>
				<li><a class="option" href="#contact-us-div">Contact Us</a></li>
				<li><a class="option" href="#"><?php echo "Hello! " .$_SESSION['userid'];?></a></li>
				<li><a class="option" href="fitness.html">Logout</a></li>
			</ul>
		</div><span id="home"></span><br><br>
		<div id="mainimage">
			<p id=title>Workout & Programs</p>
			<p id="mainheading">Find Your Fitness.<br>Something for Everyone.</p>
			<p id="subheading">A huge selection of workout videos and programs to help you look<br>and feel your best.</p>
		</div>
		<div class="workout-segment" style="background-color: #FFFFFF">
			<h1 id="workheading">Select Workout according to your choice.</h1>
			<div id="buttons">
				<button class="buttons-style" id="easy" onclick="return easy()">Beginner's Workout<br>(Easy)</button><br>
				<button class="buttons-style" id="normal" onclick="return normal()">Intermediate's Workout<br>(Normal)</button><br>
				<button class="buttons-style" id="hardcore" onclick="return hardcore()">Expert's Workout<br>(Hardcore)</button>
			</div>
			<div id="workout-video">
				<div id="easy-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/SibjPw9Khz4?rel=0&amp;mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
				<div id="normal-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/t6UnYPkY8Ls?rel=0&amp;mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
				<div id="hardcore-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/E4tiWhsQhQg?rel=0&amp;mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
		</div>
		<div id="contact-us-div">
			<div id="contact-us">
				<p id="footer-heading">- About Fitness Blender - </p>
				<p id="footer-title">Created by Anuj, Pranav and Janhavi<br>—a team passionate about helping you<br>achieve your health and fitness goals.</p>
				<div class="first-div">
					<p class="number">35+</p>
					<p class="number-desc">35+ million workouts completed<br>each month by our amazing<br>Fitness Blender Family.</p>
				</div>
				<div class="footer-div">
					<p class="number">500+</p>
					<p class="number-desc">500+ free workout videos for<br>every fitness level + effective &<br>affordable workout programs.</p>
				</div>
				<div class="footer-div">
					<p class="number">10+</p>
					<p class="number-desc">26+ years of combined experience<br>helping people achieve their<br>fitness & health goals.</p>
				</div>
				<div class="first-social"><a target="_blank" href="https://www.youtube.com/user/FitnessBlender"><img src="./Images/youtube.png" alt="IMG"/></a></div>
				<div class="social"><a target="_blank" href="https://www.pinterest.com/FitnessBlender/"><img src="./Images/pinterest.png" alt="IMG"/></a></div>
				<div class="social"><a target="_blank" href="https://www.facebook.com/fitnessblender/"><img src="./Images/facebook.png" alt="IMG"/></a></div>
				<div class="social"><a target="_blank" href="https://www.instagram.com/fitnessblender/"><img src="./Images/instagram.png" alt="IMG"/></a></div>
				<div class="social"><a target="_blank" href="https://twitter.com/FitnessBlender"><img src="./Images/twitter.png" alt="IMG"/></a></div>
			</div>
		</div>
		<script>
			function easy(){
				document.getElementById('easy-video').style.display='inline-block';
				document.getElementById('normal-video').style.display='none';
				document.getElementById('hardcore-video').style.display='none';
				return;
			}
			function normal(){
				document.getElementById('easy-video').style.display='none';
				document.getElementById('normal-video').style.display='inline-block';
				document.getElementById('hardcore-video').style.display='none';
				return;
			}
			function hardcore(){
				document.getElementById('easy-video').style.display='none';
				document.getElementById('normal-video').style.display='none';
				document.getElementById('hardcore-video').style.display='inline-block';
				return;
			}
		</script>
	</body>
</html>