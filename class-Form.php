<?php
class Form{

	static $init_datepicker = false;

	function build(){
		return new self();
	}

	function input($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = '';

		if(!isset($args['name']))
			$args['name'] = '';

		if(!isset($args['type']))
			$args['type'] = 'text';

		if(!isset($args['content']))
			$args['content'] = 'Default';

		if(!isset($args['more']))
			$args['more'] = '';

		return '<input id="'.$args['id'].'" type="text" class="'.$args['class'].' '.$args['bg'].'" name="'.$args['name'].'" '.$args['more'].'>
						<label for="'.$args['id'].'">'.$args['content'].'</label>';
	}

	function textarea($args = []){
		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = '';

		if(!isset($args['name']))
			$args['name'] = '';

		if(!isset($args['content']))
			$args['content'] = 'Default';

		if(!isset($args['more']))
			$args['more'] = '';

	}

	function datepicker($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['bg']))
			$args['bg'] = '';

		if(!isset($args['date-range']))
			$args['date-range'] = '15';

		if(!isset($args['name']))
			$args['name'] = '';

		if(!isset($args['more']))
			$args['more'] = '';

		if(!self::$init_datepicker){
			?>
			<script>
				$(document).ready(function() {
					$('.datepicker').pickadate({
						selectMonths: true,
						selectYears: <?php echo $args['date-range'] ?>
			  	});
				});
			</script>
			<?php
			self::$init_datepicker = true;
		}


		return '<input id="'.$args['id'].'" name="'.$args['name'].'" type="date" class="datepicker '.$args['class'].' '.$args['bg'].'" '.$args['more'].'>';
	}

}
