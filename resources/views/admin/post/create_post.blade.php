@extends('admin.layouts.app')
@section('content')
                                    <!-- show post -->
    <div class="content position-fixed p-4">
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">Add new post</h1>
                  </div>
                  <div class="reports d-flex align-items-center bg-white p-1 px-md-4 py-md-1 mx-2 rounded">
                     <a href="{{route('post')}}" class="d-flex align-items-center p-3 text-decoration-none">
                        <i class="fas fa-plus fa-2x fw-normal"></i>
                        <h4 class="m-0 fw-bold mx-3 text-capitalize">View All Post</h4>
                     </a>
                  </div>
               </div>
               <!--dashbard-content-header-->
            </div><!--row-->
         </div><!--container-->
         <div class="breaking-news-form" style="margin-bottom: 50px;">
            <div class="container">
               <div class="forms mb-5 pb-5">
                  <form action="">
                    <div class="user-name">
                       <label for="" class="text-capitalize mb-2">post title</label>
                       <input class="form-control py-2" type="text" placeholder="post title">
                   </div>
                   <div class="select-any w-100 mt-5">
                     <label for="" class="text-capitalize mb-2">Add categorys</label>
                     <select name="" id="" class="w-100 py-3 border">
                         <option value="">One items</option>
                     </select>
                   </div>
                   <div class="body mt-5">
                     <label for="" class="text-capitalize mb-2">body</label>
                     <textarea class="w-100" name="post-body" placeholder="Post body"></textarea>
                  </div>
                  <div class="slag mt-5">
                     <label for="" class="text-capitalize mb-2">slag</label>
                     <input class="form-control py-2" type="text">
                  </div>
                  <div class="image mt-5">
                     <label for="" class="text-capitalize mb-2">Image</label>
                     <input class="form-control py-2" type="file" name="image" placeholder="image">
                  </div>
                  <div class="tag-name mt-5">
                     <label for="" class="text-capitalize mb-2">Tag name</label>
                     <input class="form-control py-2" type="text" name="image" placeholder="Tag name">
                  </div>
                      <input type="submit" value="submit" class="form-control mt-5 btn-outline-info">
                  </form>
              </div><!--forms-->
           </div><!--container-->
         </div>
      </div><!--content-->

@endsection
