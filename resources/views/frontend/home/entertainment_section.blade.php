<section class="binodon-section saradesh-news">
    <div class="container">
      <div class="section-title d-flex justify-content-between align-items-center py-2">
        <a href="#"><h1 class="m-0">বিনোদন</h1></a>
        <ul class="m-0 p-0 d-flex">
          <li class="mx-4"><a class="text-black" href="#"></a></li>
          <li class="mx-4"><a class=" text-black" href="#">বলিউড</a></li>
          <li class="mx-4"><a class=" text-black" href="#">হলিউড</a></li>
          <li class="mx-4"><a class=" text-black" href="#">ঢালিউড</a></li>
          <li class="mx-4"><a class=" text-black active" href="#">সকল</a></li>
        </ul>
        <a class="more-read p-3" href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <div class="row mt-3">
        <div class="col-lg-3">
          <div class="binodon-content d-flex flex-column">
             <div class="top-big-news border-bottom mt-sm-3 me-sm-3 m-lg-0">

            @foreach ($entertainment_sec_3_item as $item)
            <div class="saradesh-news-detail border-bottom mt-sm-3 me-sm-3 m-lg-0">
              <a href="#">
                <img class="img-fluid w-100" src="{{asset('post/'.$item->image)}}" alt="country">
                <p class="py-2 m-0 fw-medium lh-sm">{{$item->title}}</p>
              </a>
            </div>
            @endforeach

             </div>
              <div class="binodon-little">
                <div class="top-left bg-white">

                  @foreach ($entertainment_sec_4_item as $item)
              <div class="news py-3 border-bottom">
                <a href="#" class="d-flex">
                  <img src="{{asset('post/'.$item->image)}}" width="110" height="75px" alt="dr Murad" class="newsimg me-3">
                  <h3 class="lh-base fw-medium text-black m-0" href="#">{{$item->title}}</h3>
                </a>
              </div><!--news end-->
              @endforeach
               
                </div>
              </div>
          </div>
        </div><!--col-md-3-->
        <div class="col-lg-6">
          <div class="image-gallery binodon-gallery d-grid h-100 pb-4">

            @foreach ($entertainment_sec_1_item as $item)
            <div class="image-with-datails position-relative grid-item1 overflow-hidden">
              <a class="h-100" href="#">
                <img src="{{asset('post/'.$item->image)}}" alt="" class="img-fluid h-100">
                <p class="position-absolute image-info text-white m-0">{{$item->title}}</p>
              </a>
            </div>
            @endforeach

            @foreach ($entertainment_sec_2_item as $item)
            <div class="image-with-datails position-relative overflow-hidden">
              <a href="#">
                <img src="{{asset('post/'.$item->image)}}" alt="" class="img-fluid h-100">
                <p class="position-absolute image-info text-white m-0">{{$item->title}}</p>
              </a>
            </div>
            @endforeach

          </div>
        </div><!--col-md-6-->
        <div class="col-lg-3">
          <div class="binodon-right binodon-content d-flex flex-column">

            @foreach ($entertainment_sec_5_item as $item)
            <div class="saradesh-news-detail border-bottom mt-sm-3 me-sm-3 m-lg-0">
              <a href="#">
                <img class="img-fluid w-100" src="{{asset('post/'.$item->image)}}" alt="country">
                <p class="py-2 m-0 fw-medium lh-sm">{{$item->title}}</p>
              </a>
            </div>
            @endforeach

            <div class="binodon-right-little-news">

              @foreach ($entertainment_sec_6_item as $item)
              <div class="news py-3 border-bottom">
                <a href="#" class="d-flex">
                  <img src="{{asset('post/'.$item->image)}}" width="110" height="75px" alt="dr Murad" class="newsimg me-3">
                  <h3 class="lh-base fw-medium text-black m-0" href="#">{{$item->title}}</h3>
                </a>
              </div><!--news end-->
              @endforeach
            
            </div>
          </div>
        </div>
      </div>
    </div><!--container-->
  </section>