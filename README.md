# Materialize PHP framework

	This is a simple framework that uses simple functions, to order your project and easier to read.

## Prerequisites

	1. Materialize(Optional, but it can **not** be **updated**)
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
	- [x]	Card
	- [x]	Footer
	- []	Badges
	- []	Breadcrumbs
	- []	Chips
	- []	Collections
	- []	Forms
	- []	Icons
	- []	Pagination
	- []	Preloader

## Javascript:

	- [x] Dialogs 

#License

```
#############################################################################
# php-material-framework Copyright (C) 2017  Alessio Beccati                #
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
# This program is free software: you can redistribute it and/or modify      #
# it under the terms of the GNU Affero General Public License as            #
# published by the Free Software Foundation, either version 3 of the        #
# License, or (at your option) any later version.                           #
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
# This program is distributed in the hope that it will be useful,           #
# but WITHOUT ANY WARRANTY; without even the implied warranty of            #
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             #
# GNU Affero General Public License for more details.                       #
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
# You should have received a copy of the GNU Affero General Public License  #
# along with this program.  If not, see <http://www.gnu.org/licenses/>.     #
#############################################################################

```
