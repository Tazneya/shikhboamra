@extends('layout.main')
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
            <h2 class="st_title"><i class="uil uil-award"></i> Exam List</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="mt-10">

               <div class="table-cerificate">
                  <div class="table-responsive">
                     <table class="table ucp-table" id="content-table">
                        <thead class="thead-s">
                           <tr>
                              <th class="text-center" scope="col">Sl NO</th>
                              <th scope="col">Exam Name</th>
                              <th scope="col">Total Marks</th>
                              <th scope="col">Obtaining Marks</th>
                              <th scope="col">Answer Sheet</th>


                           </tr>
                        </thead>
                        <tbody>

                            @foreach($datas as $data)
                           <tr>
                              <td class="text-center">{{ $data->sl_no }}</td>
                              <td class="cell-ta">{{ $data->exam->exam_name }}</td>
                              <td class="cell-ta">{{ $data->exam->total_marks }}</td>
                              <td class="cell-ta">{{ $data->obtaining_marks }}</td>

                              <td class="cell-ta">
                                <a type="button" class="btn btn-warning" href="../answer_sheet/{{ $data->exam->id }}/{{ $data->st_id }}">Show</a>
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
