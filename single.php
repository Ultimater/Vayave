<?php 

    define('APP_DIR',dirname(__FILE__));
    require APP_DIR.'/blog.php';
    require APP_DIR.'/functions.php';

	if(isset($_GET['id'])){
		$content = get_post("posts", $conn, $_GET['id'], 1);
		if($content){
			get_view('single', array(
				"content" => $content
			));			
		 } else {
			header("Location: /Vayave");
			exit;
		}		
	}
	else  {
		echo "I am afraid something bad happened";		
	}

			
?>
