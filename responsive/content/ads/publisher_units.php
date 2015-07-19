<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Publisher - My Units</title>

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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">My Units</h1>
				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<hr class="visible-xs no-grid-gutter-h">
						<div class="pull-right col-xs-12 col-sm-auto">
							<a href="publisher_create_unit.php" class="btn btn-primary btn-labeled" style="width: 100%;">
								<span class="btn-label icon fa fa-plus"></span>
								Create New Unit
							</a>
						</div>
						<div class="visible-xs clearfix form-group-margin"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Top panels -->
		<div class="row">

			<!-- Chart -->
			<div class="col-lg-7">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Impressions</span>
						<div class="panel-heading-controls">
							<select class="form-control input-sm">
								<option value="1">Impressions</option>
								<option value="2">Earnings</option>
							</select>
						</div>
					</div>
					<div class="panel-body">
						<img src="../../assets/images/pixel-admin/sample-chart.png" class="img-responsive">
					</div>
				</div>
			</div>

			<!-- Right stat panels -->
			<div class="col-lg-5">

				<!-- Earnings -->
				<div class="stat-panel">
					<div class="stat-cell bg-success valign-middle">
						<i class="fa fa-btc bg-icon"></i>
						<span class="text-xlg"><strong>302.60</strong></span>
						<span class="text-bg">mBTC</span><br>
						<span class="text-bg">Total Earnings</span><br>
					</div>
				</div>

				<!-- Pending Earnings -->
				<div class="stat-panel">
					<div class="stat-cell bg-warning valign-middle">
						<i class="fa fa-clock-o bg-icon"></i>
						<span class="text-xlg"><strong>1.13</strong></span>
						<span class="text-bg">mBTC</span><br>
						<span class="text-bg">Pending Earnings</span><br>
						<span class="text-sm">You will be paid when earnings reach <strong>2.00</strong> mBTC.</span>
					</div>
				</div>

				<!-- Overview -->
				<div class="stat-panel">
					<div class="stat-row">
						<div class="stat-cell bg-info darker">
							<i class="fa fa-line-chart bg-icon" style="font-size:60px;line-height:80px;height:80px;"></i>
							<span class="text-bg">Publisher Overview</span><br>
							<span class="text-sm">Your publisher account statistics</span>
						</div>
					</div>
					<div class="stat-row">
						<div class="stat-counters bg-info no-border-b no-padding text-center">
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>12,832</strong></span><br>
								<span class="text-xs">TOTAL IMPRESSIONS</span>
							</div>
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>689</strong></span><br>
								<span class="text-xs">TOTAL CLICKS</span>
							</div>
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>18 / 2513</strong></span><br>
								<span class="text-xs">RANKING</span>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

		<!-- My units tabs -->
		<ul id="" class="nav nav-tabs">
			<li class="active">
				<a href="#publisher-units-tab-active" data-toggle="tab">
					Active
					<span class="label label-success">2</span>
				</a>
			</li>
			<li class="">
				<a href="#publisher-units-tab-deleted" data-toggle="tab">
					Deleted
					<span class="label label-danger">1</span>
				</a>
			</li>
		</ul>

		<!-- Tab content -->
		<div class="tab-content tab-content-bordered">

			<script>
				init.push(function () {
					$('#delete-unit-button').on('click', function () {
						bootbox.dialog({
							message: "Delete publisher unit \"Main Homepage Ad\"",
							title: "Confirm",
							buttons: {
								danger: {
									label: "Delete",
									className: "btn-danger",
									callback: function() {
										// JavaScript
									}
								},
								main: {
									label: "Cancel",
									className: "btn-default",
									callback: function() {
										// JavaScript
									}
								}
							},
							className: "bootbox-sm"
						});
					});
				});
			</script>

			<!-- Active -->
			<div class="tab-pane fade active in" id="publisher-units-tab-active">
				<table class="table">
					<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Status</th>
						<th>Size</th>
						<th>Impressions</th>
						<th>Earnings (mBTC)</th>
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>3821</td>
						<td><a href="#">Main Homepage Ad</a></td>
						<td><span class="label label-success">Active</span></td>
						<td>728 x 90 - Leaderboard</td>
						<td>2,816</td>
						<td><span class="text-success">9.72</span></td>
						<td>
							<button type="button" class="btn btn-xs" id="delete-unit-button"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-xs"><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#publisher-unit-code"><i class="fa fa-code"></i></button>
							<div id="publisher-unit-code" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Unit Code</h4>
										</div>
										<div class="modal-body">
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
						</td>
					</tr>
					<tr>
						<td>6582</td>
						<td><a href="#">Forum Right Side Ad</a></td>
						<td><span class="label label-success">Active</span></td>
						<td>120 x 600 - Skyscraper</td>
						<td>13,953</td>
						<td><span class="text-success">45.17</span></td>
						<td>
							<button type="button" class="btn btn-xs"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-xs"><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#publisher-unit-code-2"><i class="fa fa-code"></i></button>
							<div id="publisher-unit-code-2" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Unit Code</h4>
										</div>
										<div class="modal-body">
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
						</td>
					</tr>
					</tbody>
				</table>
			</div>

			<!-- Deleted -->
			<div class="tab-pane fade" id="publisher-units-tab-deleted">
				<table class="table">
					<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Status</th>
						<th>Size</th>
						<th>Impressions</th>
						<th>Earnings (BTC)</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>9574</td>
						<td><a href="#">Videos & Tutorials Ad</a></td>
						<td><span class="label label-danger">Deleted</span></td>
						<td>728 x 90 - Leaderboard</td>
						<td>2,816</td>
						<td><span class="text-success">0.8562</span></td>
					</tr>
					</tbody>
				</table>
			</div>

		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>