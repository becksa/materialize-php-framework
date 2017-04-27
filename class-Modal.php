<?php

class Modal{

	static $init = false;

	function build(){
		return new self();
	}

  function init(){
    if(!self::$init):
    	?>
    	<script>
			$(document).ready(function(){
				$('.modal').modal();
			});
    	</script>
    	<?php
    	self::$init = true;
    endif;
  }

	function create_modal($args = []){

	$this->init();

	if(!isset($args['id']))
		$args['id'] = '';

	if(!isset($args['class']))
		$args['class'] = '';

	if(!isset($args['bg']))
		$args['bg'] = '';

	if(!isset($args['title']))
		$args['title'] = 'Title';

	if(!isset($args['content']))
		$args['content'] = '';

	if(!isset($args['content-footer']))
		$args['content-footer'] = '';

	if(!isset($args['more']))
		$args['more'] = '';

	?>
	<div id="<?php echo $args['id'] ?>" class="modal <?php echo $args['class'] ?>" <?php echo $args['more'] ?>>
		<div class="modal-content">
			<h4><?php echo $args['title'] ?></h4>
			<div class="row">
				<?php echo $args['content'] ?>
			</div>
		</div>
		<div class="row">
			<?php echo $args['content-footer'] ?>
		</div>
	</div>
	<?php
	}

}

?>
