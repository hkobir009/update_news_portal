@extends('admin.app')
@section('content')
                                    <!-- ADD Menu -->
<div class="container ">
    <div class="row">
        <div class="col-md-12 p-5">
         @if(Session::has('msg'))
         <div class="alert alert-primary" >
            {{Session::get('msg')}}
          </div>
         @endif
         <div>
          <a href="{{url('breaking_newses')}}"><button class="btn btn-success">List of Breaking News</button></a>
         </div>
            <h4 class="test-center">Create Breaking News Here</h4>
            <form action="" method="post">
                @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="name"class="form-control"/>
                      <label class="form-label" >Name</label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
            </form>
        </div>
    </div>
  </div>

@endsection



<div class="container ">
  <div class="row">
      <div class="col-md-12 p-5">
        @if(Session::has('msg'))
       <div class="alert alert-primary" >
          {{Session::get('msg')}}
        </div>
       @endif
          <div>
              <a href="{{url('create_breaking_newses')}}"><button class="btn btn-success">Add New Breaking News</button></a>
          </div>
          <table class="table table-striped border">
              <thead>
                <tr>
                  <th class="font-weight-bold" scope="col">#</th>
                  <th class="font-weight-bold" scope="col">Breaking News</th>
                  <th class="font-weight-bold" scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($breskingdatas as $breskingdata)
                <tr>
                  <th scope="row">{{$breskingdata->id}}</th>
                  <td>{{$breskingdata->name}}</td>
                  <td><button class="btn btn-danger"><a href="{{Route('delete',[$breskingdata->id])}}">Delete</a></button></td>
                </tr>
                @endforeach
              </tbody>
            </table>
      </div>
  </div>
</div>
