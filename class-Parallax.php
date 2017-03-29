<?php

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
		$this->init = true;
		endif;
	}

	function create_section($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['title']))
			$args['title'] = 'Parallax';

		if(!isset($args['content']))
			$args['content'] = 'Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling';

		if(!isset($args['bg_color']))
			$args['bg_color'] = 'white';

		if(!isset($args['tt_color']))
			$args['tt_color'] = 'black';

		if(!isset($args['more']))
			$args['more'] = '';

	?>
		<div <?php echo $args['more'] ?>  id="<?php echo $args['id'] ?>"  class="section <?php echo $args['bg_color'] ?> <?php echo $args['class'] ?>">
			<div class="row container">
			<h2 class="header <?php echo $args['tt_color'] ?>-text"><?php echo $args['title'] ?></h2>
				<div class="<?php echo $args['tt_color']?>-text">
					<?php echo $args['content'] ?>
				</div>
			</div>
		</div>
	<?php
	}

	function create_parallax($path_image,$height = '500'){
		$this->init($height);
		?>
			<div class="parallax-container">
				<div class="parallax"><img src="<?php echo $path_image ?>"></div>
			</div>
		<?php
	}

}

