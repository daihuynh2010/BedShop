<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use App\ThemeOption;

class ThemeOptionWeb
{

	public static function theme_option(){
		$theme_options = ThemeOption::all();
    	foreach ($theme_options as $option){
    		$options[$option->option_name] = $option->option_value;
    	}
    	return $options;
	}

	public static function option($field){
		$options = self::theme_option();

		if(!array_key_exists($field, $options)) return '';
		return $options[$field];
	}

}