@extends('layouts.mainlayout')
<div class="col"></div>


@section('content')




<main>
      <!--? Hero Start -->
      <div class="slider-area2">
         <div class="slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 pt-70 text-center">
                              <h2>Blog Details</h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->
      <!--? Blog Area Start -->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ $displayArticle->post_featured_img }}" alt="">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{ $displayArticle->title }}
                        </h2>
                        <!--ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                           <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                        </ul-->
                        <p class="excert">
                         {{ $displayArticle->post_body }}
                        </p>
                      
                       
                     </div>
                  </div>
                  <!--div class="navigation-top">
                     <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                           people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        <!--/div>
                        <ul class="social-icons">
                           <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                           <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                     </div>
                    
                  </div-->
                  <!--div class="blog-author">
                     <div class="media align-items-center">
                        <img src="assets/img/blog/author.png" alt="">
                        <div class="media-body">
                           <a href="#">
                              <h4>Harvard milan</h4>
                           </a>
                           <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                              our dominion twon Second divided from</p>
                        </div>
                     </div>
                  </div-->
                  
               
               </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <!--aside class="single_sidebar_widget search_widget">
                        <form action="#">
                           <div class="form-group">
                              <!--div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                 <div class="input-group-append">
                                    <button class="btns" type="button"><i class="ti-search"></i></button>
                                 </div>
                              </div>
                           </div>
                           <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                              type="submit">Search</button>
                        </form>
                     </aside-->
                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Posts</h3>
                        
                        
                        <!--div class="media post_item">
                           <img src="assets/img/post/post_3.png" alt="post">
                           <div class="media-body">
                              <a href="blog_details.html">
                                 <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                              </a>
                              <p>03 Hours ago</p>
                           </div>
                        </div-->
                        
                     </aside>
                  
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Blog Area End -->
   </main>
@endsection