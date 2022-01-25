<!-- --------------------------------------------------- antorjatik section ---------------------------------------------------------------- -->
<section class="antorjatik">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('international')}}"><h1 class="m-0">আন্তর্জাতিক</h1></a>
            <a class="more-read p-3" href="{{route('international')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div><!--section title-->
          <div class="row">
            <div class="col-md-6">
              <div class="antorjatik-left saradesh-news h-100 more-news d-flex flex-column justify-content-between bg-white">
                
                @foreach ($international_sec_1_item as $item)
                <div class="top-big-news">
                  <div class="saradesh-news-detail">
                    <a href="{{url('/'.$item->categories->first()->slug.'/'.$item->id)}}">
                      <img class="img-fluid" src="{{asset('post/'.$item->image)}}" alt="country">
                      <p class="py-2 fw-medium lh-sm m-0">{{$item->title}}</p>
                    </a>
                  </div><!--saradesh-news-detail-->
                </div><!--top-big-news-->
                @endforeach
             
              </div>
            </div><!-- inside-col-md-6-->
            <div class="col-md-6 border-end antorjatik-border">
              <div class="antorjatik-left-second more-news bg-white mt-4 mt-md-0">

                @foreach ($international_sec_2_item as $item)
                <div class="recent-news border-bottom py-3">
                  <a class="d-flex justify-content-start align-items-md-start" href="{{url('/'.$item->categories->first()->slug.'/'.$item->id)}}">
                    <img class="img-fluid me-3 w-100" src="{{asset('post/'.$item->image)}}" width="110" height="75" alt="">
                    <p class="m-0 fw-medium">{{$item->title}}</p>
                  </a>
                </div>
                @endforeach
                
              </div><!--antorjatik-left-second-->
            </div><!-- inside-col-md-5-->
          </div><!--inside row--></div><!--outside col-md-5-->
        <div class="col-lg-6">
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('economy')}}"><h1 class="m-0">অর্থনীতি</h1></a>
            <ul class="m-0 p-0 d-flex">
              <li class="mx-4"><a class="text-black" href="{{route('bank')}}">ব্যাংক</a></li>
              <li class="mx-4"><a class=" text-black" href="{{route('insurance')}}">বীমা</a></li>
              <li class="mx-4"><a class=" text-black" href="{{route('stockMarket')}}">শেয়ার বাজার</a></li>
              <li class="mx-4"><a class=" text-black active" href="{{route('economy')}}">সকল</a></li>
            </ul>
            <a class="more-read p-3" href="{{route('economy')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div><!-- section title-->
          <div class="row more-news bg-white">
              <div class="col-md-6">
                <div class="antorjatik-right d-flex justify-content-between flex-column h-100">
                  
                  @foreach ($economy_sec_1_item as $item)
                  <div class="top-big-news mb-md-4">
                    <div class="saradesh-news-detail">
                      <a href="{{url('/'.$item->categories->first()->slug.'/'.$item->id)}}">
                        <img class="img-fluid w-100" src="{{asset('post/'.$item->image)}}" alt="country">
                        <p class="py-2 fw-medium lh-sm m-0">{{$item->title}}</p>
                      </a>
                    </div><!--saradesh-news-detail-->
                  </div>
                  @endforeach
            
                </div>
              </div><!--inside col-md-6-->
              <div class="col-md-6">
                <div class="antorjatik-last">

                  @foreach ($economy_sec_2_item as $item)
                    <div class="recent-news border-bottom py-3">
                      <a class="d-flex justify-content-start align-items-md-start" href="{{url('/'.$item->categories->first()->slug.'/'.$item->id)}}">
                        <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}" width="100" height="75" alt="">
                        <p class="m-0 fw-medium">{{$item->title}}</p>
                      </a>
                    </div>
                    @endforeach

                </div><!--antorjatik-last-->
              </div><!--inside col-md-6-->
          </div><!--inside-row-->
        </div><!--outside col-md-5 -->
      </div><!--outside row -->
    </div>
  </section><!--antorjatik section end-->