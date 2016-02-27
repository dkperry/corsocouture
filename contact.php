<?php

if(isset($_POST['submit'])) {
	$to = "corsocouture@gmail.com";
	$from = $_POST['email'];
	$name = $_POST['contactName'];
	$phone= $_POST['phone'];
	$comments = $_POST['comments'];

	$subject = "Corso Couture Contact Submission";
	$subject2 = "Copy of Your Contact Submission to Corso Couture";

	$msgToCC = "You have a Corso Couture contact form submission from " . $_POST['contactName'] . ".\n\n" . "Name:\t" . $name . "\nEmail:\t" . $from . "\nPhone:\t" . $phone . "\n\n". $comments;
	$msgToSender = "This is a copy of your contact submission to Corso Couture: " . $comments;

	$hdrToCC = "From" . $from;
	$hdrToSender = "From" . $to;

	mail($to, $subject, $msgToCC, $hdrToCC);
	mail($from, $subject2, $msgToSender, $hdrToSender);

	header('Location: thanks.html');
}


?>