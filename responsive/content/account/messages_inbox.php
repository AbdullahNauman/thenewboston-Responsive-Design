<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Inbox</title>

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
			<div class="mail-container-header">
				Inbox

				<form action="" class="pull-right" style="width: 200px;margin-top: 3px;">
					<div class="form-group input-group-sm has-feedback no-margin">
						<input type="text" placeholder="Search..." class="form-control">
						<span class="fa fa-search form-control-feedback" style="top: -1px"></span>
					</div>
				</form>
			</div>

			<div class="mail-controls clearfix">
				<div class="btn-toolbar wide-btns pull-left" role="toolbar">

					<div class="btn-group">
						<div class="btn-group">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-check-square-o"></i>&nbsp;<i class="fa fa-caret-down"></i></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Check all</a></li>
								<li><a href="#">Check read</a></li>
								<li><a href="#">Check unread</a></li>
								<li class="divider"></li>
								<li><a href="#">Uncheck all</a></li>
								<li><a href="#">Uncheck read</a></li>
								<li><a href="#">Uncheck unread</a></li>
							</ul>
						</div>
						<button type="button" class="btn"><i class="fa fa-repeat"></i></button>
					</div>

					<div class="btn-group">
						<button type="button" class="btn"><i class="fa fa fa-file-text-o"></i></button>
						<button type="button" class="btn"><i class="fa fa-exclamation-circle"></i></button>
						<button type="button" class="btn"><i class="fa fa-trash-o"></i></button>
					</div>

				</div>

				<div class="btn-toolbar pull-right" role="toolbar">
					<div class="btn-group">
						<button type="button" class="btn"><i class="fa fa-chevron-left"></i></button>
						<button type="button" class="btn"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div class="pages pull-right">
					1-50 of 825
				</div>
			</div>


			<ul class="mail-list">
				<li class="mail-item unread">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Facebook</a></div>
					<div class="m-subject"><span class="label label-danger">Social</span>&nbsp;&nbsp;<a href="pages-show-email.html">Reset your account password</a></div>
					<div class="m-date">3:25 PM</div>
				</li>
				<li class="mail-item starred">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Dropbox</a></div>
					<div class="m-subject"><a href="pages-show-email.html">Complete your Dropbox setup!</a></div>
					<div class="m-date">Yesterday, 1:15 PM</div>
				</li>
				<li class="mail-item unread">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Michelle Bortz</a></div>
					<div class="m-subject"><span class="label label-pa-purple">Work</span>&nbsp;&nbsp;<a href="pages-show-email.html">New design concepts</a>&nbsp;&nbsp;<i class="fa fa-paperclip"></i></div>
					<div class="m-date">Mar 28</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">TaskManager</a></div>
					<div class="m-subject"><a href="pages-show-email.html">You have 5 uncompleted tasks!</a></div>
					<div class="m-date">Mar 27</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">GitHub</a></div>
					<div class="m-subject"><a href="pages-show-email.html">[GitHub] Your password has changed</a></div>
					<div class="m-date">Mar 26</div>
				</li>
				<li class="mail-item starred">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Timothy Owens</a></div>
					<div class="m-subject"><span class="label label-warning">Friends</span>&nbsp;&nbsp;<a href="pages-show-email.html">Hi John! How are you?</a></div>
					<div class="m-date">Mar 25</div>
				</li>
				<li class="mail-item starred unread">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Master Yoda</a></div>
					<div class="m-subject"><a href="pages-show-email.html">You're ready, young padawan.</a></div>
					<div class="m-date">Mar 24</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Facebook</a></div>
					<div class="m-subject"><a href="pages-show-email.html">Reset your account password</a></div>
					<div class="m-date">Mar 23</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Dropbox</a></div>
					<div class="m-subject"><a href="pages-show-email.html">Complete your Dropbox setup!</a></div>
					<div class="m-date">Mar 22</div>
				</li>
				<li class="mail-item unread">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Michelle Bortz</a></div>
					<div class="m-subject"><span class="label label-pa-purple">Work</span>&nbsp;&nbsp;<a href="pages-show-email.html">New design concepts</a>&nbsp;&nbsp;<i class="fa fa-paperclip"></i></div>
					<div class="m-date">Mar 21</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">TaskManager</a></div>
					<div class="m-subject"><a href="pages-show-email.html">You have 5 uncompleted tasks!</a></div>
					<div class="m-date">Mar 20</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">GitHub</a></div>
					<div class="m-subject"><a href="pages-show-email.html">[GitHub] Your password has changed</a></div>
					<div class="m-date">Mar 19</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Timothy Owens</a></div>
					<div class="m-subject"><a href="pages-show-email.html">Hi John! How are you?</a></div>
					<div class="m-date">Mar 18</div>
				</li>
				<li class="mail-item starred">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Master Yoda</a></div>
					<div class="m-subject"><a href="pages-show-email.html">You're ready, young padawan.</a></div>
					<div class="m-date">Mar 17</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Facebook</a></div>
					<div class="m-subject"><span class="label label-danger">Social</span>&nbsp;&nbsp;<a href="pages-show-email.html">Reset your account password</a></div>
					<div class="m-date">Mar 16</div>
				</li>
				<li class="mail-item starred">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Dropbox</a></div>
					<div class="m-subject"><a href="pages-show-email.html">Complete your Dropbox setup!</a></div>
					<div class="m-date">Mar 15</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Michelle Bortz</a></div>
					<div class="m-subject"><a href="pages-show-email.html">New design concepts</a>&nbsp;&nbsp;<i class="fa fa-paperclip"></i></div>
					<div class="m-date">Mar 14</div>
				</li>
				<li class="mail-item starred unread">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Master Yoda</a></div>
					<div class="m-subject"><a href="pages-show-email.html">You're ready, young padawan.</a></div>
					<div class="m-date">Mar 13</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">TaskManager</a></div>
					<div class="m-subject"><a href="pages-show-email.html">You have 5 uncompleted tasks!</a></div>
					<div class="m-date">Mar 11</div>
				</li>
				<li class="mail-item">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">GitHub</a></div>
					<div class="m-subject"><a href="pages-show-email.html">[GitHub] Your password has changed</a></div>
					<div class="m-date">Mar 10</div>
				</li>
				<li class="mail-item starred">
					<div class="m-chck"><label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label></div>
					<div class="m-star"><a href="#"></a></div>
					<div class="m-from"><a href="#">Timothy Owens</a></div>
					<div class="m-subject"><span class="label label-warning">Friends</span>&nbsp;&nbsp;<a href="pages-show-email.html">Hi John! How are you?</a></div>
					<div class="m-date">Mar 10</div>
				</li>
			</ul>

		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>