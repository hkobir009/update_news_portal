<!-- ===================================================== More news ========================================================================== -->
<section class="more-news my-5 py-4">
    <div class="container">
      <div class="row">
       <div class="col-lg-9 m-0 p-0">
        <div class="row">

          @foreach ($secound_sec_item_1 as $item)
          <div class="col-md-4 col-sm-12">
            <div class="news-col mx-2 m-lg-0">
              <a href="{{url('/'.$item->categories->first()->slug.'/'.$item->id)}}">
                <img class="img-fluid w-100" src="{{asset('post/'.$item->image)}}" alt="country">
                <p class="py-2 fw-medium lh-sm">{{$item->title}}</p>
              </a>
            </div><!--news col-->
          </div><!--2nd col 4-->
          @endforeach

        </div><!--2nd row-->


       </div><!--main column-9-->
       <div class="col-lg-3"><!--main col-md-3-->
        <div class="last-recent position-relative">
            <div class="overflow-scroll h-100">
              <div class="nav nab-tabs flex-nowrap recent-top d-flex justify-content-between w-100 position-absolute border">
                <a data-bs-toggle="tab" data-bs-target="#Sorboses" class="nab-link active-nav-link m-0 p-0 py-3 text-center w-100 active" href="#" class="last">সর্বশেষ</a>
                <a data-bs-toggle="tab" data-bs-target="#Sorbadhik" type="button" class="nab-link active-nav-link m-0 p-0 py-3 text-center w-100" href="#" class="last">সর্বাধিক পঠিত</a>
              </div><!--recent top-->
              <div class="tab-content">
                <div class="tab-pane fade show active recent-post-details bg-white p-2" style="margin-top: 4.8rem" id="Sorboses">
                  
                  @foreach ($letest_datas as $item)
                  <div class="recent-news border-bottom">
                    <a class=" d-flex justify-content-start align-items-md-start mt-3" href="{{url('/'.$item->categories->first()->slug.'/'.$item->id)}}">
                      <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}" alt="">
                      <p class="m-0">{{$item->title}}</p>
                    </a>
                  </div>
                  @endforeach

                </div><!--recent post details-->
                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade show recent-post-details bg-white p-2" style="margin-top: 4.8rem" id="Sorbadhik">
                  
                  <div class="recent-news border-bottom">
                    <a class="d-flex justify-content-start align-items-md-start mt-3" href="#">
                      <img class="img-fluid me-3" src="{{asset('frontend/img/img1.webp')}}" alt="">
                      <p class="m-0">বাংলাদেশ </p>
                    </a>
                  </div>
                  

                </div><!--recent post details-->
              </div><!--tab-content 1-->
              <div class="recent-bottom d-flex justify-content-between position-absolute w-100">
                <a class="m-0 p-0 py-3 text-center w-100 fw-medium text-white" href="#" >আর্কাইভ</a>
              </div><!--recent bottom-->
            </div>
        </div>
         <!------------------------ ads place -------------------------------------- -->
         @foreach ($adsData as $adsDatas)
         <div class="advertisment w-100 my-3">
          <a class="ads-link" target="_blank" href="{{$adsDatas->secound_right_img_target_url}}">
            <img src="{{$adsDatas->secound_right_img_url}}" alt="">
          </a>
        </div>
        @endforeach
      </div><!--main row-->
    </div>
  </section>
  