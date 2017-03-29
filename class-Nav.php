<?php

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

		if(!isset($args['logo']))
			$args['logo'] = 'Logo';

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['pages']))
			$args['pages'] = ['#'=>'No pages defined'];

	?>
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
