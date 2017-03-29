<?php

class Dialog{

	function build(){
		return new self();
	}

	function message_box($message,$time){
	?>
		<script>
			Materialize.toast('<?php echo $message ?>',<?php echo $time ?>);
		</script>
	<?php
	}

	function message_box_rounded($message,$time){
	?>
	<script>
		Materialize.toast('<?php echo $message ?>', <?php echo $time ?>, 'rounded');
	</script>
	<?php
	}

}
