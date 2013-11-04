<?php
	
	$config = array(
		"username" => "root",
		"password" => "indian",
		"database" => 'blog'
	);

	function connect($config){

		try {

			$conn = new PDO("mysql:host=localhost;dbname=". $config['database'],$config["username"],$config["password"]);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
			return $conn;

		} catch (PDOEXception $e){

		}

		return false;
	}

	function get_posts($tablename, $conn, $limit = 10){
		try {
			$result =  $conn->query("select * from $tablename LIMIT $limit");	
			return ($result->rowCount() > 0) ? $result : false;
		  } catch (Exception $e){
			return false;
		}
		
	}

?>