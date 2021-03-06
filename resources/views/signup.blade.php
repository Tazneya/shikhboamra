<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/sign_up_steps.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 02:38:13 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>ShikhboAmra- LogIn  Step</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{asset('sourcefile_home')}}/cursus/images//fav.png">

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

    <style>
        label{
            float: left;
        }
    </style>

<body>
	<!-- Signup Start -->
	<div class="sign_in_up_bg">
		<div class="container">

			<div class="row justify-content-lg-center justify-content-md-center">

				<div class="col-lg-12">
					<div class="main_logo25" id="logo">
						<a href="index-2.html"><img src="{{asset('sourcefile_home')}}/cursus/images//logo.svg" alt=""></a>
						<a href="index-2.html"><img class="logo-inverse" src="{{asset('sourcefile_home')}}/cursus/images//ct_logo.svg" alt=""></a>
					</div>
				</div>

				<div class="col-lg-6 col-md-8">
					<div class="sign_form">
                        @if (count($errors)>0)
            <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-danger" >
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="display: list-item;list-style-type:disc">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
						<div class="main-tabs">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a href="#instructor-signup-tab" id="instructor-tab" class="nav-link active" data-toggle="tab">Instructor Sign Up</a>
								</li>
								<li class="nav-item">
									<a href="#student-signup-tab" id="student-tab" class="nav-link" data-toggle="tab">Student Sign Up</a>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="instructor-signup-tab" role="tabpanel" aria-labelledby="instructor-tab">

								<form action="{{ route('signup') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">First Name</label>
                                        <input type="text" class="form-control" id="first_name" placeholder="first Name" name="first_name">
                                      </div>
									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                                      </div>
									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Educational Qualification</label>
                                        <input type="text" class="form-control" id="educational" placeholder="Lasst Name" name="teacher_qualification">
                                      </div>
									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Phone</label>
                                        <input type="tel"class="form-control" id="phone"  placeholder="Phone number" name="mobile_number">
                                      </div>

									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Password</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Password" name="password">
                                      </div>
									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Confirmation Password</label>
                                        <input type="password" class="form-control" id="" placeholder="confirmation Password" name="password_confirmation">
                                        <input type="hidden" value="Teacher" name="role">
                                      </div>


                                      <button class="login-btn" type="submit">Instructor Sign Up Now</button>

								</form>
							</div>
							<div class="tab-pane fade" id="student-signup-tab" role="tabpanel" aria-labelledby="student-tab">

							<form action="{{ route('signup') }}" method="POST" >
                                @csrf
								<div class="form-group">
                                        <label for="exampleFormControlInput1">First Name</label>
                                        <input type="text" class="form-control" id="first_name" placeholder="first Name" name="first_name">
                                      </div>
									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">School</label>
                                        <input type="text" class="form-control" id="class" placeholder="Class" name="school">
                                      </div>
									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Class</label>
                                        <input type="text" class="form-control" id="class" placeholder="Class" name="class">
                                      </div>

									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Phone</label>
                                        <input type="tel"class="form-control" id="phone"  placeholder="Phone number" name="mobile_number">
                                      </div>

									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Password</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Password" name="password">
                                      </div>
									  <div class="form-group">
                                        <label for="exampleFormControlInput1">Confirmation Password</label>
                                        <input type="password" class="form-control" id="" placeholder="confirmation Password" name="password_confirmation">
                                        <input type="hidden" value="Student" name="role">
                                      </div>

									<button class="login-btn" type="submit">Student Sign Up Now</button>
								</form>
							</div>
						</div>
						<p class="mb-0 mt-30">Already have an account? <a href="sign_in.html">Log In</a></p>
					</div>
					<div class="sign_footer"><img src="{{asset('sourcefile_home')}}/cursus/images/logo.svg" alt="">?? 2020 <strong>Shikhboamra</strong>. All Rights Reserved.</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Signup End -->

	<script src="{{asset('sourcefile_home')}}/cursus/js/jquery-3.3.1.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/vendor/semantic/semantic.min.js"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/js/custom.js?{{time()}}"></script>
	<script src="{{asset('sourcefile_home')}}/cursus/js/night-mode.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/sign_up_steps.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 02:38:13 GMT -->
</html>
