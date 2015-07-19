<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Links</title>

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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Links</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-lg-10">

				<!-- Javascript -->
				<script>
					init.push(function () {
						$('#switcher-link-1').find('> input').switcher();
						$('#switcher-link-2').find('> input').switcher();
					});
				</script>

				<!-- Links -->
				<form class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Links</span>
					</div>
					<div class="panel-body">

						<!-- Link 1 -->
						<div class="row">
							<div class="form-group form-group-container">
								
								<!-- Label -->
								<label for="" class="col-sm-2 control-label">Link:</label>

								<!-- Title -->
								<div class="col-sm-4">
									<input type="text" class="form-control form-item" placeholder="Title">
								</div>

								<!-- URL -->
								<div class="col-sm-4">
									<input type="text" class="form-control form-item" placeholder="URL">
								</div>

								<!-- Switcher -->
								<div class="col-sm-1">
									<div id="switcher-link-1" class="privacy-switcher form-item">
										<input type="checkbox" data-class="switcher-primary" checked="checked">
									</div>
								</div>

								<!-- Trash -->
								<div class="col-sm-1 form-item">
									<button type="button" class="btn"><i class="fa fa-trash"></i></button>
								</div>
								
							</div>
						</div>

						<!-- Link 2 -->
						<div class="row">
							<div class="form-group form-group-container">

								<!-- Label -->
								<label for="" class="col-sm-2 control-label">Link:</label>

								<!-- Title -->
								<div class="col-sm-4">
									<input type="text" class="form-control form-item" placeholder="Title">
								</div>

								<!-- URL -->
								<div class="col-sm-4">
									<input type="text" class="form-control form-item" placeholder="URL">
								</div>

								<!-- Switcher -->
								<div class="col-sm-1">
									<div id="switcher-link-2" class="privacy-switcher form-item">
										<input type="checkbox" data-class="switcher-primary" checked="checked">
									</div>
								</div>

								<!-- Trash -->
								<div class="col-sm-1 form-item">
									<button type="button" class="btn"><i class="fa fa-trash"></i></button>
								</div>

							</div>
						</div>

						<!-- Add New button -->
						<div class="row">
							<div class="form-group form-group-container">
								<div class="col-sm-offset-2 col-sm-8">
									<button class="btn btn-sm btn-labeled btn-success form-item">
										<span class="btn-label icon fa fa-plus"></span>Add New
									</button>
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