<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Workout & Programs</title>
		<link rel="stylesheet" href="healthyliving.css">
	</head>
	<body>
		<div class="navbar">
			<a class="logo" href="#home">Fitness Blender</a>
			<ul class="navoptions">
				<li><a class="option" href="main.php">Home</a></li>
				<li><a class="option" href="workoutmain.php">Workouts & Programs</a></li>
				<li><a class="option" href="#contact-us-div">Contact Us</a></li>
				<li><a class="option" href="#"><?php echo "Hello! " .$_SESSION['userid'];?></a></li>
				<li><a class="option" href="fitness.html">Logout</a></li>
			</ul>
		</div><span id="home"></span><br><br>
		<div id="mainimage">
			<p id=title>Healthy Living</p>
			<p id="mainheading">Live Well, Feel Great<br>and Look Great.</p>
			<p id="subheading">A huge selection of health and fitness content, healthy recipes<br>and transformation stories to help you get fit and stay fit!</p>
		</div>
		<h1 id="maincontainer-heading">Some of our healthiest recipies just for you.</h3>
		<div class="maincontainer">
			<div class="container">

				<!-- CARD 1 -->
				<div class="card">
					<div class="face face1">
						<div class="content">
							<img src="./Images/banana.png">
							<h4>Banana Nice Cream</h4>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<p>Recipe:<br>1. Cut the bananas. Put them in a container and freeze for 3 hours.<br>2. Cut the strawberries and freeze for 3 hours.<br>3. Put the fruits in a food processor and blend until smooth.<br>4. Keep blending 1-2 times.<br>5. Serve and sprinkle with coconut flakes and mint leaves.</p>
							<a href="#">Read More.</a>
						</div>
					</div>
				</div>

				<!-- CARD 2 -->
				<div class="card">
					<div class="face face1">
						<div class="content">
							<img src="./Images/coconut.png">
							<h4>Coconut Fruit Popsicles</h4>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<p>Recipe:<br>1. Melt the coconut cream until creamy.<br>2. Rinse and chop the fruit finely.<br>3. Mix the fruit and add 4 tsp of honey.<br>4. Stir to form a rough puree.<br>5. In popsicle molds, put a tablespoon of fruit puree & coconut cream.<br>6. Repeat until the mold is full.<br>7. Put the grips & freeze for 3 hours.<br>8. Take out from the freezer and Enjoy on a hot day!</p>
							<a href="#">Read More.</a>
						</div>
					</div>
				</div>

				<!-- CARD 3 -->
				<div class="card">
					<div class="face face1">
						<div class="content">
							<img src="./Images/mushroom.png">
							<h4>Risotto with Mushrooms</h4>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<p>Ingridients:<br>1. 1 tablespoon olive oil.<br>2. 1 cup barley.<br>3. 1 cup sliced mushrooms.<br>4. 5-6 cups low-sodium vegetable broth.<br>5. 1/4 cup grated Parmesan cheese, plus more to serve.<br>6. Parsley, to serve.<br>7. Salt, to taste.<br>8. Pepper, to taste.</p>
							<a href="#">Read More.</a>
						</div>
					</div>
				</div>

				<!-- CARD 4 -->
				<div class="card">
					<div class="face face1">
						<div class="content">
							<img src="./Images/sweet-potato.png">
							<h4>Sweet potato & Beet Chips</h4>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<p>Recipe:<br>1. Rinse and peel the vegetables.<br>2. Slice them very thinly.<br>3. Place the slices on a baking tray lined with parchment paper.<br>4. Drizzle oil of choice on top.<br>5. Roast for 10-12 minutes at 160˚C until crispy.<br>6. Remove from the oven and let cool completely.<br>7. Serve them hot with dip or enjoy plain.</p>
							<a href="#">Read More.</a>
						</div>
					</div>
				</div>

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
	</body>
</html>