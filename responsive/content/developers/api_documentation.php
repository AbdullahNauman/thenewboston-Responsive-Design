<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>API Documentation</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
	<link href="http://tnb-res.com/responsive/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="http://tnb-res.com/responsive/assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="http://tnb-res.com/responsive/assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="http://tnb-res.com/responsive/assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="http://tnb-res.com/responsive/assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="theme-default main-menu-animated">
<script>var init = [];</script>
<div id="main-wrapper">
	<?php include("../../panel/top_developers.php"); ?>
	<?php include("../../panel/left_developers.php"); ?>

	<div id="content-wrapper">

		<!-- Page header -->
		<div class="page-header">
			<div class="row">
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">API Documentation</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Log In</span>
					</div>
					<div class="panel-body">

						<!-- Description -->
						<p>
							<span class="text-light-gray text-sm">Description:</span><br>
							Pork chop biltong salami kevin alcatra andouille landjaeger filet mignon frankfurter hamburger tri-tip picanha pork beef ribs doner.
						</p>

						<!-- Code -->
						<p>
							<span class="text-light-gray text-sm">Code:</span><br>
							<span class="text-success text-bold">GET</span> - https://www.tnb-api.com/users/<span class="text-bold">:user_id</span>/avatar
						</p>

						<!-- Parameter table -->
						<table class="ads-mini-details-table">
							<tbody>
							<tr>
								<td class="first-column">TOKEN</td>
								<td class="second-column">String</td>
								<td class="second-column">API developer key</td>
							</tr>
							<tr>
								<td class="first-column">TYPE</td>
								<td class="second-column">String</td>
								<td class="second-column">"video"</td>
							</tr>
							<tr>
								<td class="first-column">ACTION</td>
								<td class="second-column">String</td>
								<td class="second-column">Something else</td>
							</tr>
							</tbody>
						</table>

						<!-- Sample response -->
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

		<div class="row">
			<div class="col-xs-12">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Register</span>
					</div>
					<div class="panel-body">
						Description
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