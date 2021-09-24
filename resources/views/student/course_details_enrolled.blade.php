@extends('layout.student_main')

@section('content')

    <div class="_215b01">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-12">
                <div class="section3125">
                   <div class="row justify-content-center">
                      <div class="col-xl-4 col-lg-5 col-md-6">
                         <div class="preview_video">
                            <a href="#" class="fcrse_img" data-toggle="modal" data-target="#videoModal">
                               <img src="{{ asset("$course_details->course_image") }}" alt="">
                               <div class="course-overlay">
                                  <div class="badge_seller">Bestseller</div>
                                  <span class="play_btn1"><i class="uil uil-play"></i></span>
                                  <span class="_215b02">Preview this course</span>
                               </div>
                            </a>
                         </div>

                      </div>
                      <div class="col-xl-8 col-lg-7 col-md-6">
                         <div class="_215b03">
                            <h2>{{ $course_details->course_name }}</h2>
                            <span class="_215b04"></span>
                         </div>
                         <div class="_215b05">
                            <div class="crse_reviews mr-2">
                               <i class="uil uil-star"></i>4.5
                            </div>
                            (81,665 ratings)
                         </div>
                         <div class="_215b05">
                            114,521 students enrolled
                         </div>

                         <div class="_215b05">
                            Last updated 1/2020
                         </div>
                         <ul class="_215b31">
                            <li>

                            </li>

                         </ul>

                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="_215b15 _byt1458">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-12">

                <div class="course_tabs">
                   <nav>
                      <div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">About</a>
                         <a class="nav-item nav-link" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Courses Content</a>
                         <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
                      </div>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="_215b17">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-12">
                <div class="course_tab_content">
                   <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                         <div class="_htg451">

                            <div class="_htg452 mt-35">
                               <h3>Description</h3>

                               <p>{{ $course_details->course_description }}</p>



                            </div>


                         </div>
                      </div>
                      <div class="tab-pane fade" id="nav-courses" role="tabpanel">
                         <div class="crse_content">
                            <h3>Course content</h3>
                            <div class="_112456">
                               <ul class="accordion-expand-holder">
                                  <li><span class="accordion-expand-all _d1452">Expand all</span></li>
                                  <li><span class="_fgr123"> 402 lectures</span></li>
                                  <li><span class="_fgr123">47:06:29</span></li>
                               </ul>
                            </div>
                            <div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
                               <a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                  <div class="section-header-left">
                                     <span class="section-title-wrapper">
                                     <i class='uil uil-presentation-play crse_icon'></i>
                                     <span class="section-title-text">Introduction to this Course</span>
                                     </span>
                                  </div>
                                  <div class="section-header-right">
                                     <span class="num-items-in-section">8 lectures</span>
                                     <span class="section-header-length">22:08</span>
                                  </div>
                               </a>
                               <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">

                                @foreach($course_details->video as $video)
                                  <div class="lecture-container">
                                     <div class="left-content">
                                        <i class='uil uil-play-circle icon_142'></i>
                                        <div class="top">
                                           <div class="title">{{ $video->content_name }}</div>
                                        </div>
                                     </div>
                                     <div class="details">
                                        <a href="video/{{ $video->id }}" class="preview-text">Preview</a>
                                        <span class="content-summary">{{ $video->duration }} Minute</span>
                                     </div>
                                  </div>
                                  @endforeach

                               </div>



                            </div>

                         </div>
                      </div>
                      <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                         <div class="student_reviews">
                            <div class="row">
                               <div class="col-lg-5">
                                  <div class="reviews_left">
                                     <h3>Student Feedback</h3>
                                     <div class="total_rating">
                                        <div class="_rate001">4.6</div>
                                        <div class="rating-box">
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star half-star"></span>
                                        </div>
                                        <div class="_rate002">Course Rating</div>
                                     </div>
                                     <div class="_rate003">
                                        <div class="_rate004">
                                           <div class="progress progress1">
                                              <div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                           <div class="rating-box">
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                           </div>
                                           <div class="_rate002">70%</div>
                                        </div>
                                        <div class="_rate004">
                                           <div class="progress progress1">
                                              <div class="progress-bar w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                           <div class="rating-box">
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star empty-star"></span>
                                           </div>
                                           <div class="_rate002">40%</div>
                                        </div>
                                        <div class="_rate004">
                                           <div class="progress progress1">
                                              <div class="progress-bar w-5" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                           <div class="rating-box">
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star empty-star"></span>
                                              <span class="rating-star empty-star"></span>
                                           </div>
                                           <div class="_rate002">5%</div>
                                        </div>
                                        <div class="_rate004">
                                           <div class="progress progress1">
                                              <div class="progress-bar w-2" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                           <div class="rating-box">
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star empty-star"></span>
                                              <span class="rating-star empty-star"></span>
                                              <span class="rating-star empty-star"></span>
                                           </div>
                                           <div class="_rate002">1%</div>
                                        </div>
                                        <div class="_rate004">
                                           <div class="progress progress1">
                                              <div class="progress-bar w-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                           <div class="rating-box">
                                              <span class="rating-star full-star"></span>
                                              <span class="rating-star empty-star"></span>
                                              <span class="rating-star empty-star"></span>
                                              <span class="rating-star empty-star"></span>
                                              <span class="rating-star empty-star"></span>
                                           </div>
                                           <div class="_rate002">1%</div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-lg-7">
                                  <div class="review_right">
                                     <div class="review_right_heading">
                                        <h3>Reviews</h3>

                                     </div>
                                  </div>
                                  <div class="review_all120">
                                     <div class="review_item">
                                        <div class="review_usr_dt">
                                           <img src="images/left-imgs/img-1.jpg" alt="">
                                           <div class="rv1458">
                                              <h4 class="tutor_name1">John Doe</h4>
                                              <span class="time_145">2 hour ago</span>
                                           </div>
                                        </div>
                                        <div class="rating-box mt-20">
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star full-star"></span>
                                           <span class="rating-star half-star"></span>
                                        </div>
                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>

                                     </div>



                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <footer class="footer mt-30">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f1">
                   <a href="about_us.html">About</a>
                   <a href="our_blog.html">Blog</a>
                   <a href="career.html">Careers</a>
                   <a href="press.html">Press</a>
                </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f1">
                   <a href="help.html">Help</a>
                   <a href="coming_soon.html">Advertise</a>
                   <a href="coming_soon.html">Developers</a>
                   <a href="contact_us.html">Contact Us</a>
                </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f1">
                   <a href="terms_of_use.html">Copyright Policy</a>
                   <a href="terms_of_use.html">Terms</a>
                   <a href="terms_of_use.html">Privacy Policy</a>
                   <a href="sitemap.html">Sitemap</a>
                </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f3">


                </div>
             </div>
             <div class="col-lg-12">
                <div class="footer_bottm">
                   <div class="row">
                      <div class="col-md-6">
                         <ul class="fotb_left">
                            <li>
                               <a href="index.html">
                                  <div class="footer_logo">
                                     <img src="images/logo1.svg" alt="">
                                  </div>
                               </a>
                            </li>
                            <li>

                            </li>
                         </ul>
                      </div>
                      <div class="col-md-6">
                         <div class="edu_social_links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </footer>

@endsection

@section('page-js')


@endsection