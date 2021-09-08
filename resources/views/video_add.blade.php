@extends('layout.main')
@section('content')
<div class="sa4d25">
<div class="container-fluid">
    @if (count($errors)>0)
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-danger" >
        <ul>
            @foreach($errors->all() as $error)
                <li style="display: list-item;list-style-type:disc">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
<div class="col-md-12">
<div class="my_courses_tabs">
    <div class="row">
        <div class="col-lg-12">
           <h2 class="st_title"><i class="uil uil-award"></i> Add Video</h2>
        </div>
     </div>


            <div class="course__form">
                <div class="view_info10">
                    <div class="row">
                        <form action="{{ route('add_content_video') }}" method="POST"   enctype="multipart/form-data">
                            @csrf
                        <div class="col-lg-12">
                            <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>Video Title*</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your video title." name="content_name" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">

                                   </div>
                                </div>
                             </div>


                            <div class="view_all_dt">
                                <div class="view_img_left">
                                    <div class="view__img">
                                        <img src="{{asset('sourcefile_home')}}/cursus/images/courses/add_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="view_img_right">
                                    <h4>Video</h4>
                                    <p>Upload your video content here. It must meet our course image quality standards to be accepted..</p>
                                    <div class="upload__input">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="content_video" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>Video Duration</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="content_duration" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">
                                    <input type="hidden" name="course_id" value="{{ $course_id }}">
                                   </div>
                                </div>
                             </div>

                        </div>
                    </div>
                </div>
            </div>

                <div class="col-md-12" style="margin-top:-5px">

                   <div class="row">

						<div class="card_dash1">

							<div class="card_dash_right1">

							<button class="create_btn_dash" onclick="window.location.href = 'create_new_course.html';">Update</button>
							</div>
						</div>
					</div>
                </div>
            </form>
   </div>
 </div>
</div>
</div>
</div>

@endsection
