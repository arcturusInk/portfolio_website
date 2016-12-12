<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTS: Club Hub</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/clubHub-style.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Julius+Sans+One|Josefin+Sans" type="text/css"/>
  </head>
  <body>
  
	<div id="sketch-holder"></div>
  
	<nav>
		<ul class="menu vertical">
			<li><a id="title-name" href="../about.php">Swati Barua</a></li>
			<li><a id="border" href="../about.php">ABOUT ME</a></li>
			<li><a href="../project.php">PROJECTS</a></li>
				<ul class="nested vertical menu">
					<li><a href="NYCmuseums.php">NYC Museums</a></li>
					<li><a href="chatBox.php">Chat Box</a></li>
					<li><a href="clubHub.php" class="currentPage">Club Hub</a></li>
				</ul>
			<li><a href="../Resume for Website.pdf">RESUME</a></li>
			<li><a href="../contact.php">CONTACT</a></li>
		</ul>
	</nav>
	
	<div class="container">
		<div class="container-projDes">
			<p>PROJECT DETAILS: </p>
			<p class="text">
				ClubHub is a system for student clubs to post information about their events, and for members to join club, post comments, etc. 
				This project was my first exposure to making web applications. It was the final course project of my database class in college, and contains
				no frontend code except for HTML. I singlehandedly coded it myself, and it introduced me to server-side programming. The project 
				requirements - which lists all the requirements for the project - and the source code are linked below. I will go through a sample of 
				the project's requirements and their implementations with the following pictures.
			</p>
		</div>
		
		<div class="container-projBody">
			<p>SCREENSHOTS OF CLUB HUB:</p>
			<figure>
				<img src="images/clubHub/shot1.JPG" >
				<figcaption class="text">
				This was requirement 1 and 2 in the project requirements. The first requirement was whether a user is logged in or not, they should be
				able to view list of topics, - in this case: frisbees weight, plays, air speed, dresses - select a topic and see list of clubs
				that are about that topic. They should also see a list of public events occurring in the coming days. Requirement number two was after a user is
				logged in, they should be able to do these following activities: post a new event (if they were admin of the club), sign up for events (if they were
				members of the club or it was a public event), view the events they were signed up for, post comments about their club or events (if they were
				members of the club or if it was a public event) and, of course, logout.
				</figcaption>
			</figure>
			<figure>
				<img src="images/clubHub/shot2.JPG" >
				<figcaption class="text">This was requirement 6: allowing the admin of the club to post a new event into the Club Hub system. </figcaption>
			</figure>
			<figure>
				<img src="images/clubHub/shot3.JPG" >
				<figcaption class="text">This was requirement 4: viewing events that you have already signed up for or are eligible to sign up for.</figcaption>
			</figure>			
			<figure>
				<img src="images/clubHub/shot4.JPG" >
				<figcaption class="text">This was requirement 5: allowing the members to sign up for a new event.</figcaption>
			</figure>
			<p class="text">
				These table definitions and insertion queries were used to create the database: <a href="documents/clubHub_schema.pdf" >table definitions</a> and
				<a href="documents/clubHub_insertionQueries.pdf">queries</a>
			</p>
			
			
		</div>
		
			<div class="container-links">
				<p>
					View: <a href="https://github.com/arcturusInk/PHP-MySQL/tree/master/clubHub" target="_blank">Source Code</a> | 
					<a href="documents/clubHub_projectRequirements.pdf" target="_blank">Full Project Requirement</a>
				</p>
			</div>
			
		</div>
	

	<footer>
			Website &copy; Swati Barua <?php echo date("Y"); ?> | <i> sb4393_at_nyu_dot_edu </i>  | GitHub handle: <a href="https://github.com/arcturusInk" target="_blank"> arcturusInk</a>
	</footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/project-script.js"></script>
	<script language="javascript" type="text/javascript" src="libraries/p5.js"></script>
    <script language="javascript" type="text/javascript" src="libraries/sketch.js"></script>
  </body>
</html>
