@extends('admin.layouts.app')
@section('content')
                         <!-- watch all post -->
      <div class="content position-fixed p-4">
         
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">
                        View All Users
                        <span class="badge bg-primary">{{$usersdata->count()}}</span>
                     </h1>
                  </div>
                  <div class="dashboard-content-right d-flex">
                     <div class="search-bar d-flex align-items-center calander position-relative me-2">
                        <form action="">
                           <input class=" form-control py-2 p-2 px-3 pe-5" type="text" placeholder="Search by name">
                           <i class="fas fa-search position-absolute top-50"></i>
                        </form>
                     </div>
                     <div class="reports bg-white rounded d-flex align-items-center">
                        <a href="{{route('create_post')}}" class="text-decoration-none d-flex align-items-center p-1 px-md-4 py-md-1 mx-2">
                           <i class="fas fa-plus fa-2x fw-normal"></i>
                           <h4 class="m-0 fw-bold mx-3 text-capitalize">Add new post</h4>
                        </a>
                     </div>
                  </div><!--dashbard-content-right---->
               </div>
               <!--dashbard-content-header-->
            </div><!--row-->
         </div><!--container-->
         <div class="user-table recent-orders pb-5">
            <div class="container">
               <div class="row d-flex justify-content-center bg-white">
                  <div class="recent-orders dashboard-content">
                     <table class="table text-center">
                        <tr class="align-middle">
                           <th class="">ID</th>
                           <th class="text-capitalize">User name</th>
                           <th class="text-capitalize">User Email</th>
                           <th class="text-capitalize">Join date</th>
                        </tr>
                        @foreach ($usersdata as $userdata)
                        <tr class="align-middle">
                           <td class="last-order-item text-uppercase">{{$userdata->id}}</td>
                           <td class="last-order-item text-uppercase">{{$userdata->name}}</td>
                           <td class="last-order-item text-uppercase">{{$userdata->email}}</td>
                           <td><h4 class="m-0 fw-bold">{{$userdata->created_at}}</h4></td>
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



