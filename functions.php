<?php
        if(!defined('APP_DIR'))exit;
	function get_view($view, $data){
		if($data){
			extract($data);
		}

		$path = $view.'.view.php';
		require(APP_DIR.'/views/layout.php');
		//require "views/{$view}.view.php";
	}

?>
