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
                        <img src="{{url('frontend/img/icon.png')}}" alt="">
                     </div>
                     <div class="post-inf-details d-flex flex-column">
                        <span>রিপোর্টার : {{$post->user->name}}</span>
                        <time> প্রকাশিত : {{$postTime}}</time>
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
                           <img class="img-fluid w-100" src="{{asset($post->image)}}">
                           <p class="m-0 big-post-title-bottom my-3 fw-bold lh-sm mb-lg-4">
                              {!!$post->body!!}
                           </p>
                        </div>
                     </div>
                  </div>
                  <!--big-news-top-->
                  <!--post-advertisement-end-->
               </div>
            </div>
            <div class="post-bottom mb-5">
              <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="5"></div>
            </div>
            <div class="section-title d-flex justify-content-between align-items-center py-2">
               <h4 class="m-0 py-2">সম্পর্কিত</h4>
            </div>
            <div class="row mt-3 mb-sm-5">

            @foreach ($related_posts as $related_post)
               <div class="col-md-4 col-sm-12">
               <div class="news-col mx-2 m-lg-0">
                  <a href="{{url('news/'.$post->categories->first()->slug.'/'.$related_post->id)}}">
                     <img class="img-fluid w-100" src="{{asset($related_post->image)}}" alt="country">
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
               @foreach ($more_datas as $item)
               <div class="col-md-4 col-sm-12">
                  <div class="news-col mx-2 m-lg-0">
                     <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                        <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="country">
                        <p class="py-2 fw-medium lh-sm">{{$item->title}}</p>
                     </a>
                  </div>
                  <!--news col-->
               </div>
               @endforeach

               <!--2nd col 4-->
            </div>
            <!-- -------------------------------------- more advertisment ---------------------------------------------------- -->
            
            {{-- <div class="row mt-3 more-advertisment">
              <div class="col-md-3 post-ads">
                 <a class="ads-link" href="#">
                 <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
                 </a>
              </div>
              <!--2nd col 3-->
           </div><!--row--> --}}


            {{-- <div class="row mt-3 more-advertisment ">
               <h3 class="ads-title py-4 mt-5">You may know</h3>
               <div class="more-big-ads d-grid">
                  <div class=" big-ads">
                      <a class="ads-link" href="#">
                          <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
                      </a>
                  </div>
               </div>
            </div> --}}

         </div>
         <!--col-lg-9-->
         <div class="col-lg-3 jatiyo-page-left">
            <div class="post-right">   
               <!-- ---------------------------------------------------ads -------------------------------------------------------->

               <div class="advertisment text-white d-none d-lg-block post-page-advertisment">
                  <a class="ads-link" href="#">
                  <img src="{{url('frontend/img/AdsLogo.png')}}" alt="">
                  </a>
               </div>

               <div class="section-title d-flex justify-content-between align-items-center py-2">
                  <h4 class="m-0 py-2">আপনার জন্য</h4>
               </div>
               <div class="post-news-left-main jatiyo-page-news-left some-rajniti recent-post-details bg-white more-news">
                  
                  @foreach ($for_you_datas as $item)
                  <div class="recent-news border-bottom py-2">
                     <a class="d-flex align-items-md-start" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                        <img class="img-fluid me-3" src="{{asset($item->image)}}" alt="">
                        <p class="m-0 fw-medium">{{$item->title}}</p>
                     </a>
                  </div>
                  @endforeach

               </div>
               <!--jatiyo-page-news-left-->
               <!-- jatiyo থেকে আরো -->
               <div class="section-title d-flex justify-content-between align-items-center py-2">
                  <h4 class="m-0 py-2">{{$post->categories->first()->name}} থেকে আরো</h4>
               </div>
               <div class="post-news-left-main jatiyo-page-news-left some-rajniti recent-post-details bg-white more-news">
                  @foreach ($related_posts_2 as $related_post)
                  <div class="recent-news border-bottom py-2">
                     <a href="{{url('news/'.$post->categories->first()->slug.'/'.$related_post->id)}}" class="d-flex align-items-md-start">
                        <img class="img-fluid me-3" src="{{asset($related_post->image)}}" alt="">
                        <p class="m-0 fw-medium">{{$related_post->title}}</p>
                     </a>
                  </div>
                  @endforeach
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