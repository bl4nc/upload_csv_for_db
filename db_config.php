<?php
 $server = getenv("SERVER");
 $user = getenv("USER");
 $password = getenv("");
 $database = getenv("DATABASE");
 // Connect to user database
 $mysqli = new mysqli($server, $user, $password, $database);
 // If have error show the message
 if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
 //Enable upload data for local file in database
 mysqli_options($mysqli, MYSQLI_OPT_LOCAL_INFILE, TRUE);