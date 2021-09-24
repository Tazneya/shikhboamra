
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 02:37:51 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Shikhboamra</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{asset('sourcefile_home')}}/cursus/images/fav.png">

		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/unicons-2.0.1/css/unicons.css?{{ time() }}" rel='stylesheet'>
		<link href="{{asset('sourcefile_home')}}/cursus/css/vertical-responsive-menu1.min.css?{{ time() }}" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/css/instructor-dashboard.css?{{ time() }}" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/css/instructor-responsive.css?{{ time() }}" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/css/night-mode.css?{{ time() }}" rel="stylesheet">
        <link href="{{asset('sourcefile_home')}}/cursus/css/style.css?{{ time() }}" rel="stylesheet">
		<!-- Vendor Stylesheets -->
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/fontawesome-free/css/all.min.css?{{ time() }}" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/OwlCarousel/assets/owl.carousel.css?{{ time() }}" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/OwlCarousel/assets/owl.theme.default.min.css?{{ time() }}" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/bootstrap/css/bootstrap.min.css?{{ time() }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('sourcefile_home')}}/cursus/vendor/semantic/semantic.min.css?{{ time() }}">

	</head>

<body>
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
		  <i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="main_logo" id="logo">
			<a href="index-2.html"><img src="{{asset('sourcefile_home')}}/cursus/images/logo.svg" alt=""></a>
			<a href="index-2.html"><img class="logo-inverse" src="{{asset('sourcefile_home')}}/cursus/images/ct_logo.svg" alt=""></a>
		</div>

		<div class="search120">
			<div class="ui search">
			  <div class="ui left icon input swdh10">
				<input class="prompt srch10" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
				<i class='uil uil-search-alt icon icon1'></i>
			  </div>
			</div>
		</div>
		<div class="header_right">
			<ul>
				<li>

				</li>
				<li class="ui dropdown">
					<a href="#" class="opts_account" title="Account">
						<img src="{{asset('sourcefile_home')}}/cursus/images/hd_dp.jpg" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="{{asset('sourcefile_home')}}/cursus/images/hd_dp.jpg" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6>Joginder Singh</h6>
										<div class="mef78" title="Verify">
											<i class='uil uil-check-circle'></i>
										</div>
									</div>
									<span>gambol943@gmail.com</span>
								</div>
							</div>
							<a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
						</div>
						<div class="night_mode_switch__btn">
							<a href="#" id="night-mode" class="btn-night-mode">
								<i class="uil uil-moon"></i> Night mode
								<span class="btn-night-mode-switch">
									<span class="uk-switch-button"></span>
								</span>
							</a>
						</div>
						<a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>
						<a href="membership.html" class="item channel_item">Paid Memberships</a>
						<a href="setting.html" class="item channel_item">Setting</a>
						<a href="help.html" class="item channel_item">Help</a>
						<a href="feedback.html" class="item channel_item">Send Feedback</a>
						<a href="{{ route('logout') }}" class="item channel_item">Sign Out</a>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	@include('layout.student_sidebar');
	<div class="wrapper">
	@yield('content')

</div>

	<script src="{{asset('sourcefile_home')}}/cursus/js/vertical-responsive-menu.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/js/jquery-3.3.1.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/semantic/semantic.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/js/custom1.js?{{ time() }}"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/js/night-mode.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('student.jquery_url')

    @yield('page-js')

</body>


</html>
