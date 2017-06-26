<?php

function CONNECT(){
	//DB Connection
	$link = mysql_connect("localhost", "root", "root");

	if (!$link) {
		 die('No pudo conectarse: ' . mysql_error());
	}
	//DB Name
	$db = mysql_select_db('theForm',$link);
	if(!$db) {
			die("No pudo conectarse, brah");
	}
}


/*function CONNECT(){

	$link = mysql_connect("localhost", "root", "root");

	if (!$link) {

		 die('No pudo conectarse: ' . mysql_error());

	}
	$db = mysql_select_db('localhost',$link);

	if(!$db) {
			die("Unable to select database");
	}
}
 */

?>
