<?php
#######################
# functions to Header #
#######################
function load_js($name_js = '',$path_js){
	Header::build()->load_js($name_js,$path_js);
}

function load_css($name_css = '',$path_css){
	Header::build()->load_css($name_css,$path_css);
}

function del_css($name_css){
	Header::build()->delete_css($name_css);
}

function del_js($name_js){
	Header::build()->delete_js($name_js)
}

function get_all_loaded(){
	Header::build()->get_all_loaded();
}

function display_header(){
	Header::build()->display_header();
}

#######################
# functions to Footer #
#######################
function create_footer($args = []){
	new Footer($args);
}

#####################
# functions to Card #
#####################
function create_card($args = []){
	Card::build()->display_card($args);
}

#######################
# functions to Button #
#######################
function button_simple($args = []){
	Button::build()->button_simple($args);
}

function button_icon($args = []){
	Button::build()->button_icon($args);
}

function button_floating($args = []){
	Button::build()->button_floating($args = []);
}

####################
# functions to Nav #
####################
function create_nav($args = []){
	new Nav($args);
}

#######################
# functions to Dialog #
#######################
function msg_box($message,$time){
	Dialog::build()->message_box($message,$time);
}

function msg_box_rnd($message,$time){
	Dialog::build()->message_box_rounded($message,$time);
}
