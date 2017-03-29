<?php
class SideNav{

	static $init = false;

	function build(){
		return new self();
	}

	function init(){
		if(!self::$init){
		?>
		<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
		});
		</script>
		<?php
		self::$init = true;
		}
	}

	function create_side_nav($pages){
		$this->init();
		?>
		<ul id="slide-out" class="side-nav">
			<?php foreach($pages as $key=>$index): ?>
  		  <li><a class="waves-effect" href="<?php echo $index ?>"><?php echo $key?></a></li>
			<?php endforeach; ?>
			</ul>
		<?php
	}

}
