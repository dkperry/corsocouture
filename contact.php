<?php

try {
	$to = "corsocouture@gmail.com";
	$from = test_input($_POST['email']);
	$name = test_input($_POST['contactName']);
	$phone= test_input($_POST['phone']);
	$comments = test_input($_POST['comments']);

	$subject = "Corso Couture Contact Submission";
	$subject2 = "Copy of Your Contact Submission to Corso Couture";

	$msgToCC = "You have a Corso Couture contact form submission from " . $_POST['contactName'] . ".\n\n" . "Name:\t" . $name . "\nEmail:\t" . $from . "\nPhone:\t" . $phone . "\n\n". $comments;
	$msgToSender = "This is a copy of your contact submission to Corso Couture: " . $comments;

	mail($to, $subject, $msgToCC);
	mail($from, $subject2, $msgToSender);

	header('Location: thanks.html');
}
catch(Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}

function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}

?>