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
	 */
	echo "Cannot render - changed! HotFIX here!!!";
}
