<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	// Save contact message to a file
	$file = fopen("messages.txt", "a");
	fwrite($file, "$name\t$email\t$message\n");
	fclose($file);

	// Flush output to browser
	ob_flush();
	flush();

	// Redirect to thank you page
	header("Location: thank-you.php");
	exit;
}
?>
