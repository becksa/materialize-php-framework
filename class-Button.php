<?php
class Button{

	function build(){
		return new self();
	}

	function button_simple($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['content']))
			$args['content'] = 'button';

		if(!isset($args['href']))
			$args['href'] = '#';

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['more']))
			$args['more'] = '';

		return "<a href=\"{$args['href']}\" id=\"{$args['id']}\" class=\"{$args['bg_color']} waves-effect waves-light btn {$args['class']} \" {$args['more']} > {$args['content']} </a>";
	}

	function button_icon($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['content']))
			$args['content'] = 'button';

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['align']))
			$args['align'] = 'left';

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['more']))
			$args['more'] = '';

		return "<a {$args['more']} id=\"{$args['id']}\" class=\" {$args['bg_color']} waves-effect waves-light btn {$args['class']} \"><i class=\"material-icons {$args['align']}\">{$args['icon']}</i>{$args['content']}</a>";
	}

	function button_floating($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['size']))
			$args['size'] = 'btn-large';

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['more']))
			$args['more'] = '';

		return "<a {$args['more']} id=\"{$args['id']}\" class=\"btn-floating {$args['size']} {$args['bg_color']} waves-effect waves-light\"><i class=\"material-icons\"> {$args['icon']} </i></a>";
	}

	function button_fixed($args = []){

		if(!isset($args['id']))
			$args['id'] = '';

		if(!isset($args['class']))
			$args['class'] = '';

		if(!isset($args['data']))
			$args['data'] = '';

		if(!isset($args['bg_color']))
			$args['bg_color'] = bg_color;

		if(!isset($args['size']))
			$args['size'] = 'btn-large';

		if(!isset($args['icon']))
			$args['icon'] = 'polymer';

		if(!isset($args['more']))
			$args['more'] = '';

		return "<div data-activates=\"{$args['data']}\" class=\"{$args['class']} fixed-action-btn horizontal\"><a id=\"{$args['id']}\" class=\"btn-floating {$args['bg_color']} {$args['size']} waves-effect waves-light\" {$args['more']}><i class=\"large material-icons\">{$args['icon']}</i></a></div>";
	}
}
