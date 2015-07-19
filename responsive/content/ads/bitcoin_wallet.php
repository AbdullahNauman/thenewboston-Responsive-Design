<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bitcoin Wallet</title>

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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Bitcoin Wallet</h1>
			</div>
		</div>

		<div class="row">

			<!-- Create new unit form -->
			<div class="col-xs-12 col-lg-6">
				<form class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Send Bitcoin</span>
					</div>
					<div class="panel-body">

						<!-- To -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">To:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" placeholder="Bitcoin address of recipient">
							</div>
						</div>

						<!-- Amount -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Amount:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="">
							</div>
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Password:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="">
							</div>
						</div>

						<!-- Send Bitcoin -->
						<div class="form-group" style="margin-bottom: 0;">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Send Bitcoin</button>
							</div>
						</div>

					</div>
				</form>
			</div>

			<!-- My Wallet -->
			<div class="col-xs-12 col-lg-6">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">My Wallet</span>
					</div>
					<div class="panel-body">
						<table>
							<tbody>
							<tr>
								<td style="font-weight: 600">Balance:</td>
								<td class="text-success" style="padding-left:8px;">0.00078619 <span class="text-xs">BTC</span></td>
							</tr>
							<tr>
								<td style="font-weight: 600">My Bitcoin Address:</td>
								<td style="padding-left: 8px">16FCD5zrkJp6AqfDm3j6LBWNYx1Gard2Z1</td>
							</tr>
							</tbody>
						</table>
						<img src="https://blockchain.info/qr?data=16FCD5zrkJp6AqfDm3j6LBWNYx1Gard2Z1&size=150" class="img-responsive" style="margin-top: 12px;">
					</div>
				</div>
			</div>

		</div>

		<!-- Recent Activity -->
		<div class="row">
			<div class="col-xs-12">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Recent Activity</span>
					</div>
					<div class="panel-body">
						<table class="table">
							<thead>
							<tr>
								<th>To / From</th>
								<th>Name</th>
								<th>Amount</th>
								<th>Balance</th>
								<th>Date</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>12KrtJdntq2fmTwXmX4rMeu2pxPnidGgwK</td>
								<td><a href="#">Emily Ross</a></td>
								<td class="text-success">+ 0.1872511 BTC</td>
								<td style="font-weight: 600">0.15031262 BTC</td>
								<td>May 13, 2015</td>
							</tr>
							<tr>
								<td>p6AqfDm3j6LBWNYx116FCD5zrkJGard2Z1</td>
								<td><a href="#">Jennifer Davis</a></td>
								<td class="text-danger">- 0.42123188 BTC</td>
								<td style="font-weight: 600">0.23185434 BTC</td>
								<td>May 13, 2015</td>
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