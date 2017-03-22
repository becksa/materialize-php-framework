<?php
###########################
#	Define globals variable	#
###########################
defined('materialize_css') or
define('materialize_css','materialize/css/materialize.min.css');

defined('materialize_js') or
define('materialize_js', 'materialize/js/materialize.min.js');

#######################################
#	Favorite colors ~materialize-color~ #
#######################################
defined('bg_color') or
define('bg_color','teal');

defined('tt_color') or
define('tt_color','white-text');

##################
#	Autoloader class #
####################
spl_autoload_register(function ($class_name) {
	$class_path = __DIR__."/class-$class_name.php";
	if( is_file($class_path) ){
		require $class_path;
	} else {
		throw new Exception("Class $class_name not found, path -> $class_path");
	}
});

####################
#	Replace callback #
####################
function inject_method($str){
	return preg_replace_callback("~([a-z]+)\(\)~",
    	 function ($m){
  	        return $m[1]();
	}, $str);
}


require_once 'functions.php';
if(!is_link('materialize')){ symlink('/usr/share/framework/materialize_framework/materialize','materialize');}
?>
