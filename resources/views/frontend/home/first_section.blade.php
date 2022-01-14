<section class="first-section mt-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="top-left onehundrad d-none d-lg-block">

            {{-- @foreach ($postDatas as $postData)
            <div class="news py-3 border-bottom">
              <a href="#" class="d-flex">
                <img src="{{$postData->image}}"  class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0" href="#">{{$postData->title}}</h3>
              </a>
            </div><!--news end-->
            @endforeach --}}

            <!------------------------ ads place -------------------------------------- -->
            <div class="advertisment w-100 bg-danger text-white my-3">
                <h1 class=" text-center">Ads here 1</h1></div>
          </div>
        </div><!--col-md-3-->
        <div class="col-lg-6  col-md-12">
          <div class="big-news-top">
            <div class="top-middle border-bottom border-3 mb-3 mb-lg-0">
              <div class="news-item">
                <a href="#">
                  <img src="{{asset('frontend/img/tornedo.webp')}}" alt="" width="100%">
                  <h1 class="m-0 title my-3 fw-medium">যুক্তরাষ্ট্রে ভয়াবহ টর্নেডোতে নিহত ছাড়াল ৮০</h1></a>
                  <p class="m-0 lh-sm pt-2 pb-4 text-black fw-medium">
                    শুক্রবার স্থানীয় সময় রাত ও ভোরের দিকে আঘাত হানা টর্নেডোকে যুক্তরাষ্ট্রের ইতিহাসের অন্যতম বৃহৎ বলে মন্তব্য করেছেন দেশটির প্রেসিডেন্ট জো বাইডেন।
                  </p>
              </div>
            </div>
             <div class="top-left little-news-inside-big onehundrad d-flex my-2 mb-lg-0">
              <div class="news py-2">
                <a href="#" class="d-flex border-end border-3 pe-2">
                  <img src="{{asset('frontend/img/corona.webp')}}" width="110" height="75px" alt="dr Murad" class="newsimg me-3">
                  <h3 class="lh-base fw-medium text-black m-0" href="#">আজ আগারগাঁও পর্যন্ত চলবে মেট্রো ট্রেন</h3>
                </a>
              </div><!--news end-->
              <div class="news py-2 ms-lg-3">
                <a href="#" class="d-flex">
                  <img src="{{asset('frontend/img/trani.webp')}}" width="110" height="75px" alt="dr Murad" class="newsimg my-2 me-3">
                  <h3 class="lh-base fw-medium text-black m-0" href="#">আজ আগারগাঁও পর্যন্ত চলবে মেট্রো ট্রেন</h3>
                </a>
              </div><!--news end-->
             </div>
          </div>
        </div><!--col-md-6-->
        <!-- ---------------------------------------md-show and lg-none ------------------------------------------------>
        <!-- ---------------------------------------md-show and lg-none ------------------------------------------------>
        <div class="col-lg-3 col-md-12 d-lg-none">
          <div class="top-left onehundrad d-block d-lg-none">
            <div class="news py-3 border-bottom">
              <a href="#" class="d-flex">
                <img src="{{asset('frontend/img/06-20211212010907.webp')}}" alt="dr Murad" class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0" href="#">ভিসা মেলেনি, টিকিট হাতে দুবাই বিমানবন্দরে ডা. মুরাদ</h3>
              </a>
            </div><!--news end-->
            <div class="news py-3 border-bottom">
              <a href="#" class="d-flex">
                <img src="{{asset('frontend/img/corona.webp')}}" alt="dr Murad" class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0" href="#">দেশে ওমিক্রন শনাক্ত</h3>
              </a>
            </div><!--news end-->
            <div class="news py-3">
              <a href="#" class="d-flex">
                <img src="{{asset('frontend/img/hasina.webp')}}" alt="dr Murad" class="newsimg me-3">
                <h3 class="lh-base fw-medium text-black m-0" href="#">৪র্থ শিল্পবিপ্লবের ভিত্তি হিসেবে ৩ বিষয়ে প্রধানমন্ত্রীর গুরুত্ব</h3>
              </a>
            </div><!--news end-->
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
  </section>