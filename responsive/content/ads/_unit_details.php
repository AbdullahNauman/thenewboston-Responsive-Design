<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Unit Details</title>

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
				<h1 class="col-md-4 text-center text-left-sm">Unit Details</h1>
				<div class="col-md-4 col-md-push-4">
					<form class="form-horizontal">
						<div class="form-group" style="margin-bottom: 0">
							<label for="" class="col-sm-2 control-label">View:</label>
							<div class="col-sm-10">
								<select class="form-control">
									<option value="1">My Purchase</option>
									<option value="2">Unit History</option>
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Left Column -->
			<div class="col-lg-8">

				<!-- Chart Panel -->
				<div class="panel colourable" style="box-shadow: 0 1px 2px rgba(0,0,0,.1);">
					<div class="panel-heading">
						<span class="panel-title">Daily Impressions</span>
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

				<!-- Row under main chart -->
				<div class="row">

					<!-- Most Frequent Pages -->
					<div class="col-lg-12">
						<div class="panel panel-12 panel-dark">
							<div class="panel-heading">
								<span class="panel-title">Most Frequent Pages</span>
							</div>
							<div class="panel-body">

								<!-- Most frequent URL's unit appears on -->
								<table class="table table-condensed unit-stats-table">
									<thead>
									<tr>
										<th>URL</th>
										<th>Impressions</th>
										<th>Clicks</th>
										<th>Avg DI</th>
										<th>CTR</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><a href="https://www.thenewboston.com/">https://www.thenewboston.com/</a></td>
										<td>72,816</td>
										<td>834</td>
										<td>1,082</td>
										<td>2.56 %</td>
									</tr>
									<tr>
										<td><a href="https://www.thenewboston.com/videos.php">https://www.thenewboston.com/videos.php</a></td>
										<td>13,329</td>
										<td>121</td>
										<td>150</td>
										<td>1.36 %</td>
									</tr>
									<tr>
										<td><a href="https://www.thenewboston.com/videos.php?cat=31">https://www.thenewboston.com/videos.php?cat=31</a></td>
										<td>11,235</td>
										<td>56</td>
										<td>67</td>
										<td>3.02 %</td>
									</tr>
									<tr>
										<td><a href="https://www.thenewboston.com/forum/">https://www.thenewboston.com/forum/</a></td>
										<td>4,766</td>
										<td>98</td>
										<td>42</td>
										<td>0.46 %</td>
									</tr>
									<tr>
										<td><a href="https://www.thenewboston.com/videos.php?cat=16">https://www.thenewboston.com/videos.php?cat=16</a></td>
										<td>3,591</td>
										<td>23</td>
										<td>28</td>
										<td>1.25 %</td>
									</tr>
									</tbody>
								</table>

							</div>
						</div>
					</div>

				</div>

			</div>

			<!-- Right Column -->
			<div class="col-lg-4">

				<!-- Unit Overview Panel -->
				<div class="panel panel-9 panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Unit Overview</span>
					</div>
					<div class="panel-body">

						<!-- Top website -->
						<table class="unit-overview-table">
							<tbody>
							<tr>
								<td class="valign-top">
									<img class="item-thumbnail" src="https://static.servedby-buysellads.com/pub/nosvn/uploads/screenshots/1c1b6778362db412d09e7d7912abc478_400x300.jpg?v=1409673687">
								</td>
								<td class="valign-top" style="padding-left: 14px">
									<span class="text-bg text-semibold">thenewboston.com</span>
									<br>
									<div class="text-slim">
										Watch thousands of free educational video tutorials on computer programming, game development, web design, video editing, and more!
									</div>
									<div class="label label-success item-status-label">Available Now</div>
								</td>
							</tr>
							</tbody>
						</table>

						<!-- Unit Stats -->
						<table class="table table-condensed unit-stats-table">
							<thead>
							<tr>
								<th>Unit Stats</th>
								<th></th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Size:</td>
								<td>728 x 90 - Leaderboard</td>
							</tr>
							<tr>
								<td>Category:</td>
								<td>Education</td>
							</tr>
							<tr>
								<td>Total Impressions:</td>
								<td>18,261</td>
							</tr>
							<tr>
								<td>Total Clicks:</td>
								<td>645</td>
							</tr>
							<tr>
								<td>Avg DI:</td>
								<td class="second-column">2,384</td>
							</tr>
							<tr>
								<td>Avg CTR:</td>
								<td>2.08 %</td>
							</tr>
							<tr>
								<td class="valign-bottom">Daily Cost:</td>
								<td class="valign-bottom">
									<div class="text-success item-price">
										4.50
										<span style="font-size: 14px">mBTC</span>
									</div>
								</td>
							</tr>
							</tbody>
						</table>

						<!-- Purchase Unit button -->
						<button class="btn btn-lg btn-labeled btn-9" style="margin-top: 14px;">
							<span class="btn-label icon fa fa-btc"></span>Purchase this Unit
						</button>

					</div>
				</div>

				<!-- Owner Panel -->
				<div class="panel panel-7 panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Owner</span>
					</div>
					<div class="panel-body">

						<!-- User -->
						<table class="unit-owner-table">
							<tbody>
							<tr>
								<td class="valign-top">
									<img class="profile-photo-thumbnail" src="https://www.thenewboston.com/photos/users/2/resized/23471ba4417d650505928a0b1f1fd8b1.jpg">
								</td>
								<td class="valign-top" style="padding-left: 12px">
									<span class="text-bg text-semibold">Bucky Roberts</span>
									<br>
									<div style="margin-top: 4px;">
										<button class="btn btn-sm btn-labeled"><span class="btn-label icon fa fa-envelope"></span>Message</button>
									</div>
								</td>
							</tr>
							</tbody>
						</table>

						<!-- Publisher Stats -->
						<table class="units-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">Active Units:</td>
								<td class="second-column">18</td>
							</tr>
							<tr>
								<td class="first-column">Total Impressions:</td>
								<td class="second-column">12,832</td>
							</tr>
							<tr>
								<td class="first-column">Total Clicks:</td>
								<td class="second-column">689</td>
							</tr>
							<tr>
								<td class="first-column">Total Earnings:</td>
								<td class="second-column">324.24 mBTC</td>
							</tr>
							<tr>
								<td class="first-column">Publisher Rank:</td>
								<td class="second-column">18 / 2513</td>
							</tr>
							</tbody>
						</table>

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