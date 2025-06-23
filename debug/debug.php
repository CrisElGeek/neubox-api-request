<?php
function moduleDebug($data = '') {
	$debug_file = fopen(__DIR__ . '/debug.log', 'w');
	fwrite($debug_file, $data);
	fclose();
}
?>
