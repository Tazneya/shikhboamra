@extends('layout.student_main')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('/sourcefile_home').'/vendor/nested-comment-template/style.css' }}">
    <style>
       .comment_mention {
          font-weight: bold;
          color: #3b4c8f;
          background-color: #7289da;
          padding: 5px;
          border-radius: 2px;
       }
    </style>
@endsection
@section('content')

<div class="modal fade" id="bkashNumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Payment with Bkash</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center" style="height: 300px">

                <div class="ui search focus">
                    <img width="100px" height="80px" src="{{ asset('image/Bkash-logo.png') }}">
                    <div class="ui left icon input swdh11 swdh19" style="width:80%;margin-top:6%">

                        <input class="prompt srch_explore" type="text" name="mobile_number" value="" id="username" required="" maxlength="64" placeholder="Enter Bkash Number">
                        <input id="hidden_course_id" type="hidden">
                    </div>
                </div>



                <button class="login-btn" type="button" onclick="bkash_number()" style="margin-top:15%;width:87%">Submit</button>
                {{-- <button class="login-btn" type="submit">Next</button> --}}

        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="bkashOtp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Payment with Bkash</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center" style="height: 300px">

                <div class="ui search focus">
                    <img width="100px" height="80px" src="{{ asset('image/Bkash-logo.png') }}">
                    <div class="ui left icon input swdh11 swdh19" style="width:80%;margin-top:6%">

                        <input class="prompt srch_explore" type="text" name="mobile_number" value="" id="username" required="" maxlength="64" placeholder="Enter OTP">
                    </div>
                </div>



                <button class="login-btn" type="button" onclick="bkash_otp()" style="margin-top:15%;width:87%">Submit</button>
                {{-- <button class="login-btn" type="submit">Next</button> --}}

        </div>

      </div>
    </div>
  </div>


  <div class="modal fade" id="bkashPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Payment with Bkash</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center" style="height: 300px">

                <div class="ui search focus">
                    <img width="100px" height="80px" src="{{ asset('image/Bkash-logo.png') }}">
                    <div class="ui left icon input swdh11 swdh19" style="width:80%;margin-top:6%">

                        <input class="prompt srch_explore" type="text" name="mobile_number" value="" id="username" required="" maxlength="64" placeholder="Enter Bkash Password">
                    </div>
                </div>



                <button class="login-btn" type="button" onclick="bkash_password()" style="margin-top:15%;width:87%">Submit</button>
                {{-- <button class="login-btn" type="submit">Next</button> --}}

        </div>

      </div>
    </div>
  </div>

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
                               <i class="uil uil-star"></i>{{number_format(($course_details->rating->avg('rating')/2),1) }}
                            </div>
                            ({{ count($course_details->rating) }} ratings)
                         </div>
                         <div class="_215b05">
                            {{  count($course_details->enroll_count) }} students enrolled
                         </div>


                         <ul class="_215b31">
                            <li>
                                @if($enroll_avail)
                                <button class="btn_adcart">You enrolled this course</button>
                                @else
                                    @if($course_details->course_type=='free')
                                <button class="btn_adcart" onclick = 'enroll_now("{{ $course_details->id }}")'>Enroll Now</button>
                                @else
                                <button class="btn_adcart" onclick = 'enroll_now_paid("{{ $course_details->id }}")'>Enroll Now</button>
                                @endif

                                @endif
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
                         @if($enroll_avail)
                         @if (count($course_exams) > 0)
                           <a class="nav-item nav-link" id="nav-exam-tab" data-toggle="tab" href="#nav-exam" role="tab" aria-selected="false">Exams</a>
                         @endif
                         @endif
                         <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
                         @if($enroll_avail)
                         <a class="nav-item nav-link" id="nav-forum-tab" data-toggle="tab" href="#nav-forum" role="tab" aria-selected="false">Forum</a>
                         @endif
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
                      <div class="tab-pane fade" id="nav-exam" role="tabpanel">
                        <div class="_htg451">

                           <div class="_htg452 mt-35">
                              <table class="table ucp-table" id="content-table">
                                 <thead class="thead-s">
                                    <tr>
                                       <th class="text-center" scope="col">SERIAL NO</th>
                                       <th scope="col">EXAM TITLE</th>
                                       <th class="text-center" scope="col">DURATION</th>
                                       <th class="text-center" scope="col">TOTAL MARKS</th>
                                       <th class="text-center" scope="col">ACTION</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($course_exams as $index=>$course_exam)
                                       <tr>
                                          <td class="text-center">{{ $index+1 }}</td>
                                          <td class="cell-ta">{{ $course_exam->exam_name }}</td>
                                          <td class="text-center">{{ $course_exam->durationString }}</td>
                                          <td class="text-center">{{ $course_exam->total_marks }}</td>
                                          @if (!$course_exam->isTaken)
                                             <td class="text-center">
                                                <a href="{{ route('exam_confirmation_page', ['exam_id' => $course_exam->id]) }}" class="btn btn-primary" >Take Exam</a>
                                             </td>
                                          @else
                                             <td class="text-center">
                                                <a href="{{ route('exam_confirmation_page', ['exam_id' => $course_exam->id]) }}" class="btn btn-primary" >Try Again</a>
                                                <a href="{{ route('exam_result', ['exam_id' => $course_exam->id]) }}" class="btn btn-primary" >View Result</a>
                                             </td>
                                          @endif
                                       </tr>
                                    @endforeach




                                 </tbody>
                              </table>
                           </div>


                        </div>
                     </div>
                      <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                         <div class="student_reviews">
                            <div class="row">

                               <div class="col-lg-12">
                                   @if($enroll_avail)
                                  <div class="mb-3">
                                     <button class="btn btn-info" onclick="openReviewPopup()">Rate this course</button>
                                  </div>
                                  @endif
                                  <div class="review_right">
                                     <div class="review_right_heading">
                                        <h3>Reviews</h3>

                                     </div>
                                  </div>
                                  <div class="review_all120">
                                     {{-- <div class="review_item">
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

                                     </div> --}}



                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="tab-pane fade" id="nav-forum" role="tabpanel">
                        <div class="container mb-5 mt-5">
                           <div class="mb-3">
                              <form action="" onsubmit="postForumQuestion(event)">
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1"><b>Ask your question</b></label><span id="replyingTo"></span>
                                    <textarea class="form-control mb-2" id="forumQuestion" rows="3"></textarea>
                                    <button type="submit" class="btn btn-primary">Post</button>
                                  </div>
                              </form>
                           </div>
                           <div class="card">
                               <div class="row">
                                   <div class="col-md-12">
                                       <h3 class="text-center mb-5"> Questions </h3>
                                       <div id="forum-questions">
                                          {{-- <div class="row mb-3">
                                              <div class="col-md-12">
                                                  <div class="media"> <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="https://i.imgur.com/4FyNX7i.png" />
                                                      <div class="media-body">
                                                          <div class="row">
                                                              <div class="col-8 d-flex">
                                                                  <h5>Maria Smantha</h5> <span>- 2 hours ago</span>
                                                              </div>
                                                              <div class="col-4">
                                                                  <div class="pull-right reply"> <a href="#"><span><i class="fa fa-reply"></i> reply</span></a> </div>
                                                              </div>
                                                          </div> It is a long established fact that a reader will be distracted by the readable content of a page.
                                                          <br />
                                                          <br />
                                                          <a href="#">Load Replies</a>
                                                          <div class="replies">
                                                            <div class="media mt-3"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/4FyNX7i.png" /></a>
                                                               <div class="media-body">
                                                                   <div class="row">
                                                                       <div class="col-12 d-flex">
                                                                           <h5>Simona Disa</h5> <span>- 3 hours ago</span>
                                                                       </div>
                                                                   </div> letters, as opposed to using 'Content here, content here', making it look like readable English.
                                                               </div>
                                                           </div>
                                                           <div class="media mt-3"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/4FyNX7i.png" /></a>
                                                               <div class="media-body">
                                                                   <div class="row">
                                                                       <div class="col-12 d-flex">
                                                                           <h5>John Smith</h5> <span>- 4 hours ago</span>
                                                                       </div>
                                                                   </div> the majority have suffered alteration in some form, by injected humour, or randomised words.
                                                               </div>
                                                           </div>
                                                          </div>

                                                      </div>
                                                  </div>

                                              </div>
                                          </div> --}}
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

<script>
    $(function() {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })

        function bkash_password()
        {
            var course_id = $("#hidden_course_id").val();
            var formdata = new FormData();
           formdata.append('course_id',course_id);
            $.ajax({
            processData: false,
            contentType: false,
            type: 'POST',
            url: course_enroll,
            data:formdata,
            success: function (data) {
                swal("You successfully enrolled this course", {
                icon: "success",
        }).then((value) => {
      location.reload()
    });
            }
        })

        }

        function bkash_number()
        {

            $("#bkashNumber").modal('hide');
            $("#bkashOtp").modal('show');

        }
        function bkash_otp()
        {
            $("#bkashOtp").modal('hide');
            $("#bkashPassword").modal('show');
        }
        function enroll_now_paid(course_id)
        {
           $("#bkashNumber").modal('show');
           $('#hidden_course_id').val(course_id);
        //    var element = document.getElementById('exampleModalCenter');
        //    element.classList.add('show');

        }

        function enroll_now(course_id)
        {
            swal({
      title: "Are you sure?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        var formdata = new FormData();
           formdata.append('course_id',course_id);
            $.ajax({
            processData: false,
            contentType: false,
            type: 'POST',
            url: course_enroll,
            data:formdata,
            success: function (data) {
                swal("You successfully enrolled this course", {
                icon: "success",
        }).then((value) => {
      location.reload()
    });
            }
        })
      }
    });
        }
    </script>
<script>
   let currentReviewText = '';
   let currentCourseRating = 0;
   let currentlyReplyingTo = 0;

   // Initialize 5 seperate star ratings
   var all_ratings = document.querySelectorAll(".starRating");

   for(let i = 5; i >= 1; i--) {
      $(`.starRating${i}`).starRating({
         starSize: 25,
         initialRating: i,
         readOnly: true
      });
   }


   const setAverageRating = (rating) => {
      $(".averageRating").starRating({
         starSize: 25,
         initialRating: rating,
         readOnly: true
      });
   }
   const openReviewPopup = () => {
      Swal.fire({
         title: '<strong>Rate this course</strong>',
         icon: 'info',
         html:
            `<form>
               <div class="my-rating jq-stars mb-2"></div>
               <div class="form-group">
                  <textarea class="form-control" id="courseReviewText" onchange="getReviewText(this)" rows="3" placeholder="Write feedback.."></textarea>
               </div>
            </form>
               `,
         showCloseButton: true,
         focusConfirm: false,
         confirmButtonText:
            '<i class="fa fa-check" aria-hidden="true"></i> Submit!',
         confirmButtonAriaLabel: 'Thumbs up, great!',
         cancelButtonText:
            '<i class="fa fa-times" aria-hidden="true"></i>',
         cancelButtonAriaLabel: 'Thumbs down'
      }).then(result => {
         if (result.isConfirmed) {
            postCourseRating();
         } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
         }
      })
      initializeRatingPlugin();
   }
   const initializeRatingPlugin = () => {
      $(".my-rating").starRating({
         totalStars: 5,
         emptyColor: 'lightgray',
         hoverColor: 'salmon',
         activeColor: 'cornflowerblue',
         strokeWidth: 0,
         useGradient: false,
         callback: (currentRating, $el) => setCourseRating(currentRating, $el)
      });
   }
   const getReviewText = (e) => {
      currentReviewText = e.value;
   }
   const setCourseRating = (currentRating, $el) => {
      currentCourseRating = currentRating * 2;
   }
   const postCourseRating = () => {
      let courseReview = {
         st_id: {{ session('user')->id }},
         course_id: {{ $course_details->id }},
         rating: currentCourseRating,
         review: currentReviewText
      }
      console.log(courseReview)
      post(routes.createCourseReview, courseReview).then(response => console.log(response))
   }
   const intializeRatingSummary = () =>  {
      get(routes.getRatingSummary({{ $course_details->id }})).then(response => {
          setAverageRating(response.average)
         //  console.log(response)
         //  for(let i = 1; i <= 5; i++) {
         //     document.querySelector(`starPercentage${i}`).innerHTML = response.star2;
         //  }
      })

   }
   const initializeReviews = () => {

      let output = ((id, mobile_number, text) => `<div class="review_item">
                        <div class="review_usr_dt">
                           <div class="rv1458">
                              <h4 class="tutor_name1">${mobile_number}</h4>
                           </div>
                        </div>
                        <div class="rating-box mt-20">
                           <div class="rating-${id}"></div>
                        </div>
                        <p class="rvds10">${text}</p>

                     </div>`)

      get(routes.getReviews({{ $course_details->id }})).then(response => {
          response.forEach(review => {
             //console.log(review)
             document.querySelector(".review_all120").innerHTML += output(review.id, review.st_name, review.review);
             $(`.rating-${review.id}`).starRating({
               starSize: 25,
               initialRating: review.rating/2,
               readOnly: true
            });
          })

      })
   }

   const postForumQuestion = (event) => {
      event.preventDefault()
      let question = document.getElementById("forumQuestion").value
      console.log('Posting to', currentlyReplyingTo)
      if(currentlyReplyingTo === 0) {
         let postData = {
            question: question,
            user_id: {{ session('user')->id }},
            course_id: {{ $course_details->id }}
         }
         post(routes.createForumQuestion, postData).then(response => reloadForum())
      } else {
         let postData = {
            reply: question,
            user_id: {{ session('user')->id }},
            question_id: currentlyReplyingTo
         }
         post(routes.createQuestionReply, postData).then(response => reloadForum())
      }

   }
   const renderQuestions = async () => {
      const output = (id, username, question) => {
         return `
            <div class="row mb-3">
               <div class="col-md-12">
                  <div class="media">
                     <div class="media-body">
                           <div class="row">
                              <div class="col-8 d-flex">
                                 <h5>${username}</h5>
                              </div>
                              <div class="col-4">
                                 <div class="pull-right reply"> <button class="btn btn-primary btn-sm" onclick="addReplyMention(${id}, '${username}')"><span><i class="fa fa-reply"></i> reply</span></button> </div>
                              </div>
                           </div> ${question}
                           <br />
                           <br />
                           <div id="${id}_load_reply_button"><button class="btn btn-secondary btn-sm" onclick="renderReply(${id})">Load Replies</button></div>
                           <div class="replies" id="${id}_reply"></div>
                     </div>
                  </div>
               </div>
            </div>
         `
      }
      let questions = await get(routes.getQuestions({{ $course_details->id }}))
      document.getElementById("forum-questions").innerHTML = ""
      questions.forEach(item => {
         document.getElementById("forum-questions").innerHTML += output(item.id, item.user.mobile_number, item.text)
      })
      console.log(questions)
   }
   const renderReply = async (id) => {
      output = (username, text) => {
         return `
            <div class="media mt-3"> <a class="pr-3" href="#"></a>
               <div class="media-body">
                     <div class="row">
                        <div class="col-12 d-flex">
                           <h5>${username}</h5> <span></span>
                        </div>
                     </div> ${text}
               </div>
            </div>
         `
      }
      let replies = await get(routes.getQuestionReplies(id))
      replies.forEach(reply => {
         document.getElementById(`${id}_reply`).innerHTML += output(reply.user.mobile_number, reply.text)
      })
      document.getElementById(`${id}_load_reply_button`).innerHTML = `<b>all ${replies.length} replies loaded</b>`
   }
   const addReplyMention = (question_id, username) => {
      if(currentlyReplyingTo === 0) {
         document.getElementById("replyingTo").innerHTML = `
            <b>·</b> Replying to <span class="comment_mention">@${username} <i class="fas fa-times" style="cursor: pointer" onclick="removeReplyMention()"></i></span>
         `
         currentlyReplyingTo = question_id
         console.log(currentlyReplyingTo)
      }

   }
   const removeReplyMention = () => {
      if(currentlyReplyingTo !== 0) {
         document.getElementById("replyingTo").innerHTML = ``
         currentlyReplyingTo = 0
      }
   }
   const reloadForum = async () => {
      document.getElementById("forumQuestion").value = ""
      document.getElementById("forum-questions").innerHTML = `
         <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
         </div>
      `
      await renderQuestions()
      if(currentlyReplyingTo !== 0) {
         await renderReply(currentlyReplyingTo)
         removeReplyMention()
      }
   }
   intializeRatingSummary()
   initializeReviews()
   renderQuestions()
</script>

@endsection
