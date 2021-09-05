@extends('layout.main')
@section('content')
<div class="sa4d25">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="my_courses_tabs">
<ul class="nav nav-pills my_crse_nav" id="pills-tab" role="tablist">
   <li class="nav-item">
      <a class="nav-link active" id="pills-my-courses-tab" data-toggle="pill" href="#pills-my-courses" role="tab" aria-controls="pills-my-courses" aria-selected="true"><i class="uil uil-book-alt"></i>Course Information</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="pills-my-purchases-tab" data-toggle="pill" href="#pills-my-purchases" role="tab" aria-controls="pills-my-purchases" aria-selected="false"><i class="uil uil-download-alt"></i>Videos</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="pills-upcoming-courses-tab" data-toggle="pill" href="#pills-upcoming-courses" role="tab" aria-controls="pills-upcoming-courses" aria-selected="false"><i class="uil uil-upload-alt"></i>Course Content</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="pills-discount-tab" data-toggle="pill" href="#pills-discount" role="tab" aria-controls="pills-discount" aria-selected="false"><i class="uil uil-tag-alt"></i>Exam</a>
   </li>
   <!-- <li class="nav-item">
      <a class="nav-link" id="pills-promotions-tab" data-toggle="pill" href="#pills-promotions" role="tab" aria-controls="pills-promotions" aria-selected="false"><i class="uil uil-megaphone"></i>Promotions</a>
      </li> -->
</ul>

<!-- <div class="tab-content" id="pills-tabContent"> -->
   <div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
      <!-- <div class="table-responsive mt-30"> -->
         <!-- <table class="table ucp-table">
            <thead class="thead-s">
            	<tr>
            		<th class="text-center" scope="col">Item No.</th>
            		<th>Title</th>
            		<th class="text-center" scope="col">Publish Date</th>
            		<th class="text-center" scope="col">Sales</th>
            		<th class="text-center" scope="col">Parts</th>
            		<th class="text-center" scope="col">Category</th>
            		<th class="text-center" scope="col">Status</th>
            		<th class="text-center" scope="col">Action</th>
            	</tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="text-center">IT-001</td>
            		<td>Course Title Here</td>
            		<td class="text-center">06 April 2020 | 08:31</td>
            		<td class="text-center">15</td>
            		<td class="text-center">5</td>
            		<td class="text-center"><a href="#">Web Development</a></td>
            		<td class="text-center"><b class="course_active">Active</b></td>
            		<td class="text-center">
            			<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
            			<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
            		</td>
            	</tr>
            	<tr>
            		<td class="text-center">IT-002</td>
            		<td>Course Title Here</td>
            		<td class="text-center">05 April 2020 | 05:15</td>
            		<td class="text-center">30</td>
            		<td class="text-center">3</td>
            		<td class="text-center"><a href="#">Graphic Design</a></td>
            		<td class="text-center"><b class="course_active">Active</b></td>
            		<td class="text-center">
            			<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
            			<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
            		</td>
            	</tr>
            	<tr>
            		<td class="text-center">IT-003</td>
            		<td>Course Title</td>
            		<td class="text-center">03 April 2020 | 01:30</td>
            		<td class="text-center">14</td>
            		<td class="text-center">5</td>
            		<td class="text-center"><a href="#">Bootstrap</a></td>
            		<td class="text-center"><b class="course_active">Active</b></td>
            		<td class="text-center">
            			<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
            			<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
            		</td>
            	</tr>
            	<tr>
            		<td class="text-center">IT-004</td>
            		<td>Course Title Here</td>
            		<td class="text-center">02 April 2020 | 05:15</td>
            		<td class="text-center">110</td>
            		<td class="text-center">9</td>
            		<td class="text-center"><a href="#">Game Development</a></td>
            		<td class="text-center"><b class="course_active">Active</b></td>
            		<td class="text-center">
            			<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
            			<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
            		</td>
            	</tr>
            	<tr>
            		<td class="text-center">IT-002</td>
            		<td>Course Title Here</td>
            		<td class="text-center">28 March 2020 | 05:15</td>
            		<td class="text-center">185</td>
            		<td class="text-center">10</td>
            		<td class="text-center"><a href="#">C++</a></td>
            		<td class="text-center"><b class="course_active">Active</b></td>
            		<td class="text-center">
            			<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
            			<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
            		</td>
            	</tr>
            </tbody>
            </table> -->
           
           <div class="course__form">
            <div class="general_info10">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="ui search focus mt-30 lbel25">
                        <label>Course Title*</label>
                        <div class="ui left icon input swdh19">
                           <input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
                           <div class="badge_num">60</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="course_des_textarea mt-30 lbel25">
                        <label>Course Description*</label>
                        <div class="course_des_bg">
                           <ul class="course_des_ttle">
                              <li><a href="#"><i class="uil uil-bold"></i></a></li>
                              <li><a href="#"><i class="uil uil-italic"></i></a></li>
                              <li><a href="#"><i class="uil uil-list-ul"></i></a></li>
                              <li><a href="#"><i class="uil uil-left-to-right-text-direction"></i></a></li>
                              <li><a href="#"><i class="uil uil-right-to-left-text-direction"></i></a></li>
                              <li><a href="#"><i class="uil uil-list-ui-alt"></i></a></li>
                              <li><a href="#"><i class="uil uil-link"></i></a></li>
                              <li><a href="#"><i class="uil uil-text-size"></i></a></li>
                              <li><a href="#"><i class="uil uil-text"></i></a></li>
                           </ul>
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
                  <div class="col-lg-4 col-md-12">
                     <div class="mt-30 lbel25">
                        <label>Class*</label>
                     </div>
                     <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                        <option value="">Select Class</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                        <option value="4">7</option>
                        <option value="5">8</option>
                        <option value="6">9</option>
                        <option value="7">10</option>
                        <option value="8">11</option>
                        <option value="9">12</option>
                     </select>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="mt-30 lbel25">
                        <label>Subject*</label>
                     </div>
                     <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                        <option value="">Select Category</option>
                        <option value="1">Development</option>
                        <option value="2">Business</option>
                        <option value="3">Finance & Accounting</option>
                        <option value="4">IT & Software</option>
                        <option value="5">Office Productivity</option>
                        <option value="6">Personal Development</option>
                        <option value="7">Design</option>
                        <option value="8">Marketing</option>
                        <option value="9">Lifestyle</option>
                        <option value="10">Photography</option>
                        <option value="11">Health & Fitness</option>
                        <option value="12">Music</option>
                        <option value="13">Teaching & Academics</option>
                     </select>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="mt-30 lbel25">
                        <label>Course thumbnail*</label>
                     </div>
                     <img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600">
                  </div>
                  {{-- <div class="card_dash_right1"style="float:right;margin-top:20px;"> --}}
                     <button class="create_btn_dash" onclick="window.location.href = 'create_new_course.html';">Update</button>
                     
                  {{-- <div class="card_dash1">
                       
                     <div class="card_dash_right1">
                     <button class="create_btn_dash" onclick="window.location.href = 'create_new_course.html';">Update</button>
                     </div>
                  </div> --}}
                  {{-- <div class="col-md-12">
                     
                     
  
                    <div class="card_dash1">
                       
                       <div class="card_dash_right1">
                       <button class="create_btn_dash" onclick="window.location.href = 'create_new_course.html';">Update</button>
                       </div>
                    </div>
                 
                  </div> --}}
               </div>
              
                 
            </div>
         <!-- </div>  -->
      </div>
              
   </div>
<!-- </div> -->
@endsection