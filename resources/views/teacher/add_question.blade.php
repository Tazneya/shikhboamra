@extends('layout.main')
@section('content')
<div class="sa4d25">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
           <h2 class="st_title"><i class="uil uil-award"></i> ADD NEW </h2>
        </div>
     </div>
<div class="row">
<div class="col-md-12">
<div class="my_courses_tabs">


<div class="tab-content" id="pills-discount-tab">
    <table class="table ucp-table">
        <div class="col-lg-12 col-md-12">


            <div class="card_dash_right1"style="margin:5px;padding-button:20px;">
            <a type="button" class="create_btn_dash" href="{{url('teacher/add_new_qus')}}">Add</a>

            </div>

        </div>
        <thead class="thead-s">
            <tr>
                <th class="text-center" scope="col">Serial No</th>
                <th class="text-center" scope="col">Question</th>
                <th class="cell-ta" scope="col"> Option1</th>
                <th class="cell-ta" scope="col">option2</th>
                <th class="cell-ta" scope="col">option3</th>
                <th class="cell-ta" scope="col">option4</th>
                <th class="cell-ta" scope="col">Correct ANS</th>
                <th class="text-center" scope="col">TAG</th>

                <th class="text-center" scope="col">Actions</th>
            </tr>
        </thead>
         <tbody>
            <tr>
                <td class="text-center">001</td>
                <td class="cell-ta">what is your Name?</td>
                <td class="cell-ta">tonni</td>
                <td class="cell-ta">alifa</td>
                <td class="cell-ta">alifa2</td>
                <td class="cell-ta">alifa3</td>
                <td class="cell-ta">3</td>
                <td class="cell-ta">alifa3</td>



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
@endsection
