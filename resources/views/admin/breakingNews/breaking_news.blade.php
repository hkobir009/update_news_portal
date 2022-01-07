@extends('admin.layouts.app')
@section('content')
                         <!-- ADD Breaking news -->

<div class="content position-fixed p-4">
    <div class="container">
        <div class="row d-flex justify-content-center p-4">
            @if(Session::has('msg'))
             <div class="alert alert-primary" >
              {{Session::get('msg')}}
            </div>
             @endif
            <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                <div class="title my-5 ms-4 ">
                    <h1 class="text-capitalize p-0 fw-bold">Breaking News List</h1>
                    <em class="text-capitalize p-0 fw-bold">you have total 2834 users</em>
                </div>
                <div class="dashboard-content-right d-flex">
                    <div class="search-bar d-flex align-items-center calander position-relative">
                        <input class="form-control py-2 p-2 px-3 pe-5" type="text" placeholder="Search by name">
                        <i class="fas fa-search position-absolute top-50"></i>
                    </div>
                    <div class="reports d-flex align-items-center bg-white p-1 px-md-4 py-md-1 mx-2 rounded">
                        <i class="fas fa-plus fa-2x fw-normal"></i>
                        <h4 class="m-0 fw-bold mx-3 text-capitalize">add</h4>
                    </div>
                </div>
            </div>
            <!--dashbard-content-header-->
        </div>
        <!--row-->
    </div>
    <!--container-->
    <!--  -------------------------------------- table design starts------------------------------------------- -->
    <div class="user-table recent-orders pb-5">
        <div class="container">
            <div class="row d-flex justify-content-center bg-white">
                <div class="recent-orders dashboard-content p-0">
                    <table class="table">
                        <tr class="align-middle">
                            <th>#</th>
                            <th>Breaking News</th>
                            <th>Action</th>
                        </tr>
                        <!-- -------------------------------one tr start--------------------------------------- -->
                        @foreach ($breskingdatas as $breskingdata)
                        <tr class="align-middle position-relative">
                            <td>{{$breskingdata->id}}</td>
                            <td>{{$breskingdata->name}}</td>
                            <td>
                              <!-- Call to action buttons -->
                                <li class="list-inline-item">
                                    <a href="{{Route('delete',[$breskingdata->id])}}"><button class="btn btn-danger rounded-3"><i class="fa fa-trash"></i></button></a>
                                </li>
                          </td>
                        </tr>
                        @endforeach
                        <!--tr end-->

                    </table>
                </div>
            </div>

        </div>
        <!--row-->
    </div>
    <!--container-->
</div>

@endsection



