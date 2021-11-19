@extends('layout.main_admin')
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
            <h2 class="st_title"><i class="uil uil-award"></i> All Student</h2>
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
                               <th class="text-center" scope="col">Sl No</th>
                              <th class="text-center" scope="col">Teacher Name</th>
                              <th class="text-center" scope="col">Mobile Number</th>
                              <th class="text-center" scope="col">Teacher Organization</th>
                              <th class="text-center" scope="col">Teacher Qualification</th>

                           </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            ?>
                            @foreach($teachers as $data)
                           <tr>
                              <td class="text-center">{{ $i++ }}</td>
                              <td class="text-center">{{ $data->teacher->teacher_name }}</td>
                              <td class="text-center">{{ $data->mobile_number }}</td>
                              <td class="text-center">{{ $data->teacher->teacher_organization }}</td>

                              <td class="text-center">{{ $data->teacher->teacher_qualification  }}</td>




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
