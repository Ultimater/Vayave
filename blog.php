<?php 

    require APP_DIR.'/database.php';
	$conn = connect($config);
	if(!$conn) die("could not connect to database");

?>
