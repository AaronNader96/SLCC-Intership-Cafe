<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$order = $_POST["order"];

	// Save order to a file
	$file = fopen("orders.txt", "a");
	fwrite($file, "$name\t$email\t$phone\t$order\n");
	fclose($file);

	// Redirect to thank you page
	header("Location: thank-you.php");
	exit;
}
ob_end_flush();
?>
