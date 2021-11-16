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
         <div class="col-lg-12">
            <h2 class="st_title"><i class="uil uil-award"></i> All Courses</h2>
         </div>
      </div>

      <div class="course__form">
         <div class="view_info10">
             <form action="{{route('course_update')}}" method="POST"   enctype="multipart/form-data">
                {{-- for image enctype="multipart/form-data" --}}
                @csrf
      <div class="row">
         <div class="col-lg-12">
            <div class="col-lg-12 col-md-12">
               <div class="ui search focus mt-30 lbel25">
                  <h4>Course Title</h4>
                  <div class="ui left icon input swdh19">
                     <input class="prompt srch_explore" type="text" placeholder="Insert your course content title." name="course_name" data-purpose="edit-course-title" maxlength="60" id="Content[title]" value ="{{$data->course_name}}">
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-5">
               <div class="ui search focus mt-30 lbel25">
                  <h4>Class</h4>
                  <div class="ui left icon input swdh19">
                     <input class="prompt srch_explore" type="text" placeholder="Insert your class." name="class" data-purpose="edit-course-title" maxlength="60" id="Content[title]" value="{{$data->class}}">
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-5">
               <div class="ui search focus mt-30 lbel25">
                  <h4>Subject</h4>
                  <div class="ui left icon input swdh19">
                     <input class="prompt srch_explore" type="text" placeholder="Insert your Subject." name="subject" data-purpose="edit-course-title" maxlength="60" id="Content[title]" value="{{$data->subject}}">
                  </div>
               </div>
            </div>

            <div class="col-lg-5 col-md-5">
                <div class="ui search focus mt-30 lbel25">
                   <h4>Topic</h4>
                   <div class="ui left icon input swdh19">
                      <input class="prompt srch_explore" type="text" placeholder="Insert your course topic." name="topic" data-purpose="edit-course-title" maxlength="60" id="Content[title]" value="{{$data->course_description}}">
                   </div>
                </div>
             </div>

            <div class="col-lg-5 col-md-5">
                <div class="ui search focus mt-30 lbel25">
                   <h4>Course Type</h4>
                   <div class="ui left icon input swdh19">
                      <select  class="ui hj145 dropdown cntry152 prompt srch_explore" name="course_type">
                          <option value="free">Free</option>
                          <option value="paid">Paid</option>
                      </select>
                   </div>
                </div>
             </div>

             <div class="col-lg-5 col-md-5">
                <div class="ui search focus mt-30 lbel25">
                   <h4>Course Fee</h4>
                   <div class="ui left icon input swdh19">
                      <input class="prompt srch_explore" type="text" placeholder="If Applicable" name="course_fee" data-purpose="edit-course-title" maxlength="60" id="Content[title]" value="{{$data->	course_fee}}">
                   </div>
                </div>
             </div>

            <div class="col-lg-12 col-md-12">
               <div class="course_des_textarea mt-30 lbel25">
                  <label>Description*</label>
                  <div class="course_des_bg">
                     <div class="textarea_dt">
                        <div class="ui form swdh339">
                           <div class="field">
                              <textarea rows="5" name="course_description" id="id_part_description" placeholder="Insert your course part description" >{{$data->	course_description}}</textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="view_all_dt">

               <div class="view_img_right">
                  <h4>Cover Image</h4>
                  <p>Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
                  <div class="upload__input">
                     <div class="input-group">
                        <div class="custom-file">
                            <label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
                           <input type="file" name="course_image" class="custom-file-input" id="inputGroupFile04">

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="allvperf">
               <button type="submit" class="create_btn_dash course_details">UPDATE</button>

            </div>
        </form>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
@endsection

