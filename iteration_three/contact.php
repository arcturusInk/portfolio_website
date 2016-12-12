<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/contact-style.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Julius+Sans+One|Josefin+Sans" type="text/css"/>
  </head>
  <body>
	
	<div id="sketch-holder"></div>
	
	<nav>
		<ul class="menu vertical">
			<li><a id="title-name" href="about.php">Swati Barua</a></li>
			<li><a id="border" href="about.php">ABOUT ME</a></li>
			<li><a href="project.php">PROJECTS</a></li>
			<li><a href="Resume for Website.pdf">RESUME</a></li>
			<li><a href="contact.php" class="currentPage">CONTACT</a></li>
		</ul>
	</nav>
	
	<?php
	if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["subject"]) && !empty($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["message"])) {
		$visitorEmail = $_POST['email'];
		$visitorName = $_POST['name'];
		$messageSubject = $_POST['subject'];//included
		$message = $_POST['message'];
		
		$emailTo = "swatib160@gmail.com"; //included
		$messageBody = "A new message from portfolio's contact form.\n\nMessage sent by $visitorName.\n".
						"Reply back to: $visitorEmail.\n\n".
                        "The message:\n$message";
		
		mail($emailTo, $messageSubject, $messageBody);
		
	
	}
	
	?>
	
	<div id="mess-container">
		<div id="response"></div>
	</div>
	<div id="container">
		<p class="asti">* All Fields Required *</p>
		<form id="form" method="post">
			<div class="row">
				<div class="medium-6 columns">
					<input type="text" placeholder="Email" id="email">
				</div>
				<div class="medium-6 columns">
					<input type="text" placeholder="Name" id="name">
				</div>
				<input type="text" placeholder="Subject" id="subject">
				<textarea cols="75" rows="12" placeholder="Message" id="message"></textarea>	
				<input type="submit" class="button submit-btn" value="SEND">
			</div>
		</form>
	</div>

	<footer>
			Website &copy; Swati Barua <?php echo date("Y"); ?> | <i> sb4393_at_nyu_dot_edu </i>  | GitHub handle: <a href="https://github.com/arcturusInk" target="_blank"> arcturusInk</a>
	</footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/contact-script.js"></script>
	<script language="javascript" type="text/javascript" src="libraries/p5.js"></script>
    <script language="javascript" type="text/javascript" src="libraries/sketch.js"></script>
  </body>
</html>
