<!-- -----------------------------------------------------Saradesh-section ------------------------------------------------------------------ -->
<div class="Saradesh-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <!-- --------------------------------------------- section-title reusable html --------------------------------------------------- -->
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('holeWorld')}}"><h1 class="m-0">সারাদেশ</h1></a>
            <a class="more-read p-3" href="{{route('holeWorld')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="row mt-3">
            <div class="col-md-4">
              <div class="saradesh-news bg-white more-news d-flex flex-column justify-content-between h-100">
                
                @foreach ($holeWorld_sec_1_item as $item)
                <div class="saradesh-news-detail mb-sm-4 mb-lg-0">
                  <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                    <img class="img-fluid my-sm-4 my-md-0 w-100" src="{{asset('post/'.$item->image)}}" alt="country">
                    <p class="py-2 fw-medium lh-sm">{{$item->title}}</p>
                  </a>
                </div><!--saradesh-news-detail-->
                @endforeach

              </div>
            </div><!--inside col md 4--->
            <div class="col-md-4">
              <div class="saradesh-second-col mt-sm-3 mt-md-0">

                @foreach ($holeWorld_sec_2_item as $item)
                <div class="recent-news border-bottom mt-3 pb-3">
                  <a class="d-flex justify-content-start align-items-md-start" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                    <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}"alt="">
                    <p class="m-0 fw-medium">{{$item->title}}</p>
                  </a>
                </div>
                @endforeach
  
              </div>
            </div><!--inside col 4-->
            <div class="col-md-4 remove-border-end border-end">
              <div class="saradesh-second-col">

                @foreach ($holeWorld_sec_3_item as $item)
                <div class=" recent-news border-bottom mt-3 pb-3">
                  <a class=" d-flex justify-content-start align-items-md-start  " href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                    <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}"alt="">
                    <p class="m-0 fw-medium">{{$item->title}}</p>
                  </a>
                </div>
                @endforeach

              </div>
            </div><!--inside col 4-->
          </div><!--inside row-->
        </div><!--outside col - 9-->
        <div class="col-lg-3 col-md-12">
          <div class="area-news">
            <div class="section-title text-center py-2">
              <p class="more-read">আপনার এলাকার খবর</p>
            </div>
            <form class="mt-3" action="">
              <select class="w-100 px-3 py-2 rounded border mb-2" id="" name="area">
                <option class="border" selected>বিভাগ</option>
                <option class="border" value="Dhaka">ঢাকা</option>
                <option class="border" value="Sylet">সিলেট</option>
                <option class="border" value="Rangpur">রংপুর</option>
                <option class="border" value="Rajshahi">রাজশাহী</option>
                <option class="border" value="Khulna">খুলনা</option>
                <option class="border" value="Mymensingh">ময়মনসিংহ</option>
                <option class="border" value="Chattagram">চট্টগ্রাম</option>
                <option class="border" value="Barishal">বরিশাল</option>
              </select>
              <select class="w-100 py-2 px-3 rounded border my-2" id="" name="area">
                <option class="border" selected class="" value="জেলা">জেলা</option>
                <option class="border" value="Dhaka" value="">জেলা</option>
              </select>
              <select class="w-100 py-2 px-3 rounded border my-2" id="" name="area">
                <option class="border" selected class="" value="উপজেলা">উপজেলা</option>
                <option class="border" value="" value="">উপজেলা</option>
              </select>
              <div class="search-location text-center align-items-center w-100 p-2 px-3 rounded border my-2">
                খুজুন<i class="fas fa-search ms-2"></i>
              </div>
            </form>
          </div>
         <!------------------------ ads place -------------------------------------- -->
         @foreach ($adsData as $adsDatas)
         <div class="advertisment w-100 my-3">
          <a class="ads-link" target="_blank" href="{{$adsDatas->hole_world_img_target_url}}">
            <img src="{{$adsDatas->hole_world_img_url}}" alt="">
          </a>
        </div>
        @endforeach
        </div><!--outside col-md-3-->
      </div><!--row---->
    </div><!--container---->
  </div>