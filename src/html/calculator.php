<html>
<head>
	<meta http-equiv="Content-Type" content=text/html; charset=utf-8"/>
	<title>Multiplication Calculator</title>
<link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div id="header">
		
<?php
	include ('header.php');
?>
	<div id="content">

<form action="calculator.php" method="post">
<fieldset>
	<h2>Multiplication Calculator</h2>
		<p>Number 1	<input type="text" name="number1" value ="<?php if(isset($_POST['number1'])) echo $_POST['number1'];?>"
 /></p>
		
		<p>Number 2	<input type="text" name="number2" value ="<?php if(isset($_POST['number2'])) echo $_POST['number2'];?>"/></p> 
		
<?php # Script calculator.php

// Create a shorthand for the form data;	
	$number1=$_POST['number1'];
	$number2=$_POST['number2'];
	$sum=$number1 * $number2;	
	
?>
		<p><input type="submit" name="submit" value="Calculate" /></p>
		
<?php 
	if(!empty($_POST['number1']) && !empty($_POST['number2'])) {
	echo "--------------------------------<br>";	
	echo "<span>The result is: $sum</span><br>"; 
	}
?>

</form>
</fieldset>

<?php
	include ('footer.php');
?>

    </div>