<?php

	function get_view($view, $data){
		if($data){
			extract($data);
		}

		$path = $view.".view.php";
		require("views/layout.php");
		//require "views/{$view}.view.php";
	}

?>