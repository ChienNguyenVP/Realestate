<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('template_front/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_front/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('template_front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_front/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('template_front/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('template_front/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('template_front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('template_front/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('template_front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('template_front/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('template_front/css/style.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
  </head>
  <!-- Load Facebook SDK for JavaScript -->
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">CoHost</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ asset('/') }}" class="nav-link">Trang Chủ</a></li>
            <li class="nav-item active"><a href="{{ asset('duan') }}" class="nav-link">Dự Án</a></li>
            <li class="nav-item"><a href="domain.html" class="nav-link">Domain</a></li>
            <li class="nav-item"><a class="nav-link" href="hosting.html">Hosting</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Get started</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">TRANG CHỦ <i class="ion-ios-arrow-forward"></i></a>
            </span> <span>Dự Án</span></p>
            {{-- <h1 class="mb-3 bread">Blog</h1> --}}
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="col-sm-2 project-title" ><a href=""><strong>DỰ ÁN</strong></a></div>
        <div class="row">
          @foreach($project as $key => $pro)
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
               @if($key == 0)
                <div class="hot">
                  HOT
                </div>
                @endif
              <a href="{{ asset('duan') }}/{{$pro->slug}}" class="block-20" @if($pro->image)style="background-image: url('{{asset(\Storage::url($pro->image->path))}}');" @endif>
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3 info-1">
                  <div class="price info-2">Giá:<p>{{$pro->price}}</p></div>
                  <div class="acreage info-2">Diện tích: <p>{{$pro->acreage}}</p></div>
                  <div class="location info-2">Vị trí: <p>{{$pro->location}}</p></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="{{ asset('duan') }}/{{$pro->slug}}">{{$pro->title}}</a></h3>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 8, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 8, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 8, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 8, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">May 8, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              {{-- <a href="">Xem thêm...</a> --}}
              {!!$project->links()!!}
             {{--  <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul> --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5 pb-5 align-items-center d-flex">
          <div class="col-md-6">
            <div class="heading-section heading-section-white ftco-animate">
              <span class="subheading">Get an easy quote</span>
              <h2 style="font-size: 30px;">Sign Up For Web Hosting Today!</h2>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="price">
              <span class="subheading">Starting at Only</span>
              <h3>$4.50<span>/mo</span></h3>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-4">Get started now</a></p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 bg-primary p-4">
              <h2 class="ftco-heading-2">CoHost</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled mb-0">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Unseful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Servers</a></li>
                <li><a href="#" class="py-2 d-block">Windos Hosting</a></li>
                <li><a href="#" class="py-2 d-block">Cloud Hosting</a></li>
                <li><a href="#" class="py-2 d-block">OS Servers</a></li>
                <li><a href="#" class="py-2 d-block">Linux Servers</a></li>
                <li><a href="#" class="py-2 d-block">Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Navigational</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">Domain</a></li>
                <li><a href="#" class="py-2 d-block">Hosting</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Office</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  


  <script src="{{asset('template_front/js/jquery.min.js')}}"></script>
  <script src="{{asset('template_front/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('template_front/js/popper.min.js')}}"></script>
  <script src="{{asset('template_front/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('template_front/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('template_front/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('template_front/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('template_front/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template_front/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('template_front/js/aos.js')}}"></script>
  <script src="{{asset('template_front/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('template_front/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('template_front/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('template_front/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('template_front/js/google-map.js')}}"></script>
  <script src="{{asset('template_front/js/main.js')}}"></script>
  
  <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v3.3'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="304459066939106"
        theme_color="#0084ff"
        logged_in_greeting="Xin Chào! Bạn cần tôi tư vấn điều gì?"
        logged_out_greeting="Xin Chào! Bạn cần tôi tư vấn điều gì?">
      </div> 
  </body>
</html>