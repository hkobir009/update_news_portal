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
        @foreach ($categoryinfos as $categoryinfo)

        @if($categoryinfo->childs->isEmpty())    
                                       {{-- category forgain key null velue  --}}
        <li class="nav-item"><a class="me-2 nav-link text-white p-3" href="{{$categoryinfo->target_url}}">{{$categoryinfo->name}}</a></li>
        
        @else
        
        <li class="nav-item dropdown position-relative">
          <a class="me-2 nav-link text-white p-3 dropdown-toggle" href="#">{{ $categoryinfo->name }}</a>
          <ul class="dropdown-menu-custom p-0 position-absolute shadow d-none">
                               {{-- category child velue here   --}}
            @foreach ($categoryinfo->childs as $child)

            <li class="dropdown-item py-3"><a href="{{ $child->target_url }}">{{ $child->name }}</a></li>
            
            @endforeach
          </ul>
        </li>
        @endif
        @endforeach
        
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
</nav>