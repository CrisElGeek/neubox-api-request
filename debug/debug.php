<?php
function moduleDebug($data = '') {
	$debug_file = fopen(__DIR__ . '/debug.log', 'wb');
	fwrite($debug_file, $data);
	fclose();
}
?>
