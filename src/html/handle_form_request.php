<html>
<head>
	<meta http-equiv="Content-Type" content=
	text/html; charset=utf-8"/>
	<title>Form Feedback</title>
</head>
<body>
<?php # Script MyFirstForm.php

// Create a shorthand for the form data;
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comments =$_REQUEST['comments'];

//$name=$_REQUEST['age'];
//$name=$_REQUEST['gender'];
//$name=$_REQUEST['submit'];

// Print the submitted information:
echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>.</p>\n";

?>
</body>
</html>