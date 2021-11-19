@extends('layout.main_admin')
@section('content')

		<div class="sa4d25">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="st_title"><i class="uil uil-apps"></i> Admin Dashboard</h2>
					</div>

					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Student</h5>
								<h2>{{ $student }}</h2>

							</div>
							<div class="card_dash_right">
								<img src="{{asset('sourcefile_home')}}/cursus/images/dashboard/graduation-cap.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Courses</h5>
								<h2>{{ $total_courses }}</h2>

							</div>
							<div class="card_dash_right">
								<img src="{{asset('sourcefile_home')}}/cursus/images/dashboard/online-course.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Teacher</h5>
								<h2>{{ $teacher }}</h2>

							</div>
							<div class="card_dash_right">
								<img src="{{asset('sourcefile_home')}}/cursus/images/dashboard/knowledge.svg" alt="">
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>



@endsection
