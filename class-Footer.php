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

class Footer{

	function __construct($args = []){

		if(!isset($args['title']))
			$args['title'] = 'Footer Content';

		if(!isset($args['bg_color']))
			$args['bg_color'] =  bg_color;

		if(!isset($args['tt_color']))
			$args['tt_color'] = tt_color;

		if(!isset($args['content']))
			$args['content'] = 'You can use rows and columns here </br> to organize your footer content.';

		if(!isset($args['pages']))
			$args['pages'] = [];

		if(!isset($args['developer']))
			$args['developer'] = '#';

	?>
	<footer class="page-footer <?php echo $args['bg_color'] ?> <?php echo $args['tt_color'] ?>">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l6">
					<h5 class="<?php echo $args['tt_color'] ?>">Footer Content</h5>
					<div class="row <?php echo $args['tt_color'] ?>"><?php echo $args['content'] ?></div>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
					<?php foreach($args['pages'] as $keys=>$index): ?>
						<li><a class="grey-text text-lighten-3" href="<?php echo $index ?>"><?php echo $keys ?></a></li>
					<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© <?php echo date('Y')?> Copyright Text
				<a class="grey-text text-lighten-4 right" href="">Developer</a>
			</div>
		</div>
	</footer>
	<?php
	}

}
