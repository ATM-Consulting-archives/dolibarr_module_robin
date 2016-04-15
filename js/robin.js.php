<?php
	
	

?>

var timeout = 200;

$(document).ready(function() {
	
   scrambleLink();
	/*
   $('a').attr('href','javascript:;');
   		
   	$('a').hover(function(){
	  $(this).css('visibility','hidden');
	});

   		
   $('a').click(function() {
		robin($(this));	
    });
	*/
   
});

function scrambleLink() {
	console.log('scrambleLink');
	var	nb_el = $('a:not(.scrambled)').length;
	
	if(nb_el < 1) return false;
	
	a_from = Math.floor(Math.random() *nb_el);
	a_to = Math.floor(Math.random() *nb_el);
	
	$a1 = $('a:not(.scrambled)').eq(a_from);
	$a2 = $('a:not(.scrambled)').eq(a_to);
	
	url1 = $a1.attr('href');
	url2 = $a2.attr('href');
	
	$a1.attr('href',url2);
	$a1.css('color','#ff00ff').addClass('scrambled');
	
	$a2.attr('href',url1);
	$a2.css('color','#ffff00').addClass('scrambled');
	
	timeout-=10;
	if(timeout <1) timeout = 1;
	
	window.setTimeout( scrambleLink, timeout);
}

function robin($obj) {
	console.log($obj);
	/*$obj.addClass('gravity');
	
	$('body').jGravity({
               target: 'a.gravity',
               ignoreClass: 'ignoreMe',
               weight: 25,
               depth: 10,
               drag: false
  });*/
	
}
