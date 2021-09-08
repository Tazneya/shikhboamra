@extends('layout.main')
@section('content')
<div class="sa4d25">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="my_courses_tabs">
   <div class="row">
      <div class="col-lg-12">
         <h2 class="st_title"><i class="uil uil-award"></i> Add NOTE</h2>
      </div>
   </div>


   <div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">


            <div class="course__form">
                <div class="view_info10">
                    <form action="{{ route('add_content_note') }}" method="POST"   enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>Note Title*</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your video title." name="content_name" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">
                                    <input name="course_id" type="hidden" value="{{ $course_id }}">
                                   </div>
                                </div>
                             </div>

                             <div class="view_all_dt">

                                <div class="view_img_right">
                                    <h4>PDF/PPT/DOC</h4>

                                    <div class="upload__input">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name = "content_note" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dash_right1" style="margin-top:20px;">
                              <button type="submit" class="create_btn_dash course_details" >UPDATE</button>

                              </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>


   </div>
 </div>
</div>
</div>
</div>
</div>
@endsection
