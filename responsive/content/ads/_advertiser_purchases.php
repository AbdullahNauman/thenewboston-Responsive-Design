<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Purchases</title>

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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Purchases</h1>
				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<hr class="visible-xs no-grid-gutter-h">
						<div class="pull-right col-xs-12 col-sm-auto">
							<a href="_advertiser_create_ad.php" class="btn btn-primary btn-labeled" style="width: 100%;">
								<span class="btn-label icon fa fa-plus"></span>
								Create New Ad
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
								<option value="2">Clicks</option>
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

				<!-- Total Impressions -->
				<div class="stat-panel">
					<div class="stat-cell bg-success valign-middle">
						<i class="fa fa-globe bg-icon"></i>
						<span class="text-xlg"><strong>73,216</strong></span><br>
						<span class="text-bg">Total Impressions</span>
					</div>
				</div>

				<!-- Total Clicks -->
				<div class="stat-panel">
					<div class="stat-cell bg-warning valign-middle">
						<i class="fa fa-desktop bg-icon"></i>
						<span class="text-xlg"><strong>1,956</strong></span><br>
						<span class="text-bg">Total Clicks</span>
					</div>
				</div>

				<!-- Overview -->
				<div class="stat-panel">
					<div class="stat-row">
						<div class="stat-cell bg-info darker">
							<i class="fa fa-line-chart bg-icon" style="font-size:60px;line-height:80px;height:80px;"></i>
							<span class="text-bg">Advertiser Overview</span><br>
							<span class="text-sm">Your advertiser account statistics</span>
						</div>
					</div>
					<div class="stat-row">
						<div class="stat-counters bg-info no-border-b no-padding text-center">
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>312,832</strong></span><br>
								<span class="text-xs">IMPRESSIONS</span>
							</div>
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>6,892</strong></span><br>
								<span class="text-xs">CLICKS</span>
							</div>
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>2.08</strong></span> %<br>
								<span class="text-xs">AVG CTR</span>
							</div>
						</div>
					</div>
					<div class="stat-row">
						<div class="stat-counters bg-info no-border-b no-padding text-center">
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>37</strong></span><br>
								<span class="text-xs">PURCHASES</span>
							</div>
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>982.10</strong></span> mBTC<br>
								<span class="text-xs">SPENT</span>
							</div>
							<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
								<span class="text-bg"><strong>18</strong></span> / 2513<br>
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
				<a href="#advertiser-ads-running" data-toggle="tab">
					Running
					<span class="label label-success">2</span>
				</a>
			</li>
			<li>
				<a href="#advertiser-ads-scheduled" data-toggle="tab">
					Scheduled
					<span class="label label-warning">1</span>
				</a>
			</li>
			<li class="">
				<a href="#advertiser-ads-completed" data-toggle="tab">
					Completed
					<span class="label label-primary">1</span>
				</a>
			</li>
		</ul>

		<!-- Tab content -->
		<div class="tab-content tab-content-bordered">

			<!-- Running -->
			<div class="tab-pane fade active in" id="advertiser-ads-running">
				<table class="table">
					<thead>
					<tr>
						<th>ID</th>
						<th>My Ad</th>
						<th>Target</th>
						<th>Status</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Impressions</th>
						<th>Clicks</th>
						<th>CTR</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>3821</td>
						<td><a href="#">T-shirt Store Text Ad</a></td>
						<td><a href="https://www.thenewboston.com/">thenewboston.com</a></td>
						<td><span class="label label-success">Running</span></td>
						<td>7/9/2015</td>
						<td>8/30/2015</td>
						<td>14,216</td>
						<td>85</td>
						<td>0.59 %</td>
					</tr>
					<tr>
						<td>4216</td>
						<td><a href="#">NHL Hockey Jersey Ad</a></td>
						<td><a href="http://penguins.nhl.com/">penguins.nhl.com</a></td>
						<td><span class="label label-success">Running</span></td>
						<td>6/15/2015</td>
						<td>9/15/2015</td>
						<td>27,216</td>
						<td>306</td>
						<td>0.85 %</td>
					</tr>
					</tbody>
				</table>
			</div>

			<!-- Scheduled -->
			<div class="tab-pane fade" id="advertiser-ads-scheduled">
				<table class="table">
					<thead>
					<tr>
						<th>ID</th>
						<th>My Ad</th>
						<th>Target</th>
						<th>Status</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Impressions</th>
						<th>Clicks</th>
						<th>CTR</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>3821</td>
						<td><a href="#">Shake Out Ad</a></td>
						<td><a href="https://www.thenewboston.com/">thenewboston.com</a></td>
						<td><span class="label label-warning">Scheduled</span></td>
						<td>9/9/2015</td>
						<td>10/25/2015</td>
						<td class="text-light-gray">n/a</td>
						<td class="text-light-gray">n/a</td>
						<td class="text-light-gray">n/a</td>
					</tr>
					</tbody>
				</table>
			</div>

			<!-- Completed -->
			<div class="tab-pane fade" id="advertiser-ads-completed">
				<table class="table">
					<thead>
					<tr>
						<th>ID</th>
						<th>My Ad</th>
						<th>Target</th>
						<th>Status</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Impressions</th>
						<th>Clicks</th>
						<th>CTR</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>3821</td>
						<td><a href="#">YouTube Channel Ad</a></td>
						<td><a href="https://www.thenewboston.com/">thenewboston.com</a></td>
						<td><span class="label label-primary">Completed</span></td>
						<td>4/20/2015</td>
						<td>5/18/2015</td>
						<td>14,216</td>
						<td>85</td>
						<td>0.59 %</td>
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