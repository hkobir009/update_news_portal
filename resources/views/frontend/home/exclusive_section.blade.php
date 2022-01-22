<!-- ------------------------------------------------------- exclusive section----------------------------------------------------- -->
<section class="exclusive-section binodon-section saradesh-news">
    <div class="container">
      <div class="section-title d-flex justify-content-between align-items-center py-2">
        <a href="#"><h1 class="m-0">এক্সক্লুসিভ</h1></a>
        <a class="more-read p-3" href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <div class="row">
        
        @foreach ($exclusive_sec_1_item as $item)
        <div class="col-lg-3 col-sm-6">
          <div class="saradesh-news-detail saradesh-news m-md-0 mt-3 me-3">
            <a href="#">
                <img class="img-fluid" src="{{asset('post/'.$item->image)}}" alt="country" style="height:15rem !important ">
              <p class="p-3 fw-medium lh-sm exclusive-info">{{$item->title}}</p>
            </a>
          </div><!--exclusive news-->
        </div><!--col-md-3-->
        @endforeach
      
      </div><!--row-->
    </div><!--container-->
  </section>
  