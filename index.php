<?php

	require "functions.php";

	$conn = connect($config);

	if(!$conn) die("could not connect to database");

	$posts = get_posts('posts', $conn, 10);

	require "index.view.php";