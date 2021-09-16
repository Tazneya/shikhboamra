@extends('layout.student_main')
@section('content')

<div class="sa4d25">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xl-12 col-lg-8">
             <div class="section3125">
                <div class="explore_search">
                   <div class="ui search focus">
                      <div class="ui left icon input swdh11">
                         <input class="prompt srch_explore" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                         <i class="uil uil-search-alt icon icon2"></i>
                      </div>
                   </div>
                </div>
             </div>
          </div>

          <div class="col-md-12">
             <div class="_14d25">
                <div class="row">
                    @foreach($courses as $course)
                   <div class="col-lg-3 col-md-4">
                      <div class="fcrse_1 mt-30">
                         <a href="course_detail_view.html" class="fcrse_img">
                            <img src="{{ $course->course_image }}" alt="">
                            <div class="course-overlay">

                               <div class="crse_reviews">
                                  <i class="uil uil-star"></i>4.5
                               </div>
                               <span class="play_btn1"><i class="uil uil-play"></i></span>
                               <div class="crse_timer">
                                  25 Video
                               </div>
                            </div>
                         </a>
                         <div class="fcrse_content">
                            <div class="eps_dots more_dropdown">
                               <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                               <div class="dropdown-content">
                                  <span><i class='uil uil-share-alt'></i>Share</span>
                                  <span><i class="uil uil-heart"></i>Save</span>
                                  <span><i class='uil uil-ban'></i>Not Interested</span>
                                  <span><i class="uil uil-windsock"></i>Report</span>
                               </div>
                            </div>
                            <div class="vdtodt">

                               <span class="vdt14">15 days ago</span>
                            </div>
                            <a href="course_detail_view.html" class="crse14s">{{ $course->course_name }}</a>




                            <div class="auth1lnkprce">
                               <p class="cr1fot">By <a href="#">{{ $course->teacher->teacher_name }}</a></p>
                               <div class="prce142">Free</div>

                            </div>
                         </div>
                      </div>
                   </div>
                   @endforeach


                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
