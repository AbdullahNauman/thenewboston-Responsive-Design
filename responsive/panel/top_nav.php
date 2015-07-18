<div id="main-navbar" class="navbar navbar-inverse" role="navigation">

	<!-- Left menu toggle button -->
	<button type="button" id="main-menu-toggle">
		<i class="navbar-icon fa fa-bars icon"></i>
	</button>

	<div class="navbar-inner">

		<!-- Logo and top menu toggle (for smaller screens) -->
		<div class="navbar-header">
			<a href="http://tnb-res.com/responsive/content/index.php" class="navbar-brand">
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

					<!-- Account (dropdown) -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
						<ul class="dropdown-menu">
							<li><a href="#">Basic Info</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Education</a></li>
							<li><a href="#">Employment</a></li>
							<li><a href="#">Links</a></li>
						</ul>
					</li>

					<!-- Forum -->
					<li><a href="#">Forum</a></li>

					<!-- Pages -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
						<ul class="dropdown-menu">
							<li><a href="#">Bitcoin</a></li>
							<li><a href="#">Funny Videos</a></li>
							<li><a href="#">Penguins</a></li>
						</ul>
					</li>

					<!-- Stream -->
					<li><a href="#">Stream</a></li>

					<!-- Video Tutorials -->
					<li><a href="#">Videos & Tutorials</a></li>

					<!-- Other -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other</a>
						<ul class="dropdown-menu">
							<li><a href="_marketplace.php">Ads</a></li>
							<li><a href="#">Developers</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Trade</a></li>
						</ul>
					</li>

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
							<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
								<img
									src="https://www.thenewboston.com/photos/users/2/resized/23471ba4417d650505928a0b1f1fd8b1.jpg">
								<span>Bucky Roberts</span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Change Password</a></li>
								<li><a href="#">Delete Account</a></li>
								<li><a href="#">FAQ's</a></li>
								<li><a href="#">Notification Settings</a></li>
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