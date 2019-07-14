<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{$project->title}}</title>
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
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">CoHost</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ asset('/') }}" class="nav-link">Trang chủ</a></li>
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

    <div class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang Chủ <i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"><a href="blog.html">Dự Án</a></span> 
            <h2 class="mb-3 bread">{{$project->title}}</h>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3 info-view">Thông Tin</h2>
           

              <table class="table" style="margin: 1.5em 0;">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Dự Án</th>
                    <th scope="col">Vị Trí</th>
                    <th scope="col">Diện Tích</th>
                    <th scope="col">Giá</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                     <td>{{$project->title}}</td>
                     <td>{{$project->location}}</td>
                     <td>{{$project->acreage}}</td>
                     <td>{{$project->price}}</td>
                      </tr>
                </tbody>
              </table> 
           </table>
          <div class="image-detail">
              <img @if($project->image)src="{{asset(\Storage::url($project->image->path))}}" @endif alt="" class="img-fluid">
          </div>
            <h2 class="mb-3 mt-5 overview-view">Tổng Quan</h2>
            <div class="overview">
              {!!$project->overview!!}
            </div>
            <h2 class="mb-3 mt-5 content-view">Chi Tiết Dự Án</h2>
            <div class="content">
              {!!$project->content!!}
            </div>
          {{--   <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div> --}}
            
            {{-- <div class="about-author d-flex p-5 bg-light"> --}}
              {{-- <div class="bio mr-5">
                <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4 rounded-circle">
              </div> --}}
              {{-- <div class="desc align-self-md-center">
                <h3>Lance Smith</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div> --}}
            {{-- </div> --}}


            <div class="pt-5 mt-5">
              {{-- <h3 class="mb-5 font-weight-bold">6 Comments</h3> --}}
              {{-- <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">May 08, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">May 08, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">May 08, 2019 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta">May 08, 2019 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta">May 08, 2019 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">May 08, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul> --}}
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Hãy để lại thông tin để được chúng tôi tư vấn</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Tên của bạn*</label>
                    <input type="text" class="form-control" id="name" required="">
                  </div>
                  <div class="form-group">
                    <label for="phone">Số Điện Thoại*</label>
                    <input type="number" class="form-control" id="email" required="">
                  </div>
                  <div class="form-group">
                    <label for="email">Email( Không bắt buộc)</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="message">Thắc mắc của bạn( Không bắt buộc)</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Xác Nhận" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
           {{--  <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <div class="icon">
                  	<span class="icon-search"></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> --}}
           {{--  <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Food <span>(12)</span></a></li>
                <li><a href="#">Dish <span>(22)</span></a></li>
                <li><a href="#">Desserts <span>(37)</span></a></li>
                <li><a href="#">Drinks <span>(42)</span></a></li>
                <li><a href="#">Ocassion <span>(14)</span></a></li>
              </div>
            </div> --}}

            <div class="sidebar-box ftco-animate">
              <h3>Dự Án Khác</h3>
              @foreach($pro as $key => $pro)
              @if($key<3)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" @if($pro->image)style="background-image: url('{{asset(\Storage::url($pro->image->path))}}');" @endif></a>
                <div class="text">
                  <h3 class="heading"><a href="#">{{$pro->title}}</a></h3>
                  <div class="meta">
                    <div><a href="#">{{$pro->location}}</a></div>
{{--                     <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                  </div>
                </div>
              </div>
              @endif
              @endforeach
              {{-- <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> May 08, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> May 08, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> --}}
            </div>

           {{--  <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div> --}}

            {{-- <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div> --}}
          </div>

        </div>
      </div>
    </section> <!-- .section -->

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
    
  </body>
</html>