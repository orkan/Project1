<?php

$param = isset($_GET['myParam']) ? $_GET['myParam'] : NULL;

// test 2
if(!empty($param)) {
	var_dump($param);
}
else {
	/**
	 * master branch
	 * C4
	 */
	echo "Cannot render - changed! HotFIX here!!!";
	/**
	 * experiment branch
	 * C3
	 */
}
