<?php 

	require "blog.php";
	require "functions.php";

	if(isset($_GET['id'])){
		$content = get_post("posts", $conn, $_GET['id'], 1);
		if($content){
			get_view('single', array(
				"content" => $content
			));			
		 } else {
			header("Location: /Vayave");
		}		
	}
	else  {
		echo "I am afraid something bad happened";		
	}

			
?>