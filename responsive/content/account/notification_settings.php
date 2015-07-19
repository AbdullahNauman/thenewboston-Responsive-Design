<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Notification Settings</title>

	<link
		href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin"
		rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="theme-default main-menu-animated">
<script>var init = [];</script>
<div id="main-wrapper">
	<?php include("../../panel/top_nav.php"); ?>
	<?php include("../../panel/left_account.php"); ?>

	<div id="content-wrapper">

		<!-- Page header -->
		<div class="page-header">
			<div class="row">
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Send Me a Notification When...</h1>
			</div>
		</div>

		<!-- Javascript -->
		<script>
			init.push(function () {
				$('#switcher-notification-1').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-2').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-3').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-4').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-5').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-6').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-7').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-8').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-9').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
				$('#switcher-notification-10').switcher({theme: 'square', on_state_content: '<span class="fa fa-check"></span>', off_state_content: '<span class="fa fa-times"></span>'});
			});
		</script>
		<!-- / Javascript -->

		<div class="row">
			<div class="col-xs-12 col-lg-8">

				<div class="panel panel-12 panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Ads</span>
					</div>
					<ul class="list-group">

						<!-- One -->
						<li class="list-group-item">
							<span>Tri-tip pork alcatra, boudin ham hock fatback ribeye.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-1" checked="checked"></div>
						</li>

						<!-- Two -->
						<li class="list-group-item">
							<span>Shankle rump turkey ground round ham filet mignon.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-2" checked="checked"></div>
						</li>

						<!-- Three -->
						<li class="list-group-item">
							<span>Capicola rump venison salami, jowl pork chop cow kielbasa tenderloin.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-3" checked="checked"></div>
						</li>

					</ul>
				</div>

				<div class="panel panel-12 panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Forum</span>
					</div>
					<ul class="list-group">

						<!-- One -->
						<li class="list-group-item">
							<span>Tri-tip pork alcatra, boudin ham hock fatback ribeye.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-4" checked="checked"></div>
						</li>

						<!-- Two -->
						<li class="list-group-item">
							<span>Shankle rump turkey ground round ham filet mignon.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-5" checked="checked"></div>
						</li>

					</ul>
				</div>

				<div class="panel panel-12 panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Shop</span>
					</div>
					<ul class="list-group">

						<!-- One -->
						<li class="list-group-item">
							<span>Tri-tip pork alcatra, boudin ham hock fatback ribeye.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-6" checked="checked"></div>
						</li>

						<!-- Two -->
						<li class="list-group-item">
							<span>Shankle rump turkey ground round ham filet mignon.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-7" checked="checked"></div>
						</li>

						<!-- Three -->
						<li class="list-group-item">
							<span>Capicola rump venison salami, jowl pork chop cow kielbasa tenderloin.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-8" checked="checked"></div>
						</li>

					</ul>
				</div>

				<div class="panel panel-12 panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Social</span>
					</div>
					<ul class="list-group">

						<!-- One -->
						<li class="list-group-item">
							<span>Tri-tip pork alcatra, boudin ham hock fatback ribeye.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-9" checked="checked"></div>
						</li>

					</ul>
				</div>

				<div class="panel panel-12 panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Trade</span>
					</div>
					<ul class="list-group">

						<!-- One -->
						<li class="list-group-item">
							<span>Tri-tip pork alcatra, boudin ham hock fatback ribeye.</span>
							<div style="float: right"><input type="checkbox" data-class="switcher-sm" id="switcher-notification-10" checked="checked"></div>
						</li>

					</ul>
				</div>

			</div>
		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>