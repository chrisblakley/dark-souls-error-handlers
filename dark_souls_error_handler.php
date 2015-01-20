<?php
	set_error_handler('dark_souls_error_handler');
	function dark_souls_error_handler($error_level, $error_message, $error_file, $error_line, $error_contest) {

		recursiveRemoveDirectory($thisfilepath);

		echo "You Died";
	    return true; //Don't execute PHP internal error handler
	}

	function recursiveRemoveDirectory($directory) {
	    if ( stripos(basename($directory), 'dark_souls') !== false ) {
		    foreach(glob("{$directory}/*") as $file) {
		        if(is_dir($file)) {
		            recursiveRemoveDirectory($file);
		        } else {
		            unlink($file);
		        }
		    }
		    rmdir($directory);
	    }
	}
?>
