<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $page_title ?></title>
<link rel="stylesheet" href="<?= $this->theme->asset('static/css/style.css') ?>">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
	@media (max-width: 768px) {
	.navbar-fixed-side {
		margin-left: -15px;
		margin-right: -15px;
	}
	.user-prof {
		padding: 20px;
	}
	.profile-userpic img {
	  float: none;
	  margin: 0 auto;
	  width: 50%;
	  height: 50%;
	  -webkit-border-radius: 50% !important;
	  -moz-border-radius: 50% !important;
	  border-radius: 50% !important;
	}
	.profile-usertitle {
	  text-align: center;
	  margin-top: 20px;
	}

	.profile-usertitle-name {
	  color: #5a7391;
	  font-size: 16px;
	  font-weight: 600;
	  margin-bottom: 7px;
	}

	.profile-usertitle-job {
	  text-transform: uppercase;
	  color: #5b9bd1;
	  font-size: 12px;
	  font-weight: 600;
	  margin-bottom: 15px;
	}

	.profile-userbuttons {
	  text-align: center;
	  margin-top: 10px;
	}

	.profile-userbuttons .btn {
	  text-transform: uppercase;
	  font-size: 11px;
	  font-weight: 600;
	  padding: 6px 15px;
	  margin-right: 5px;
	}

	.profile-userbuttons .btn:last-child {
	  margin-right: 0px;
	}
}
@media (min-width: 768px) {
	.navbar-fixed-side {
		position: fixed;
		margin: 0 -15px;
		height: 100vh;
		width: inherit;
		overflow: auto;
		border-top-width: 0;
		border-bottom-width: 0;
		border-radius: 0
	}
	.navbar-fixed-side .container, .navbar-fixed-side .container-fluid {
		width: auto;
		padding-left: 0;
		padding-right: 0
	}
	.navbar-fixed-side .navbar-header {
		float: none
	}
	.navbar-fixed-side .navbar-brand {
		height: auto
	}
	.navbar-fixed-side>.container .navbar-brand, .navbar-fixed-side>.container-fluid .navbar-brand {
		margin-left: 0
	}
	.navbar-fixed-side .navbar-collapse {
		width: 100%;
		border-top: 1px solid #e7e7e7
	}
	.navbar-fixed-side .navbar-nav {
		float: none;
		margin: 0 -15px
	}
	.navbar-fixed-side .navbar-nav>li {
		float: none
	}
	.navbar-fixed-side .navbar-nav>li>a {
		padding-top: 10px;
		padding-bottom: 10px;
		border-bottom: 1px solid #e7e7e7
	}
	.navbar-fixed-side .navbar-form {
		margin: 0;
		margin-left: -15px;
		margin-right: -15px;
		padding: 10px 15px;
		border-bottom: 1px solid #e7e7e7
	}
	.navbar-fixed-side .navbar-text {
		float: none;
		margin-left: 0;
		margin-right: 0
	}
	.navbar-fixed-side .navbar-left, .navbar-fixed-side .navbar-right {
		float: none !important
	}
	.navbar-fixed-side .navbar-nav .dropdown-menu {
		position: static;
		float: none;
		width: auto;
		margin-top: 0;
		background-color: transparent;
		border: 0;
		box-shadow: none;
		border-bottom: 1px solid #e7e7e7
	}
	.navbar-fixed-side .navbar-nav .dropdown-menu>li>a, .navbar-fixed-side .navbar-nav .dropdown-menu .dropdown-header {
		padding: 5px 15px 5px 25px
	}
	.navbar-fixed-side .navbar-nav .dropdown-menu>li>a {
		line-height: 20px;
		color: #777
	}
	.navbar-fixed-side .navbar-nav .dropdown-menu>li>a:hover, .navbar-fixed-side .navbar-nav .dropdown-menu>li>a:focus {
		background-image: none
	}
	.navbar-fixed-side .navbar-nav .dropdown-menu>.active>a {
		background-color: #e7e7e7;
		color: #555
	}
	.navbar-fixed-side.navbar-inverse .navbar-collapse, .navbar-fixed-side.navbar-inverse .navbar-nav>li>a, .navbar-fixed-side.navbar-inverse .navbar-form, .navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu {
		border-color: #363636
	}
	.navbar-fixed-side.navbar-inverse .divider {
		background-color: #363636
	}
	.navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>li>a {
		color: #9d9d9d
	}
	.navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>.active>a {
		background-color: #090909;
		color: #fff
	}
	.navbar-fixed-side.navbar-inverse .navbar-nav>li:not(.active)>a:hover, .navbar-fixed-side.navbar-inverse .navbar-nav>li:not(.active)>a:focus, .navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>li:not(.active)>a:hover, .navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>li:not(.active)>a:focus {
		background-color: #2f2f2f;
		color: #fff
	}
	.navbar-fixed-side.navbar-inverse .dropdown>.dropdown-toggle {
		color: #777777 !important
	}

	.user-prof {
		padding: 20px;
	}
	.profile-userpic img {
	  float: none;
	  margin: 0 auto;
	  width: 50%;
	  height: 50%;
	  -webkit-border-radius: 50% !important;
	  -moz-border-radius: 50% !important;
	  border-radius: 50% !important;
	}
	.profile-usertitle {
	  text-align: center;
	  margin-top: 20px;
	}

	.profile-usertitle-name {
	  color: #5a7391;
	  font-size: 16px;
	  font-weight: 600;
	  margin-bottom: 7px;
	}

	.profile-usertitle-job {
	  text-transform: uppercase;
	  color: #5b9bd1;
	  font-size: 12px;
	  font-weight: 600;
	  margin-bottom: 15px;
	}

	.profile-userbuttons {
	  text-align: center;
	  margin-top: 10px;
	}

	.profile-userbuttons .btn {
	  text-transform: uppercase;
	  font-size: 11px;
	  font-weight: 600;
	  padding: 6px 15px;
	  margin-right: 5px;
	}

	.profile-userbuttons .btn:last-child {
	  margin-right: 0px;
	}
}
</style>