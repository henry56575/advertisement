<?php
		header('Content-Type:text/html; charset=UTF-8');
 		if ($_SERVER["REQUEST_METHOD"] == "GET") {
	      demo();
	  }
		function demo(){
		      // $url = "http://10.58.231.192:80/data/json_data";
			 $filename="json_data";
		     $json_string = file_get_contents($filename);
		      // $json_string = file_get_contents($url);
		     echo $json_string ;
		}

?>

