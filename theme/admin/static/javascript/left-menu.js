$('[data-toggle="tooltip"]').tooltip();

var baseUrl = window.location.protocol + "//" + window.location.host + "/";
$('#default').on('click', function(){
	$.ajax({
		url: baseUrl+'admin/me/setting/theme_set/1',
		type: 'post'
	});
	$('nav').removeClass('navbar-inverse');
	$('nav').addClass('navbar-default');
	/*console.log('deafault')*/
});
$('#dark').on('click', function(){
	$.ajax({
		url: baseUrl+'admin/me/setting/theme_set/2',
		type: 'post'
	});
	$('nav').removeClass('navbar-default');
	$('nav').addClass('navbar-inverse');
});