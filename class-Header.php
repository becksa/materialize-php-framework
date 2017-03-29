<?php
#############################################################################
#	php-material-framework Copyright (C) 2017  Alessio Beccati								#
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
#	This program is free software: you can redistribute it and/or modify			#
#	it under the terms of the GNU Affero General Public License as						#
#	published by the Free Software Foundation, either version 3 of the				#
#	License, or (at your option) any later version.														#
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
#	This program is distributed in the hope that it will be useful,						#
#	but WITHOUT ANY WARRANTY; without even the implied warranty of						#
#	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the							#
#	GNU Affero General Public License for more details.												#
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
#	You should have received a copy of the GNU Affero General Public License	#
#	along with this program.  If not, see <http://www.gnu.org/licenses/>.			#
#############################################################################

class Header{

	private $js = [];
	private $css = [];
	private $title = 'Default';
	private $logo = '';

	function build(){
		static $static_class = null;
		if(!$static_class)
			$static_class = new self();
		return $static_class;
	}

	function load_js($path_js,$name_js = ''){
		if($name_js)
			$this->js[$name_js] = $path_js;
		else
			$this->js[] = $path_js;
	}

	function load_css($path_css,$name_css = ''){
		if($name_css)
			$this->css[$name_css] = $path_css;
		else
			$this->css[] = $path_css;
	}

	function take_js($name_js){
		if($js['$name_js'])
			unset($js['$name_js']);
	}

	function take_css($name_css){
		if($js['$name_css'])
			unset($js['$name_css']);
	}

	function set_title($title){
		$this->title = $title;
	}

	function set_logo($logo){
		$this->logo = $logo;
	}

	function load_meta(){

	}

	function get_all_loaded(){
		foreach($this->css as $key=>$value)
			echo "css: $key=>$value <br>";

		foreach($this->js as $key=>$value)
			echo "js: $key=>$value <br>";

		if(!$this->css && !$this->js){
			echo "No links upload";
		}
	}

	function display_header(){
	?>
	<head>
		<title><?php echo $this->title ?></title>
		<link rel="icon" href="<?php echo $this->logo?>" type="image/x-icon"/>
		<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
			<link type="text/css" rel="stylesheet" href="<?php echo materialize_css ?>"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--Import jquery, before materialize.js -->
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<!--Import materialize.min.js -->
			<script type="text/javascript" src="<?php echo materialize_js ?>"></script>
		<!--Import other *.css-->
		<?php foreach($this->css as $path_css):?>
      <link type="text/css" rel="stylesheet" href="<?php echo $path_css ?>" />
		<?php endforeach; ?>
		<!--Import other *.js-->
			<?php foreach($this->js as $path_js):?>
			<script type="text/javascript" src="<?php echo $path_js; ?>"></script>
			<?php endforeach; ?>
	</head>
	<?php
	}
}
?>
