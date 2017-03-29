<?php
###########################
#	Define global variables	#
###########################
//define this constant to use RewriteRules of the master project
defined('DOMAIN') or
define('DOMAIN','');

defined('materialize_css') or
define('materialize_css',DOMAIN.'materialize/css/materialize.min.css');

defined('materialize_js') or
define('materialize_js',DOMAIN.'materialize/js/materialize.min.js');

#######################################
#	Favorite colors ~materialize-color~ #
#######################################
defined('bg_color') or
define('bg_color','teal');

defined('tt_color') or
define('tt_color','white-text');

####################
#	Autoloader class #
####################
//define this constant to use classes of the master project
defined('MAIN_CLASS') or
define('MAIN_CLASS',false);

spl_autoload_register(function ($class_name) {
	$class_path = __DIR__."/class-$class_name.php";
	if( is_file($class_path) ){
		require $class_path;
	} else {
		if(MAIN_CLASS){
			$class_path = MAIN_CLASS."class-$class_name.php";
			if(is_file($class_path)){
				require $class_path;
			} else {
				throw new Exception("Class $class_name in main class not found, path -> $class_path");
			}
		} else {
			throw new Exception("Class $class_name not found, path -> $class_path");
		}
	}
});

require_once 'functions.php';
if(!is_link('materialize')){ symlink('/usr/share/materialize-php-framework/materialize','materialize');}
?>
