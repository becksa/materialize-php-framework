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

	private $title = 'Footer Content';
	private $bg_color = bg_color;
	private $tt_color = 'white-text';
	private $classes;
	private $content = 'You can use rows and columns here </br> to organize your footer content.';
	private $pages = ['No pages defined'=>'#'];
	private $dev = '#';

	function build(){
    static $static_class = null;
    if(!$static_class)
      $static_class = new self();
    return $static_class;
	}

	function set_title($title){
		$this->title = $title;
	}

	function set_bg($bg_color){
		$this->bg_color = $bg_color;
	}

	function set_text($tt_color){
		$this->tt_color = $tt_color;
	}

	function set_class($classes){
		$this->classes = $classes;
	}

	function set_content($content){
		$this->content = $content;
	}

	function set_pages($pages){
		$this->pages = $pages;
	}

	function set_dev($dev){
		$this->dev = $dev;
	}

	function display_footer(){
	?>
	<footer class="page-footer <?php echo $this->bg_color ?> <?php echo $this->tt_color ?> <?php echo $this->classes ?>">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l6">
					<h5 class="<?php echo $this->tt_color ?>"><?php echo $this->title ?></h5>
					<div class="<?php echo $this->tt_color ?>-text"><?php echo $this->content ?></div>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="<?php echo $this->tt_color ?>">Links</h5>
					<ul>
					<?php foreach($this->pages as $keys=>$index): ?>
						<li><a class="<?php echo $this->tt_color ?>" href="<?php echo $index ?>"><?php echo $keys ?></a></li>
					<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container <?php echo $this->tt_color ?>">
				© <?php echo date('Y')?> Copyright Text
				<a class="<?php echo $this->tt_color ?> right" href="<?php echo $this->dev ?>">Developer</a>
			</div>
		</div>
	</footer>
	<?php
	}
}
