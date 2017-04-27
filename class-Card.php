<?php
class Card{

	function build(){
		return new self();
	}

	function create_card($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = 'cyan';

		if(!isset($args['title']))
			$args['title'] = 'Default title';

		if(!isset($args['class-title']))
			$args['class-title'] = '';

		if(!isset($args['content']))
			$args['content'] = 'Default content';

		if(!isset($args['more']))
			$args['more'] = '';

	?>
		<div id="<?php echo $args['id']?>" class="card <?php echo $args['bg']?> <?php echo $args['class']?>" <?php echo $args['more']?>>
			<div class="card-content white-text">
				<span class="card-title <?php echo $args['class-title']?>"><?php echo $args['title']?></span>
				<?php echo $args['content']?>
			</div>
		</div>
	<?php
	}
}
?>
