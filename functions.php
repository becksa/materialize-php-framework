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

function set_footer_bg($bg_color){
	Footer::build()->set_bg($bg_color);
}

function set_footer_text($tt_color){
	Footer::build()->set_text($tt_color);
}

function set_footer_class($class){
	Footer::build()->set_class($class);
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

function btn_submit($args = []){
	return Button::build()->button_submit($args);
}

######################
# functions to Input #
######################
function input($args = []){
	return Form::build()->input($args);
}

function textarea($args = []){
	return Form::build()->textarea($args);
}

function datepicker($args = []){
	return Form::build()->datepicker($args);
}

####################
# functions to Nav #
####################
function create_nav($args = []){
	Nav::build()->create_nav($args);
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
function create_parallax($image_path,$height = '500',$width = ''){
	Parallax::build()->create_parallax($image_path,$height,$width);
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
function create_side_nav($pages,$args = []){
	SideNav::build()->create_side_nav($pages,$args);
}

######################
# functions to Chips #
######################
function chip($args = []){
	return Chips::build()->chip($args);
}

######################
# functions to Slide #
######################
function create_slider($folder_path){
	Slider::build()->create_slider($folder_path);
}

##########################
# functions to Preloader #
##########################
function preloader_determinate($percentual){
	Preloader::build()->preloader_linear_determinate($percentual);
}

function preloader_indeterminate(){
	Preloader::build()->preloader_linear_indeterminate();
}

###########################
# functions to Collection #
###########################
function create_collection($args = []){
	Collection::build()->create_collection($args);
}

###########################
# functions to Collection #
###########################
function create_modal($args = []){
	Modal::build()->create_modal($args);
}
