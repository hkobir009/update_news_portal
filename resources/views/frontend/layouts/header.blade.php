<div class="container">
  <div class="d-flex justify-content-center">
    <img src="{{url('frontend/img/adsTopLogo.png')}}" alt="">
  </div>
  <header>
    <div class="header-top d-flex justify-content-between py-3 align-items-center">
      <div class="header-logo">
        <a href="{{route('home')}}"><img width="300" src="{{asset('frontend/img/sitelogo.png')}}" alt="Logo" class="logo img-fluid"></a>
      </div>
      <div class="header-details">
        <ul class="d-flex p-0">
          <li class="mx-2"><i class="fas fa-map-marker-alt me-2"></i>ঢাকা</li>
          <li class="mx-2"><i class="far fa-calendar me-2"></i>{{$dateandtime}}</li>
        </ul>
      </div>
      <!-- header details end -->
      <div class="header-social">
        <ul class="d-flex">
          <li class="mx-1 rounded-circle d-flex align-items-center facebook justify-content-center">
            <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
          </li>
          <li class="mx-1 rounded-circle d-flex align-items-center youtube justify-content-center">
            <a href="#"><i class="fab fa-youtube text-white"></i></a>
          </li>
          <li class="mx-1 rounded-circle d-flex align-items-center twitter justify-content-center">
            <a href="#"><i class="fab fa-twitter text-white"></i></a>
          </li>
          <li class="mx-1 rounded-circle d-flex align-items-center instagram justify-content-center">
            <a href="#"><i class="fab fa-instagram text-white"></i></a>
          </li>
          <li class="mx-1 rounded-circle d-flex align-items-center linkedin justify-content-center">
            <a href="#"><i class="fab fa-linkedin text-white"></i></a>
          </li>
          <li class="mx-1 rounded-circle d-flex align-items-center printarest justify-content-center">
            <a href="#"><i class="fab fa-pinterest-square text-white"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </header>
</div><!--container-->