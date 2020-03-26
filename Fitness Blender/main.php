<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Welcome to the world of fitness.</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div class="navbar">
			<a class="logo" href="#home">Fitness Blender</a>
			<ul class="navoptions">
				<li><a class="option" href="workoutmain.php">Workouts & Programs</a></li>
				<li><a class="option" href="healthyliving.php">Healthy Living</a></li>
				<li><a class="option" href="#contact-us-div">Contact Us</a></li>
				<li><a class="option" href="#"><?php echo "Hello! " .$_SESSION['userid'];?></a></li>
				<li><a class="option" href="fitness.html">Logout</a></li>
			</ul>
		</div><span id="home"></span><br><br>
		<div id="mainimage">
			<p id="mainheading">Workout videos for every<br>fitness level.<br>Absolutely FREE.</p>
			<p id="subheading">Earn your WORKOUT COMPLETE™</p>
		</div>
		<div class="main-segments">
			<div class="segment-float">
				<img class="left-image" src="./Images/feature-1.jpg"/>
			</div>
			<div class="segment-float">
				<p class="segment-heading-right">Over 500 free workout<br>videos with new workouts<br>released every week.</p>
				<p class="segment-content-right">We believe fitness should be accessible to everyone, everywhere,<br>regardless of income or access to a gym. That's why we offer<br>hundreds of free,professionally built workout videos,<br>for every fitness level and goal.</p>
				<p class="segment-link-right"><a class="segment-link-anchor" href="workoutmain.php">View All Our Workout Videos</a></p>
			</div>
		</div>
		<div class="main-segments">
			<div class="segment-float-right">
				<img class="right-image" src="./Images/feature-2.jpg"/>
			</div>
			<div class="segment-float-right">
				<p class="segment-heading-left">Find support and<br>encouragement from the<br> mostpositive community on<br>the web.</p>
				<p class="segment-content-left">Our community forum is a great place to share helpful workout<br>and nutrition information and cheer each other on. Share tips,<br>challenges and triumphs, results and progress with Fitness<br>Blender members from all over the world.</p>
				<p class="segment-link-left"><a class="segment-link-anchor" href="#">See the Latest Community Discussions</a></p>
			</div>
		</div>
		<div class="main-segments">
			<div class="segment-float">
				<img class="left-image" src="./Images/feature-3.jpg"/>
			</div>
			<div class="segment-float">
				<p class="segment-heading-right">A customizable calendar to<br>manage your programs and<br>monitor your progress.</p>
				<p class="segment-content-right">Sign up for a free membership & build your own<br>workout program using our online workout calendar. You’ll be able<br>to schedule your workouts, add new programs, track your<br>workouts, save your favorite workout videos, and more.</p>
				<p class="segment-link-right"><a class="segment-link-anchor" href="#">Become a Member Today</a></p>
			</div>
		</div>
		<div class="main-segments">
			<div class="segment-float-right">
				<img class="right-image" src="./Images/feature-4.jpg"/>
			</div>
			<div class="segment-float-right">
				<p class="segment-heading-left">Workout programs on your<br>own schedule. Get your<br>Workout complete today!</p>
				<p class="segment-content-left">Improve your body, health and mindset with our<br>customized workout programs and meal plans that will guide<br>and encourage you every step of the way. Our programs use our<br>online workout videos to provide detailed, day-by-day<br>instruction, creating incredible, sustainable results.</p>
				<p class="segment-link-left"><a class="segment-link-anchor" href="workoutmain.php">Learn More About Our Programs</a></p>
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
				</div><br>
				<div class="first-social"><a target="_blank" href="https://www.youtube.com/user/FitnessBlender"><img src="./Images/youtube.png"/></a></div>
				<div class="social"><a target="_blank" href="https://www.pinterest.com/FitnessBlender/"><img src="./Images/pinterest.png"/></a></div>
				<div class="social"><a target="_blank" href="https://www.facebook.com/fitnessblender/"><img src="./Images/facebook.png"/></a></div>
				<div class="social"><a target="_blank" href="https://www.instagram.com/fitnessblender/"><img src="./Images/instagram.png"/></a></div>
				<div class="social"><a target="_blank" href="https://twitter.com/FitnessBlender"><img src="./Images/twitter.png"/></a></div>
			</div>
		</div>
	</body>
</html>