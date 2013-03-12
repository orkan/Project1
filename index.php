<?php

$param = isset($_GET['myParam']) ? $_GET['myParam'] : NULL;

// test
if(!empty($param)) {
	var_dump($param);
}
else {
	/**
	 * wara
	 * @rara: dsds
	 */
	echo "Cannot render - changed! remotelly";
}
