<?php
	$file_path = 'http://miller.nmtree.com/uploadPics/';
	$file_name = time().rand(1000, 9999).'.png';

	$file_data = file_get_contents("php://input");
	$file_relative_path = './uploadPics/'.$file_name;
		if ($handle = fopen($file_relative_path, 'w')) {
			if (fwrite($handle, $file_data) === FALSE) {
				echo 'Does not write any data to the file';
			} else {
				echo 'path='.$file_path.$file_name;
			}
			fclose($handle);
		} else {
			echo 'Does not open this file';
		}
?>