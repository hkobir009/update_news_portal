@extends('admin.layouts.app')
@section('content')
                                    <!-- ADD new Category -->
      <div class="content position-fixed p-4">
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">update Category</h1>
                  </div>
                  <div class="reports d-flex align-items-center bg-white p-1 px-md-4 py-md-1 mx-2 rounded">
                     <a href="{{route('category')}}" class="d-flex align-items-center p-3 text-decoration-none">
                        <i class="fas fa-plus fa-2x fw-normal"></i>
                        <h4 class="m-0 fw-bold mx-3 text-capitalize">Category List</h4>
                     </a>
                  </div>
               </div>
               <!--dashbard-content-header-->
            </div><!--row-->
         </div><!--container-->
         @if(Session::has('msg'))
       <div class="alert alert-primary" >
         <h4> {{Session::get('msg')}}</h4>
        </div>
       @endif
         <div class="breaking-news-form">
            <div class="container">
               <div class="forms">
                   <form action="{{route('update',[$data->id])}}" method="POST">
                     @csrf
                       <div class="row">
                           <div class="col">
                               <div class="user-name">
                                   <label for="" class="text-capitalize mb-2">name</label>
                                   <input class="form-control py-2" type="text" value="{{$data->name}}" name="name" placeholder="Name">
                               </div>
                               <div class="target-url mt-4">
                                 <label for="" class="text-capitalize mb-2">Target url</label>
                                 <input class="form-control py-2" value="{{$data->target_url}}" name="target_url" type="text" placeholder="Target url">
                             </div>
                           </div><!--col-lg-3 col-sm-6 col-12-->
                       </div><!--row-->
                       <input type="submit" value="Update Category" class="form-control mt-5 btn-outline-info">
                   </form>
               </div><!--forms-->
           </div><!--container-->
         </div>
      </div><!--content-->


@endsection

