<?php
function moduleDebug($data = '') {
	$debug_file_path = __DIR__ . '/debug.log';
	$debug_file = '';
	if(!is_file($debug_file_path)) {
		$debug_file = fopen($debug_file_path, 'w');
	} else {
		$debug_file = fopen($debug_file_path, 'a');
	}
	fwrite($debug_file, $data .'\n');
	fclose($debug_file);
}
?>
