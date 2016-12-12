<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTS: Chat Box</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/chatBox-style.css">
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
					<li><a href="chatBox.php" class="currentPage">Chat Box</a></li>
					<li><a href="clubHub.php">Club Hub</a></li>
				</ul>
			<li><a href="../Resume for Website.pdf">RESUME</a></li>
			<li><a href="../contact.php">CONTACT</a></li>
		</ul>
	</nav>
	
	<div class="container">
		
		<div class="container-projDes">
			<p>PROJECT DETAILS: </p>
			<p id="text">
				The idea of the project came about from using Facebook's messaging system. I didn't like the fact that 
				you couldn't delete your messages after the interaction was over. And Facebook, of course, could have all the messages 
				you have ever sent to someone. This lead me to thinking of making a message/chat box system, where you would be able to delete 
				your messages after a certain amount of days had passed. So I made this chat box.
				The plan was to make the backend with PHP and MySQL, but I never got around to it. However, I did create the frontend interface with 
				HTML and CSS. This was my first project with HTML/CSS, so I was learning the languages 
				as I made it. Therefore the code for this is not perfect, but the end result - seen in the photos and live site link below - matches
				exactly what I had envisioned in my head, which is why I chose to share this project.
			</p>
		</div>

		<div class="container-images">
			<p>SCREENSHOTS OF THE CHAT BOX:</p>
			<figure>
				<img src="images/chatBox/index.JPG" >
				<figcaption>Home Page</figcaption>
			</figure>
			<figure>
				<img src="images/chatBox/settings.JPG" >
				<figcaption>Settings Page</figcaption>
			</figure>
			<figure>
				<img src="images/chatBox/logout.JPG" >
				<figcaption>Logout Page</figcaption>
			</figure>			
						<figure>
				<img src="images/chatBox/login.JPG" >
				<figcaption>Login/Sign-Up Page</figcaption>
			</figure>
		</div>
		
		<div class="container-links">
			<p>View: <a href="https://github.com/arcturusInk/htmlAndCSS/tree/master/chatBox" target="_blank">Source Code</a></p>
			<p>Visit: <a href="http://79.170.40.242/chatboxproject.com/" target="_blank">Live Site</a></p>	
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
