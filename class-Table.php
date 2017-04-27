<?php
class Table{

	function build(){
		return new self();
	}

	function create_table($args = []){

		if(!$args['id'])
			$args['id'] = '';

		if(!$args['class'])
			$args['class'] = '';

		if(!$args['bg'])
			$args['bg'] = '';

		if(!$args['thead'])
			$args['thead'] = false;

		if(!$args['tbody'])
			$args[''] = '';

	?>
		<table class="<?php echo $args['class'] ?> <?php echo $args['bg'] ?>">
	<?php if($args['thead']): ?>
			<thead>
			<?php if(is_array($args['thead'])): ?>
				<?php echo '<th>'.implode('</th><th>',$args['thead']).'</th>' ?>
			<?php endif ?>
			<?php else ?>
				<?php echo $args['thead'] ?>
			<?php endif ?>
			</thead>
	<?php endif ?>
			<tbody>
				<?php echo $args['tbody] ?>
			</tbody>
		</table>
	<?php
	}

}
