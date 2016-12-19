<?php
if(!function_exists('p'))
	{
		function p($str) {
			echo $str;
		}
	}

if(!function_exists('dd'))
	{
		function dd($var, $die = true) {
			echo "\n\r";
			print_r($var);
			echo "\n\r";
			if($die)
				die();
		}
}

if(!function_exists('pre'))
	{
		function pre($var, $die = true) {
			echo "<pre>\n\r";
			print_r($var);
			echo "</pre>\n\r";
			if($die)
				die();
		}
}

if(!function_exists('img_to_thumb'))
	{
		/*
		* 
		* @return 0 if the uploads dir is not exist or is not writable.
		* @return 1 (success case) if the copy and the thumb creation and the deletion of the original copy is successful.
		* @return 2 if the copy is successful, but both the thumb creation and the deletion of the original copy is not successful.
		* @return 3 if the copy and the thumb creation is successful, but the deletion of the original copy is not successful.
		* @return 4 (worst case) copying the remote file is not successful
		*/
		function img_to_thumb($remote, $id) {
			$ci =& get_instance();
			$status = 0;
			$target = UPLOADSDIR . $id;
			
			if(! ( (is_dir(UPLOADSDIR) && is_writable(UPLOADSDIR))  || @mkdir(UPLOADSDIR)))
				return $status;

			if(@copy($remote, $target)) {
				$config['image_library'] = 'gd2';
				$config['source_image'] = $target;
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 75;
				$config['height']       = 75;

				$ci->load->library('image_lib', $config);
				if($ci->image_lib->resize()) {
					$status = 1;
				} else {
					$status = 2;
					return $status;
				}
				
				// Codeigniter's Image_lib creates a resized copy, no need for the original one
				if(! @unlink($target))
					$status = 3;
			} else {
				$status = 4;
			}

			return $status;
		}
}

/*
https://stackoverflow.com/questions/9227804/how-to-filter-an-array-by-a-part-of-key
*/
if(!function_exists('get_array_of_key_contains'))
	{
		function get_array_of_key_contains($arr, $search) {
			if(empty($arr) || empty($search)) return FALSE;

			$new = array();

			foreach($arr as $key => $value){
				  if(stripos($key, $search) !== false){
				   $new[$key] = $value;
				  }
			  }

			  return $new;
		}
	}