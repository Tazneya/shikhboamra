@extends('layout.main')
@section('content')
<div class ="container">
<div class="table-responsive mt-30">
    <table class="table ucp-table">
        <thead class="thead-s">
            <tr>
                <th class="text-center" scope="col">Student Id.</th>
             
                <th class="text-center" scope="col">Exam Name</th>
                <th class="text-center" scope="col">Exam Date</th>
                
                <th class="text-center" scope="col">Total Marks</th>
                <th class="text-center" scope="col">Obtaining Marks</th>
                <th class="text-center" scope="col">Details Of Que</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">IT-001</td>
                <td class="text-center">chemistry:periodic table</td>
                <td class="text-center">06 April 2020 | 08:31</td>
                <td class="text-center">15</td>
                <td class="text-center">15</td>
                <td class="text-center">
                    <a href="{{url('details_que_ans')}}" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
                </td>
               
                
            </tr>
            
            
          
        </tbody>
    </table>
</div>
</div>
@endsection