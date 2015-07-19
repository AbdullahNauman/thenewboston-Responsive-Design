<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Change Password</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Change Password</h1>
			</div>
		</div>

		<!-- Panel -->
		<div class="row">
			<div class="col-xs-12 col-lg-6">

				<form action="" class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Change Password</span>
					</div>
					<div class="panel-body">

						<!-- Current Password -->
						<div class="row form-group">
							<label class="col-sm-4 control-label">Current Password:</label>
							<div class="col-sm-8">
								<input type="text" name="name" class="form-control">
							</div>
						</div>

						<!-- New Password -->
						<div class="row form-group">
							<label class="col-sm-4 control-label">New Password:</label>
							<div class="col-sm-8">
								<input type="text" name="name" class="form-control">
								<p class="help-block">Must be at least 8 characters and contain a minimum of 1 number.</p>
							</div>
						</div>

						<!-- Confirm New Password -->
						<div class="row form-group">
							<label class="col-sm-4 control-label">Confirm New Password:</label>
							<div class="col-sm-8">
								<input type="email" name="email" class="form-control">
							</div>
						</div>
					</div>

					<!-- Submit button -->
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>