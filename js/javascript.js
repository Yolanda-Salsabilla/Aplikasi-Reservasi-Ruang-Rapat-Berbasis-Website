$(document).ready(function(){
    $(".button-collapse").sideNav();
	$('.parallax').parallax();
	$('.modal-trigger').leanModal();
	$('select').material_select();
	$('.slider').slider({full_width: true, interval: 4000});
	
	var options = [
		{selector: '#staggered-list', offset: 200, callback: 'Materialize.showStaggeredList("#staggered-list")' },
		{selector: '#show-text1', offset: 150, callback: 'Materialize.fadeInImage("#show-text1")' },
		{selector: '#show-text2', offset: 150, callback: 'Materialize.fadeInImage("#show-text2")' },
		{selector: '#show-text3', offset: 150, callback: 'Materialize.fadeInImage("#show-text3")' }
	];
	Materialize.scrollFire(options);
});

$('.datepicker1').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 80, // Creates a dropdown of 15 years to control year
	format: 'yyyy-mm-dd',
	max: true
});

$('.datepicker2').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 2, // Creates a dropdown of 15 years to control year
	format: 'yyyy-mm-dd',
	min: true
});