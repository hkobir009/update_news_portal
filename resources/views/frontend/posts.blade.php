@extends('frontend.layouts.app')
@section('content')
<section class="post-page leatest-section py-4">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 px-3">
            <div class="leatest-top mb-2">
               <div class="page-counter mb-3">
                  <span>হোম / {{$post->categories->first()->name}}</span>
               </div>
               <div class="leatest-title pb-5">
                  <h1 class="fw-medium post-title"> {{$post->title}} </h1>
                  <div class="post-page-info d-flex mt-4">
                     <div class="post-info-logo me-2">
                        <img src="{{url('frontend/img/favicon.webp')}}" alt="">
                     </div>
                     <div class="post-inf-details d-flex flex-column">
                        <span>রিপোর্টার : {{$post->user->name}}</span>
                        <time>{{$postTime}}</time>
                     </div>
                  </div>
               </div>
               <div class="social-share">
                  {{-- social Share --}}
                  <div class="sharethis-inline-share-buttons"></div>
               </div>
            </div>
            <div class="row pb-md-4">
               <div class="col-lg-12 border-top px-0 pt-5">
                  <div class="big-news-top">
                     <div class="top-middle mb-3 mb-lg-0">
                        <div class="news-item">
                           <a href="#">
                           <img class="img-fluid w-100" src="{{asset('post/'.$post->image)}}">
                           </a>
                           <h2 class="m-0 big-post-title-bottom my-3 fw-bold lh-sm mb-lg-4">
                              {!!$post->body!!}</h2>
                        </div>
                     </div>
                  </div>
                  <!--big-news-top-->
                  <!--post-advertisement-end-->
               </div>
            </div>
            <div class="post-bottom mb-5">
               <div class="comment-sort d-flex justify-content-between">
                  <div class="comment">
                     <h4 class="fw-bold m-0">0 comment</h4>
                  </div>
                  <div class="sort">
                     <span>sort by</span>
                     <select>
                        <option selected value="newest">newest</option>
                        <option value="oldest">Oledest</option>
                     </select>
                  </div>
               </div>
               <div class="profile-and-comment d-flex py-4 border-bottom border-top mt-5">
                  <div class="commenter-profile me-3">
                     <img src="img/commentor.png" alt="" width="70" height="100%">
                  </div>
                  <div class="w-100">
                     <textarea class="w-100 border" name="" id="" rows="5"></textarea>
                  </div>
               </div>
               <span class="facebook-plugins py-2 d-block"><i class="fab fa-facebook"></i> Facebook comments plugins</span>
            </div>
            <div class="section-title d-flex justify-content-between align-items-center py-2">
               <h4 class="m-0 py-2">সম্পর্কিত</h4>
            </div>
            <div class="row mt-3 mb-sm-5">

               @foreach ($related_posts as $related_post)

               <div class="col-md-4 col-sm-12">
               <div class="news-col mx-2 m-lg-0">
                  <a href="#">
                     <img class="img-fluid w-100" src="{{asset('post/'.$related_post->image)}}" alt="country">
                     <p class="py-2 fw-medium lh-sm">{{$related_post->title}}</p>
                  </a>
               </div>
            </div>
            @endforeach
            </div>
            <!--------------------------------------------- somporkito section end -------------------------------------------- -->
            <div class="section-title d-flex justify-content-between align-items-center py-2">
               <h4 class="m-0 py-2">আরো পড়ুন</h4>
            </div>
            <div class="row mt-3">

               <div class="col-md-4 col-sm-12">
                  <div class="news-col mx-2 m-lg-0">
                     <a href="#">
                        <img class="img-fluid w-100" src="img/newsimg4.webp" alt="country">
                        <p class="py-2 fw-medium lh-sm">তিন দেশ মিলে বাংলাদেশকে ১২ লাখ টিকা দিল</p>
                     </a>
                  </div>
                  <!--news col-->
               </div>

               <!--2nd col 4-->
            </div>
            <!-- -------------------------------------- more advertisment ---------------------------------------------------- -->
            
            <div class="row mt-3 more-advertisment">
              <div class="col-md-3 post-ads">
                 <a class="ads-link" href="#">
                 <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
                 </a>
              </div>
              <!--2nd col 3-->
           </div><!--row-->


            <div class="row mt-3 more-advertisment ">
               <h3 class="ads-title py-4 mt-5">You may know</h3>
               <div class="more-big-ads d-grid">
                  <div class=" big-ads">
                      <a class="ads-link" href="#">
                          <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
                      </a>
                  </div>
               </div>
            </div>
         </div>
         <!--col-lg-9-->
         <div class="col-lg-3 jatiyo-page-left">
            <div class="post-right">   
               <!-- ---------------------------------------------------ads -------------------------------------------------------->

               <div class="advertisment bg-danger text-white d-none d-lg-block post-page-advertisment">
                  <a class="ads-link" href="#">
                      <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
                  </a>
               </div>

               <div class="section-title d-flex justify-content-between align-items-center py-2">
                  <h4 class="m-0 py-2">এই সপ্তাহের পাঠকপ্রিয়</h4>
               </div>
               <div class="post-news-left-main jatiyo-page-news-left some-rajniti recent-post-details bg-white more-news">

                  <div class="recent-news border-bottom py-2">
                     <a class="d-flex align-items-md-start" href="#">
                        <img class="img-fluid me-3" src="img/imgs2.webp" alt="">
                        <p class="m-0 fw-medium">বাংলাদেশ হঠাৎ</p>
                     </a>
                  </div>

               </div>
               <!--jatiyo-page-news-left-->
               <!-- jatiyo থেকে আরো -->
               <div class="section-title d-flex justify-content-between align-items-center py-2">
                  <h4 class="m-0 py-2">জাতীয় থেকে আরো</h4>
               </div>
               <div class="post-news-left-main jatiyo-page-news-left some-rajniti recent-post-details bg-white more-news">

                  <div class="recent-news border-bottom py-2">
                     <a class="d-flex align-items-md-start" href="#">
                        <img class="img-fluid me-3" src="img/imgs2.webp" alt="">
                        <p class="m-0 fw-medium">বাংলাদেশ হঠাৎ</p>
                     </a>
                  </div>

               </div>
               <!--jatiyo-page-news-left-->
               </div>
         </div>
         <!--col-lg-3-->
      </div>
   </div>
   <!--container-->
</section>

@endsection