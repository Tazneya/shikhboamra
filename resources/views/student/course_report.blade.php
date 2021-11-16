@extends('layout.student_main')
@section('content')
<div class="sa4d25">
   <div class="container-fluid">
    @if(Session::has('success'))
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-success" >

        {{Session::get('success')}}

        </div>
    @endif
      <div class="row">
         <div class="col-lg-12">
            <h2 class="st_title"><i class="uil uil-award"></i> All Courses</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="mt-10">
               <div class="card_dash_right1">
                  <a type="button" class="create_btn_dash course_details" href="{{url('teacher/create_new_course')}}">ADD NEW</a>
               </div>
               <div class="table-cerificate">
                  <div class="table-responsive">
                     <table class="table ucp-table" id="content-table">
                        <thead class="thead-s">
                           <tr>
                              <th class="text-center" scope="col">COURSE NO</th>
                              <th scope="col">COURSE NAME</th>
                              <th class="text-center" scope="col">IMAGE</th>
                             
                              <th class="text-center" scope="col">Exam Report</th>
                           </tr>
                        </thead>
                        <tbody>

                            @foreach($datas as $data)
                           <tr>
                              <td class="text-center">{{ $data->sl_no }}</td>
                              <td class="cell-ta">{{ $data->course->course_name }}</td>
                              <td class="text-center"><img width="100px"src="{{ asset($data->course->course_image)}}"></td>
                             

                              <td class="text-center">
                                 <a type="button" class="btn btn-warning" href="course_report/exam_details/{{ $data->course->id }}">Show</a>
                              </td>




                           </tr>
                           @endforeach



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
