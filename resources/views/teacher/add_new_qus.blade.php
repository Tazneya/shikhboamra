@extends('layout.main')
@section('content')
<div class="sa4d25">
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <h2 class="st_title"><i class="uil uil-award"></i> ADD NEW </h2>
      </div>
   </div>
   <div class="course__form">
      <div class="view_info10">
         <div class="row">
            <div class="col-md-12">
               <div class="my_courses_tabs">
                  <div class="col-lg-7 col-md-6">
                     <div class="certi_form">
                        <div class="all_ques_lest">
                           <div class="ques_item">
                              <div class="ui form">
                                 <div class="grouped fields">
                                    <div class="field fltr-radio">
                                       <div class="ques_title">
                                          <h4>Ques 1 :-</h4>
                                          <input type="text" name="example1" tabindex="0" class="hidden">
                                       </div>
                                       <div class="ui">
                                          <label>
                                             <h4>Option1</h4>
                                          </label>
                                          <input type="text" name="example1" tabindex="0" class="hidden">
                                       </div>
                                       <div class="ui">
                                          <label>
                                             <h4>Option2</h4>
                                          </label>
                                          <input type="text" name="example1" tabindex="0" class="hidden">
                                       </div>
                                       <div class="ui">
                                          <label>
                                             <h4>Option3</h4>
                                          </label>
                                          <input type="text" name="example1" tabindex="0" class="hidden">
                                       </div>
                                       <div class="ques_title">
                                          <h4>CORRECT ANS</h4>
                                          <input type="text" name="example1" tabindex="0" class="hidden">
                                       </div>
                                       <div class="ques_title">
                                          <h4>TAG</h4>
                                          <input type="text" name="example1" tabindex="0" class="hidden">
                                       </div>
                                       <div>
                                          <a type="button" class="create_btn_dash course_details btn btn-danger" href="{{url('add_new_qus')}}" style="margin-top: 20px;">ADD</a>
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
      </div>
   </div>
</div>
</div>
@endsection