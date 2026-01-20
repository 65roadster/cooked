<?php
    header("Content-Type: text/plain;charset=UTF-8");

   	// report where webroot is at
	echo "\$_SERVER[\'DOCUMENT_ROOT\'] = ";
	die($_SERVER['DOCUMENT_ROOT']);
?>