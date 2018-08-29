<html> <head>
	<title>Form Feedback</title>
	
</head><body>
<?php # Script handle_withisset.php
// Validate the address:

if (isset($_REQUEST['address'])) {
	$address = $_REQUEST['address'];
} else {
	$address = NULL;
}
	
	if ($address == '1') {
		echo '<p><b>We will send an item to address: Natalia Fofanova 1234 Blue street, Kemah, TX</b></p>';
	} elseif ($address == '2') {
		echo '<p><b>We will send an item to address: Denise Silva 5678 Sunflower seed street, Houston, TX</b></p>';
	} elseif ($address == '3') {
		echo '<p><b>We will send an item to address: University of Houston 4800 Academy street, Houston, TX</b></p>';
	} else { // $_POST('address') is not set.
	echo '<p><b>Please choose address to continue</b></p>'; }
	
	?>
</body>
</html>