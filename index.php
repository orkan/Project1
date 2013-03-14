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
	 * iss91: C4
	 * iss91: C7
	 * iss91: C8
	 * iss91: C11
	 */
	echo "Cannot render - changed! HotFIX here!!!";
	/**
	 * master: C3
	 * master: C9
	 * master: C10
	 * dumbidea: C12
	 * dumbidea: C13
	 */
}
