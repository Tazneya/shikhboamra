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
                    <div class="row">
                        <div class="col-lg-12">	
                            <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>Note Title*</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your video title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
                                      
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
                                               <textarea rows="5" name="description" id="id_course_description" placeholder="Insert your course description"></textarea>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="view_all_dt">	
                               
                                <div class="view_img_right">	
                                    <h4>PDF</h4>
                                    
                                    <div class="upload__input">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dash_right1" style="margin-top:20px;">
                              <a type="button" class="create_btn_dash course_details" href="{{url('create_new_course')}}">UPDATE</a>
                              
                              </div>
                        </div>
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