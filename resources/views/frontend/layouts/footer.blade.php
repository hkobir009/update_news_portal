<footer class="pt-5 bg-dark">
  <div class="container py-5">
    <div class="footer-top">
      <div class="logo-part d-flex align-items-center flex-column flex-md-row">
        <div class="footer-logo me-0 me-md-5">
          <a href="index.html"><img width="300" src="{{asset('img/dhaka-post.webp')}}" alt="Logo" class="footerlogo img-fluid"></a>
        </div>
        <div class="subscribed-field position-relative mt-md-0 mt-4 ms-auto">
          <form action="{{Route('store_sub')}}" method="post">
            @csrf
            <input class="form-control py-2" name="email" type="email" placeholder="Enter your mail">
            <button type="submit" class="btn position-absolute top-50 bg-primary subscribe-button px-2 text-white">SUBSCRIBE</button>
          </form>
        </div>
      </div>
      <div class="footer-menu mt-5">
        <div class="footer-content">
          <div class="container">
            <div class="rows d-flex justify-content-between py-4 border-bottom border-white">
              <div class="">
                <ul>
                  <li class="py-3"><a class="text-white" href="{{route('home')}}">হোম পেজ</a></li>
                  <li class="py-3"><a class="text-white" href="{{route('entertainment')}}">বিনোদন </a></li>
                  <li class="py-3"><a class="text-white" href="{{route('artAndLiterature')}}">শিল্প ও সাহিত্য</a></li>
                </ul>
              </div>
              <div class="">
                <ul>
                  <li class="py-3"><a class="text-white" href="{{route('national')}}">জাতীয়</a></li>
                  <li class="py-3"><a class="text-white" href="{{route('education')}}">শিক্ষা </a></li>
                  <li class="py-3"><a class="text-white" href="{{route('opinions')}}">মতামত </a></li>
                </ul>
              </div>
              <div class="">
                <ul>
                  <li class="py-3"><a class="text-white" href="{{route('politics')}}">রাজনীতি</a></li>
                  <li class="py-3"><a class="text-white" href="{{route('weather')}}">আবহাওয়া </a></li>
                  <li class="py-3"><a class="text-white" href="{{route('expatriate')}}">প্রবাস </a></li>
                </ul>
              </div>
              <div class="">
                <ul>
                  <li class="py-3"><a class="text-white" href="{{route('sports')}}">খেলাধুলা</a></li>
                  <li class="py-3"><a class="text-white" href="{{route('cricket')}}">ক্রিকেট</a></li>
                  <li class="py-3"><a class="text-white" href="{{route('football')}}">ফুটবল</a></li>
                </ul>
              </div>
              <div class="">
                <ul>
                  <li class="py-3"><a class="text-white" href="{{route('holeWorld')}}">সারাদেশ </a></li>
                  <li class="py-3"><a class="text-white" href="{{route('courtoflaw')}}">আইন-আদালত</a></li>
                  <li class="py-3"><a class="text-white" href="{{route('stockMarket')}}">শেয়ার বাজার</a></li>
                </ul>
              </div>
              <div class="">
                <ul>
                  <li class="py-3"><a class="text-white" href="{{route('international')}}">আন্তর্জাতিক</a></li>
                  <li class="py-3"><a class="text-white" href="{{route('columns')}}">কলাম </a></li>
                  <li class="py-3"><a class="text-white" href="{{route('health')}}">স্বাস্থ্য</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-white footer-address d-flex justify-content-center flex-column align-items-center mt-5">
           <span>সম্পাদক: দিদারুল ইসলাম</span>
           <span>প্রকাশক: আজিজুর রহমান মোল্লা</span>
          <address>মোবাইল নাম্বার: 01711121726</address>
          <span>Email: bartajogot24@gmail.com & info@bartajogot24.com</span>
      </div>
    </div>
  </div><!--container-->
  <div class="copy-right-section bg-info">
    <div class="container">
      <div class="d-flex justify-content-between text-white py-4 align-items-center">
        <div class="copy-left">
          <span>© 2010-2022 bartajogot24, All Rights Reserved.</span>
        </div>
        <div class="copy-right d-flex align-items-center">
          <span class="me-3">Developed and Maintained by : <a href="https://freelancerkabir.com/"><strong>Freelancer kabir</strong></a></span>
        </div>
      </div>
    </div>
  </div>
</footer>

  <a href="#" class="go-top position-fixed">
    <i class="fas fa-arrow-circle-up"></i>
  </a>