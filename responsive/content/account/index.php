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
	<?php include("../../panel/left_account_home.php"); ?>

	<div id="content-wrapper">

		<!-- Page header -->
		<div class="page-header">
			<div class="row">
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Stream</h1>
				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<hr class="visible-xs no-grid-gutter-h">
						<div class="visible-xs clearfix form-group-margin"></div>
						<form action="" class="pull-right col-xs-12 col-sm-6">
							<div class="input-group no-margin">
								<span class="input-group-addon" style="border:none;background: #fff;background: rgba(0,0,0,.05);"><i class="fa fa-search"></i></span>
								<input type="text" placeholder="Search..." class="form-control no-padding-hr" style="border:none;background: #fff;background: rgba(0,0,0,.05);">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Create New post -->
		<div class="row" style="margin-bottom: 22px;">

			<div class="col-xs-12 col-lg-8">

				<!-- Text / Image tabs -->
				<ul id="" class="nav nav-tabs">
					<li class="active">
						<a href="#create-text-post" data-toggle="tab">
							Text
							&nbsp;<i class="menu-icon fa fa-pencil"></i>
						</a>
					</li>
					<li class="">
						<a href="#create-image-post" data-toggle="tab">
							Photo
							&nbsp;<i class="menu-icon fa fa-camera"></i>
						</a>
					</li>
					<li class="">
						<a href="#create-video-post" data-toggle="tab">
							Video
							&nbsp;<i class="menu-icon fa fa-youtube-play"></i>
						</a>
					</li>
				</ul>

				<!-- Tab content -->
				<div class="tab-content tab-content-bordered" style="padding: 0;">

					<!-- Text -->
					<div class="tab-pane fade active in" id="create-text-post">
						<div class="row">
							<div class="col-xs-12">

								<!-- Textarea -->
								<div class="panel-body">
									<textarea class="form-control form-group-margin" rows="5" placeholder="Write something Hoss..."></textarea>
									<button class="btn btn-primary">Post</button>
								</div>

							</div>
						</div>
					</div>

					<!-- Photo -->
					<div class="tab-pane fade" id="create-image-post">
						<div class="row">
							<div class="col-xs-12">

								<!-- Textarea -->
								<div class="panel-body">

									<textarea class="form-control form-group-margin" rows="5" placeholder="Write something Hoss..."></textarea>

									<!-- Drag and drop file -->
									<div class="row">
										<div class="col-xs-12 col-lg-6" style="padding-top: 6px; padding-bottom: 6px;">
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
									</div>

								</div>

								<div class="panel-footer">
									<button class="btn btn-primary">Post</button>
								</div>

							</div>
						</div>
					</div>

					<!-- Video -->
					<div class="tab-pane fade" id="create-video-post">
						<div class="row">
							<div class="col-xs-12">

								<div class="panel-body">
									<textarea class="form-control form-group-margin" rows="5" placeholder="Write something Hoss..."></textarea>
									<input type="text" name="" placeholder="YouTube URL" class="form-control">
								</div>

								<div class="panel-footer">
									<button class="btn btn-primary">Post</button>
								</div>

							</div>
						</div>
					</div>

				</div>

				<!-- Stream -->
				<div class="row" style="margin-top: 22px;">
					<div class="col-xs-12">
						<div class="panel colourable">
							<div class="panel-body">
								Panel body content
							</div>
						</div>

						<div class="panel colourable">
							<div class="panel-body">
								Panel body content
							</div>
						</div>
					</div>
				</div>

			</div>



			<!-- Notifications -->
			<div class="col-xs-12 col-lg-4">

				<ul id="uidemo-tabs-default-demo" class="nav nav-tabs">
					<li class="active">
						<a href="#uidemo-tabs-default-demo-home" data-toggle="tab">My Notifications <span class="label label-success">12</span></a>
					</li>
					<li class="">
						<a href="#uidemo-tabs-default-demo-profile" data-toggle="tab">Friend Activity <span class="label label-primary">7</span></a>
					</li>
				</ul>

				<div class="tab-content tab-content-bordered">
					<div class="tab-pane fade active in" id="uidemo-tabs-default-demo-home">
						<p>Notifications</p>
					</div>
					<div class="tab-pane fade" id="uidemo-tabs-default-demo-profile">
						<p>Friend Activity</p>
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