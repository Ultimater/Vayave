<?php
	if(!defined('APP_DIR'))exit;
	require APP_DIR.'/config.php';

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

	function get_post($tablename, $conn, $id, $limit = 1) {
		try {
			$result = $conn->query("select * from $tablename where id = " . $conn->quote($id) . "LIMIT $limit");
			return ($result->rowCount() > 0) ? $result : false;
		  } catch (Exception $e){
			return false;
		}
	}

	function insert_post($title, $body, $conn){

		try {
			$title = $conn->quote($title);
			$body = $conn->quote($body);
			$result = $conn->query("insert into posts(title,body) values($title, $body)");
			return $result;
		} catch (Exception $e){
			return false;
		}

	}

	function get_last_insert($conn){

		try {
			$result = $conn->query("SELECT LAST_INSERT_ID()");
			list($id)=$result->fetch(PDO::FETCH_NUM);
                        return $id;
		} catch (Exception $e){
			return false;
		}

	}



?>
