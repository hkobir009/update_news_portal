@extends('admin.layouts.app')
@section('content')
<!-- create post -->
<div class="content position-fixed p-4">
    <div class="container">
        <div class="row d-flex justify-content-center p-4">
            <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                <div class="title my-5">
                    <h1 class="text-capitalize p-0 fw-bold">Add new ads</h1>
                </div>
                <div class="reports d-flex align-items-center bg-white p-1 px-md-4 py-md-1 mx-2 rounded">
                    <a href="{{route('ads')}}" class="d-flex align-items-center p-3 text-decoration-none">
                        <i class="fas fa-plus fa-2x fw-normal"></i>
                        <h4 class="m-0 fw-bold mx-3 text-capitalize">View All Ads</h4>
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
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">first section left image url</label>
                        <input class="form-control py-2" name="" type="text" placeholder="First left img url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">first section left image target url</label>
                        <input class="form-control py-2" name="" type="text" placeholder="First left img target url" required>
                    </div>
                   <input type="submit" value="submit" class="form-control mt-5 btn-outline-info"> -->
                   <h1>Comming Soon ........</h1>
            </form>
        </div>
        <!--forms-->
    </div>
    <!--container-->
</div>
</div>
<!--content-->

@endsection