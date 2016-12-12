<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>PROJECTS: Chat Box</title>
		<link rel="stylesheet" href="css/chatBox-style.css" type="text/css"/>	
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Tangerine|Julius+Sans+One|Josefin+Sans" type="text/css"/>
	</head>
	
	<body>
	
		<nav>
			<ul>
				<li><p><a href="../about.php">Swati Barua ...</a></p>
				<li><a id="border" href="../about.php" class="currentPage">ABOUT ME</a></li>
				<li><a href="../project.php">PROJECTS</a></li>
				<li><a href="../contact.php">CONTACT</a></li>
			</ul>
		</nav>
	
		<div class="container">
		
			<div class="container-projDes">
				<p id="heading">PROJECT DETAILS: </p>
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
					<img src="images/chatBox/index.jpg" >
					<figcaption>Home Page</figcaption>
				</figure>
				<figure>
					<img src="images/chatBox/settings.jpg" >
					<figcaption>Settings Page</figcaption>
				</figure>
				<figure>
					<img src="images/chatBox/logout.jpg" >
					<figcaption>Logout Page</figcaption>
				</figure>			
							<figure>
					<img src="images/chatBox/login.jpg" >
					<figcaption>Login/Sign-Up Page</figcaption>
				</figure>
			</div>
			
			<div class="container-links">
				<p>View: <a href="https://github.com/arcturusInk/htmlAndCSS/tree/master/chatBox" target="_blank">Source Code</a></p>
				<p>Visit: <a href="http://79.170.40.242/chatboxproject.com/" target="_blank">Live Site</a></p>	
			</div>
		</div>
		
		<footer>
			Website &copy; Swati Barua &trade; <?php echo date("Y"); ?> | <i> sb4393_at_nyu_dot_edu </i> | GitHub handle: <a href="https://github.com/arcturusInk" target="_blank"> @arcturusInk</a>
		</footer>
		
	</body>
</html>