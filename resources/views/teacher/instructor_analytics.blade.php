@extends('layout.main')
@section('content')
<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-lg-12">	
                <h2 class="st_title"><i class="uil uil-analysis"></i> Analyics</h2>
            </div>					
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="course__form">
                    <div class="general_info10">
                       <div class="row">
                          
                          
                        
                          <div class="col-lg-12 col-md-12">
                             <div class="mt-30 lbel25">
                                <label>Course</label>
                             </div>
                             <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                                <option value="">Select Course</option>
                                <option value="1">chemistry</option>
                                <option value="2">Bangla</option>
                                <option value="3">English</option>
                                <option value="4">MAth</option>
                               
                             </select>
                          </div>
                          <div class="col-lg-12 col-md-12">
                            <div class="mt-30 lbel25">
                               <label>Date from</label>
                            </div>
                            <input type="date" id="" name="" >
                         </div>
                         <div class="col-lg-12 col-md-12">
                            <div class="mt-30 lbel25">
                               <label>To</label>
                            </div>
                            <input type="date" id="" name="" >
                         </div>
                         
                         <div class="col-lg-6 col-md-6" style="margin-top:20px;">
                            <div class="card_dash_right1">
                               <a type="button" class="create_btn_dash" href="{{url('analytics_table')}}">Submit</a>
                               <!-- <button class="create_btn_dash" onclick="window.location.href = 'create_new_course.html';">Edit</button> -->
                            </div>
                         </div>
                       </div>
                    </div>
                 </div>
            </div>
            
           
        </div>
       
    </div>
</div>
 
@endsection