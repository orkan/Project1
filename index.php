<?php

$param = isset($_GET['myParam']) ? $_GET['myParam'] : NULL;

// test 2
if(!empty($param)) {
	var_dump($param);
}
else {
	/**
	 * Some comment
	 * @Function: dsds
	 * iss91: C2
	 */
	echo "Cannot render - changed! HotFIX here!!!";
}
