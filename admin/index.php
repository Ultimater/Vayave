<?php 
	
	require "../blog.php";
	require "../functions.php";		
		
	$status = "";
	if(isset($_POST['create_post'])){
		$title = $_POST['title'];
		$body = $_POST['body'];

		if(!empty($title) || !empty($body)){
			insert_post($_POST['title'], $_POST['body'], $conn);
			$status = "Post Inserted";
		} else {
			$status = "Please enter the fields";
		}
		
	}

	get_view('admin/index', array("status" => $status));

?>