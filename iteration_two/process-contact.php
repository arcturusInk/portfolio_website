<?php
	if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["subject"]) && !empty($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["message"])) {
		$visitorEmail = $_POST['email'];
		$visitorName = $_POST['name'];
		$messageSubject = $_POST['subject'];//included
		$message = $_POST['message'];
		
		$emailTo = ""; //included
		$messageBody = "A new message from portfolio's contact form.\n\nMessage sent by $visitorName.\n".
						"Reply back to: $visitorEmail.\n\n".
                        "The message:\n$message";
		
		mail($emailTo, $messageSubject, $messageBody);
		
		echo "Message Sent<br /><br >\nYou Will Be Directed Back To Contact Page";
		header("refresh: 4; contact.php");
	}
	else{
		echo "Message Not Sent: All Fields Not Filled<br /><br >\nYou Will Be Directed Back To Contact Page";
		header("refresh: 5; contact.php");
	}
	
?>