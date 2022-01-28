@extends('admin.layouts.app')
@section('content')
                         <!-- watch all post -->
      <div class="content position-fixed p-4">
         
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">
                        View All Subscribe Users
                        <span class="badge bg-primary">{{$subDatas->count()}}</span>
                     </h1>
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
         <div class="user-table recent-orders pb-5">
            <div class="container">
               <div class="row d-flex justify-content-center bg-white">
                  <div class="recent-orders dashboard-content">
                     <table class="table text-center">
                        <tr class="align-middle">
                           <th class="">ID</th>
                           <th class="text-capitalize">Subscribe Email</th>
                           <th class="text-capitalize">Join date</th>
                           <th class="text-capitalize">Action</th>
                        </tr>
                        @foreach ($subDatas as $subData)
                        <tr class="align-middle">
                           <td class="last-order-item">{{$subData->id}}</td>
                           <td class="last-order-item">{{$subData->email}}</td>
                           <td><h4 class="m-0 fw-bold">{{$subData->created_at}}</h4></td>
                           <td>
                            <div class="two-icon d-flex justify-content-center">
                              <form action="{{Route('sub_delete',[$subData->id])}}" method="post">
                               @csrf
                               @method('POST')
                                  <div class="delete mx-2 mt-0 p-3 rounded text-white fw-bold d-flex align-items-center">
                                     <button class="btn btn-danger btn-lg">Delete</button>
                                   </div>
                              </form>
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



