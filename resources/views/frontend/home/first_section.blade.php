<section class="first-section mt-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="top-left onehundrad d-none d-lg-block">

          @foreach ($frist_sec_3_item as $item)
            <div class="news py-3 border-bottom">
              <a href="{{url('/'.$item->categories->first()->slug.'/'.$item->id)}}" class="d-flex">
                <img src="{{asset('post/'.$item->image)}}"  class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0" href="#">{{$item->title}}</h3>
              </a>
            </div><!--news end-->
            @endforeach

          <!----------- ads place for Frist page left side-------------- -->
          @foreach ($adsData as $adsDatas)
          <div class="advertisment w-100 my-3">
            <a class="ads-link" target="_blank" href="{{$adsDatas->first_left_img_target_url}}">
              <img src="{{$adsDatas->first_left_img_url}}" alt="">
            </a>
          </div>
          @endforeach
          
        </div>
      </div><!--col-md-3-->
      <div class="col-lg-6  col-md-12">
        <div class="big-news-top">
          <div class="top-middle border-bottom border-3 mb-3 mb-lg-0">

            @foreach ($frist_sec_1_item as $item)
              <div class="news-item">
                <a href="#">
                  <img src="{{asset('post/'.$item->image)}}" alt="" width="100%">
                  <h1 class="m-0 title my-3 fw-medium">{{$item->title}}</h1></a>
                  <p class="m-0 lh-sm pt-2 pb-4 text-black fw-medium">
                    {{Str::limit($item->body,150)}}
                  </p>
              </div>
              @endforeach

          </div>
           <div class="top-left little-news-inside-big onehundrad d-flex my-2 mb-lg-0">
             
            @foreach ($frist_sec_2_item as $item)
              <div class="news py-2">
                <a href="#" class="d-flex border-end border-3 pe-2">
                  <img src="{{asset('post/'.$item->image)}}" width="110" height="75px" alt="dr Murad" class="newsimg me-3">
                  <h3 class="lh-base fw-medium text-black m-0" href="#">{{$item->title}}</h3>
                </a>
              </div><!--news end-->
              @endforeach
           
           </div>
        </div><!--big-news-top-->
      </div><!--col-md-6-->
      <!-- ---------------------------------------md-show and lg-none ------------------------------------------------>
      <!-- ---------------------------------------md-show and lg-none ------------------------------------------------>
      <div class="col-lg-3 col-md-12 d-lg-none">
        <div class="top-left onehundrad d-block d-lg-none">

           @foreach ($frist_sec_3_item as $item)
            <div class="news py-3 border-bottom">
              <a href="#" class="d-flex">
                <img src="{{asset('post/'.$item->image)}}" alt="" class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0">{{$item->title}}</h3>
              </a>
            </div><!--news end-->
            @endforeach

  
          <!------------------------ ads place for mobile-------------------------------------- -->
          @foreach ($adsData as $adsDatas)
          <div class="advertisment w-100 bg-danger text-white mt-3">
            <a class="ads-link" target="_blank" href="{{$adsDatas->first_left_img_target_url}}">
              <img src="{{$adsDatas->first_left_img_url}}" alt="">
            </a>
          </div>
          @endforeach
          <!-- ---------------------------------------md-show and lg-none ------------------------------------------------>
        </div>
      </div><!--col-md-3-->
      <!------------------------ ads place for Our Advertisment -------------------------------------- -->
      <div class="col-lg-3 col-md-12">
        @foreach ($adsData as $adsDatas)
        <div class="ads" style="height: 10rem; width: 100%;">
          <a class="ads-link" href="{{$adsDatas->our_advertisement_target_url}}">
            <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
          </a>
        </div>
        @endforeach
        <div class="top-right">
          <!-- ================================================ reusblae html ======================================================= -->
          <div class="section-title d-flex justify-content-between align-items-center px-3 py-4">
            <a href="{{route('fromFacebookPage')}}"><h2 class="m-0">ফেসবুক পাতা থেকে</h2></a>
            <a href="{{route('fromFacebookPage')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="mini-testimonial p-3 d-flex border-bottom">
            <img class="rounded-circle me-3" src="img/man.jpg" alt="ড. কুদরত-ই-হুদা" width="90" height="90">
            <div class="info">
              <a href="#">
                <h3 class="m-0 fw-medium py-2">‘বেখাপ্পা’ মওলানা ভাসানী</h3>
                <span>ড. কুদরত-ই-হুদা</span>
              </a>
            </div>
          </div>
        </div>
        <!------------------------ ads place for fast page right side-------------------------------------- -->
        @foreach ($adsData as $adsDatas)
        <div class="advertisment w-100 text-white my-3">
          <a class="ads-link" href="{{$adsDatas->first_right_img_target_url}}">
            <img src="{{$adsDatas->first_right_img_url}}" alt="">
          </a>
        </div>
       @endforeach
      </div>
    </div>
  </div><!--container-->
</section>

