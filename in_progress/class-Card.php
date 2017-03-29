<?php
class Card{

	function __construct(){

	}

	function build(){
		return new self();
	}

	function display_card($args = []){

		if(!isset($args['row']))
			$args['row'] = true;

		if(!isset($args['col']))
			$args['col'] = 's12 m12 l12';

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['tt_color']))
			$args['tt_color'] = tt_color;

		if(!isset($args['title']))
			$args['title'] = 'Card Title';

		if(!isset($args['title-align']))
			$args['title-align'] = '';

		if(!isset($args['align']))
			$args['align'] = '';

		if(!isset($args['content']))
			$args['content'] = 'Default content';

	?>
		<div class="<?php echo $args['align'] ?> col <?php echo $args['col'] ?>">
			<div class="card <?php echo $args['bg_color']?>">
				<div class="card-content <?php echo $args['tt_color']?>">
					<span class="card-title <?php echo $args['title-align']; ?>"><?php echo $args['title'] ?></span>
					<div class="row">
					<?php echo $args['content'] ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
}
?>
