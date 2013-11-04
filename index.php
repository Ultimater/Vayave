<?php

    require "blog.php";
    require "functions.php";

	$posts = get_posts('posts', $conn, 10);

	get_view('index', array(
		"posts" => $posts
	));