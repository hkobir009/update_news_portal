<!-- --------------------------------------------------------- খেলা সেকশন --------------------------------------------------------------------- -->
<section class="sports-section jatiyo-section py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <!-- --------------------------------------------- section-title reusable html ------------------------------------------------- -->
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('sports')}}"><h1 class="m-0">খেলা</h1></a>
            <ul class="m-0 p-0 d-flex">
              <li class="mx-4"><a class="" href="{{route('cricket')}}">ক্রিকেট</a></li>
              <li class="mx-4"><a class="" href="{{route('football')}}">ফুটবল</a></li>
              <li class="mx-4"><a class="active" href="{{route('sports')}}">সকল</a></li>
            </ul>
            <a class="more-read p-3" href="{{route('sports')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="row mt-3">
            <div class="col-md-8">
              <div class="image-gallery d-grid">

                @foreach ($sports_sec_1_item as $item)
                <div class="image-with-datails position-relative">
                  <a href="#">
                    <img src="{{asset('post/'.$item->image)}}" alt="" class="img-fluid h-auto">
                    <p class="position-absolute image-info text-white m-0">{{$item->title}}</p>
                  </a>
                </div>
                @endforeach

                
              </div>
            </div><!--inside col md --->
            <div class="col-md-4">
              <div class="only-news mt-4 m-md-0 h-100 d-flex flex-column justify-content-between">
                
                @foreach ($sports_sec_2_item as $item)
                <div class="px-3">
                  <a class="lh-sm fw-medium" href="#">{{$item->title}}</a>
                </div>
                <hr>
                @endforeach

              </div>
            </div><!--inside col 4-->
          </div><!--inside row-->
        </div><!--outside col - 9-->
        <div class="col-lg-3">
          <div class="sikkha">
              <div class="section-title d-flex justify-content-between align-items-center py-2">
                <a href="{{route('education')}}"><h1 class="m-0">শিক্ষা</h1></a>
                <a class="more-read p-3" href="{{route('education')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <div class="sikkha-content d-flex flex-column">

                @foreach ($education_sec_1_item as $item)
                <div class="saradesh-news-detail border-bottom saradesh-news mt-3 me-3 m-lg-0">
                  <a href="#">
                    <img class="img-fluid w-100" src="{{asset('post/'.$item->image)}}" alt="country">
                    <p class="py-2 fw-medium lh-sm">{{$item->title}}</p>
                  </a>
                </div><!--saradesh-news-detail-->
                @endforeach

                <div class="sikkha-little d-flex flex-column">

                  @foreach ($education_sec_2_item as $item)
                  <div class="recent-news more-news border-bottom mt-3">
                    <a class="d-flex justify-content-start align-items-md-start pb-lg-3 mt-3 m-lg-0" href="#">
                    <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}" width="100" height="75" alt="">
                    <p class="m-0 fw-medium">{{$item->title}}</p>
                    </a>
                 </div>
                 @endforeach

                </div>
              </div>
            </div>
          </div>
        </div><!--outside col-md-3-->
      </div>
    </div>
  </section><!--sports section end-->