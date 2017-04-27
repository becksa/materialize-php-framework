<?php
class Preloader{

	function build(){
		return new self();
	}

	function preloader_linear_determinate($precentual){
	?>
	<div class="progress">
		<div class="determinate" style="width: <?php echo $percentual?>%"></div>
	</div>
	<?php
	}

	function preloader_linear_indeterminate($args = []){

	if(!isset($args['id']))
		$args['id'] = '';

	if(!isset($args['class']))
		$args['class'] = '';

	if(!isset($args['bg']))
		$args['bg'] = '';

	?>
		<div id="<?php echo $args['id'] ?>" class="progress <?php echo $args['class'] ?> <?php echo $args['bg'] ?>">
			<div class="indeterminate"></div>
		</div>
	<?php
	}

}
