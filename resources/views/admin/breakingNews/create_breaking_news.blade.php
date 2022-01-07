@extends('admin.layouts.app')
@section('content')
                                    <!-- ADD Menu -->
<div class="content position-fixed p-4">
        <div class="container">
            <div class="forms">
                <form action="" method="post">
                  @csrf
                    <div class="row">
                        <div class="title my-5 ms-4 ">
                          @if(Session::has('msg'))
                          <div class="alert alert-primary" >
                              {{Session::get('msg')}}
                            </div>
                          @endif
                            <h1 class="text-capitalize p-0 fw-bold">add new Breaking News</h1>
                         </div>
                        <div class="col-sm-12">
                                   <!-- Name input -->
                            <div class="user-name">
                                <label for="" class="text-capitalize mb-2">Breaking News</label>
                                <input class="form-control py-2" type="text" name="name" placeholder="News.....">
                            </div>
                        </div>
                    </div><!--row-->
                  
                    <input type="submit" value="Submit" class="form-control mt-5 btn-outline-info">
                </form>
            </div><!--forms-->
        </div><!--container-->
    </div><!--content-->
@endsection



