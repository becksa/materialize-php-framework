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

class Parallax{

	static $init = false;

	function build(){
		return new self();
	}

	function init($height){
		if(!self::$init):
		?>
		<script>
			$(document).ready(function(){
				$('.parallax').parallax();
			});
		</script>
		<style>
		.parallax-container {
			height: <?php echo $height?>px;
		}
		</style>
		<?php
		self::$init = true;
		endif;
	}

	function create_section($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['more']))
			$args['more'] = '';

		if(!isset($args['title']))
			$args['title'] = 'Parallax';

		if(!isset($args['size-title']))
			$args['size-title'] = 'h3';

		if(!isset($args['content']))
			$args['content'] = 'Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling';

	?>
		<div <?php echo $args['more'] ?>  id="<?php echo $args['id'] ?>"  class="section <?php echo $args['class']; ?> <?php echo $args['bg']; ?>">
			<div class="row container">
			<<?php echo $args['size-title'] ?> class="header"><?php echo $args['title'] ?></<?php echo $args['size-title'] ?>>
				<div>
					<?php echo $args['content'] ?>
				</div>
			</div>
		</div>
	<?php
	}

	function create_parallax($path_image,$height,$width){
		$this->init($height);
		?>
			<div class="parallax-container">
				<div class="parallax"><img width="<?php echo $width ?>" src="<?php echo $path_image ?>"></div>
			</div>
		<?php
	}

}

