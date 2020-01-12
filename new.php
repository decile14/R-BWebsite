<?php

// connect to the database
include('connect-db.php');

// get form data, making sure it is valid
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));

// save the data to the database
mysqli_query($connection, "INSERT INTO email_list (email) VALUES ('$email')");

mysqli_close($connection);

	
?>
