<?php
###########################
#	Define global variables	#
###########################
defined('DOMAIN') or
die("You must define domain path -> define('DOMAIN','http://example.com/');");

defined('ABS') or
die("You must define absolute path -> define('ABS',__DIR__.'/')");

defined('materialize_css') or
define('materialize_css',DOMAIN.'materialize/css/materialize.min.css');

defined('materialize_js') or
define('materialize_js',DOMAIN.'materialize/js/materialize.min.js');

#######################################
#	Favorite colors ~materialize-color~ #
#######################################
defined('bg_color') or
define('bg_color','teal');

####################
#	Autoloader class #
####################
//define this constant to use classes of the master project
spl_autoload_register(function ($class_name) {
  $class_path = __DIR__."/class-$class_name.php";
  if( is_file($class_path) ){
    require $class_path;
  }
  else{
    $class_path = "class/class-$class_name.php";
    if(is_file($class_path)){
      require $class_path;
    }
  }
});

require_once 'functions.php';
if(!is_link(ABS."materialize")){ symlink('/usr/share/materialize-php-framework/materialize','materialize');}
?>
