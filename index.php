<?php

$param = isset($_GET['myParam']) ? $_GET['myParam'] : NULL;

// test 2
if(!empty($param)) {
	var_dump($param);
}
else {
	echo "master branch";
	/**
	 * C5
	 * C6
	 */
	echo "server branch";
	/**
	 * C3
	 * C4
	 * C10
	 */
	echo "client branch";
	/**
	 * C8
	 * C9
	 */
}
