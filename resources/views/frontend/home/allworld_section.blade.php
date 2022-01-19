<!-- -----------------------------------------------------Saradesh-section ------------------------------------------------------------------ -->
<div class="Saradesh-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <!-- --------------------------------------------- section-title reusable html --------------------------------------------------- -->
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="#"><h1 class="m-0">সারাদেশ</h1></a>
            <a class="more-read p-3" href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="row mt-3">
            <div class="col-md-4">
              <div class="saradesh-news bg-white more-news d-flex flex-column justify-content-between h-100">
                
                @foreach ($holeWorld_sec_1_item as $item)
                <div class="saradesh-news-detail mb-sm-4 mb-lg-0">
                  <a href="#">
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
                <div class="recent-news border-bottom pb-3">
                  <a class="d-flex justify-content-start align-items-md-start" href="#">
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
                <div class=" recent-news border-bottom pb-3">
                  <a class=" d-flex justify-content-start align-items-md-start  " href="#">
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
          <div class="advertisment w-100 bg-danger my-3">
            <a class="ads-link" target="_blank" href="https://googleads.g.doubleclick.net/pcs/click?xai=AKAOjst0DMPecqPFm9u2w6geaL1sPLoNH_b6hvVMp1n_S1Uy116Qkn68QJSVuKQyTH9u41H1FDQqceivrJNXEB-38tKib8wGTMJa8I8Zewcn6dTfxCEJaKwQHDAZ-bAZyuLedhQ5LYeXhHqWBFN_KRH_6NZ709lRtg9jtkZLUzsbQQsqtRS0eWK1rz0GnYw8yNBvVZb41WVzrBApjXcy7eBecCE2pFTRY_GzxZnwp6jYjOfkTsnXCzKE6Hm91YrJdmdv8OgK_VRb4FZnpLThGbMQPuAbDz0bMiYBotGoUqc65VP6booQoHSXyJ9FUOxNYcZrWZuh&sai=AMfl-YRMWa6cwFEf3k8YGi-zAwgtKK2zEedBX2t26TW0jO12zG8L6sQExLw6nSappOqmLMBBWzoee4Xu3MkIDQrXsGMEr0zd25r8bbC9Dsc-IwRo7g_dvmo47jhkub_iK01SACtB&sig=Cg0ArKJSzDtr4z4FWC8-&fbs_aeid=[gw_fbsaeid]&adurl=https://usbmch.com/welcome/&nm=7&nx=33&ny=-114&mb=2&clkt=83">
              <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
            </a>
          </div>
        </div><!--outside col-md-3-->
      </div><!--row---->
    </div><!--container---->
  </div>