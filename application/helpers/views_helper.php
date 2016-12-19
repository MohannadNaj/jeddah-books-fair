<?php

if(!function_exists('parse_img_url'))
	{
		function parse_img_url($imgurl) {
			if(contains('_thumb', $imgurl)) {
				$imgurl_parts = explode('_thumb', $imgurl);
				$img_int = intval($imgurl_parts[0]);
				if($img_int != 0) {
					return 'uploads/' . $img_int . '_thumb'; // TODO: set public uploads dir in config, set the whole pattern in config then use sprintf param
				}
			}

			return $imgurl;
		}
}

if(!function_exists('photo_url'))
	{
		function user_photo_url($imgurl) {
			if(empty($imgurl))
				return base_url('uploads/default.png');

			if(is_array($imgurl))
				return user_photo_url($imgurl['photoURL']);
			else if(is_object($imgurl))
				return user_photo_url($imgurl->photoURL);


			return base_url(parse_img_url($imgurl));
		}
}