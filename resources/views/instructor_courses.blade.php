@extends('layout.main')
@section('content')
<div class="sa4d25">
   <div class="container-fluid">			
      <div class="row">
         <div class="col-lg-12">	
            <h2 class="st_title"><i class="uil uil-award"></i> All Courses</h2>
         </div>					
      </div>				
      <div class="row">
         <div class="col-12">
            <div class="mt-10">
               <div class="card_dash_right1">
                  <a type="button" class="create_btn_dash course_details" href="{{url('create_new_course')}}">ADD NEW</a>
               </div>
               <div class="table-cerificate">
                  <div class="table-responsive">
                     <table class="table ucp-table" id="content-table">
                        <thead class="thead-s">
                           <tr>
                              <th class="text-center" scope="col">COURSE NO</th>
                              <th scope="col">COURSE NAME</th>
                              <th class="text-center" scope="col">IMAGE</th>
                              <th class="text-center" scope="col">CLASS</th>
                              <th class="text-center" scope="col">SUBJECT</th>
                              <th class="text-center" scope="col">CLASS DURATION</th>
                              <th class="text-center" scope="col">VIDEO</th>
                              <th class="text-center" scope="col">NOTE</th>
                              <th class="text-center" scope="col">EXAM</th>
                              <th class="text-center" scope="col">FORUM</th>
                              <th class="text-center" scope="col">REVIEW</th>
                              <th class="text-center" scope="col">ACTION</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="text-center">1</td>
                              <td class="cell-ta">WordPress Certificate</td>
                              <td class="text-center">15</td>
                              <td class="text-center">20</td>
                              <td class="text-center">6 April 2019</td>
                              <td class="text-center"><a href="../../html-imgs/certificate.jpg" target="_blank">View</a></td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('course_video')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('course_note')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('course_exam')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('create_new_course')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('create_new_course')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <select class="ui hj145  cntry152 prompt srch_explore">
                                    <option value=""><a href="#" title="Delete" class="gray-s">Edit</a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s">Delete</a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s">status</a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a></option>
                                 </select>
                                 
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">1</td>
                              <td class="cell-ta">WordPress Certificate</td>
                              <td class="text-center">15</td>
                              <td class="text-center">20</td>
                              <td class="text-center">6 April 2019</td>
                              <td class="text-center"><a href="../../html-imgs/certificate.jpg" target="_blank">View</a></td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('course_video')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('course_note')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('course_exam')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('create_new_course')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="{{url('create_new_course')}}">SHOW</a>
                              </td>
                              <td class="text-center">
                                 <select class="ui hj145  cntry152 prompt srch_explore">
                                    <option value=""><a href="#" title="Delete" class="gray-s">Edit</a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s">Delete</a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s">status</a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a></option>
                                    <option value=""><a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a></option>
                                 </select>
                                 
                              </td>
                           </tr>
                           
                          
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection