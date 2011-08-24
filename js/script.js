// JavaScript Document
Drupal.behaviors.setup = function() {
	//cycle if there is more than 1 image
	if($('#banner').length >0) {
	$('#banner').cycle();	
	}
}