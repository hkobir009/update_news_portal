<section class="first-section mt-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="top-left onehundrad d-none d-lg-block">

          @foreach ($frist_sec_3_item as $item)
            <div class="news py-3 border-bottom">
              <a href="#" class="d-flex">
                <img src="{{asset('post/'.$item->image)}}"  class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0" href="#">{{$item->title}}</h3>
              </a>
            </div><!--news end-->
            @endforeach

          <!------------------------ ads place -------------------------------------- -->
          <div class="advertisment w-100 bg-danger my-3">
            <a class="ads-link" target="_blank" href="https://googleads.g.doubleclick.net/pcs/click?xai=AKAOjst0DMPecqPFm9u2w6geaL1sPLoNH_b6hvVMp1n_S1Uy116Qkn68QJSVuKQyTH9u41H1FDQqceivrJNXEB-38tKib8wGTMJa8I8Zewcn6dTfxCEJaKwQHDAZ-bAZyuLedhQ5LYeXhHqWBFN_KRH_6NZ709lRtg9jtkZLUzsbQQsqtRS0eWK1rz0GnYw8yNBvVZb41WVzrBApjXcy7eBecCE2pFTRY_GzxZnwp6jYjOfkTsnXCzKE6Hm91YrJdmdv8OgK_VRb4FZnpLThGbMQPuAbDz0bMiYBotGoUqc65VP6booQoHSXyJ9FUOxNYcZrWZuh&sai=AMfl-YRMWa6cwFEf3k8YGi-zAwgtKK2zEedBX2t26TW0jO12zG8L6sQExLw6nSappOqmLMBBWzoee4Xu3MkIDQrXsGMEr0zd25r8bbC9Dsc-IwRo7g_dvmo47jhkub_iK01SACtB&sig=Cg0ArKJSzDtr4z4FWC8-&fbs_aeid=[gw_fbsaeid]&adurl=https://usbmch.com/welcome/&nm=7&nx=33&ny=-114&mb=2&clkt=83">
              <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
            </a>
          </div>

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

  
          <!------------------------ ads place -------------------------------------- -->
          <div class="advertisment w-100 bg-danger text-white mt-3">
            <a class="ads-link" href="#">
              <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
            </a>
          </div><!-- ---------------------------------------md-show and lg-none ------------------------------------------------>
        </div>
      </div><!--col-md-3-->
      <div class="col-lg-3 col-md-12">
        
        <div class="ads" style="height: 10rem; width: 100%;"><!------------------------ ads place -------------------------------------- -->
          <a class="ads-link" href="#">
            <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
          </a>
        </div>
        <div class="top-right">
          <!-- ================================================ reusblae html ======================================================= -->
          <div class="section-title d-flex justify-content-between align-items-center px-3 py-4">
            <a href="#"><h1 class="m-0">মতামত</h1></a>
            <a href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
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
        <!------------------------ ads place -------------------------------------- -->
        <div class="advertisment w-100 bg-danger text-white my-3">
          <a class="ads-link" href="#">
            <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
          </a>
        </div>
      </div>
    </div>
  </div><!--container-->
</section>



{{-- <section class="first-section mt-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="top-left onehundrad d-none d-lg-block">

            @foreach ($frist_sec_3_item as $item)
            <div class="news py-3 border-bottom">
              <a href="#" class="d-flex">
                <img src="{{asset('post/'.$item->image)}}"  class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0" href="#">{{$item->title}}</h3>
              </a>
            </div><!--news end-->
            @endforeach

            <!------------------------ ads place -------------------------------------- -->
            <div class="advertisment w-100 bg-danger my-3">
              <a class="ads-link" href="#">
                <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
              </a>
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
          </div>
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
          
            <!------------------------ ads place -------------------------------------- -->
            <div class="advertisment w-100 bg-danger text-white mt-3">
                <h1 class="text-center">Ads here 2</h1>
            </div><!-- ---------------------------------------md-show and lg-none ------------------------------------------------>
          </div>
        </div><!--col-md-3-->
        <div class="col-lg-3 col-md-12">
          
          <div class="ads" style="height: 10rem; width: 100%;"><!------------------------ ads place -------------------------------------- -->
            <img class="img-fluid w-100" src="{{asset('frontend/img/ads.webp')}}" alt="Only For us">
          </div>
          <div class="top-right">
            <!-- ================================================ reusblae html ======================================================= -->
            <div class="section-title d-flex justify-content-between align-items-center px-3 py-4">
              <a href="#"><h1 class="m-0">মতামত</h1></a>
              <a href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <div class="mini-testimonial p-3 d-flex border-bottom">
              <img class="rounded-circle me-3" src="{{asset('frontend/img/man.jpg')}}" alt="ড. কুদরত-ই-হুদা" width="90" height="90">
              <div class="info">
                <a href="#">
                  <h3 class="m-0 fw-medium py-2">‘বেখাপ্পা’ মওলানা ভাসানী</h3>
                  <span>ড. কুদরত-ই-হুদা</span>
                </a>
              </div>
            </div>
          </div>
          <!------------------------ ads place -------------------------------------- -->
          <div class="advertisment w-100 bg-danger text-white my-3">
              <h1>Ads here 4</h1>
          </div>
        </div>
        
      </div>
    </div><!--container-->
  </section> --}}