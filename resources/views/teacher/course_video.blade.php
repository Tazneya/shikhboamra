@extends('layout.main')
@section('content')
<div class="sa4d25">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="st_title"><i class="uil uil-award"></i> All Courses</h2>
         </div>
      </div>

      @if(Session::has('success'))
      <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-success" >

          {{Session::get('success')}}

          </div>
      @endif
      <div class="row">
         <div class="col-12">
            <div class="mt-10">
               <div class="card_dash_right1">
                  <a type="button" class="create_btn_dash course_details btn btn-danger" href="{{ route('add_course_video_ui',['id'=>$course_id])}}">ADD NEW</a>
               </div>
               <div class="table-cerificate">
                  <div class="table-responsive">
                     <table class="table ucp-table" id="content-table">
                        <thead class="thead-s">
                           <tr>
                              <th class="text-center" scope="col">SERIAL NO</th>
                              <th scope="col">VIDEO TITLE</th>
                              <th class="text-center" scope="col">DURATION</th>


                              <th class="text-center" scope="col">ACTION</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                           <tr>

                              <td class="text-center">{{ $data->id}}</td>
                              <td class="cell-ta">{{ $data->content_name}}</td>
                              <td class="text-center">{{ $data->duration }}</td>


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
