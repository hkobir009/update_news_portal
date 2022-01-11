<!-- --------------------------------------------------------- খেলা সেকশন --------------------------------------------------------------------- -->
<section class="sports-section jatiyo-section py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <!-- --------------------------------------------- section-title reusable html ------------------------------------------------- -->
          <div class="section-title d-flex justify-content-between align-items-center py-2">
            <a href="#"><h1 class="m-0">খেলা</h1></a>
            <ul class="m-0 p-0 d-flex">
              <li class="mx-4"><a class="" href="#">ক্রিকেট</a></li>
              <li class="mx-4"><a class="" href="#">ফুটবল</a></li>
              <li class="mx-4"><a class="active" href="#">সকল</a></li>
            </ul>
            <a class="more-read p-3" href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="row mt-3">
            <div class="col-md-8">
              <div class="image-gallery d-grid">
                <div class="image-with-datails position-relative">
                  <a href="#">
                    <img src="{{asset('frontend/img/player1.webp')}}" alt="" class="img-fluid h-auto">
                    <p class="position-absolute image-info text-white m-0">বিপিএলের ছয় দল চূড়ান্ত, পারিশ্রমিক বাড়ছে সাকিব-তামিমদের</p>
                  </a>
                </div>
                <div class="image-with-datails position-relative">
                  <a class="img-shadow" href="#">
                    <img src="{{asset('frontend/img/player2.webp')}}" alt="" class="img-fluid h-auto">
                    <p class="position-absolute image-info text-white m-0">2 ভুলের কারণে আবার হবে চ্যাম্পিয়ন্স লিগ শেষ ষোলোর ড্র</p>
                  </a>
                  </div>
                <div class="image-with-datails position-relative">
                  <a href="#">
                    <img src="{{asset('frontend/img/player3.webp')}}" alt="" class="img-fluid h-auto">
                    <p class="position-absolute image-info text-white m-0">বিপিএলের ছয় দল চূড়ান্ত, পারিশ্রমিক বাড়ছে সাকিব-তামিমদের</p>
                  </a>
                </div>
                <div class="image-with-datails position-relative">
                  <a href="#">
                    <img src="{{asset('frontend/img/player4.webp')}}" alt="" class="img-fluid h-auto">
                    <p class="position-absolute image-info text-white m-0">ভুলের কারণে আবার হবে চ্যাম্পিয়ন্স লিগ শেষ ষোলোর ড্র</p>
                  </a>  
                </div>
              </div>
            </div><!--inside col md --->
            <div class="col-md-4">
              <div class="only-news mt-4 m-md-0 h-100 d-flex flex-column justify-content-between">
                <div class="px-3">
                  <a class="lh-sm fw-medium" href="#">আর্জেন্টাইন ডিফেন্ডারের গলায় বেল্ট বেঁধে অপমান, বাসায় ডাকাতি</a>
                </div>
                <div class="p-3 border-top">
                  <a class="lh-sm fw-medium" href="#">বন্দি নির্যাতন : জেল সুপারসহ ৫ জনের বিরুদ্ধে মামলা</a>
                </div>
                <div class="p-3 border-top">
                  <a class="lh-sm fw-medium" href="#">আর্জেন্টাইন ডিফেন্ডারের গলায় বেল্ট বেঁধে অপমান, বাসায় ডাকাতি</a>
                </div>
                <div class="p-3 border-top">
                  <a class="lh-sm fw-medium" href="#">বন্দি নির্যাতন : জেল সুপারসহ ৫ জনের বিরুদ্ধে মামলা</a>
                </div>
                <div class="p-3 border-top">
                  <a class="lh-sm fw-medium" href="#">গলায় বেল্ট বেঁধে অপমান, বাসায় ডাকাতি</a>
                </div>
                <div class="p-3 border-top">
                  <a class="lh-sm fw-medium" href="#">বন্দি নির্যাতন : জেল সুপারসহ ৫ জনের বিরুদ্ধে মামলা</a>
                </div>
              </div>
            </div><!--inside col 4-->
          </div><!--inside row-->
        </div><!--outside col - 9-->
        <div class="col-lg-3">
          <div class="sikkha">
              <div class="section-title d-flex justify-content-between align-items-center py-2">
                <a href="#"><h1 class="m-0">শিক্ষা</h1></a>
                <a class="more-read p-3" href="#">আরো পড়ুন <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <div class="sikkha-content d-flex flex-column">
                <div class="saradesh-news-detail border-bottom saradesh-news mt-3 me-3 m-lg-0">
                  <a href="#">
                    <img class="img-fluid w-100" src="{{asset('frontend/img/flag.webp')}}" alt="country">
                    <p class="py-2 fw-medium lh-sm">বিজয় দিবসে সব প্রাথমিক বিদ্যালয়ে উড়বে নতুন পতাকা</p>
                  </a>
                </div><!--saradesh-news-detail-->
                <div class="sikkha-little d-flex flex-column">
                  <div class="recent-news more-news border-bottom mt-3">
                    <a class="d-flex justify-content-start align-items-md-start pb-lg-3 mt-3 m-lg-0" href="#">
                    <img class="img-fluid me-3" src="{{asset('frontend/img/edu.webp')}}" width="100" height="75" alt="">
                    <p class="m-0 fw-medium">ফাজিল পরীক্ষা শুরু ১৬ জানুয়ারি</p>
                    </a>
                 </div>
                  <div class="recent-news more-news">
                    <a class="d-flex justify-content-start align-items-md-start mt-3" href="#">
                      <img class="img-fluid me-3" src="{{asset('frontend/img/edu1.webp')}}" width="100" height="75" alt="">
                      <p class="m-0 fw-medium">১১ বছরের বেশি ‘কিছু শিক্ষার্থীকে’ ছাড় দেবে হলিক্রস</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--outside col-md-3-->
      </div>
    </div>
  </section><!--sports section end-->