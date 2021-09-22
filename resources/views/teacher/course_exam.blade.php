@extends('layout.main')
@section('content')
<div class="sa4d25">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="st_title"><i class="uil uil-award"></i> All EXAM</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="mt-10">
               <div class="card_dash_right1">
                  <a type="button" class="create_btn_dash course_details btn btn-danger" href="{{url('teacher/add_new_exam')}}">ADD NEW</a>
               </div>
               <div class="table-cerificate">
                  <div class="table-responsive">
                     <table class="table ucp-table" id="content-table">
                        <thead class="thead-s">
                           <tr>
                              <th class="text-center" scope="col">SERIAL NO</th>
                              <th scope="col">EXAM TITLE</th>
                              <th class="text-center" scope="col">DURATION</th>
                              <th class="text-center" scope="col">PRE-REQUISITION</th>
                              <th class="text-center" scope="col">TOTAL MARKS</th>
                              <th class="text-center" scope="col">ORDER</th>
                              <th class="text-center" scope="col">QUESTION</th>

                              <th class="text-center" scope="col">ACTION</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="text-center">1</td>
                              <td class="cell-ta">WordPress Certificate</td>
                              <td class="text-center">15</td>
                              <td class="text-center">20</td>
                              <td class="text-center">6 </td>
                              <td class="text-center">6 </td>
                              <td class="text-center">
                                <a type="button" class="btn btn-warning" href="{{url('teacher/add_question')}}">ADD QUE</a>
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
