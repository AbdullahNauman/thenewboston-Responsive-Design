<!DOCTYPE html>
<html lang="en" class="gt-ie8 gt-ie9 not-ie pxajs">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Offers Made</title>

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
	<?php include("../../panel/left_menu.php"); ?>

	<div id="content-wrapper">

		<!-- Page header -->
		<div class="page-header">
			<div class="row">
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Offers Made</h1>
			</div>
		</div>

		<div class="row above-ads-table">
			<div class="col-xs-6">
				<button class="btn btn-labeled btn-danger"><span class="btn-label icon fa fa-close"></span>Revoke</button>
			</div>
			<div class="col-xs-6">
				<h4 class="text-right">All offers made <small>(1 result)</small></h4>
			</div>
		</div>

		<div class="table-primary">

			<table class="table table-bordered table-striped ads-table">

				<!-- Table header -->
				<thead>
				<tr>
					<th class="valign-bottom" style="margin-left: 1px;">
						<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
					</th>
					<th>My Ad Details</th>
					<th>Unit Overview</th>
					<th>Unit Stats</th>
					<th>Cost</th>
					<th>Preview</th>
				</tr>
				</thead>

				<!-- Table body -->
				<tbody>
				<tr>

					<!-- Checkbox -->
					<td><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></td>

					<!-- My Ad Details -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Name:</td>
								<td class="second-column">Shake Out Ad</td>
							</tr>
							<tr>
								<td class="first-column">Size:</td>
								<td class="second-column">728 x 90 - Leaderboard</td>
							</tr>
							<tr>
								<td class="first-column">URL:</td>
								<td class="second-column"><a href="https://www.thenewboston.com/">http://www.shakeout.org/</a></td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Publisher unit -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Website:</td>
								<td class="second-column"><a href="https://www.thenewboston.com/">https://www.thenewboston.com/</a></td>
							</tr>
							<tr>
								<td class="first-column">Category:</td>
								<td class="second-column">Education</td>
							</tr>
							<tr>
								<td class="first-column">Owner:</td>
								<td class="second-column"><a href="https://www.thenewboston.com/">Bucky Roberts</a></td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Unit Stats -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Avg DI:</td>
								<td class="second-column">2,384</td>
							</tr>
							<tr>
								<td class="first-column">Avg CTR:</td>
								<td class="second-column">2.08 %</td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Cost -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Days purchased:</td>
								<td class="second-column">20</td>
							</tr>
							<tr>
								<td class="first-column">Price per day:</td>
								<td class="second-column">8.00 <span class="text-xs">mBTC</span></td>
							</tr>
							<tr>
								<td class="first-column">Total:</td>
								<td class="text-success" style="padding-left:8px;"><strong>160.00 <span class="text-xs">mBTC</span></strong></td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Preview -->
					<td>
						<a href="http://www.shakeout.org/">
							<img src="http://www.shakeout.org/2008/downloads/ShakeOut_BannerAds_JoinUs_728x90_v2.gif" class="img-responsive">
						</a>
					</td>

				</tr>

				</tbody>
			</table>

		</div>

		<!-- Pagination -->
		<div class="row">
			<div class="col-sm-12">
				<ul class="pagination">
					<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>