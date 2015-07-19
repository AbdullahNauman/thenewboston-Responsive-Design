<div id="main-navbar" class="navbar navbar-inverse" role="navigation">

	<!-- Left menu toggle button -->
	<button type="button" id="main-menu-toggle">
		<i class="navbar-icon fa fa-bars icon"></i>
	</button>

	<div class="navbar-inner">

		<!-- Logo and top menu toggle (for smaller screens) -->
		<div class="navbar-header">
			<a href="../account/index.php" class="navbar-brand">
				<div>
					<img src="https://www.thenewboston.com/photos/users/2/resized/e2398de91adc36343165148f3b15d35c.png">
				</div>
				thenewboston
			</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
			        data-target="#main-navbar-collapse">
				<i class="navbar-icon fa fa-bars"></i>
			</button>
		</div>

		<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
			<div>

				<!-- Left buttons -->
				<ul class="nav navbar-nav">

					<?php $parent = basename(dirname($_SERVER['PHP_SELF'])); ?>

					<?php if($parent == 'account'){ ?>

						<!-- Stream -->
						<li><a href="index.php">Home</a></li>

						<!-- My Info (dropdown) -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Information</a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Info</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Education</a></li>
								<li><a href="#">Employment</a></li>
								<li><a href="#">Links</a></li>
							</ul>
						</li>

						<!-- Settings (dropdown) -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings</a>
							<ul class="dropdown-menu">
								<li><a href="#">Change Password</a></li>
								<li><a href="#">Delete Account</a></li>
								<li><a href="#">FAQ's</a></li>
								<li><a href="#">Notification Settings</a></li>
							</ul>
						</li>

					<?php }elseif($parent == 'ads'){ ?>

						<!-- Ads -->
						<li><a href="index.php">Home</a></li>

					<?php }elseif($parent == 'developers'){ ?>

						<!-- Account -->
						<li><a href="index.php">Home</a></li>
						<li><a href="api_documentation.php">API Docs</a></li>
						<li><a href="#">Tutorials</a></li>

					<?php }elseif($parent == 'forum'){ ?>

						<!-- Forum Home -->
						<li><a href="index.php">Home</a></li>

						<!-- Topics (dropdown) -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Topics</a>
							<ul class="dropdown-menu">
								<li><a href="#">Created</a></li>
								<li><a href="#">Replied</a></li>
								<li><a href="#">Saved</a></li>
								<li class="divider"></li>
								<li><a href="#">Search</a></li>
							</ul>
						</li>

						<!-- Categories (dropdown) -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
							<ul class="dropdown-menu">
								<li><a href="#">Browse All</a></li>
								<li><a href="#">Create New Category</a></li>
							</ul>
						</li>

					<?php }elseif($parent == 'profile'){ ?>

						<!-- Profile -->
						<li><a href="index.php">Home</a></li>

					<?php }elseif($parent == 'shop'){ ?>

						<!-- Shop -->
						<li><a href="index.php">Home</a></li>

					<?php }elseif($parent == 'trade'){ ?>

						<!-- Trade -->
						<li><a href="index.php">Home</a></li>

					<?php }elseif($parent == 'videos'){ ?>

						<!-- Videos -->
						<li><a href="#">Business</a></li>
						<li><a href="#">Computer Science</a></li>
						<li><a href="#">Humanities</a></li>
						<li><a href="#">Math</a></li>
						<li><a href="#">Science</a></li>

						<!-- Categories (dropdown) -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other</a>
							<ul class="dropdown-menu">
								<li><a href="#">Beauty</a></li>
								<li><a href="#">Cooking</a></li>
								<li><a href="#">Social Sciences</a></li>
							</ul>
						</li>

					<?php }else{ ?>

						<li><a href="#"><?php echo($parent); ?></a></li>

					<?php } ?>

				</ul>

				<!-- Right buttons -->
				<div class="right clearfix">
					<ul class="nav navbar-nav pull-right right-navbar-nav">

						<!-- Notifications -->
						<li class="nav-icon-btn nav-icon-btn-success dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="label">2</span>
								<i class="nav-icon fa fa-bell"></i>
								<span class="small-screen-text">Notifications</span>
							</a>

							<script>
								init.push(function () {
									$('#main-navbar-notifications').slimScroll({height: 250});
								});
							</script>

							<!-- Notification drop down -->
							<div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
								<div class="notifications-list" id="main-navbar-notifications">

									<!-- Notification 1 -->
									<div class="notification">
										<div class="notification-title text-info">LIKE</div>
										<div class="notification-description">
											<strong>Tim Bogdanov</strong>
											liked your
											<strong>photo</strong>
										</div>
										<div class="notification-ago">3m ago</div>
										<div class="notification-icon fa fa-thumbs-up bg-info"></div>
									</div>

									<!-- Notification 2 -->
									<div class="notification">
										<div class="notification-title text-success">COMMENT</div>
										<div class="notification-description">
											<strong>Judith Pineda</strong>
											left a comment on your
											<strong>post</strong>
										</div>
										<div class="notification-ago">8m ago</div>
										<div class="notification-icon fa fa-comment bg-success"></div>
									</div>

								</div>
								<a href="#" class="notifications-link">VIEW ALL NOTIFICATIONS</a>
							</div>

						</li>

						<!-- Messages -->
						<li class="nav-icon-btn nav-icon-btn-info dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="label">2</span>
								<i class="nav-icon fa fa-envelope"></i>
								<span class="small-screen-text">Income messages</span>
							</a>

							<script>
								init.push(function () {
									$('#main-navbar-messages').slimScroll({height: 250});
								});
							</script>

							<!-- Messages drop down -->
							<div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
								<div class="messages-list" id="main-navbar-messages">

									<!-- Message 1 -->
									<div class="message">
										<img
											src="https://www.thenewboston.com/photos/users/27/resized/d1dc02a41f61faca2687f08a7c32ea4c.jpg"
											class="message-avatar">
										<a href="#" class="message-subject">Party at my house this weekend</a>

										<div class="message-description">
											from <a href="#">wheatley core</a> &nbsp;&nbsp;·&nbsp;&nbsp; 2h ago
										</div>
									</div>

									<!-- Message 2 -->
									<div class="message">
										<img
											src="https://www.thenewboston.com/photos/users/6500/resized/c59c54bf944963ae00b2fd52bcb6e409.JPG"
											class="message-avatar">
										<a href="#" class="message-subject">Help with homework assignment</a>

										<div class="message-description">
											from <a href="#">Melissa Ries</a> &nbsp;&nbsp;·&nbsp;&nbsp; 3h ago
										</div>
									</div>

								</div>
								<a href="#" class="messages-link">VIEW ALL MESSAGES</a>
							</div>
						</li>

						<!-- Right profile button -->
						<li class="dropdown">

							<!-- Button being displayed -->
							<?php if($parent == 'account'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Account</a>
							<?php }elseif($parent == 'ads'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-globe"></i>&nbsp;&nbsp;&nbsp;Ads</a>
							<?php }elseif($parent == 'developers'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-code"></i>&nbsp;&nbsp;&nbsp;Developers</a>
							<?php }elseif($parent == 'forum'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-comment"></i>&nbsp;&nbsp;&nbsp;Forum</a>
							<?php }elseif($parent == 'profile'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;&nbsp;Profile</a>
							<?php }elseif($parent == 'shop'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;Shop</a>
							<?php }elseif($parent == 'trade'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;Trade</a>
							<?php }elseif($parent == 'videos'){ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-youtube-play"></i>&nbsp;&nbsp;&nbsp;Videos</a>
							<?php }else{ ?>
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"><i
										class="dropdown-icon fa fa-globe"></i>&nbsp;&nbsp;&nbsp;<?php echo($parent); ?>
								</a>
							<?php } ?>

							<ul class="dropdown-menu">
								<li><a href="../account/index.php"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Account</a>
								</li>
								<li><a href="../ads/index.php"><i class="dropdown-icon fa fa-globe"></i>&nbsp;&nbsp;&nbsp;Ads</a>
								</li>
								<li><a href="../developers/index.php"><i class="dropdown-icon fa fa-code"></i>&nbsp;&nbsp;&nbsp;Developers</a>
								</li>
								<li><a href="../forum/index.php"><i class="dropdown-icon fa fa-comment"></i>&nbsp;&nbsp;&nbsp;Forum</a>
								</li>
								<li><a href="../profile/index.php"><i class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;&nbsp;Profile</a>
								</li>
								<li><a href="../shop/index.php"><i class="dropdown-icon fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;Shop</a>
								</li>
								<li><a href="../trade/index.php"><i class="dropdown-icon fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;Trade</a>
								</li>
								<li><a href="../videos/index.php"><i class="dropdown-icon fa fa-youtube-play"></i>&nbsp;&nbsp;&nbsp;Videos</a>
								</li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>

					</ul>
				</div>

			</div>
		</div>

	</div>

</div>