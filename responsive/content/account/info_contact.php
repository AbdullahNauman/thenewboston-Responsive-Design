<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Contact Information</title>

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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Contact Information</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-lg-8">

				<!-- Javascript -->
				<script>
					init.push(function () {
						$('#switcher-cell-phone').find('> input').switcher();
						$('#switcher-home-phone').find('> input').switcher();
						$('#switcher-work-phone').find('> input').switcher();
						$('#switcher-username-1').find('> input').switcher();
					});
				</script>

				<!-- Email -->
				<form class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Email</span>
					</div>
					<div class="panel-body">

						<!-- Email -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Email:</label>
							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-8">
										<input type="text" class="form-control" placeholder="bacon@gmail.com" disabled="">
									</div>
									<div class="col-sm-4">
										<select class="form-control">
											<option value="1">Do Not Display</option>
											<option value="1">Public</option>
											<option value="2">Private</option>
										</select>
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- Submit button -->
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-2 col-sm-8">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>

				</form>

				<!-- Phone Numbers -->
				<form class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Phone Numbers</span>
					</div>
					<div class="panel-body">

						<!-- Cell Phone -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Cell Phone:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="">
							</div>
							<div class="col-sm-2" style="padding-top: 4px;">
								<div id="switcher-cell-phone">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Home Phone -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Home Phone:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="">
							</div>
							<div class="col-sm-2" style="padding-top: 4px;">
								<div id="switcher-home-phone">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Work Phone -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Work Phone:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="">
							</div>
							<div class="col-sm-2" style="padding-top: 4px;">
								<div id="switcher-work-phone">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

					</div>

					<!-- Submit button -->
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-2 col-sm-8">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>

				</form>

				<!-- Usernames -->
				<form class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Usernames</span>
					</div>
					<div class="panel-body">

						<!-- Usernames -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Username:</label>

							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
									<div class="col-sm-5">
										<select class="form-control">
											<option value="" disabled="" selected="">--</option>
											<option value="1">GitHub</option>
											<option value="2">Skype</option>
										</select>
									</div>
									<div class="col-sm-1">
										<button type="button" class="btn"><i class="fa fa-trash"></i></button>
									</div>
								</div>
							</div>
							<div class="col-sm-2" style="padding-top: 4px;">
								<div id="switcher-username-1">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

					</div>

					<!-- Submit button -->
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-2 col-sm-8">
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