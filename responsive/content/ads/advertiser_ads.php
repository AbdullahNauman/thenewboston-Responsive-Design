<!DOCTYPE html>
<html lang="en" class="gt-ie8 gt-ie9 not-ie pxajs">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Ads</title>

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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">My Ads</h1>
				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<hr class="visible-xs no-grid-gutter-h">
						<div class="pull-right col-xs-12 col-sm-auto">
							<a href="advertiser_create_ad.php" class="btn btn-primary btn-labeled" style="width: 100%;">
								<span class="btn-label icon fa fa-plus"></span>
								Create New Ad
							</a>
						</div>
						<div class="visible-xs clearfix form-group-margin"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="row above-ads-table">
			<div class="col-xs-6">
				<button class="btn btn-labeled btn-danger"><span class="btn-label icon fa fa-close"></span>Delete</button>
			</div>
			<div class="col-xs-6">
				<h4 class="text-right">All my advertisements <small>(2 results)</small></h4>
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
					<th>Details</th>
					<th>Status</th>
					<th>Performance</th>
					<th>Preview</th>
				</tr>
				</thead>

				<!-- Table body -->
				<tbody>

				<!-- Ad 1 -->
				<tr>

					<!-- Checkbox -->
					<td><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></td>

					<!-- Details -->
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

					<!-- Current Status -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Running:</td>
								<td class="second-column">3</td>
							</tr>
							<tr>
								<td class="first-column">Scheduled:</td>
								<td class="second-column">1</td>
							</tr>
							<tr>
								<td class="first-column">Completed:</td>
								<td class="second-column">17</td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Performance -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Impressions:</td>
								<td class="second-column">65,384</td>
							</tr>
							<tr>
								<td class="first-column">Avg CTR:</td>
								<td class="second-column">2.08 %</td>
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

				<!-- Ad 2 -->
				<tr>

					<!-- Checkbox -->
					<td><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></td>

					<!-- Details -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Name:</td>
								<td class="second-column">T-shirt Store Text Ad</td>
							</tr>
							<tr>
								<td class="first-column">Title:</td>
								<td class="second-column">Vintage T-Shirts from $19.99</td>
							</tr>
							<tr>
								<td class="first-column">Description:</td>
								<td class="second-column">Buy vintage t-shirts at a fantastic price, with no minimum quantity.</td>
							</tr>
							<tr>
								<td class="first-column">URL:</td>
								<td class="second-column"><a href="http://www.ae.com/web/index.jsp">http://www.ae.com/web/index.jsp</a></td>
							</tr>
							<tr>
								<td class="first-column">Display URL:</td>
								<td class="second-column"><a href="http://www.ae.com/web/index.jsp">ae.com</a></td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Current Status -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Running:</td>
								<td class="second-column">1</td>
							</tr>
							<tr>
								<td class="first-column">Scheduled:</td>
								<td class="second-column">0</td>
							</tr>
							<tr>
								<td class="first-column">Completed:</td>
								<td class="second-column">4</td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Performance -->
					<td>
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Impressions:</td>
								<td class="second-column">20,055</td>
							</tr>
							<tr>
								<td class="first-column">Avg CTR:</td>
								<td class="second-column">1.21 %</td>
							</tr>
							</tbody>
						</table>
					</td>

					<!-- Preview -->
					<td>
						<a href="http://www.shakeout.org/">
							<img src="../../assets/images/pixel-admin/publisher_unit_sample.png" class="img-responsive">
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