<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>New design concepts</title>

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
<body class="theme-default main-menu-animated page-mail">
<script>var init = [];</script>
<div id="main-wrapper">
	<?php include("../../panel/top_nav.php"); ?>
	<?php include("../../panel/left_account.php"); ?>

	<div id="content-wrapper">

		<div class="mail-nav">
			<div class="compose-btn">
				<a href="messages_compose.php" class="btn btn-primary btn-labeled btn-block"><i class="btn-label fa fa-pencil-square-o"></i>New Message</a>
			</div>
			<div class="navigation">
				<ul class="sections">
					<li class="active"><a href="messages_inbox.php"><i class="m-nav-icon fa fa-envelope"></i>Inbox <span class="label pull-right">20</span></a></li>
					<li><a href="messages_sent.php"><i class="m-nav-icon fa fa-share"></i>Sent</a></li>
					<li><a href="messages_trash.php"><i class="m-nav-icon fa fa-trash"></i>Trash</a></li>
					<li class="divider"></li>
				</ul>

				<div class="mail-nav-header">LABELS</div>
				<ul class="sections">
					<li><a href="#"><div class="mail-nav-lbl bg-success"></div>Client</a></li>
					<li><a href="#"><div class="mail-nav-lbl bg-danger"></div>Social</a></li>
					<li><a href="#"><div class="mail-nav-lbl bg-info"></div>Family</a></li>
					<li class="divider"></li>
				</ul>
			</div>
		</div>

		<div class="mail-container">
			<div class="mail-container-header show">
				<a href="#" class="m-details-star"><i class="fa fa-star"></i></a> <span class="label label-pa-purple">Work</span>&nbsp;
				New design concepts.&nbsp;<i class="fa fa-paperclip" style="font-size: 18px;"></i>
			</div>

			<div class="mail-controls clearfix">
				<div class="btn-toolbar wide-btns pull-left" role="toolbar">

					<div class="btn-group">
						<button type="button" class="btn"><i class="fa fa-chevron-left"></i></button>
					</div>

					<div class="btn-group">
						<button type="button" class="btn"><i class="fa fa fa-file-text-o"></i></button>
						<button type="button" class="btn"><i class="fa fa-exclamation-circle"></i></button>
						<button type="button" class="btn"><i class="fa fa-trash-o"></i></button>
					</div>

				</div>

				<div class="btn-toolbar pull-right" role="toolbar">
					<div class="btn-group">
						<button type="button" class="btn"><i class="fa fa-mail-reply"></i></button>
						<div class="btn-group">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><i class="fa fa-mail-reply"></i>&nbsp;&nbsp;Reply</a></li>
								<li><a href="#"><i class="fa fa-mail-forward"></i>&nbsp;&nbsp;Forward</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="mail-info">
				<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="avatar">
				<div class="from">
					<div class="name">Michelle Bortz</div>
					<div class="email">mbortz@example.com</div>
				</div>

				<div class="date">Mar 27 (3 days ago)</div>
			</div>


			<div class="mail-message-body">
				Hi John,
				<br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
				<blockquote>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</blockquote>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<ul class="mail-attachments">
				<li>
					<span class="label label-warning">HTML</span>&nbsp;&nbsp;&nbsp;<a href="#" class="text-semibold">index.html</a>&nbsp;<span class="text-muted">(12.6 KB)</span>
					<div class="pull-right">
						<a href="#">Download</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">View</a>
					</div>
				</li>
				<li>
					<span class="label label-info">CSS</span>&nbsp;&nbsp;&nbsp;<a href="#" class="text-semibold">style.css</a>&nbsp;<span class="text-muted">(25.1 KB)</span>
					<div class="pull-right">
						<a href="#">Download</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">View</a>
					</div>
				</li>
			</ul>

			<div class="message-details-reply">
				<form id="message-details-reply" action="" class="expanding-input">
					<textarea class="form-control expanding-input-target" rows="5"></textarea>
					<div class="expanding-input-hidden expanding-input-content" style="margin-top: 10px;">
						<button class="btn btn-primary pull-right">Send Message</button>
					</div>
					<div class="expanding-input-overlay"><div class="expanding-input-placeholder">Click here to <a htef="#" class="text-muted"><strong>Reply</strong></a> or <a htef="#" class="text-muted"><strong>Forward</strong></a></div></div></form>
			</div>

		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>