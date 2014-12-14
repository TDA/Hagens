$(document).ready(function() {    


//Navigation blob creation
//Unobtrusive JS :P
$('<div id="navigation_blob"></div>').css({
width: $('nav li:first a').width() + 10
}).appendTo('nav');

//Calc the position n width n set it up
var navtop=$('nav li a.current').position().top + $('nav li a.current').height() + 5 ;
var navleft=$('nav li a.current').position().left;
var width_of_blob=$('nav li a.current').width() + 10;
$('#navigation_blob').css({left: navleft,top:navtop});

//Make blob move animatedly when the elt is hovered upon
$('nav a').hover(function() {
$('#navigation_blob').animate({width: $(this).width() + 10, left: $(this).position().left},
{duration: 'slow', queue: false},'linear'
);}
,function() {
$('#navigation_blob').animate({left: navleft,width:width_of_blob},{duration: 'slow', queue: false});});



});