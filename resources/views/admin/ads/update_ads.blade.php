@extends('admin.layouts.app')
@section('content')
<!-- Update post -->
<div class="content position-fixed p-4">
    <div class="container">
        <div class="row d-flex justify-content-center p-4">
            <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                <div class="title my-5">
                    <h1 class="text-capitalize p-0 fw-bold">Update Ads</h1>
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
                <form action="{{Route('ads_update',[$adsid->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">first section left image url</label>
                        <input class="form-control py-2" value="{{$adsid->first_left_img_url}}" name="first_left" type="text" placeholder="First left img url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">first section left image target url</label>
                        <input class="form-control py-2" value="{{$adsid->first_left_img_target_url}}" name="first_left_target" type="text" placeholder="First left img target url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">first section right image url</label>
                        <input class="form-control py-2" value="{{$adsid->first_right_img_url}}" name="first_right" type="text" placeholder="First right img url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">first section right image target url</label>
                        <input class="form-control py-2" value="{{$adsid->first_right_img_target_url}}" name="first_right_target" type="text" placeholder="First right img target url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">secound section image url</label>
                        <input class="form-control py-2" value="{{$adsid->secound_right_img_url}}" name="secound_img" type="text" placeholder="Secound img url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">secound section image target url</label>
                        <input class="form-control py-2" value="{{$adsid->secound_right_img_target_url}}" name="secound_img_target" type="text" placeholder="Secound img target url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">Hole world section image url</label>
                        <input class="form-control py-2" value="{{$adsid->hole_world_img_url}}" name="hole_world_img" type="text" placeholder="Hole world img url" required>
                    </div>
                    <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">hole world section image target url</label>
                        <input class="form-control py-2" value="{{$adsid->hole_world_img_target_url}}" name="hole_world_img_target" type="text" placeholder="Hole world img target url" required>
                    </div>
                     {{-- <div class="image mt-5">
                     <label for="" class="text-capitalize mb-2">Our advertisement Image</label>
                     <input class="form-control py-2" type="file" name="image" placeholder="image">
                     </div> --}}
                     <div class="user-name mt-5">
                        <label for="" class="text-capitalize mb-2">Our advertisement target url</label>
                        <input class="form-control py-2" value="{{$adsid->our_advertisement_target_url}}" name="our_advertisement_target_url" type="text" placeholder="Our advertisement target url" required>
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