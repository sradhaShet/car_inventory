<?php
class DB
{
	public static $dbc = null;
	 function connect_server($db_host,$db_user,$db_password,$db_name)
	{
		$dbc = mysqli_connect($db_host, $db_user, $db_password,$db_name) or die("Database is not connected");
		return $dbc;
	}

	
	 function get_data($dbc,$sql) {
		  $result = mysqli_query($dbc,$sql) or die('query fails ');
		  while ($data = mysqli_fetch_assoc($result)) {
			$dataArr[] = $data;
		}
		  return $dataArr;
	}
	
	function insert_data($dbc,$sql){
		 $result = mysqli_query($dbc,$sql) or die('insertion fails ');
		 return $result;
	}

	 function db_close() 
	{
		 mysqli_close($dbc);
	}
}