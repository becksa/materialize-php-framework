<?php
class Collection{

	function build(){
		return new self();
	}

	function create_collection($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = '';

		if(!isset($args['content']))
			$args['content'] = '';

		?>
		<ul id="<?php echo $args['id'] ?>" class="collection <?php echo $args['class'] ?> <?php echo $args['bg'] ?>">
			<?php if(is_array($args['content'])): foreach($args['content'] as $value): ?>
				<li class="collection-item"><?php echo $value ?></li>
			<?php endforeach ?>
			<?php else: ?>
				<?php echo $args['content'] ?>
			<?php endif ?>
		</ul>
		<?php
	}

}
