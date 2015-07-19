<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>thenewboston</title>

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
	<?php include("../../panel/left_ads.php"); ?>

	<div id="content-wrapper">

		<!-- Page header -->
		<div class="page-header">
			<div class="row">
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Create New Unit</h1>
			</div>
		</div>

		<div class="row">

			<!-- Create new unit form -->
			<div class="col-xs-12 col-lg-6">
				<form class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Publisher Unit Details</span>
					</div>
					<div class="panel-body">

						<!-- Name -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="">
							</div>
						</div>

						<!-- Size -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Size:</label>
							<div class="col-sm-10">
								<select class="form-control">
									<option value="1">180 x 150 - Small rectangle</option>
									<option value="2">300 x 250 - Medium rectangle</option>
									<option value="3">336 x 280 - Large rectangle</option>
									<option value="4">728 x 90 - Leaderboard</option>
									<option value="5">970 x 90 - Large leaderboard</option>
								</select>
							</div>
						</div>

						<script>
							init.push(function () {
								$('#unit-border-color').minicolors({
									control: 'border',
									position: 'bottom left',
									theme: 'bootstrap'
								});
								$('#unit-background-color').minicolors({
									control: 'background',
									position: 'bottom left',
									theme: 'bootstrap'
								});
								$('#unit-title-color').minicolors({
									control: 'title',
									position: 'bottom left',
									theme: 'bootstrap'
								});
								$('#unit-description-color').minicolors({
									control: 'description',
									position: 'bottom left',
									theme: 'bootstrap'
								});
								$('#unit-url-color').minicolors({
									control: 'url',
									position: 'bottom left',
									theme: 'bootstrap'
								});
							});
						</script>

						<!-- Border -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Border:</label>
							<div class="col-sm-10">
								<input type="text" id="unit-border-color" class="form-control" value="#006699">
							</div>
						</div>

						<!-- Background -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Background:</label>
							<div class="col-sm-10">
								<input type="text" id="unit-background-color" class="form-control" value="#f6f6f6">
							</div>
						</div>

						<!-- Title -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Title:</label>
							<div class="col-sm-10">
								<input type="text" id="unit-title-color" class="form-control" value="#006699">
							</div>
						</div>

						<!-- Description -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description:</label>
							<div class="col-sm-10">
								<input type="text" id="unit-description-color" class="form-control" value="#999999">
							</div>
						</div>

						<!-- URL -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">URL:</label>
							<div class="col-sm-10">
								<input type="text" id="unit-url-color" class="form-control" value="#CC0000">
							</div>
						</div>

						<!-- Website Category -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Category:</label>
							<div class="col-sm-10">
								<select class="form-control">
									<option value="" disabled selected>-- Select Website Category --</option>
									<option value="2">Automotive</option>
									<option value="2">Education</option>
								</select>
							</div>
						</div>

						<!-- Cost per day -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Cost per day:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" placeholder="Enter amount in BTC">
							</div>
						</div>

						<!-- Submit button -->
						<div class="form-group" style="margin-bottom: 0;">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Create Unit</button>
							</div>
						</div>

					</div>
				</form>
			</div>

			<!-- Code -->
			<div class="col-xs-12 col-lg-6">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Unit Code</span>
					</div>
					<div class="panel-body">
						<p>Copy and paste this code into your website wherever you would like this unit to appear.</p>
<pre class="prettyprint" style="border: 1px solid #e2e2e2; padding: 8px; font-size: 13px; background-color: #fdfdfd;">
&#x3C;script type=&#x22;text/javascript&#x22;&#x3E;
thenewboston_ad_width = &#x22;250&#x22;;
thenewboston_ad_height = &#x22;250&#x22;;
thenewboston_ad_token = &#x22;9fb967256e3ae4e828a63337ab204267f6c238d8&#x22;;
&#x3C;/script&#x3E;
&#x3C;script type=&#x22;text/javascript&#x22; src=&#x22;//www.thenewboston.com/ad.js.php&#x22;&#x3E;&#x3C;/script&#x3E;
</pre>
					</div>
				</div>
			</div>

		</div>

		<!-- Preview -->
		<div class="row">
			<div class="col-xs-12">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Preview</span>
					</div>
					<div class="panel-body">
						<img src="../../assets/images/pixel-admin/publisher_unit_sample.png" class="img-responsive">
					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>