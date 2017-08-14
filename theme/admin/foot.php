<div>&#160;</div>
<div id="nav-progress"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src='<?= $this->theme->asset('static/tinymce/tinymce.js', false) ?>'></script>
<script src="<?= $this->theme->asset('static/js/portal.js') ?>"></script>
<script>
	$('[data-toggle="tooltip"]').tooltip();

	$('#default').on('click', function(){
		$.ajax({
			url: 'http://admin.dev/admin/me/setting/theme_set/1',
			type: 'post'
		});
		$('nav').removeClass('navbar-inverse');
		$('nav').addClass('navbar-default');
		/*console.log('deafault')*/
	});
	$('#dark').on('click', function(){
		$.ajax({
			url: 'http://admin.dev/admin/me/setting/theme_set/2',
			type: 'post'
		});
		$('nav').removeClass('navbar-default');
		$('nav').addClass('navbar-inverse');
	});
</script>