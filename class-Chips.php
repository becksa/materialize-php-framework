<?php
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

class Chips{

	function build(){
		return new self();
	}

	function chip($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = 'white';

		if(!isset($args['more']))
			$args['more'] = '';

		if(!isset($args['content']))
			$args['content'] = 'Default';

		if(!isset($args['images']))
			$args['images'] = 'error link';


		return '<div id="'.$args['id'].'" class="chip '.$args['class'].' '.$args['bg'].'"><img src="'.$args['images'].'" alt="Links"><a class="black-text" '.$args['more'].'>'.$args['content'].'</a></div>';
	}

}
