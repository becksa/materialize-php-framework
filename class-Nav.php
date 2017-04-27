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

class Nav{

	private static $init = false;

	function build(){
		return new self();
	}

	function init(){
		if(!self::$init){
		?>
		<script>
			$( document ).ready(function() {
				$(".button-collapse").sideNav();
			});
		</script>
		<?php
		self::$init = true;
		}
	}

	function create_nav($args = []){
		$this->init();

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = bg_color;

		if(!isset($args['text']))
			$args['text'] = 'white-text';

		if(!isset($args['more']))
			$args['more'] = '';

		if(!isset($args['logo']))
			$args['logo'] = 'Logo';

		if(!isset($args['pages']))
			$args['pages'] = ['No pages defined'=>'#'];

	?>
		<nav <?php echo $args['id'] ?> class="<?php echo $args['bg'] ?> <?php echo $args['class'] ?>" <?php echo $args['more'] ?>>
			<div class="nav-wrapper">
				<a href="<?php echo basename($_SERVER['PHP_SELF']); ?>" class="<?php echo $args['text'] ?> brand-logo"><?php echo $args['logo'] ?></a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
				<?php foreach($args['pages'] as $keys=>$index): ?>
					<li><a class="<?php echo $args['text'] ?>" href="<?php echo $index ?>"><?php echo $keys ?></a></li>
				<?php endforeach; ?>
				</ul>
				<ul class="side-nav <?php echo $args['bg'] ?>" id="mobile-demo">
				<?php foreach($args['pages'] as $keys=>$index): ?>
					<li><a class="<?php echo $args['text'] ?>" href="<?php echo $index ?>"><?php echo $keys ?></a></li>
				<?php endforeach; ?>
				</ul>
			</div>
		</nav>
	<?php
	}
}
