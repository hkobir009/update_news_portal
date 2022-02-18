<section class="last-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('lifestyle')}}"><h1 class="m-0">লাইফস্টাইল</h1></a>
            <a class="more-read p-3" href="{{route('lifestyle')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div><!--section title-->
          <div class="last-section-img health-news">
            <div class="sikkha-content">

              @foreach ($life_style_sec_1_item as $item)
              <div class="saradesh-news-detail boreder-bottom more-news bg-white">
                <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="country">
                  <p class="fw-medium lh-sm">{{$item->title}}</p>
                </a>
              </div>
              @endforeach

            </div><!--sikkha content-->
          </div>
          <div class="sikkha-little d-flex flex-column border-top pt-4">

            @foreach ($life_style_sec_2_item as $item)
            <div class="recent-news more-news bg-white border-bottom">
              <a class="d-flex justify-content-start align-items-md-start pb-3 mt-3" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
              <img class="img-fluid me-3" src="{{asset($item->image)}}" width="100" height="75" alt="">
              <p class="m-0 fw-medium">{{$item->title}}</p>
              </a>
           </div>
           @endforeach

          </div>
        </div><!--col-md-3-->
        <div class="col-lg-3 col-sm-6">
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('informationTechnology')}}"><h1 class="m-0">তথ্যপ্রযুক্তি</h1></a>
            <a class="more-read p-3" href="{{route('informationTechnology')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div><!--section title-->
          <div class="last-section-img health-news">
            <div class="sikkha-content">

              @foreach ($information_sec_1_item as $item)
              <div class="saradesh-news-detail boreder-bottom more-news bg-white">
                <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="country">
                  <p class="fw-medium lh-sm">{{$item->title}}</p>
                </a>
              </div><!--saradesh-news-detail-->
              @endforeach

            </div><!--sikkha content-->
          </div>
          <div class="sikkha-little d-flex flex-column border-top pt-4">

            @foreach ($information_sec_2_item as $item)
            <div class="recent-news more-news border-bottom bg-white">
              <a class="d-flex justify-content-start align-items-md-start pb-3 mt-3" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
              <img class="img-fluid me-3" src="{{asset($item->image)}}" width="100" height="75" alt="">
              <p class="m-0 fw-medium">{{$item->title}}</p>
              </a>
           </div>
           @endforeach

          </div>
        </div><!--col-md-3-->
        <div class="col-lg-3 col-sm-6">
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('artAndLiterature')}}"><h1 class="m-0">শিল্প ও সাহিত্য</h1></a>
            <a class="more-read p-3" href="{{route('artAndLiterature')}}">আরো পড়ুন<i class="fas fa-arrow-circle-right"></i></a>
          </div><!--section title-->
          <div class="last-section-img health-news">
            <div class="sikkha-content">

              @foreach ($artAndLiterature_sec_1_item as $item)
              <div class="saradesh-news-detail boreder-bottom more-news bg-white">
                <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="country">
                  <p class="fw-medium lh-sm">{{$item->title}}</p>
                </a>
              </div><!--saradesh-news-detail-->
              @endforeach

            </div><!--sikkha content-->
          </div>
          <div class="sikkha-little d-flex flex-column border-top pt-4">

            @foreach ($artAndLiterature_sec_2_item as $item)
            <div class="recent-news more-news bg-white border-bottom">
              <a class="d-flex justify-content-start align-items-md-start pb-3 mt-3" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
              <img class="img-fluid me-3" src="{{asset($item->image)}}" width="100" height="75" alt="">
              <p class="m-0 fw-medium">{{$item->title}}</p>
              </a>
           </div>
           @endforeach

          </div>
        </div><!--col-md-3-->
        <div class="col-lg-3 col-sm-6">
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="{{route('jobs')}}"><h1 class="m-0">জবস</h1></a>
            <a class="more-read p-3" href="{{route('jobs')}}">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div><!--section title-->
          <div class="last-section-img health-news">
            <div class="sikkha-content">

              @foreach ($jobs_sec_1_item as $item)
              <div class="saradesh-news-detail boreder-bottom more-news bg-white">
                <a href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
                  <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="country">
                  <p class="fw-medium lh-sm">{{$item->title}}</p>
                </a>
              </div><!--saradesh-news-detail-->
              @endforeach

            </div><!--sikkha content-->
          </div>
          <div class="sikkha-little d-flex flex-column border-top pt-4">

            @foreach ($jobs_sec_2_item as $item)
            <div class="recent-news more-news bg-white border-bottom">
              <a class="d-flex justify-content-start align-items-md-start pb-3 mt-3" href="{{url('news/'.$item->categories->first()->slug.'/'.$item->id)}}">
              <img class="img-fluid me-3" src="{{asset($item->image)}}" width="100" height="75" alt="">
              <p class="m-0 fw-medium">{{$item->title}}</p>
              </a>
           </div>
           @endforeach

          </div>
        </div><!--col-md-3-->
      </div><!--row-->
    </div><!--container-->
  </section>