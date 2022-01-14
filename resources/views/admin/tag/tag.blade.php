@extends('admin.layouts.app')
@section('content')
                         <!-- ADD Category -->
<div class="content position-fixed p-4">
    <div class="container">
       <div class="row d-flex justify-content-center p-4">
          <div class="dashbard-content-header d-flex align-items-center justify-content-between">
             <div class="title my-5">
                <h1 class="text-capitalize p-0 fw-bold">
                   tag list
                   <span class="badge bg-primary">{{$tagDatas->count()}}</span>
                  </h1>
             </div>
             <div class="dashboard-content-right d-flex">
                <div class="search-bar d-flex align-items-center calander position-relative">
                   <input class="form-control py-2 p-2 px-3 pe-5" type="text" placeholder="Search by name">
                   <i class="fas fa-search position-absolute top-50"></i>
                </div>
                <div class="m-2"></div>
                <div class="reports bg-white rounded d-flex align-items-center">
                   <a href="{{route('create_tag')}}" class="text-decoration-none d-flex align-items-center p-1 px-md-4 py-md-1 mx-2">
                      <i class="fas fa-plus fa-2x fw-normal"></i>
                      <h4 class="m-0 fw-bold mx-3 text-capitalize">Add new tag</h4>
                   </a>
                </div>
             </div><!--dashbard-content-right---->
          </div>
          <!--dashbard-content-header-->
       </div><!--row-->
    </div><!--container-->
    @if(Session::has('msg'))
    <div class="alert alert-primary">
        <h3>{{Session::get('msg')}}</h3>
      </div>
    @endif
    <div class="user-table recent-orders pb-5">
       <div class="container">
          <div class="row d-flex justify-content-center bg-white">
             <div class="recent-orders dashboard-content">
                <table class="table text-center">
                   <tr class="align-middle">
                      <th>ID</th>
                      <th>Name</th>
                      <th>post count</th>
                      <th>Action</th>
                   </tr>
                   @foreach ($tagDatas as $tagData)
                   <tr class="align-middle">
                      <td class="last-order-item">{{$tagData->id}}</td>
                      <td><h4 class="m-0 fw-bold">{{$tagData->name}}</h4></td>
                      <td><h4 class="m-0 fw-bold">{{$tagData->posts->count()}}</h4></td>
                      <td>
                         <div class="two-icon d-flex justify-content-center">
                            <a href="{{Route('tag_edit',[$tagData->id])}}">
                                <div class="delete mx-2 bg-primary p-3 rounded text-white fw-bold d-flex align-items-center">
                                    <i class="fas fa-edit"></i>
                                 </div>
                            </a>
                            <a href="{{Route('tag_delete',[$tagData->id])}}">
                                <div class="delete mx-2 bg-danger p-3 rounded text-white fw-bold d-flex align-items-center">
                                    <i class="fas fa-trash-alt"></i>
                                 </div>
                            </a>
                         </div>
                      </td>
                   </tr><!--tr end-->
                   @endforeach
                </table>
             </div>
          </div>
          </div>
          <!--row-->
       </div>
       <!--container-->
  </div>

@endsection

