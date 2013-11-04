<?php

	function get_view($view, $data){
		if($data){
			extract($data);
		}
		require "views/{$view}.view.php";
	}

?>