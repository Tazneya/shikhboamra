@extends('layout.student_main')

@section('content')



    <div class="_215b17">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-12" style="text-align: center">
                <div class="lecture-container">
                    <h2 class="lecture-title">test</h2>
                    <div class="lecture-content-inner">
                       <div class="lecture-content-inner-video">
                          <div class="video-responsive" style="text-align: center">
                             {{-- <iframe src="{{ asset('video')}}\content_video\1631095541.mp4" class="lec-responsive-width"></iframe> --}}
                             <div id="pdf-viewer"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.7/pdfobject.min.js">

    </script>

<script>
    PDFObject.embed("../note/content_note/1631429934.pdf", "#pdf-viewer");
    </script>

@endsection



