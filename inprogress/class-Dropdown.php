<?php
class Dropdown{

	function build(){
		return new build();
	}

	function create_dropdown($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['element']))
			$args['element'] = []

	?>
  <ul id='<?php echo $args['id'] ?>' class='dropdown-content'>
		<?php foreach($args['element'] as $key=>$index):?>
    	<li><a href="<?php echo $index ?>"><?php echo $key ?></a></li>
		<?php endforeach; ?>
  </ul>
	<?php
	}

}
