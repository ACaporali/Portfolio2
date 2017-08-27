
var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";

	/*[qode_slider slider='home-slider-5' auto_start='true' animation_type='slide' slide_animation='6000' height='' responsive_height='no' background_color='' anchor='']*/

/*---Scroll to a div---*/
function goToByScroll(id, marge){
if ($j('nav').hasClass('scrolled')) {
                $j('html, body').stop().animate({
                    'scrollTop': $j("#"+id).offset().top - marge
                }, 900, 'swing');
            }else{
                $j('html, body').stop().animate({
                    'scrollTop':  $j("#"+id).offset().top - marge
                }, 900, 'swing');
            }
}


$j( 'a[title="competences"]' ).click( function (e) {
e.preventDefault(); 
var title= $j(this).attr('title');
if ($j(document).width() < 1001) {
goToByScroll(this.title, 200);
}else{
goToByScroll(this.title, 0);
}
             
});

$j( 'a[title="realisations"]' ).click( function (e) {
e.preventDefault(); 
var title= $j(this).attr('title');
if ($j(document).width() < 1001) {
goToByScroll(this.title, 200);
}else{
goToByScroll(this.title, 0);
}          
});

$j( 'a[title="a-propos"]' ).click( function (e) {
e.preventDefault(); 
var title= $j(this).attr('title');
if ($j(document).width() < 1001) {
goToByScroll(this.title, 200);
}else{
goToByScroll(this.title, 0);
}           
});

$j( 'a[title="contact"]' ).click( function (e) {
e.preventDefault(); 
var title= $j(this).attr('title');
if ($j(document).width() < 1001) {
goToByScroll(this.title, 200);
}else{
goToByScroll(this.title, 0);
}           
});});
