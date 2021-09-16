@extends('layout.main')
@section('content')
<div class="sa4d25">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="my_courses_tabs">


<!-- <div class="tab-content" id="pills-tabContent"> -->
   <div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
     
           
            <div class="course__form">
                <div class="view_info10">
                    <div class="row">
                        <div class="col-lg-12">	
                            <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>Exam Title</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your video title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
                                     
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>Duration</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your video title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
                                      
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>Pre Request Video</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your video title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
                                      
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="ui search focus mt-30 lbel25">
                                   <label>full Marks</label>
                                   <div class="ui left icon input swdh19">
                                      <input class="prompt srch_explore" type="text" placeholder="Insert your video title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
                                     
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
   </div>
 </div> 
</div> 
</div> 
</div> 
</div> 
@endsection