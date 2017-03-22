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

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['content']))
			$args['content'] = 'button';

		if(!isset($args['href']))
			$args['href'] = '#';

		if(!isset($args['more']))
			$args['more'] = '';

	?>
		<a <?php echo 'href="'.$args['href'].'"'; echo $args['more'];  echo 'id="'.$args['id'].'"'; ?> class="<?php echo $args['bg_color'] ?> waves-effect waves-light btn">button</a>
	<?php
	}

	function button_icon($args = []){

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['align']))
			$args['align'] = 'left';

		if(!isset($args['content']))
			$args['content'] = 'button';

		if(!isset($args['href']))
			$args['href'] = '#';

		if(!isset($args['more']))
			$args['more'] = '';

	?>
		<a <?php echo $args['more']; echo 'href="'.$args['href'].'"'; echo 'id="'.$args['id'].'"'; ?> class="<?php echo $args['bg_color'] ?> waves-effect waves-light btn">
			<i class="material-icons <?php echo $args['align'] ?>"><?php echo $args['icon']?></i><?php echo $args['content'] ?>
		</a>
	<?php
	}

	function button_floating($args = []){

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['size']))
			$args['size'] = 'btn-large';

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['href']))
			$args['href'] = '#';

		if(!isset($args['more']))
			$args['more'] = '';

	?>
		<a <?php echo $args['more']; echo 'href="'.$args['href'].'"'; echo 'id="'.$args['id'].'"'; ?> class="btn-floating <?php echo $args['size']." "; echo $args['bg_color']; ?> waves-effect waves-light"><i class="material-icons"><?php echo $args['icon'] ?></i></a>
	<?php
	}

}
