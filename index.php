<?php

$param = isset($_GET['myParam']) ? $_GET['myParam'] : NULL;

// test 2
if(!empty($param)) {
	var_dump($param);
}
else {
	echo "master branch";
	/**
	 * 
	 */
	echo "server branch";
	/**
	 * 
	 */
	echo "client branch";
	/**
	 * 
	 */
}
