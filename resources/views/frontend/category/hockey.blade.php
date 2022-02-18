@extends('frontend.layouts.app')
@section('content')
<section class="jatiyo-page-top leatest-section pb-5 pt-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
            <a href="#" class="py-1 pt-3 d-block">
              <h1 class="jatiyo-page-title border-bottom">হকি</h1>
            </a>
            {{-- <div class="jatiyo-page-top-buttons d-flex border-bottom border-3 pb-4 my-2">
              <button class="jatiyo-page-btn btn px-2 me-2 py-2 fw-medium">করোনাভাইরাস</button>
              <button class="jatiyo-page-btn btn px-2 mx-2 py-2 fw-medium">রাজধানীর খবর</button>
              <button class="jatiyo-page-btn btn px-2 mx-2 py-2 fw-medium">জাতীয় সংসদ</button>
              <button class="jatiyo-page-btn btn px-2 mx-2 py-2 fw-medium">চট্টগ্রামের খবর</button>
            </div> --}}
          <div class="row border-bottom pb-md-4">
            <div class="col-lg-8 ">
              <div class="big-news-top">
                <div class="top-middle mb-3 mb-lg-0">

                  @foreach ($hockey_sec_1_item as $item)
                  <div class="news-item">
                    <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                      <img class="img-fluid w-100" src="{{asset($item->image)}}">
                      <h1 class="m-0 title my-3 fw-medium">{{$item->title}}</h1>
                    </a>
                  </div>
                  @endforeach

                </div>
              </div>
              <!--big-news-top-->
            </div>
            <!--col-lg-6-->
            <div class="col-lg-4">
              <div class="jatiyo-page-two-little  d-flex flex-column justify-content-between">
                
                @foreach ($hockey_sec_2_item as $item)
                <div class="top-little-news p-0 py-3 py-sm-0 pe-sm-2 border-bottom">
                  <a class="mt-3 d-block" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid" src="{{asset($item->image)}}" alt="">
                  <p>{{$item->title}}</p>
                  </a>
                </div>
                @endforeach

              </div>
            </div>
            <!--col-lg-4-->
          </div>
          <!--inner-row-->
          <div class="row mt-3">

            @foreach ($hockey_sec_3_item as $item)
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
          <!--2nd row-->
          <button class="btn read-more-btn m-auto d-block px-5 py-2">আরো পড়ুন</button>
        </div>
        <!--col-lg-9-->
        <div class="col-lg-3 jatiyo-page-left">

          <div class="advertisment bg-danger text-white d-none d-lg-block">
            <a class="ads-link" href="#">
              <img src="https://tpc.googlesyndication.com/simgad/16764916647907720142" alt="">
            </a>
          </div>

          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <h4 class="m-0 py-2">এই সপ্তাহের পাঠকপ্রিয়</h4>
          </div>
          <div class="jatiyo-page-news-left some-rajniti recent-post-details bg-white more-news">
            @foreach ($letest_datas as $item)
            <div class=" recent-news border-bottom py-2">
              <a class=" d-flex align-items-md-start" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                <img class="img-fluid me-3" src="{{asset($item->image)}}" alt="">
                <p class="m-0 fw-medium">{{$item->title}}</p>
              </a>
            </div>
            @endforeach
          </div>
          <!--jatiyo-page-news-left-->
        </div>
        <!--col-lg-3-->
      </div>
      <!--row-->
    </div>
  </section>
  
  @endsection