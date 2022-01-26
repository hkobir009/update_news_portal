<!-- ---------------------------------------------------- Health section------------------------------------------------------------ -->
<section class="health more-news py-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('health')}}"><h1 class="m-0">স্বাস্থ্য</h1></a>
            <a class="more-read p-3" href="{{route('health')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div><!--section title-->
          <div class="health-news">
            <div class="sikkha-content d-flex flex-column">

              @foreach ($helth_sec_1_item as $item)
              <div class="saradesh-news-detail border-bottom saradesh-news mt-3 me-3 m-lg-0">
                <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid w-100" src="{{asset('post/'.$item->image)}}" alt="country">
                  <p class="py-2 fw-medium lh-sm">{{$item->title}}</p>
                </a>
              </div><!--saradesh-news-detail-->
              @endforeach

              <div class="sikkha-little d-flex flex-column">

                @foreach ($helth_sec_2_item as $item)
                <div class="recent-news more-news border-bottom">
                  <a class="d-flex align-items-md-start mt-3 pb-3" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}" width="100" height="75" alt="">
                  <p class="m-0 fw-medium">{{$item->title}}</p>
                  </a>
               </div>
               @endforeach
               
              </div>
            </div><!--sikkha content-->
          </div>
      </div><!--col-md-3-->
      <div class="col-lg-6">
        <div class="section-title d-flex justify-content-between align-items-center py-2">
          <a href="{{route('expatriate')}}"><h1 class="m-0">প্রভাস</h1></a>
          <ul class="m-0 p-0 d-flex">
            <li class="mx-4"><a class="text-black" href="{{route('expatriate')}}">যুক্তরাষ্ট্র</a></li>
            <li class="mx-4"><a class=" text-black" href="{{route('expatriate')}}">কানাডা</a></li>
            <li class="mx-4"><a class=" text-black" href="{{route('expatriate')}}">যুক্তরাজ্য</a></li>
            <li class="mx-4"><a class=" text-black active" href="{{route('expatriate')}}">সকল</a></li>
          </ul>
          <a class="more-read p-3" href="{{route('expatriate')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="saradesh-second-col mt-sm-3 m-md-0">

              @foreach ($probas_sec_1_item as $item)
              <div class="recent-news border-bottom mt-3">
                <a class="d-flex justify-content-start align-items-md-start pb-3" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}" width="100" height="75" alt="">
                  <p class="m-0 fw-medium">{{$item->title}}</p>
                </a>
              </div>
             @endforeach

            </div>
          </div><!--inside col 6-->
          <div class="col-md-6">
            <div class="saradesh-second-col">

            @foreach ($probas_sec_2_item as $item)
              <div class=" recent-news border-bottom mt-3">
                <a class=" d-flex justify-content-start align-items-md-start pb-3  " href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}" width="100" height="75" alt="">
                  <p class="m-0 fw-medium">{{$item->title}}</p>
                </a>
              </div>
             @endforeach

            </div><!--saradesh second col-->
          </div><!--inside col 6-->
        </div><!--inside row-->
      </div><!--col-md-6-->
      <div class="col-lg-3">
        <div class="section-title d-flex justify-content-between align-items-center py-2">
          <a href="{{route('courtoflaw')}}"><h1 class="m-0">আইন আদালত</h1></a>
          <a class="more-read p-3" href="{{route('courtoflaw')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
        </div><!--section title-->
  
        <div class="sikkha-content d-flex flex-column">
          @foreach ($law_sec_1_item as $item)
          <div class="saradesh-news-detail border-bottom saradesh-news mt-3 me-3 m-lg-0">
            <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
              <img class="img-fluid w-100" src="{{asset('post/'.$item->image)}}" alt="country">
              <p class="py-2 fw-medium lh-sm">{{$item->title}}</p>
            </a>
          </div><!--saradesh-news-detail-->
          @endforeach

          <div class="sikkha-little d-flex flex-column">

            @foreach ($law_sec_2_item as $item)
            <div class="recent-news more-news border-bottom">
              <a class="d-flex justify-content-start align-items-md-start pb-3 mt-3" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
              <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}" width="100" height="75" alt="">
              <p class="m-0 fw-medium">{{$item->title}}</p>
              </a>
           </div>
             @endforeach
           
          </div>
        </div><!--sikkha content-->
      </div><!--col-md-3-->
      </div>
    </div><!--container-->
  </section><!--Health section end-->