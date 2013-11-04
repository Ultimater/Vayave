<?php 
	define('APP_DIR',dirname(dirname(__FILE__)));
	require APP_DIR.'/blog.php';
	require APP_DIR.'/functions.php';
		
	$status = "";
	if(isset($_POST['create_post']))
        {
		$title = $_POST['title'];
		$body = $_POST['body'];

		if(!empty($title) || !empty($body)){
			if(insert_post($_POST['title'], $_POST['body'], $conn))
                        {
                          $post_id=get_last_insert($conn);
                          $post_url='../single.php?id='.$post_id;
                          if($post_id!==false)
                          {
			      $status = "Post Inserted<br /><a target=\"blank\" href=\"$post_url\">View Post</a>";
                          }else{
			      $status = "Fail to insert then select post";
                          }
                        }else{
			  $status = "Post Insert Failed";
                        }
		} else {
			$status = "Please enter the fields";
		}
		
	}

	get_view('admin/index', array("status" => $status));

?>
