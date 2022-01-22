<div class="jatiyo-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <!-- --------------------------------------------- section-title reusable html ------------------------------------------------------------ -->
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="#"><h1 class="m-0">জাতীয়</h1></a>
            <a class="more-read p-3" href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="row mt-3">
            <div class="col-md-8">
              <div class="image-gallery d-grid">

                @foreach ($national_sec_1_item as $item)
                <div class="image-with-datails position-relative">
                  <a href="#">
                    <img src="{{asset('post/'.$item->image)}}" alt="" class="img-fluid h-auto">
                    <p class="position-absolute image-info text-white lh-sm">{{$item->title}}</p>
                  </a>
                </div>
                @endforeach
                
              </div>
            </div><!--inside col md --->
            <div class="col-md-4 border-end remove-border-end border-2">
              <div class="without-image-news h-100">
                <div class="only-news d-flex flex-column justify-content-between h-100">

                  @foreach ($national_sec_2_item as $item)
                  <div class="px-3">
                    <a class="lh-sm fw-medium" href="#">{{$item->title}}</a>
                  </div>
                  <hr>
                  @endforeach

                </div>
              </div>
            </div><!--inside col 4-->
          </div><!--inside row-->
        </div><!--outside col - 9-->
        <div class="col-lg-3">
            <div class=" rajniti onehundrad">
              <div class="section-title d-flex justify-content-between align-items-center py-2">
                <a href="#"><h1 class="m-0">রাজনীতি</h1></a>
                <a class="more-read p-3" href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <div class="some-rajniti recent-post-details bg-white more-news d-flex justify-content-between flex-column h-100">
                
                @foreach ($politics_sec_1_item as $item)
                <div class=" recent-news border-bottom py-2">
                  <a class=" d-flex align-items-md-start" href="#">
                    <img class="img-fluid me-3" src="{{asset('post/'.$item->image)}}"alt="">
                    <p class="m-0 fw-medium">{{$item->title}}</p>
                  </a>
                </div>
                @endforeach

              </div>
            </div>
        </div><!--outside col-md-3-->
      </div>
    </div>
  </div>