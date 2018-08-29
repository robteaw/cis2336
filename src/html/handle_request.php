<html>
<head>
	<meta http-equiv="Content-Type" content=
	text/html; charset=utf-8"/>
	<title>Form Feedback</title>
</head>
<body>
<?php # Script handle_request.php

// Create a shorthand for the form data;
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];


// Print the submitted information:
echo "<p>Name: <b>$name</b><br /></p>
<p>Age: <b>$age</b></p>\n";

?>
</body>
</html>