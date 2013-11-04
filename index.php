<?php
    define('APP_DIR',dirname(__FILE__));
    require APP_DIR.'/blog.php';
    require APP_DIR.'functions.php';

	$posts = get_posts('posts', $conn, 10);

	get_view('index', array(
		"posts" => $posts
	));
