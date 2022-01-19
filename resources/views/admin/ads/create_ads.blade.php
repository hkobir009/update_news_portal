@extends('admin.layouts.app')
@section('content')
<!-- create post -->
<div class="content position-fixed p-4">
    <div class="container">
        <div class="row d-flex justify-content-center p-4">
            <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                <div class="title my-5">
                    <h1 class="text-capitalize p-0 fw-bold">Add new post</h1>
                </div>
                <div class="reports d-flex align-items-center bg-white p-1 px-md-4 py-md-1 mx-2 rounded">
                    <a href="{{route('blog_post')}}" class="d-flex align-items-center p-3 text-decoration-none">
                        <i class="fas fa-plus fa-2x fw-normal"></i>
                        <h4 class="m-0 fw-bold mx-3 text-capitalize">View All Post</h4>
                    </a>
                </div>
            </div>
            <!--dashbard-content-header-->
        </div>
        <!--row-->
    </div>
    <!--container-->
    @if(Session::has('msg'))
    <div class="alert alert-primary">
        <h4> {{Session::get('msg')}}</h4>
    </div>
    @endif
    <div class="breaking-news-form" style="margin-bottom: 50px;">
        <div class="container">
            <div class="forms mb-5 pb-5">
                <form action="{{route('store_post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">post title</label>
                        <input class="form-control py-2" name="title" type="text" placeholder="post title" required>
                    </div>
                    <div class="select-any mt-5">
                        <label for="" class="text-capitalize mb-2">Select Cetagory</label>
                        <select type="text" class="selectpicker border w-100" name="categories[]" multiple required>
                            @foreach ($parantNames as $parantName)
                            <option value="{{$parantName->id}}" style="font-size: 1.9rem;">{{$parantName->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="select-any mt-5">
                        <label for="" class="text-capitalize mb-2">Select tag</label>
                        <select type="text" class="selectpicker border w-100" name="tags[]" multiple required>
                            @foreach ($tagdatas as $tagdata)
                            <option value="{{$tagdata->id}}" style="font-size: 1.9rem;">{{$tagdata->name}}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="body mt-5">
                        <label for="" class="text-capitalize mb-2">body</label>
                        <textarea class="w-100" rows="4" id="body" name="body" placeholder="Post Description" required></textarea>
                     </div>
                     <div class="image mt-5">
                     <label for="" class="text-capitalize mb-2">Image</label>
                     <input class="form-control py-2" type="file" name="image" placeholder="image">
                     </div>
                   <input type="submit" value="submit" class="form-control mt-5 btn-outline-info">
            </form>
        </div>
        <!--forms-->
    </div>
    <!--container-->
</div>
</div>
<!--content-->

@endsection