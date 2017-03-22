# Materialize PHP framework

This is a simple framework that uses simple functions, to order your project and easier to read

## Prerequisites

1. Materialize(Optional, but it can not be updated)
2. Write a file that you can call load.php:

```
	<?php
	require_once('/usr/share/materialize-php-framework/load.php');

	###########################
	# Define globals variable #
	###########################
	define('site_name','Test');
	define('materialize_css','materialize/css/materialize.min.css'); #if you want, define path of materialize.min.css
	define('materialize_js', 'materialize/js/materialize.min.js'); #if you want, define path of materialize.min.js

	#######################################
	# Favorite colors ~materialize-color~ #
	#######################################
	define('bg_color','teal'); #if you want, define background-color of project
	define('tt_color','white-text'); #if you want, define background-color of project

	######################
	# Define links pages #
	######################
	$pages = ['Page-1'=>'index.php','Page-2'=>'index.php','More'=>'More.php'];
	?>

```

## Getting install

1. Installation is very simple, just run **sudo**`git clone https://github.com/becksa/materialize-php-framework.git /usr/share/materialize-php-framework`.

## Components:

- [x] Button
- [x] Navbar
- [ ]	Card
- [x]	Footer
- [ ]	Badges
- [ ]	Breadcrumbs
- [ ]	Chips
- [ ]	Collections
- [ ]	Forms
- [ ]	Icons
- [ ]	Pagination
- [ ]	Preloader

## Javascript:

- [x] Dialogs
