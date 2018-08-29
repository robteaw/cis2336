<h!DOCTYPE html>
<html>
	<head>
	<title>My First PHP Script</title>
	</head>
	<body>
	    <p>
	      <?php
	        echo "Hello world!";
            echo "<br><strong>This is bold</strong>";
	        ?>
	    </p>
	    <p>
	      <?php
	        $var = "test";
	        $name = "Robert";
	        echo "var is equal to " . $name; 
	        echo "<br>var is equal to $var";
	        echo "<br>/$var is equal to $var";
	        echo "<br>\$var is equal to \$var";
	        ?>
	    </p>
    </body>
</html>
