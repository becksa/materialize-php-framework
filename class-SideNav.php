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

class SideNav{

	static $init = false;

	function build(){
		return new self();
	}

	function init($menu_width,$edge, $close_on_click, $draggable){
		if(!self::$init){
		?>
		<script>
		$(document).ready(function(){
			$('.button-collapse').sideNav({
					menuWidth: <?php echo $menu_width ?>,
					edge: '<?php echo $edge ?>',
					closeOnClick: <?php echo $close_on_click ?>,
					draggable: <?php echo $draggable ?>
				}
			);
		});
		</script>
		<?php
		self::$init = true;
		}
	}

	function create_side_nav($args = []){

		if(!isset($args['id']))
			$args['id'] = 'slide-out';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['more']))
			$args['more'] = '';

		if(!isset($args['pages']))
			$args['pages'] = ['No pages'=>'#'];

		if(!isset($args['width']))
			$args['width'] = '300';

		if(!isset($args['edge']))
			$args['edge'] = 'left';

		if(!isset($args['close_on_click']))
			$args['close_on_click'] = 'true';

		if(!isset($args['draggable']))
			$args['draggable'] = 'true';

		$this->init($args['width'],$args['edge'],$args['close_on_click'],$args['draggable']);
		?>
		<ul id="<?php echo $args['id'] ?>" class="side-nav <?php echo $args['class'] ?> <?php echo $args['bg'] ?>" <?php echo $args['more'] ?>>
			<?php foreach($args['pages'] as $key=>$index): ?>
  		  <li><a class="waves-effect" href="<?php echo $index ?>"><?php echo $key?></a></li>
			<?php endforeach; ?>
			</ul>
		<?php
	}

}
