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
    	$this->init = true;
    endif;
  }

	function create_modal($args = []){

	if(!isset($args['title']))
		$args['title'] = 'Default title';

	if(!isset($args['title-align'])
		$args['title-align'] = 'left';

	if(!isset($args['content']))
		$args['content'] = ''

	if(!isset($args['']))
		$args[''] = ''

	?>
	<!-- Modal Structure -->
	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4 class="<?php echo $args['title-align'] ?>"><?php echo $args['title'] ?></h4>
			<div class="row">
			<?php echo $args['content'] ?>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		</div>
	</div>
	<?php
	}

}

?>
