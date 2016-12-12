<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>PROJECTS: NYC Museums</title>
		<link rel="stylesheet" href="css/NYCmuseums-style.css" type="text/css"/>	
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
					NYCmuseums - built on Layar's API - came about after working as a undergraduate summer researcher at POLY. Since I could not share the 
					research with others – as the project was the professor’s idea I was working under – I created NYCmuseums (my own idea) using the programming
					skills I had learned during the summer. The purpose of the app is to provide users with information regarding the many museums in NYC. The 
					photos below explains what the application does.
				</p>
			</div>

			<div class="container-images">
				<p id="heading">SCREENSHOTS OF NYCMUSEUMS:</p>
				<figure class="inline">
					<img src="images/NYCmuseums/augWithTab.jpg" >
					<img src="images/NYCmuseums/mapWithTab.jpg" >
				</figure>
				<p>
				The application can viewed be in augmented or mapped interface - as seen in the above pictures. In the augmented interface, each black dot
				represents a museum. The closer the museum is from your location, the larger the dot. After a museum is selected, a description
				box pops up and gives the name of the museum, its address, a brief description of what the museum displays and how many miles you are away from
				the selected museum.
				<p>
				<figure class="inline">
					<img src="images/NYCmuseums/moreInfo.jpg" >
					<img src="images/NYCmuseums/link.jpg" >
				</figure>	
				<p>
				After the "More Information" link is clicked, it gives the user a link to the selected museum's website and queries the database to get 
				the museum's phone number, hours of operation and admission fees. The second photo depicts how the app takes you to the museum's website.
				<p>				
				<figure class="inline">
					<img src="images/NYCmuseums/takeMeThere.jpg" >
					<img src="images/NYCmuseums/dir.jpg" >
				</figure>
				<p>
				The "Take Me There" link, takes you to Google Maps. It gives directions to the museum from your location.
				<p>
			</div>
			
			<div class="container-links">
				<p>View: <a href="https://github.com/arcturusInk/PHP-MySQL/tree/master/NYCmuseums" target="_blank">Source Code</a></p>
				<p>Follow: <a href="https://www.layar.com/layers/nycmuseums29be" target="_blank">The Directions</a> To View The Application</p>
			</div>
		</div>
		
		<footer>
			Website &copy; Swati Barua &trade; <?php echo date("Y"); ?> | <i> sb4393_at_nyu_dot_edu </i> | GitHub handle: <a href="https://github.com/arcturusInk" target="_blank"> @arcturusInk</a>
		</footer>
		
	</body>
</html>



