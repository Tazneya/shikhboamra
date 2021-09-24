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
                              <form action="{{ route('add_new_question') }}" method="POST">    
                                 @csrf
                                 <input type="hidden" value="{{ $exam_id }}" name="exam_id">                             
                                 <div class="ui form">
                                    <div class="grouped fields">
                                       <div class="field fltr-radio">
                                          <div class="ques_title">
                                             <h4>Question</h4>
                                             <input type="text" name="question" tabindex="0" class="hidden">
                                          </div>
                                          <div class="ui">
                                             <label>
                                                <h4>Option1</h4>
                                             </label>
                                             <input type="text" name="option1" tabindex="0" class="hidden">
                                          </div>
                                          <div class="ui">
                                             <label>
                                                <h4>Option2</h4>
                                             </label>
                                             <input type="text" name="option2" tabindex="0" class="hidden">
                                          </div>
                                          <div class="ui">
                                             <label>
                                                <h4>Option3</h4>
                                             </label>
                                             <input type="text" name="option3" tabindex="0" class="hidden">
                                          </div>
                                          <div class="ui">
                                             <label>
                                                <h4>Option4</h4>
                                             </label>
                                             <input type="text" name="option4" tabindex="0" class="hidden">
                                          </div>
                                          <div class="ques_title">
                                             <h4>CORRECT ANS</h4>
                                             <input type="number" name="correct_ans" tabindex="0" class="hidden">
                                          </div>
                                          <div class="ques_title">
                                             <h4>TAG</h4>
                                             <input type="text" name="tag" tabindex="0" class="hidden">
                                          </div>
                                          <div class="mt-2">
                                             <input type="submit" class="btn btn-primary" value="ADD">
                                          </div>
                                          @if (session()->has('msg'))
                                             <div class="alert alert-success mt-3" role="alert">
                                                {{session('msg')}}
                                             </div>
                                          @endif
                                       </div>
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
</div>
</div>
@endsection