@extends('layout.main')
@section('content')
<div class ="container">
<div class="table-responsive mt-30">
    <table class="table ucp-table">
        <thead class="thead-s">
            <tr>
                <th class="text-center" scope="col">Student Id.</th>
             
                <th class="text-center" scope="col">video Image</th>
                <th class="text-center" scope="col">Video Title</th>
                
                
                <th class="text-center" scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">IT-001</td>
               
                <td class="text-center">06 April 2020 | 08:31</td>
                <td class="text-center">15</td>
         
               
                <td class="text-center">
                    <a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
                    <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                </td>
            </tr>
            
            
          
        </tbody>
    </table>
</div>
</div>
@endsection