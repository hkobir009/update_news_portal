@extends('admin.layouts.app')
@section('content')
                         <!-- watch all post -->
      <div class="content position-fixed p-4">
         
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">
                        View All Post
                        <span class="badge bg-primary">{{$postdatas->count()}}</span>
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
         @if(Session::has('msg'))
         <div class="alert alert-primary" >
           <h4> {{Session::get('msg')}}</h4>
          </div>
         @endif
         <div class="user-table recent-orders pb-5">
            <div class="container">
               <div class="row d-flex justify-content-center bg-white">
                  <div class="recent-orders dashboard-content">
                     <table class="table text-center">
                        <tr class="align-middle">
                           <th class="">ID</th>
                           <th class="text-capitalize">User name</th>
                           <th class="text-capitalize">title</th>
                           <th class="text-capitalize">total view</th>
                           <th class="text-capitalize">creat date</th>
                           <th class="text-capitalize">Action</th>
                        </tr>
                        @foreach ($postdatas as $postdata)
                        <tr class="align-middle">
                           <td class="last-order-item text-uppercase">{{$postdata->id}}</td>
                           <td class="last-order-item text-uppercase">{{$postdata->user->name}}</td>
                           <td><h4 class="m-0 fw-bold">{{Str::limit($postdata->title,30)}}</h4></td>
                           <td><h4 class="m-0 fw-bold">{{$postdata->view_count}}</h4></td>
                           <td><h4 class="m-0 fw-bold">{{$postdata->created_at}}</h4></td>
                           <td>
                              <div class="two-icon d-flex justify-content-center">
                                 <a href="{{Route('post_edit',[$postdata->id])}}">
                                    <div class="delete mx-2 bg-primary p-3 rounded text-white fw-bold d-flex align-items-center">
                                        <i class="fas fa-edit"></i>
                                     </div>
                                </a>
                                <a href="{{Route('post_delete',[$postdata->id])}}">
                                    <div class="delete mx-2 bg-danger p-3 rounded text-white fw-bold d-flex align-items-center">
                                        <i class="fas fa-trash-alt"></i>
                                     </div>
                                </a>
                                <a href="" alt="show">
                                 <div class="message mx-2 bg-success p-3 rounded text-white fw-bold d-flex align-items-center">
                                    <i class="fas fa-eye"></i>
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



