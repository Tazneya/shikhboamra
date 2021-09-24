<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/sign_up_steps.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 02:38:13 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Cursus - Sign Up Next Step</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{asset('sourcefile_home')}}/cursus/images/fav.png">

		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/unicons-2.0.1/css/unicons.css" rel='stylesheet'>
		<link href="{{asset('sourcefile_home')}}/cursus/css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/css/style.css" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/css/responsive.css" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/css/night-mode.css" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="{{asset('sourcefile_home')}}/cursus/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('sourcefile_home')}}/cursus/vendor/semantic/semantic.min.css">

	</head>

<body>
	<!-- Signup Start -->
	<div class="sign_in_up_bg">
		<div class="container">
			<div class="row justify-content-lg-center justify-content-md-center">
				<div class="col-lg-12">
					<div class="main_logo25" id="logo">
						<a href="index-2.html"><img src="{{asset('sourcefile_home')}}/cursus/images/logo.svg" alt=""></a>
						<a href="index-2.html"><img class="logo-inverse" src="{{asset('sourcefile_home')}}/cursus/images/ct_logo.svg" alt=""></a>
					</div>
				</div>

				<div class="col-lg-6 col-md-8">
					<div class="sign_form">

						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="instructor-signup-tab" role="tabpanel" aria-labelledby="instructor-tab">

								<form action="{{ route('login') }}" method="POST">
									@csrf
									<div class="ui search focus">
										<div class="ui left icon input swdh11 swdh19">
											<input class="prompt srch_explore" type="text" name="mobile_number" value="" id="username" required="" maxlength="64" placeholder="User Name">
										</div>
									</div>

									<div class="ui search focus mt-15">
										<div class="ui left icon input swdh11 swdh19">
											<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">
										</div>
									</div>

									<button class="login-btn" type="submit">Instructor Login Now</button>
									{{-- <button class="login-btn" type="submit">Next</button> --}}
								</form>
								@if (session()->has('msg'))
									<div class="alert alert-danger mt-2" role="alert">
										{{ session('msg') }}
									</div>
								@endif
								{{-- <form>

									<button class="login-btn" type="submit">Instructor Sign Up Now</button>
								</form> --}}
							</div>
							<div class="tab-pane fade" id="student-signup-tab" role="tabpanel" aria-labelledby="student-tab">

								<form action="{{ route('login') }}" method="POST">
									@csrf
									<div class="ui search focus">
										<div class="ui left icon input swdh11 swdh19">
											<input class="prompt srch_explore" type="text" name="user_name" value="" id="username" required="" maxlength="64" placeholder="User Name">
										</div>
									</div>

									<div class="ui search focus mt-15">
										<div class="ui left icon input swdh11 swdh19">
											<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">
										</div>
									</div>

									<button class="login-btn" type="submit">Student Login Now</button>
									{{-- <button class="login-btn" type="submit">Next</button> --}}
								</form>

								@if (session()->has('msg'))
									<div class="alert alert-danger mt-2" role="alert">
										{{ session('msg') }}
									</div>
								@endif
							</div>
						</div>
						<p class="mb-0 mt-30">Already have an account? <a href="sign_in.html">Log In</a></p>
					</div>

					{{-- <div class="sign_footer"><img src="{{asset('sourcefile_home')}}/cursus/images/sign_logo.png" alt="">© 2020 <strong>Cursus</strong>. All Rights Reserved.</div> --}}
				</div>
			</div>
		</div>
	</div>
	<!-- Signup End -->

	<script src="{{asset('sourcefile_home')}}/cursus/js/jquery-3.3.1.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/semantic/semantic.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/js/custom.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/js/night-mode.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/sign_up_steps.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 02:38:13 GMT -->
</html>



















