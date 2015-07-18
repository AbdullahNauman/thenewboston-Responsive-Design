<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Advertiser - Create Ad</title>

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
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Create New Ad</h1>
			</div>
		</div>

		<!-- Create ad form -->
		<div class="row" style="margin-bottom: 22px;">
			<div class="col-xs-12">

				<!-- Text / Image tabs -->
				<ul id="" class="nav nav-tabs">
					<li class="active">
						<a href="#create-text-ad" data-toggle="tab">
							Text Ad
							&nbsp;<i class="menu-icon fa fa-list-alt"></i>
						</a>
					</li>
					<li class="">
						<a href="#create-image-ad" data-toggle="tab">
							Image Ad
							&nbsp;<i class="menu-icon fa fa-picture-o"></i>
						</a>
					</li>
				</ul>

				<!-- Tab content -->
				<div class="tab-content tab-content-bordered" style="padding: 0;">
					<div class="tab-pane fade active in" id="create-text-ad">

						<!-- Text ad form -->
						<div class="row">
							<div class="col-xs-12 col-lg-6">

								<form class="panel form-horizontal" style="border: none; margin: 0;">
									<div class="panel-body">

										<!-- Name -->
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Name:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="" placeholder="For your use only, will not be displayed on ad">
											</div>
										</div>

										<!-- Title -->
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Title:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="">
											</div>
										</div>

										<!-- Description -->
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Description:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="">
											</div>
										</div>

										<!-- URL -->
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">URL:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="" placeholder="http://www.example.com/">
											</div>
										</div>

										<!-- Display URL -->
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Display URL:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="" placeholder="example.com">
											</div>
										</div>

										<!-- Submit button -->
										<div class="form-group" style="margin-bottom: 0;">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Create Text Ad</button>
											</div>
										</div>

									</div>
								</form>

							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="create-image-ad">

						<!-- Image ad form -->
						<div class="row">
							<div class="col-xs-12 col-lg-6">

								<form class="panel form-horizontal" style="border: none; margin: 0;">
									<div class="panel-body">

										<!-- Name -->
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Name:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="" placeholder="For your use only, will not be displayed on ad">
											</div>
										</div>

										<!-- URL -->
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">URL:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="" placeholder="http://www.example.com/">
											</div>
										</div>

										<!-- Submit button -->
										<div class="form-group" style="margin-bottom: 0;">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Create Image Ad</button>
											</div>
										</div>

									</div>
								</form>

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

		<!-- Text Ad Preview -->
		<div class="row">
			<div class="col-xs-12">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Text Ad Preview</span>
					</div>
					<div class="panel-body">
						<img src="../../assets/images/pixel-admin/publisher_unit_sample.png" class="img-responsive">
					</div>
				</div>
			</div>
		</div>

		<!-- Image Ad Preview -->
		<div class="row">
			<div class="col-xs-12">
				<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Image Ad Preview</span>
					</div>
					<div class="panel-body">

						<div class="row">

							<!-- Drag and drop file -->
							<div class="col-xs-7">

								<script>
									init.push(function () {
										$("#dropzonejs-example").dropzone({
											url: "//dummy.html",
											paramName: "file", // The name that will be used to transfer the file
											maxFilesize: 0.5, // MB

											addRemoveLinks : true,
											dictResponseError: "Can't upload file!",
											autoProcessQueue: false,
											thumbnailWidth: 138,
											thumbnailHeight: 120,

											previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',

											resize: function(file) {
												var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
													srcRatio = file.width / file.height;
												if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
													info.trgHeight = this.options.thumbnailHeight;
													info.trgWidth = info.trgHeight * srcRatio;
													if (info.trgWidth > this.options.thumbnailWidth) {
														info.trgWidth = this.options.thumbnailWidth;
														info.trgHeight = info.trgWidth / srcRatio;
													}
												} else {
													info.trgHeight = file.height;
													info.trgWidth = file.width;
												}
												return info;
											}
										});
									});
								</script>

								<div id="dropzonejs-example" class="dropzone-box">
									<div class="dz-default dz-message">
										<i class="fa fa-cloud-upload"></i>
										Drop files in here<br><span class="dz-text-small">or click to pick manually</span>
									</div>
									<form action="//dummy.html">
										<div class="fallback">
											<input name="file" type="file" multiple="" />
										</div>
									</form>
								</div>

							</div>

							<div class="col-xs-5">
								<h4 style="margin-bottom: 14px;">Accepted image sizes:</h4>
								<table class="table table-condensed">
									<thead>
									<tr>
										<th>Size</th>
										<th>Name</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>180 x 150</td>
										<td>Small rectangle</td>
									</tr>
									<tr>
										<td>300 x 250</td>
										<td>Medium rectangle</td>
									</tr>
									<tr>
										<td>336 x 280 </td>
										<td>Large rectangle</td>
									</tr>
									<tr>
										<td>728 x 90</td>
										<td>Leaderboard</td>
									</tr>
									<tr>
										<td>970 x 90</td>
										<td>Large leaderboard</td>
									</tr>
									<tr>
										<td>120 x 600</td>
										<td>Skyscraper</td>
									</tr>
									<tr>
										<td>240 x 400</td>
										<td>Fat Skyscraper</td>
									</tr>
									<tr>
										<td>160 x 600</td>
										<td>Wide skyscraper</td>
									</tr>
									<tr>
										<td>230 x 600</td>
										<td>Bucky's skyscraper</td>
									</tr>
									<tr>
										<td>300 x 600</td>
										<td>Large skyscraper</td>
									</tr>
									<tr>
										<td>234 x 60</td>
										<td>Half banner</td>
									</tr>
									<tr>
										<td>468 x 60</td>
										<td>Banner</td>
									</tr>
									<tr>
										<td>120 x 240</td>
										<td>Vertical banner</td>
									</tr>
									<tr>
										<td>125 x 125</td>
										<td>Button</td>
									</tr>
									<tr>
										<td>200 x 200</td>
										<td>Small square</td>
									</tr>
									<tr>
										<td>250 x 250</td>
										<td>Square</td>
									</tr>
									</tbody>
								</table>
							</div>

						</div>

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