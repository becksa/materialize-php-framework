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

class Slider{

	private static $init = false;

	function build(){
		return new self();
	}

	function init(){
    if(!self::$init):
    ?>
    <script>
			$(document).ready(function(){
				$('.slider').slider();
			});
    </script>
    <?php
    self::$init = true;
    endif;
	}

	function create_slider($folder_path){
	$this->init();
	$files = glob("$folder_path/*.{jpg,png,gif}", GLOB_BRACE);
	?>
	<div class="slider" style="margin-bottom: 2%;">
		<ul class="slides">
		<?php foreach($files as $file): if(is_file($file)):?>
			<li>
				<img src="<?php echo $file?>">
			</li>
		<?php endif;endforeach; ?>
		</ul>
	</div>
	<?php
	}

	function create_text_slider($folder_path,$title,$description){
	$this->init();
	$files = glob("$folder_path/*.{jpg,png,gif}", GLOB_BRACE);
	?>
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="http://lorempixel.com/580/250/nature/1" />
				<div class="caption center-align">
					<h3><?php echo $title ?></h3>
					<h5 class="light grey-text text-lighten-3"><?php echo $description ?></h5>
				</div>
			</li>
		</ul>
	</div>
	<?php
	}

}
