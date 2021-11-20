@extends('layout.student_main')
@section('content')

<div class="sa4d25">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xl-12 col-lg-12">
             <div class="section3125">
                <div class="explore_search">
                   <div class="ui search focus">
                      <div class="ui left icon input swdh11">
                        <form  class="form-inline" action="{{ route('filter_course') }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" style="font-style: bold">Subject:&nbsp  </label>
                            <select class="form-control" style="width:300px" name="subject">
                                @foreach ($subjects as $subject )
                                <option>{{ $subject->subject }}</option>
                                @endforeach


                            </select>
                          </div>
                          &nbsp &nbsp  &nbsp
                          <div class="form-group">
                            <label for="exampleFormControlInput1"  style="font-style: bold">Chapter:&nbsp </label>
                            <select class="form-control" style="width:300px" name="topic">
                                @foreach ($topics as $topic )
                                <option>{{ $topic->topic }}</option>
                                @endforeach

                            </select>

                          </div>
                          &nbsp
                          <div class="form-group">
                            <button type="submit"  class="btn btn-success" >Submit</button>
                          </div>

                        </form>



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
                         <a href="{{ url('student/course_details/'.$course->id) }}" class="fcrse_img">
                            <img src="{{ asset($course->course_image) }}" height="200px" alt="">
                            <div class="course-overlay">

                               <div class="crse_reviews">
                                  <i class="uil uil-star"></i>{{number_format(($course->rating->avg('rating')/2),1) }}
                               </div>
                               <span class="play_btn1"><i class="uil uil-play"></i></span>
                               <div class="crse_timer">
                                  {{ count($course->video_count) }} Video
                               </div>
                            </div>
                         </a>
                         <div class="fcrse_content">

                            <div class="vdtodt">


                            </div>
                            <a href="{{ url('student/course_details/'.$course->id) }}" class="crse14s">{{ $course->course_name }}</a>




                            <div class="auth1lnkprce">
                               <p class="cr1fot">By <a href="#">{{ $course->teacher->teacher_name }}</a></p>
                               @if($course->course_type =='free')
                               <div class="prce142">Free</div>
                               @else
                               <div class="prce142">BDT {{ $course->course_fee }}</div>
                               @endif

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

