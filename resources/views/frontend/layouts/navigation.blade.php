<nav class="navbar navbar-expand-lg position-sticky fixed-top navbar-expand-lg navbar-light p-0">
  <div class="container d-flex justify-content-center position-relative">
   <a href="#" class="navbar-brand d-none">
    <img src="{{asset('img/dhaka-post.webp')}}" width="300" alt="">  
      <button class="navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </a>
    <div class="collapse navbar-collapse justify-content-center" id="navbar"aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <ul class="navbar-nav d-flex">
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">প্রচ্ছদ</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="leatest.html">সর্বশেষ</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">জাতীয়</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">রাজনীতি</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">অর্থনীতি</a></li>
        <li class="nav-item dropdown position-relative">
          <a class="me-2 nav-link text-white p-3 dropdown-toggle" role="button" href="#">সারাদেশ</a>
          <ul class="dropdown-menu-custom p-0 position-absolute shadow d-none">
            <li class="dropdown-item py-3"><a href="#">জেলার খবর</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">আন্তর্জাতিক</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">খেলা</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">বিনোদন</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">স্বাস্থ্য</a></li>
        <li class="nav-item dropdown position-relative">
          <a class="me-2 nav-link text-white p-3 dropdown-toggle" href="#">ফিচার</a>
          <ul class="dropdown-menu-custom p-0 position-absolute shadow d-none">
            <li class="dropdown-item py-3"><a href="#">লাইফ ষ্টাইল</a></li>
            <li class="dropdown-item py-3"><a href="#">তথ্য প্রযুক্তি</a></li>
            <li class="dropdown-item py-3"><a href="#">ট্যুরিজম</a></li>
            <li class="dropdown-item py-3"><a href="#">পড়াশুনা</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">শিক্ষা</a></li>
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="#">জবস</a></li>
        <li class="nav-item dropdown">
          <a class="me-2 nav-link text-white p-3 dropdown-toggle" href="#">ট্রেডিং</a>
          <ul class="dropdown-menu-custom p-0 position-absolute shadow d-none">
            <li class="dropdown-item py-3"><a href="#">করোনাভাইরাস</a></li>
            <li class="dropdown-item py-3"><a href="#">ওমিক্রন</a></li>
            <li class="dropdown-item py-3"><a href="#">ভ্যকসিন সনদ</a></li>
            <li class="dropdown-item py-3"><a href="#">চাকরির-খবর</a></li>
            <li class="dropdown-item py-3"><a href="#">আবহাওয়ার-খবর</a></li>
          </ul>
        </li>
        <li class="nav-item"><a id="onnanno" class="me-2 nav-link text-white p-3 d-flex align-items-center" href="#"><i class="fas fa-bars me-2"></i>অন্যান্য</a></li>
        <li class="nav-item" id="search-bar-search"><a class="me-2 nav-link text-white p-3" href="#"><i class="text-white fas fa-search"></i></a></li>  
      </ul>
    </div>
    <!-- little navbar search bar -->
    <li class="nav-item d-none position-absolute second-search"id="search-bar-search"><a class="me-2 nav-link text-white p-3" href="#"><i class="text-white fas fa-search"></i></a></li>
    <div class="search-bar position-absolute" style="display: none;">
      <form action="">
        <div class="input-group align-items-center">
          <input class="form-control py-2" type="text" placeholder="অনুসন্ধান করুন">
          <div class="search-icon" id="search-bar" style="padding: 1rem;"><i class="fas text-white fa-search g-2"></i></div>
          <div class="search-icon bg-white rounded" id="search-bar-times" style="padding: 1rem;"><i class="fas fa-times"></i></div>
        </div>
      </form>
    </div>
  </div><!--container-->
  <div class="hide-content position-absolute bg-white w-100 shadow" style="display: none;">
    <div class="container">
      <div class="rows d-flex justify-content-between">
        <div class="">
          <ul>
            <li class="py-3"><a href="#">প্রভাস</a></li>
            <li class="py-3"><a href="#">সাহিত্য</a></li>
            <li class="py-3"><a href="#">কনভার্টার</a></li>
          </ul>
        </div>
        <div class="">
          <ul>
            <li class="py-3"><a href="#">প্রভাস</a></li>
            <li class="py-3"><a href="#">সাহিত্য</a></li>
            <li class="py-3"><a href="#">কনভার্টার</a></li>
          </ul>
        </div>
        <div class="">
          <ul>
            <li class="py-3"><a href="#">প্রভাস</a></li>
            <li class="py-3"><a href="#">সাহিত্য</a></li>
            <li class="py-3"><a href="#">কনভার্টার</a></li>
          </ul>
        </div>
        <div class="">
          <ul>
            <li class="py-3"><a href="#">প্রভাস</a></li>
            <li class="py-3"><a href="#">সাহিত্য</a></li>
            <li class="py-3"><a href="#">কনভার্টার</a></li>
          </ul>
        </div>
        <div class="">
          <ul>
            <li class="py-3"><a href="#">প্রভাস</a></li>
            <li class="py-3"><a href="#">সাহিত্য</a></li>
            <li class="py-3"><a href="#">কনভার্টার</a></li>
          </ul>
        </div>
        <div class="">
          <ul>
            <li class="py-3"><a href="#">প্রভাস</a></li>
            <li class="py-3"><a href="#">সাহিত্য</a></li>
            <li class="py-3"><a href="#">কনভার্টার</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>