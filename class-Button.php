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

class Button{

	function build(){
		return new self();
	}

	function button_simple($args = []){

		if(!isset($args['id']))
			$args['id'] = 'no-id';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['content']))
			$args['content'] = 'button';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['more']))
			$args['more'] = '';

		return '<a id="'.$args['id'].'" class="'.$args['class'].' '.$args['bg'].' waves-effect waves-light btn" '.$args['more'].'>'.$args['content'].'</a>';
	}

	function button_icon($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['content']))
			$args['content'] = 'button';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['align']))
			$args['align'] = 'left';

		if(!isset($args['more']))
			$args['more'] = '';

		return '<a id="'.$args['id'].'" class="'.$args['bg'].' waves-effect waves-light btn '.$args['class'].'" '.$args['more'].'><i class="material-icons '.$args['align'].'">'.$args['icon'].'</i>'.$args['content'].'</a>';
	}

	function button_floating($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['more']))
			$args['more'] = '';

		return '<a id="'.$args['id'].'" class="'.$args['class'].' '.$args['bg'].' btn-floating waves-effect waves-light" '.$args['more'].'><i class="material-icons">'.$args['icon'].'</i></a>';
	}

	function button_fixed($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['more']))
			$args['more'] = '';

		return '<div class="fixed-action-btn horizontal"><a id="'.$args['id'].'" class="'.$args['class'].' '.$args['bg'].' btn-floating waves-effect waves-light" '.$args['more'].'><i class="large material-icons">'.$args['icon'].'</i></a></div>';
	}

	function button_submit($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['content']))
			$args['content'] = 'Default';

		if(!isset($args['name']))
			$args['name'] = '';

		if(!isset($args['icon']))
			$args['icon'] = 'send';

		if(!isset($args['more']))
			$args['more'] = '';

		return '<button '.$args['more'].' id="'.$args['id'].'" class="btn '.$args['bg'].'  waves-effect waves-light '.$args['class'].'" type="submit" name="'.$args['name'].'">'.$args['content'].'
    					<i class="material-icons right">'.$args['icon'].'</i>
						</button>';
	}
}
