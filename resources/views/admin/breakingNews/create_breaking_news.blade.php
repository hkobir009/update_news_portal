@extends('admin.layouts.app')
@section('content')
                                    <!-- ADD Menu -->

<div class="content position-fixed p-4">
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">Breaking news</h1>
                  </div>
                  <div class="reports d-flex align-items-center bg-white p-1 px-md-4 py-md-1 mx-2 rounded">
                     <a href="{{route('breaking_newses')}}" class="d-flex align-items-center p-3 text-decoration-none">
                        <i class="fas fa-plus fa-2x fw-normal"></i>
                        <h4 class="m-0 fw-bold mx-3 text-capitalize">Breaking News List</h4>
                     </a>
                  </div>
               </div><!--dashbard-content-header-->
            </div><!--row-->
         </div><!--container-->
         <div class="breaking-news-form">
            <div class="container">
               <div class="forms">
                @if(Session::has('msg'))
                <div class="alert alert-primary">
                    <h3>{{Session::get('msg')}}</h3>
                  </div>
                @endif
                   <form action="" method="post">
                    @csrf
                       <div class="row">
                           <div class="col">
                               <div class="user-name">
                                   <label for="" class="text-capitalize mb-2">Breaking News</label>
                                   <input class="form-control py-2" type="text" name="name" placeholder="News.....">
                               </div>
                           </div><!--col-lg-3 col-sm-6 col-12-->
                       </div><!--row-->
                       <input type="submit" value="submit" class="form-control mt-5 btn-outline-info">
                   </form>
               </div><!--forms-->
           </div><!--container-->
         </div>
    </div><!--content-->


@endsection



