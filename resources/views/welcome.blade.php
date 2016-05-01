<!DOCTYPE html>
<html>
    <head>
        <title>OnRoute Taxi| Dashboard</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
	<link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/home.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css')}}">
    <script src="{{URL::asset('/js/home.js')}}"></script>
    </head>
    <body>
	
       <section>
	<header>
		<nav class="rad-navigation">
			<div class="rad-logo-container">
				<a href="#" class="rad-logo"><i class=" fa fa-recycle"></i> OnRoute Taxi</a>
				<a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
			</div>
			<a href="#" class="rad-logo-hidden">OnRoute Taxi</a>
			<div class="rad-top-nav-container">
				<a href="" class="brand-icon"><i class="fa fa-recycle"></i></a>
				<ul class="pull-right links">
					<li class="rad-dropdown no-color">
						<a class="rad-menu-item" href="#"><img class="rad-list-img sm-img" src="img.jpeg" alt="me" /></a>
						<ul class="rad-dropmenu-item sm-menu">
							<li class="rad-notification-item">
								<a class="rad-notification-content lg-text" href="#"><i class="fa fa-edit"></i> My Profile</a>
							</li>
							<li class="rad-notification-item">
								<a class="rad-notification-content lg-text" href="#"><i class="fa fa-power-off"></i> Sign out</a>
							</li>
						</ul>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-cog"></i></a>
						<ul class="rad-dropmenu-item rad-settings">
							<li class="rad-dropmenu-header"><a href="#">Settings</a></li>
							<li class="rad-notification-item text-left">
								<div class="pull-left"><i class="fa fa-link"></i></div>
								<div class="pull-right">
									<label class="rad-chk-pin pull-right">
										<input type="checkbox" /><span></span></label>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Change to Flat Theme</div>
									<div class="sm-text">Flattify it</div>
								</div>
							</li>
							<li id="rad-color-opts" class="rad-notification-item text-left hide">
								<div class="pull-left"><i class="fa fa-puzzle-piece"></i></div>
								<div class="pull-right">
									<div class="rad-color-swatch">
										<label class="colors rad-bg-crimson rad-option-selected">
											<input type="radio" checked name="color" value="crimson" />
										</label>
										<label class="colors rad-bg-teal">
											<input type="radio" name="color" value="teal" />
										</label>
										<label class="colors rad-bg-purple">
											<input type="radio" name="color" value="purple">
										</label>
										<label class="colors rad-bg-orange">
											<input type="radio" name="color" value="orange" />
										</label>
										<label class="colors rad-bg-twitter">
											<input type="radio" name="color" value="twitter" />
										</label>
									</div>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Choose a color</div>
									<div class="sm-text">Make it colorful</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="pull-right links">
					<li>
						<a class="rad-menu-item" href="#"><i class="fa fa-comment-o"><span class="rad-menu-badge rad-bg-success">0</span></i></a>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-envelope-o"><span class="rad-menu-badge rad-bg-primary">23</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-html5 fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">REVERT</div>
										<div class="sm-text">GoT s05/div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">REVERT</div>
										<div class="sm-text">HIMYM 03</div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">apoorv13dayal15@gmail.com</div>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
						</ul>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Your Alerts</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-html5 fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">REVERT</div>
										<div class="sm-text">HIMYM s03</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 sec ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">:UPDATE</div>
										<div class="sm-text">user request</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 49 mins ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">apoorv13dayal15@gmail.com</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 days ago</em>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">See all alerts</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
</section>
<aside>
	<nav class="rad-sidebar">
		<ul>
			<li>
				<a href="#" class="inbox">
					<i class="fa fa-dashboard"><span class="icon-bg rad-bg-success"></span></i>
					<span class="rad-sidebar-item">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-bar-chart-o">
						<span class="icon-bg rad-bg-danger"></span>
					</i>
					<span class="rad-sidebar-item">Subscription status</span>
				</a>
			</li>
			<li><a href="#" class="snooz"><i class="fa fa-line-chart"><span class="icon-bg rad-bg-primary"></span></i><span class="rad-sidebar-item">Request trends</span></a></li>
			<li><a href="#" class="done"><i class="fa fa-area-chart"><span class="icon-bg rad-bg-warning"></span></i><span class="rad-sidebar-item">Heat maps</span></a></li>
			<li>
				<a href="#">
					<i class="fa fa-wrench"><span class="icon-bg rad-bg-violet"></span></i>
					<span class="rad-sidebar-item">Settings</span>
				</a>
			</li>
		</ul>
	</nav>
</aside>
<main>
	<section>
		<div class="rad-body-wrapper">
			<div class="container-fluid">
				<header class="rad-page-title">
					<span>Dashboard</span>
					<small class="md-txt">Welcome Apoorv, <a href="https://www.google.com/maps/place/Anushakti+Nagar,+Mumbai,+Maharashtra,+India/@19.0357035,72.9199975,15z/data=!3m1!4b1!4m2!3m1!1s0x3be7c5dde4382b9f:0x4254d8c3182cc4bb" target="_blank"><i class="fa fa-map-marker rad-txt-danger"></i> Mumbai</a></small>					</header>
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-success">
							<i class="fa fa-location-arrow"></i>
							<span class="heading">Chembur</span>
							<span class="value"><span>41</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-primary">
							<i class="fa fa-location-arrow"></i>
							<span class="heading">Powai</span>
							<span class="value"><span>23</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-danger">
							<i class="fa fa-location-arrow"></i>
							<span class="heading">Andheri</span>
							<span class="value"><span>49</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box">
							<i class="fa fa-location-arrow"></i>
							<span class="heading">Bandra</span>
							<span class="value"><span>109</span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Map<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body rad-map-container">
								<div id="world-map" class="rad-map"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Area Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="areaChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Area Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="areaChart2" class="rad-chart"></div>
							</div>

						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Activity<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div class="rad-activity-body">
								<div class="rad-list-group group">
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-danger pull-left"><i class="fa fa-phone"></i></div>
										<div class="rad-list-content"><strong>updated repository</strong>
											<div class="md-text">Added GameOfThrones s06e01</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-primary pull-left"><i class="fa fa-refresh"></i></div>
										<div class="rad-list-content"><strong>Created playlist</strong>
											<div class="md-text">146 songs added!</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-success pull-left"><i class="fa fa-check"></i></div>
										<div class="rad-list-content"><strong>Added new admin</strong>
											<div class="md-text">Apoorv13 added to admins</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-violet pull-left"><i class="fa fa-envelope"></i></div>
										<div class="rad-list-content"><strong>New request</strong>
											<div class="md-text">Apoorv has asked for FRIENDS s01</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-success pull-left"><i class="fa fa-pencil"></i></div>
										<div class="rad-list-content"><strong>New task</strong>
											<div class="md-text">Created new task</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-8 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Donut Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="donutChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Line Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Bar Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="barChart3" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Bar Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="barChart2" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Bar Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="barChart" class="rad-chart"></div>
							</div>
						</div>
					</div>						<div class="panel-footer">
								<div class="rad-timeline-footer">
									<p>&copy;Copyrights 2016 OnRoute Taxi | Developed by <a href="www.apoorvdayal.crevado.com"> Apoorv Dayal </a> </p>
									<p class="pull-right"><i class="fa fa-comments-o"></i></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>    </body>
</html>
