<?php
	session_start();
	if(!isset($_SESSION['unique_id'])) {
		header("location:login.php");
	}
?>

<?php
	include_once("header.php");
?>

<body>
    <!-- <section>
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
		
		<div class="row">
			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>

			<div>
				<i class="fa fa-location-arrow"></i>
				<i class="fa fa-person-running"></i>
				<i class="fa fa-shuffle"></i>
				<i class="fa fa-air-freshener"></i>
				<i class="fa fa-box"></i>
				<i class="fa fa-maximize"></i>
				<i class="fa fa-dashboard"></i>
				<i class="fa fa-hryvnia"></i>
				<i class="fa fa-bangladeshi-taka-sign"></i>
				<i class="fa fa-grin-wink"></i>
				<i class="fa fa-random"></i>
				<i class="fa fa-snowman"></i>
				<i class="fa fa-dong-sign"></i>
				<i class="fa fa-map-marked"></i>
				<i class="fa fa-stairs"></i>
				<i class="fa fa-stopwatch"></i>
				<i class="fa fa-deafness"></i>
				<i class="fa fa-rod-asclepius"></i>
				<i class="fa fa-mortar-pestle"></i>
				<i class="fa fa-temperature"></i>
			</div>
		</div>
	</section> -->


    <div class="wrapper">
        <section class="users">
            <header>
				<?php
					include_once("php/config.php");
					$sql = mysqli_query($connect, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']};");
					if(mysqli_num_rows($sql) > 0) {
						$row = mysqli_fetch_assoc($sql);
					}
				?>
                <div class="content">
                    <img src="php/<?= $row['img_route'] ?>" alt="">

                    <div class="details">
                        <span><?= $row['last_name'] ." ". $row['first_name'] ?></span>
                        <p><?= $row['status'] ?></p>
                    </div>
                </div>
    
                <a href="php/logout.php?logout_id=<?= $row['unique_id'] ?>" class="logout">Déconnexion</a>
            </header>

            <div class="search">
                <span class="text">Commencer une discussion</span>
                <input type="text" placeholder="Rechercher un profil" name="">
                <button><i class="fa fa-search"></i></button>
            </div>

            <div class="users-list">
                
            </div>
        </section>
    </div>

    <script src="javascript/users.js"></script>
</body>
</html>