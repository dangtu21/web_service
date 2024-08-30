<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png">

  <!-- Plugins -->
  <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">

  <!-- Loader -->
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/js/pace.min.js') }}"></script>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	
	<title>Dashcube - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Dashcube</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class="bx bx-arrow-back"></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="index.html"><i class="bx bx-radio-circle"></i>Analytics</a>
						</li>
						<li> <a href="index2.html"><i class="bx bx-radio-circle"></i>eCommerce</a>
						</li>
						<li> <a href="index3.html"><i class="bx bx-radio-circle"></i>Sales</a>
						</li>
						<li> <a href="index4.html"><i class="bx bx-radio-circle"></i>Alternate</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Application</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class="bx bx-radio-circle"></i>Email</a>
						</li>
						<li> <a href="app-chat-box.html"><i class="bx bx-radio-circle"></i>Chat Box</a>
						</li>
						<li> <a href="app-file-manager.html"><i class="bx bx-radio-circle"></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.html"><i class="bx bx-radio-circle"></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.html"><i class="bx bx-radio-circle"></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.html"><i class="bx bx-radio-circle"></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.html"><i class="bx bx-radio-circle"></i>Calendar</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.html">
						<div class="parent-icon"><i class="bx bx-cookie"></i>
						</div>
						<div class="menu-title">Widgets</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-cart"></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.html"><i class="bx bx-radio-circle"></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class="bx bx-radio-circle"></i>Product Details</a>
						</li>
						<li> <a href="ecommerce-add-new-products.html"><i class="bx bx-radio-circle"></i>Add New Products</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class="bx bx-radio-circle"></i>Orders</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-bookmark-heart"></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class="bx bx-radio-circle"></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class="bx bx-radio-circle"></i>Accordions</a>
						</li>
						<li> <a href="component-badges.html"><i class="bx bx-radio-circle"></i>Badges</a>
						</li>
						<li> <a href="component-buttons.html"><i class="bx bx-radio-circle"></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class="bx bx-radio-circle"></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class="bx bx-radio-circle"></i>Carousels</a>
						</li>
						<li> <a href="component-list-groups.html"><i class="bx bx-radio-circle"></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class="bx bx-radio-circle"></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class="bx bx-radio-circle"></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class="bx bx-radio-circle"></i>Navs &amp; Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class="bx bx-radio-circle"></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class="bx bx-radio-circle"></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class="bx bx-radio-circle"></i>Popovers &amp; Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class="bx bx-radio-circle"></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class="bx bx-radio-circle"></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class="bx bx-radio-circle"></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class="bx bx-radio-circle"></i>Avatrs &amp; Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class="bx bx-radio-circle"></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class="bx bx-radio-circle"></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class="bx bx-radio-circle"></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class="bx bx-radio-circle"></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class="bx bx-radio-circle"></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class="bx bx-radio-circle"></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				
				<li class="menu-label">Forms &amp; Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-message-square-edit"></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class="bx bx-radio-circle"></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class="bx bx-radio-circle"></i>Input Groups</a>
						</li>
						
						<li> <a href="form-layouts.html"><i class="bx bx-radio-circle"></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class="bx bx-radio-circle"></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class="bx bx-radio-circle"></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class="bx bx-radio-circle"></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class="bx bx-radio-circle"></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class="bx bx-radio-circle"></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class="bx bx-radio-circle"></i>Select2</a>
						</li>
						<li> <a href="form-repeater.html"><i class="bx bx-radio-circle"></i>Form Repeater</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class="bx bx-radio-circle"></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class="bx bx-radio-circle"></i>Data Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li><a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Basic</a>
							<ul>
								<li><a href="auth-basic-signin.html"><i class="bx bx-radio-circle"></i>Sign In</a></li>
								<li><a href="auth-basic-signup.html"><i class="bx bx-radio-circle"></i>Sign Up</a></li>
								<li><a href="auth-basic-forgot-password.html"><i class="bx bx-radio-circle"></i>Forgot Password</a></li>
								<li><a href="auth-basic-reset-password.html"><i class="bx bx-radio-circle"></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Cover</a>
							<ul>
								<li><a href="auth-cover-signin.html"><i class="bx bx-radio-circle"></i>Sign In</a></li>
								<li><a href="auth-cover-signup.html"><i class="bx bx-radio-circle"></i>Sign Up</a></li>
								<li><a href="auth-cover-forgot-password.html"><i class="bx bx-radio-circle"></i>Forgot Password</a></li>
								<li><a href="auth-cover-reset-password.html"><i class="bx bx-radio-circle"></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>With Header Footer</a>
							<ul>
								<li><a href="auth-header-footer-signin.html"><i class="bx bx-radio-circle"></i>Sign In</a></li>
								<li><a href="auth-header-footer-signup.html"><i class="bx bx-radio-circle"></i>Sign Up</a></li>
								<li><a href="auth-header-footer-forgot-password.html"><i class="bx bx-radio-circle"></i>Forgot Password</a></li>
								<li><a href="auth-header-footer-reset-password.html"><i class="bx bx-radio-circle"></i>Reset Password</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.html">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html"><i class="bx bx-radio-circle"></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html"><i class="bx bx-radio-circle"></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html"><i class="bx bx-radio-circle"></i>Coming Soon</a>
						</li>
						<li> <a href="error-blank-page.html"><i class="bx bx-radio-circle"></i>Blank Page</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
						<div class="parent-icon"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts &amp; Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class="bx bx-radio-circle"></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class="bx bx-radio-circle"></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class="bx bx-radio-circle"></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class="bx bx-radio-circle"></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class="bx bx-radio-circle"></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class="bx bx-radio-circle"></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class="bx bx-menu"></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-x"></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class="bx bx-search"></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{{ asset('assets/images/county/02.png')}}" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/01.png')}}" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/02.png')}}" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/03.png')}}" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/04.png')}}" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/05.png')}}" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/06.png')}}" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/07.png')}}" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/08.png')}}" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class="bx bx-grid-alt"></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/slack.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/behance.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="{{ asset('assets/images/app/google-drive.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/outlook.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/github.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/stack-overflow.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/figma.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/twitter.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/google-calendar.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/spotify.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/google-photos.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/pinterest.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/linkedin.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/dribble.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/youtube.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/google.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/vue.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Vue</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('assets/images/app/safari.png')}}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class="bx bx-bell"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-1.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-2.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="{{ asset('assets/images/app/outlook.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
                      <div class="user-online">
                      <?php
                        
                        echo "<img src=\"" . url('assets/images/avatars/avatar_4.png') . "\" class=\"msg-avatar\" alt=\"user avatar\">";
                        ?>
                       <img src='{{ asset("/assets/images/avatars/avatar-4.png") }}' class="msg-avatar" alt="user avatar">
                        
                        
                        ?>
                      </div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class="bx bx-check-square"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="{{ asset('assets/images/app/github.png')}}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-8.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<div class="text-center msg-footer">
									   <a href="javascript:;" class="btn btn-light w-100">View All Notifications</a>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class="bx bx-shopping-bag"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/11.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/02.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/03.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/04.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/05.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/06.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/07.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/08.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/09.png')}}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<div class="text-center msg-footer">
										<div class="d-flex align-items-center justify-content-between mb-3">
											<h5 class="mb-0">Total</h5>
											<h5 class="mb-0 ms-auto">$489.00</h5>
										</div>
										<a href="javascript:;" class="btn btn-light w-100">Checkout</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset('assets/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
					<div class="col">
					 <div class="card rounded-4">
					   <div class="card-body">
						 <div class="d-flex align-items-center">
						   <div class="">
							 <p class="mb-1">Total Orders</p>
							 <h4 class="mb-0">5.8K</h4>
							 <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>22.5% from last week</span></p>
						   </div>
						   <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
							<i class="bx bx-cart"></i>
						   </div>
						 </div>
						
					   </div>
					 </div>
					</div>
					<div class="col">
					 <div class="card rounded-4">
					   <div class="card-body">
						 <div class="d-flex align-items-center">
						   <div class="">
							 <p class="mb-1">Total Income</p>
							 <h4 class="mb-0">$9,786</h4>
							 <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>13.2% from last week</span></p>
						   </div>
						   <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
							 <i class="bx bx-credit-card"></i>
						   </div>
						 </div>
					   </div>
					 </div>
					</div>
					<div class="col">
					 <div class="card rounded-4">
					   <div class="card-body">
						 <div class="d-flex align-items-center">
						   <div class="">
							 <p class="mb-1">Total Views</p>
							 <h4 class="mb-0">875</h4>
							 <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>12.3% from last week</span></p>
						   </div>
						   <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
							<i class="bx bx-happy-heart-eyes"></i>
						   </div>
						 </div>
					   </div>
					 </div>
					</div>
					<div class="col">
					 <div class="card rounded-4">
					   <div class="card-body">
						 <div class="d-flex align-items-center">
						   <div class="">
							 <p class="mb-1">New Clients</p>
							 <h4 class="mb-0">9853</h4>
							 <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>32.7% from last week</span></p>
						   </div>
						   <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
							<i class="bx bx-group"></i>
						   </div>
						 </div>
					   </div>
					 </div>
					</div>
   
				</div><!--end row-->
   
				
				<div class="row">
				   <div class="col-12 col-lg-8 col-xl-8 d-flex">
					  <div class="card w-100 rounded-4">
						<div class="card-body">
						 <div class="d-flex align-items-center mb-3">
						   <h6 class="mb-0">Revenue History</h6>
						   <div class="fs-5 ms-auto dropdown">
							  <div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="#">Action</a></li>
								  <li><a class="dropdown-item" href="#">Another action</a></li>
								  <li><hr class="dropdown-divider"></li>
								  <li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</div>
						  </div>
						 
						   <div id="chart1"></div>
						</div>
					  </div>
				   </div>
				   <div class="col-12 col-lg-4 col-xl-4 d-flex">
					 <div class="card w-100 rounded-4">
					   <div class="card-body">
						<div class="d-flex align-items-center mb-3">
						  <h6 class="mb-0">Task Overview</h6>
						  <div class="fs-5 ms-auto dropdown">
							 <div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
							   <ul class="dropdown-menu">
								 <li><a class="dropdown-item" href="#">Action</a></li>
								 <li><a class="dropdown-item" href="#">Another action</a></li>
								 <li><hr class="dropdown-divider"></li>
								 <li><a class="dropdown-item" href="#">Something else here</a></li>
							   </ul>
						   </div>
						 </div>
						  <div id="chart2"></div>
					   </div>
					   <ul class="list-group list-group-flush mb-0 shadow-none">
						 <li class="list-group-item bg-transparent border-top"><i class="bi bi-circle-fill me-2 font-weight-bold text-primary"></i> Complete <span class="float-end">120</span></li>
						 <li class="list-group-item bg-transparent"><i class="bi bi-circle-fill me-2 font-weight-bold text-orange"></i> In Progress <span class="float-end">110</span></li>
						 <li class="list-group-item bg-transparent"><i class="bi bi-circle-fill me-2 font-weight-bold text-info"></i> Started <span class="float-end">70</span></li>
					   </ul>
					 </div>
				  </div>
   
				</div><!--end row-->
   
				<div class="row row-cols-1 row-cols-lg-4 radial-charts g-4">
				  <div class="col">
					 <div class="card rounded-4">
					   <div class="card-body">
						 <div class="text-center">
						   <p class="mb-1">Orders</p>
						   <h4 class="">9,254</h4>
						 </div>
						  <div class="">
							 <div id="chart3"></div>
						  </div>
						 <div class="text-center">
						   <p class="mb-1">Completed</p>
						   <h4 class="">5632</h4>
						 </div>
					   </div>
					 </div>
				  </div>
				  <div class="col">
				   <div class="card rounded-4">
					 <div class="card-body">
					   <div class="text-center">
						 <p class="mb-1">Unique Visitors</p>
						 <h4 class="">5,2684</h4>
					   </div>
						<div class="">
						   <div id="chart4"></div>
						</div>
					   <div class="text-center">
						 <p class="mb-1">Increased since Last Week</p>
						 <h4 class="">25%</h4>
					   </div>
					 </div>
				   </div>
				</div>
				<div class="col">
				 <div class="card rounded-4">
				   <div class="card-body">
					 <div class="text-center">
					   <p class="mb-1">Impressions</p>
					   <h4 class="">7,362</h4>
					 </div>
					  <div class="">
						 <div id="chart5"></div>
					  </div>
					 <div class="text-center">
					   <p class="mb-1">Increased since Last Week</p>
					   <h4 class="">45%</h4>
					 </div>
				   </div>
				 </div>
			  </div>
			  <div class="col">
			   <div class="card rounded-4">
				 <div class="card-body">
				   <div class="text-center">
					 <p class="mb-1">Followers</p>
					 <h4 class="">4278K</h4>
				   </div>
					<div class="">
					   <div id="chart6"></div>
					</div>
				   <div class="text-center">
					 <p class="mb-1">Increased since Last Week</p>
					 <h4 class="">55%</h4>
				   </div>
				 </div>
			   </div>
			 </div>
   
		   </div><!--end row-->
   
   
		   <div class="row">
			  <div class="col-12 col-lg-6 col-xl-6 d-flex">
				<div class="card rounded-4 w-100">
				   <div class="card-body">
					 <div class="d-flex align-items-center mb-3">
					   <h6 class="mb-0">Sales By Countries</h6>
					   <div class="fs-5 ms-auto dropdown">
						  <div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
							<ul class="dropdown-menu">
							  <li><a class="dropdown-item" href="#">Action</a></li>
							  <li><a class="dropdown-item" href="#">Another action</a></li>
							  <li><hr class="dropdown-divider"></li>
							  <li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					  </div>
					  <div id="world-map" style="height: 242px;"></div>
				   </div>
				   <div class="table-responsive">
					 <table class="table align-items-center">
					 <tbody>
					   <tr>
					  <td><i class="flag-icon flag-icon-gb"></i></td>
					  <td><i class="bi bi-circle-fill me-2 text-primary"></i> Russia</td>
					  <td><p class="mb-0">Sales: <span class="fw-bold">28,000</span></p></td>
					  <td>40%</td>
					  </tr>
					   <tr>
					  <td><i class="flag-icon flag-icon-au"></i></td>
					  <td><i class="bi bi-circle-fill me-2 text-warning"></i> Australia</td>
					  <td><p class="mb-0">Sales: <span class="fw-bold">58,000</span></p></td>
					  <td>60%</td>
					  </tr>
					   <tr>
					  <td><i class="flag-icon flag-icon-us"></i></td>
					  <td><i class="bi bi-circle-fill me-2 text-success"></i> United States</td>
					  <td><p class="mb-0">Sales: <span class="fw-bold">72,000</span></p></td>
					  <td>30%</td>
					  </tr>
					   <tr>
					  <td><i class="flag-icon flag-icon-in"></i></td>
					  <td><i class="bi bi-circle-fill me-2 text-secondary"></i> India</td>
					  <td><p class="mb-0">Sales: <span class="fw-bold">68,000</span></p></td>
					  <td>55%</td>
					  </tr>
					 </tbody>
					 </table>
				   </div>
				</div>
			  </div>
			  <div class="col-12 col-lg-6 col-xl-6 d-flex">
			   <div class="card rounded-4 w-100">
				  <div class="card-body">
					<div class="d-flex align-items-center mb-3">
					  <h6 class="mb-0">Top Selling Products</h6>
					  <div class="fs-5 ms-auto dropdown">
						 <div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
						   <ul class="dropdown-menu">
							 <li><a class="dropdown-item" href="#">Action</a></li>
							 <li><a class="dropdown-item" href="#">Another action</a></li>
							 <li><hr class="dropdown-divider"></li>
							 <li><a class="dropdown-item" href="#">Something else here</a></li>
						   </ul>
					   </div>
					 </div>
					 <div class="">
					   <div class="d-flex align-items-start gap-3">
						 <div class="product-box border">
						   <img src="{{ asset('assets/images/products/05.png')}}" alt="product img">
						 </div>
						 <div class="flex-grow-1">
						  <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
						   <div class="progress-wrapper">
							
							 <div class="progress" style="height: 4px;">
							   <div class="progress-bar" role="progressbar" style="width: 42%"></div>
							 </div>
						   </div>
						 </div>
					   </div>
					  <hr>
					  <div class="d-flex align-items-start gap-3">
						 <div class="product-box border">
						   <img src="{{ asset('assets/images/products/07.png')}}" alt="product img">
						 </div>
						 <div class="flex-grow-1">
						   <div class="progress-wrapper">
							 <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
							 <div class="progress" style="height: 4px;">
							   <div class="progress-bar" role="progressbar" style="width: 42%"></div>
							 </div>
						   </div>
						 </div>
					   </div>
					  <hr>
					   <div class="d-flex align-items-start gap-3">
						 <div class="product-box border">
						   <img src="{{ asset('assets/images/products/09.png')}}" alt="product img">
						 </div>
						 <div class="flex-grow-1">
						   <div class="progress-wrapper">
							 <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
							 <div class="progress" style="height: 4px;">
							   <div class="progress-bar" role="progressbar" style="width: 42%"></div>
							 </div>
						   </div>
						 </div>
					   </div>
					  <hr>
					 <div class="d-flex align-items-start gap-3">
						 <div class="product-box border">
						   <img src="{{ asset('assets/images/products/02.png')}}" alt="product img">
						 </div>
						 <div class="flex-grow-1">
						   <div class="progress-wrapper">
							 <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
							 <div class="progress" style="height: 4px;">
							   <div class="progress-bar" role="progressbar" style="width: 42%"></div>
							 </div>
						   </div>
						 </div>
					   </div>
					  <hr>
					  <div class="d-flex align-items-start gap-3">
					   <div class="product-box border">
						 <img src="{{ asset('assets/images/products/04.png')}}" alt="product img">
					   </div>
					   <div class="flex-grow-1">
						 <div class="progress-wrapper">
						   <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
						   <div class="progress" style="height: 4px;">
							 <div class="progress-bar" role="progressbar" style="width: 42%"></div>
						   </div>
						 </div>
					   </div>
					 </div>
					  </div>
				  </div>
			   </div>
			 </div>
   
		   </div><!--end row-->
   
		   <div class="row row-cols-1 row-cols-lg-3">
			 <div class="col">
			   <div class="card rounded-4">
				 <div class="card-body">
					<div class="d-flex align-items-center justify-content-between mb-3">
					 <div class="">
					   <h4 class="mb-0">24.5K</h4>
					   <p class="mb-0">Facebook Followers</p>
					</div>
					<div class="fs-2 text-white">
					 <i class="bx bxl-facebook-circle"></i>
				   </div>
					</div>
					<div id="chart7"></div>
				 </div>
			   </div>
			 </div>
			 <div class="col">
			   <div class="card rounded-4">
				 <div class="card-body">
					<div class="d-flex align-items-center justify-content-between mb-3">
					 <div class="">
					   <h4 class="mb-0">37.8K</h4>
					   <p class="mb-0">Twitter Followers</p>
					</div>
					<div class="fs-2 text-white">
					 <i class="bx bxl-twitter"></i>
				   </div>
					</div>
					<div id="chart8"></div>
				 </div>
			   </div>
			 </div>
			 <div class="col">
			   <div class="card rounded-4">
				 <div class="card-body">
					<div class="d-flex align-items-center justify-content-between mb-3">
					 <div class="">
					   <h4 class="mb-0">56.9K</h4>
					   <p class="mb-0">Youtube Subscribers</p>
					</div>
					<div class="fs-2 text-white">
					 <i class="bx bxl-youtube"></i>
				   </div>
					</div>
					<div id="chart9"></div>
				 </div>
			   </div>
			 </div>
   
		   </div><!--end row-->
   
   
		   <div class="row">
			 <div class="col-12 col-lg-6 col-xl-6 d-flex">
			   <div class="card rounded-4 w-100">
				 <div class="card-header bg-transparent py-3 border-bottom">
				   <div class="d-flex align-items-center">
					 <h6 class="mb-0">Customer Reviews</h6>
					 <div class="fs-5 ms-auto dropdown">
						<div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
						  <ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						  </ul>
					  </div>
					</div>
				 </div>
				  <div class="card-body">
					<div class="review-list">
					 <div class="d-flex align-items-start">
					   <div class="review-user">
						 <img src="{{ asset('assets/images/avatars/avatar-1.png')}}" width="65" height="65" class="rounded-circle" alt="">
					   </div>
					   <div class="review-content ms-3">
						 <div class="rates cursor-pointer fs-6">
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						 </div>
						 <div class="d-flex align-items-center mb-2">
						   <h6 class="mb-0">James Caviness</h6>
						   <p class="mb-0 ms-auto">February 16, 2021</p>
						 </div>
						 <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					   </div>
					 </div>
					 <hr>
					 <div class="d-flex align-items-start">
					   <div class="review-user">
						 <img src="{{ asset('assets/images/avatars/avatar-2.png')}}" width="65" height="65" class="rounded-circle" alt="">
					   </div>
					   <div class="review-content ms-3">
						 <div class="rates cursor-pointer fs-6">
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						 </div>
						 <div class="d-flex align-items-center mb-2">
						   <h6 class="mb-0">David Buckley</h6>
						   <p class="mb-0 ms-auto">February 22, 2021</p>
						 </div>
						 <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					   </div>
					 </div>
					 <hr>
					 <div class="d-flex align-items-start">
					   <div class="review-user">
						 <img src="{{ asset('assets/images/avatars/avatar-3.png')}}" width="65" height="65" class="rounded-circle" alt="">
					   </div>
					   <div class="review-content ms-3">
						 <div class="rates cursor-pointer fs-6">
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						 </div>
						 <div class="d-flex align-items-center mb-2">
						   <h6 class="mb-0">Peter Costanzo</h6>
						   <p class="mb-0 ms-auto">February 26, 2021</p>
						 </div>
						 <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					   </div>
					 </div>
					 <hr>
					 <div class="d-flex align-items-start">
					   <div class="review-user">
						 <img src="{{ asset('assets/images/avatars/avatar-4.png')}}" width="65" height="65" class="rounded-circle" alt="">
					   </div>
					   <div class="review-content ms-3">
						 <div class="rates cursor-pointer fs-6">
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						 </div>
						 <div class="d-flex align-items-center mb-2">
						   <h6 class="mb-0">Peter Costanzo</h6>
						   <p class="mb-0 ms-auto">February 26, 2021</p>
						 </div>
						 <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					   </div>
					 </div>
					 <hr>
					 <div class="d-flex align-items-start">
					   <div class="review-user">
						 <img src="{{ asset('assets/images/avatars/avatar-5.png')}}" width="65" height="65" class="rounded-circle" alt="">
					   </div>
					   <div class="review-content ms-3">
						 <div class="rates cursor-pointer fs-6">
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						 </div>
						 <div class="d-flex align-items-center mb-2">
						   <h6 class="mb-0">Peter Costanzo</h6>
						   <p class="mb-0 ms-auto">February 26, 2021</p>
						 </div>
						 <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					   </div>
					 </div>
					 <hr>
					 <div class="d-flex align-items-start">
					   <div class="review-user">
						 <img src="{{ asset('assets/images/avatars/avatar-6.png')}}" width="65" height="65" class="rounded-circle" alt="">
					   </div>
					   <div class="review-content ms-3">
						 <div class="rates cursor-pointer fs-6">
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						 </div>
						 <div class="d-flex align-items-center mb-2">
						   <h6 class="mb-0">Peter Costanzo</h6>
						   <p class="mb-0 ms-auto">February 26, 2021</p>
						 </div>
						 <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					   </div>
					 </div>
					 <hr>
					 <div class="d-flex align-items-start">
					   <div class="review-user">
						 <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="65" height="65" class="rounded-circle" alt="">
					   </div>
					   <div class="review-content ms-3">
						 <div class="rates cursor-pointer fs-6">
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						   <i class="bx bxs-star text-warning"></i>
						 </div>
						 <div class="d-flex align-items-center mb-2">
						   <h6 class="mb-0">Peter Costanzo</h6>
						   <p class="mb-0 ms-auto">February 26, 2021</p>
						 </div>
						 <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
					   </div>
					 </div>
   
				   </div>
   
				  </div>
			   </div>
			 </div>
			 <div class="col-12 col-lg-6 col-xl-6 d-flex">
			   <div class="card rounded-4 w-100">
				 <div class="card-header bg-transparent py-3 border-bottom">
				   <div class="d-flex align-items-center">
					 <h6 class="mb-0">Chat Box</h6>
					 <div class="fs-5 ms-auto dropdown">
						<div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
						  <ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						  </ul>
					  </div>
					</div>
				 </div>
				  <div class="card-body p-0">
					 <div class="chat-talk d-flex flex-column gap-4 p-3">
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3">
							Hello , Codervent
						 </div>
						</div>
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
							Hello , Codervent
						 </div>
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						</div>
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3">
							Hello , Codervent
						 </div>
						</div>
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
							Hello , Codervent
						 </div>
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						</div>
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3">
							Hello , Codervent
						 </div>
						</div>
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
							Hello , Codervent
						 </div>
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						</div>
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3">
							Hello , Codervent
						 </div>
						</div>
						<div class="d-flex align-items-end gap-3">
						 <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
							Hello , Codervent
						 </div>
						 <div class="chat-user">
						   <img src="{{ asset('assets/images/avatars/avatar-7.png')}}" width="55" height="55" class="rounded-circle" alt="">
						 </div>
						</div>
					 </div>
					 <div class="card-footer bg-transparent">
					   <div class="input-group">
						 <input type="text" class="form-control" placeholder="Type your message">
						 <button class="btn btn-light" type="button"><i class="bx bx-send"></i></button>
					   </div>
					 </div>
   
				  </div>
			   </div>
			 </div>
   
		   </div><!--end row-->
					 
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class="bx bx-cog bx-spin"></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/index2.js') }}"></script>

  <script>
      new PerfectScrollbar(".review-list");
      new PerfectScrollbar(".chat-talk");
  </script>

  <!-- App JS -->
  <script src="{{ asset('assets/js/app.js') }}"></script>


</body></html>