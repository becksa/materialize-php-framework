<?php
class FeatureDiscovery{

	function build(){
		return new self();
	}

	function create_feature($args = []){

  if(!isset($args['data']))
    $args['data'] = 'target';

  if(!isset($args['title']))
    $args['title'] = 'Default title';

  if(!isset($args['bg_color']))
    $args['bg_color'] = bg_color;

  if(!isset($args['tt_color']))
    $args['tt_color'] = tt_color;

  if(!isset($args['content']))
    $args['content'] = '';

	?>
  	<!-- Tap Target Structure -->
		<div data-activates="<?php echo $args['data'] ?>" class="tap-target <?php echo $args['bg_color'] ?> <?php echo $args['tt_color'] ?>-text">
			<div class="tap-target-content">
      	<h3><?php echo $args['title'] ?></h3>
				<div class="row">
					<?php echo $args['content'] ?>
				</div>
			</div>
		</div>
	<?php
	}
}
