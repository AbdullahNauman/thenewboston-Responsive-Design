<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Search</title>

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
<body class="theme-default main-menu-animated page-search">
<script>var init = [];</script>
<div id="main-wrapper">
	<?php include("../../panel/top_nav.php"); ?>
	<?php include("../../panel/left_account_home.php"); ?>

	<div id="content-wrapper">

		<!-- 5. $SEARCH_RESULTS_PAGE =======================================================================

				Search results page
		-->

		<div class="page-header">
			<h1><i class="fa fa-search page-header-icon"></i>&nbsp;&nbsp;Search results</h1>
		</div> <!-- / .page-header -->

		<div class="search-text">
			<strong>21</strong> results found for: <span class="text-primary">Lorem ipsum</span>
		</div> <!-- / .search-text -->

		<!-- Tabs -->
		<div class="search-tabs">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#search-tabs-all" data-toggle="tab">All <span class="label label-primary">21</span></a>
				</li>
				<li>
					<a href="#search-tabs-users" data-toggle="tab">Users <span class="label label-success">5</span></a>
				</li>
				<li>
					<a href="#search-tabs-messages" data-toggle="tab">Pages <span class="label label-danger">9</span></a>
				</li>
			</ul> <!-- / .nav -->
		</div>
		<!-- / Tabs -->

		<!-- Panel -->
		<div class="panel search-panel">

			<!-- Search form -->
			<form action="" class="search-form bg-primary">
				<div class="input-group input-group-lg">
					<span class="input-group-addon no-background"><i class="fa fa-search"></i></span>
					<input type="text" name="s" class="form-control" placeholder="Type your search here...">
					<span class="input-group-btn">
						<button class="btn" type="submit">Search</button>
					</span>
				</div> <!-- / .input-group -->
			</form>
			<!-- / Search form -->

			<!-- Search results -->
			<div class="panel-body tab-content">

				<!-- Classic search -->
				<ul class="search-classic tab-pane fade in active" id="search-tabs-all">
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
						<div class="search-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div> <!-- / .search-content -->
						<div class="search-tags">
							<span class="search-tags-text">Tags:</span>
							<a href="#" class="label label-success">Lorem</a>
							<a href="#" class="label label-success">Ipsum</a>
							<a href="#" class="label label-success">Dolor</a>
						</div> <!-- / .search-tags -->
					</li>
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor sit amet.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
						<div class="search-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div> <!-- / .search-content -->
					</li>
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
						<div class="search-tags">
							<span class="search-tags-text">Tags:</span>
							<a href="#" class="label label-success">Lorem</a>
							<a href="#" class="label label-success">Ipsum</a>
							<a href="#" class="label label-success">Dolor</a>
							<a href="#" class="label label-success">Sit</a>
							<a href="#" class="label label-success">Amet</a>
						</div>
					</li>
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
					</li>
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
						<div class="search-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div> <!-- / .search-content -->
						<div class="search-tags">
							<span class="search-tags-text">Tags:</span>
							<a href="#" class="label label-success">Lorem</a>
							<a href="#" class="label label-success">Ipsum</a>
							<a href="#" class="label label-success">Dolor</a>
						</div> <!-- / .search-tags -->
					</li>
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor sit amet.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
						<div class="search-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div> <!-- / .search-content -->
					</li>
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
						<div class="search-tags">
							<span class="search-tags-text">Tags:</span>
							<a href="#" class="label label-success">Lorem</a>
							<a href="#" class="label label-success">Ipsum</a>
							<a href="#" class="label label-success">Dolor</a>
							<a href="#" class="label label-success">Sit</a>
							<a href="#" class="label label-success">Amet</a>
						</div>
					</li>
					<li>
						<a href="#" class="search-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
						<a href="#" class="search-url">http://example.com/some/page</a>
					</li>
				</ul>
				<!-- / Classic search -->

				<!-- Users search -->
				<div class="search-users tab-pane fade" id="search-tabs-users">
					<table class="table table-hover">
						<thead>
						<tr>
							<th class="text-center">#</th>
							<th>User</th>
							<th>Full Name</th>
							<th>E-mail</th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>
								<img src="assets/demo/avatars/1.jpg" alt="" class="avatar">&nbsp;&nbsp;
								<a href="#">jdoe</a>
							</td>
							<td>John Doe</td>
							<td>jdoe@example.com</td>
							<td>
								<a href="#" title="" class="btn btn-xs btn-outline btn-success add-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-danger add-tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-info add-tooltip" data-original-title="Ban user"><i class="fa fa-lock"></i></a>
							</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>
								<img src="assets/demo/avatars/2.jpg" alt="" class="avatar">&nbsp;&nbsp;
								<a href="#">rjang</a>
							</td>
							<td>Robert Jang</td>
							<td>rjang@example.com</td>
							<td>
								<a href="#" title="" class="btn btn-xs btn-outline btn-success add-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-danger add-tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-info add-tooltip" data-original-title="Ban user"><i class="fa fa-lock"></i></a>
							</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>
								<img src="assets/demo/avatars/3.jpg" alt="" class="avatar">&nbsp;&nbsp;
								<a href="#">mbortz</a>
							</td>
							<td>Michelle Bortz</td>
							<td>mbortz@example.com</td>
							<td>
								<a href="#" title="" class="btn btn-xs btn-outline btn-success add-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-danger add-tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-info add-tooltip" data-original-title="Ban user"><i class="fa fa-lock"></i></a>
							</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td>
								<img src="assets/demo/avatars/4.jpg" alt="" class="avatar">&nbsp;&nbsp;
								<a href="#">towens</a>
							</td>
							<td>Timothy Owens</td>
							<td>towens@example.com</td>
							<td>
								<a href="#" title="" class="btn btn-xs btn-outline btn-success add-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-danger add-tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-info add-tooltip" data-original-title="Ban user"><i class="fa fa-lock"></i></a>
							</td>
						</tr>
						<tr>
							<td class="text-center">5</td>
							<td>
								<img src="assets/demo/avatars/5.jpg" alt="" class="avatar">&nbsp;&nbsp;
								<a href="#">dsteiner</a>
							</td>
							<td>Denise Steiner</td>
							<td>dsteiner@example.com</td>
							<td>
								<a href="#" title="" class="btn btn-xs btn-outline btn-success add-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-danger add-tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
								<a href="#" title="" class="btn btn-xs btn-outline btn-info add-tooltip" data-original-title="Ban user"><i class="fa fa-lock"></i></a>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<!-- / Users search -->

				<!-- Messages search -->
				<div class="search-messages tab-pane fade widget-messages" id="search-tabs-messages">
					<div class="message unread">
						<a href="#" title="" class="from">Robert Jang</a>
						<a href="#" title="" class="title">Message Title 1</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message unread">
						<a href="#" title="" class="from">Michelle Bortz</a>
						<a href="#" title="" class="title"><i class="message-title-icon fa fa-paperclip"></i>Message Title 2</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message">
						<a href="#" title="" class="from">Timothy Owens</a>
						<a href="#" title="" class="title">Message Title 3</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message">
						<a href="#" title="" class="from">Denise Steiner</a>
						<a href="#" title="" class="title">Message Title 4</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message">
						<a href="#" title="" class="from">Robert Jang</a>
						<a href="#" title="" class="title">Message Title 5</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message">
						<a href="#" title="" class="from">Michelle Bortz</a>
						<a href="#" title="" class="title">Message Title 6</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message">
						<a href="#" title="" class="from">Timothy Owens</a>
						<a href="#" title="" class="title">Message Title 7</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message">
						<a href="#" title="" class="from">Denise Steiner</a>
						<a href="#" title="" class="title">Message Title 8</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->

					<div class="message">
						<a href="#" title="" class="from">Robert Jang</a>
						<a href="#" title="" class="title">Message Title 9</a>
						<div class="date">18 jan</div>
					</div> <!-- / .message -->
				</div>
				<!-- / Messages search -->
			</div>
			<!-- / Search results -->

			<!-- Panel Footer -->
			<div class="panel-footer">
				<ul class="pagination">
					<li class="disabled"><a href="#">«</a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">»</a></li>
				</ul>
			</div> <!-- / .panel-footer -->

		</div>
		<!-- / Panel -->

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>