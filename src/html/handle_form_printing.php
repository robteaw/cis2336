<html>
<head>
	<title>Form Feedback</title>
</head>
<body>
<?php # handle_form_printing.php

//Print the submitted information:
if ( !empty{$_POST['name']} && !empty{$_POST['commments']} && !empty{$_POST['email']}) {
	echo "<p>Thank you, <b>($_POST['email'])</b>, for the following comments:<br />
<tt>{$_POST['commments']}</tt></p>
<p>We will reply to you at <i>($_POST['email'])</i>.</p>\n";
}	else { //Missing form value.
		echo <p>Please go back and fill out the form again.</p>;

}	
?>
</body>
</html>