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

	function __construct($args = []){

		if(!isset($args['logo']))
			$args['logo'] = 'Logo';

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['pages']))
			$args['pages'] = ['#'=>'No pages defined'];

	?>
		<script>
			$( document ).ready(function() {
				$(".button-collapse").sideNav();
			});
		</script>
		<nav class="<?php echo $args['bg_color'] ?>">
			<div class="nav-wrapper">
				<a href="<?php echo basename($_SERVER['PHP_SELF']); ?>" class="brand-logo"><?php echo $args['logo'] ?></a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
				<?php foreach($args['pages'] as $keys=>$index): ?>
					<li><a href="<?php echo $index ?>"><?php echo $keys ?></a></li>
				<?php endforeach; ?>
				</ul>
				<ul class="side-nav" id="mobile-demo">
				<?php foreach($args['pages'] as $keys=>$index): ?>
					<li><a href="<?php echo $index ?>"><?php echo $keys ?></a></li>
				<?php endforeach; ?>
				</ul>
			</div>
		</nav>
	<?php
	}
}
