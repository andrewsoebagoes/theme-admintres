<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="nav-wrap">
				<div class="mobile-only-brand pull-left">
					<div class="nav-header pull-left">
						<div class="logo-wrap">
							<a href="index.html">
								<!-- <img class="brand-img" src="<?= asset('theme/assets/img/logo.png')?>" alt="brand"/> -->
                                <img class="brand-img" src="<?= env('APP_SIDEBAR_LOGO', asset('theme/assets/img/avatars/1.png"')) ?>" alt="logo" width="50">
								<span class="brand-text"><img  src="<?= env('APP_SIDEBAR_LOGO', asset('theme/assets/img/avatars/1.png"')) ?>" alt="brand" width="150"></span>
							</a>
						</div>
					</div>	
					<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
					<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
					<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>
					<form id="search_form" role="search" class="top-nav-search collapse pull-left">
						<div class="input-group">
							<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
							<span class="input-group-btn">
							<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<div id="mobile_only_nav" class="mobile-only-nav pull-right">
					<ul class="nav navbar-right top-nav pull-right">
						
				
						<li class="dropdown auth-drp">
							<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?= asset('theme/assets/img/avatars/1.png')?>" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								<li>
									<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
								</li>
								<li>
									<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
								</li>
								<li class="divider"></li>
								<li class="sub-menu show-on-hover">
									<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
									<ul class="dropdown-menu open-left-side">
										<li>
											<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
										</li>
									</ul>	
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?=routeTo('auth/logout')?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>	
				</div>
			</nav>