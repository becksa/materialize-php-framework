<?php
#######################
# functions to Header #
#######################
function load_js($path_js,$name_js = ''){
	Header::build()->load_js($path_js,$name_js);
}

function load_css($path_css,$name_css = ''){
	Header::build()->load_css($path_css,$name_css);
}

function get_all_loaded(){
	Header::build()->get_all_loaded();
}

function display_header(){
	Header::build()->display_header();
}

function set_header_title($title){
	Header::build()->set_title($title);
}

function set_header_logo($logo){
	Header::build()->set_logo($logo);
}

#######################
# functions to Footer #
#######################
function display_footer(){
	Footer::build()->display_footer();
}

function set_footer_title($title){
	Footer::build()->set_title($title);
}

function set_footer_bg_color($bg_color){
	Footer::build()->set_bg_color($bg_color);
}

function set_footer_tt_color($tt_color){
	Footer::build()->set_tt_color($tt_color);
}

function set_footer_content($content){
	Footer::build()->set_content($content);
}

function set_footer_pages($pages){
	Footer::build()->set_pages($pages);
}

function set_footer_dev($dev){
	Footer::build()->set_dev($dev);
}

#####################
# functions to Card #
#####################
function create_card($args = []){
	Card::build()->create_card($args);
}

#######################
# functions to Button #
#######################
function btn_simple($args = []){
	return Button::build()->button_simple($args);
}

function btn_icon($args = []){
	return Button::build()->button_icon($args);
}

function btn_floating($args = []){
	return Button::build()->button_floating($args);
}

function btn_fixed($args = []){
	return Button::build()->button_fixed($args);
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
function msg_box($message = 'Default Dialog',$time = '4000'){
	Dialog::build()->message_box($message,$time);
}

function msg_box_rnd($message = 'Default Dialog',$time = '4000'){
	Dialog::build()->message_box_rounded($message,$time);
}

#########################
# functions to Parallax #
#########################
function create_parallax($image_path){
	Parallax::build()->create_parallax($image_path);
}

function create_section($args = []){
	Parallax::build()->create_section($args);
}

########################
# functions to Feature #
########################
function create_feature($args = []){
	FeatureDiscovery::build()->create_feature($args);
}

########################
# functions to SideNav #
########################
function create_side_nav($pages){
	SideNav::build()->create_side_nav($pages);
}
