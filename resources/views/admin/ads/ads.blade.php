@extends('admin.layouts.app')
@section('content')
                         <!-- watch all post -->
<div class="content position-fixed p-4">
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">Ads Manage</h1>
                  </div>
                  <div class="dashboard-content-right d-flex">
                     <div class="search-bar d-flex align-items-center calander position-relative me-3">
                        <input class=" form-control py-2 p-2 px-3 pe-5" type="text" placeholder="Search by name">
                        <i class="fas fa-search position-absolute top-50"></i>
                     </div>
                     <div class="reports bg-white rounded d-flex align-items-center">
                        <a href="{{route('create_ads')}}" class="text-decoration-none d-flex align-items-center p-1 px-md-4 py-md-1 mx-2">
                           <i class="fas fa-plus fa-2x fw-normal"></i>
                           <h4 class="m-0 fw-bold mx-3 text-capitalize">create ads</h4>
                        </a>
                     </div>
                  </div><!--dashbard-content-right---->
               </div>
               <!--dashbard-content-header-->
               <!--  --------------------------------------------------- dashboard-content-header-end--------------------------------------- -->
               
                <!--  --------------------------------------------------- dashboard-content-body-start--------------------------------------- -->
                <div class="image-url-main">
                   @foreach ($adsDatas as $adsData) 
                   <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center shadow">
                      <div class="left-side-url border-end d-flex justify-content-center">
                         <h3 class="fw-bold">image url</h3>
                      </div>
                      <div class="right-side-url d-flex justify-content-center position-relative">                          
                        <div class="image-url-two-icon two-icon d-flex justify-content-center position-absolute">
                           <a href="{{Route('ads_edit',[$adsData->id])}}">
                              <div class="check mx-2 bg-success p-3 rounded text-white fw-bold d-flex align-items-center">
                                 <h3 class="m-0">edit</h3>
                              </div>
                           </a>
                           <a href="{{Route('ads_delete',[$adsData->id])}}">
                              <div class="delete mx-2 bg-danger p-3 rounded text-white fw-bold d-flex align-items-center">
                                 <h3 class="m-0">delete</h3>
                              </div>
                           </a>
                        </div>
                         <h3 class="fw-bold">target url</h3>
                      </div>
                   </div><!--list-row image-url-separet-content-->
                   
                   <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>first section left image url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3"> 
                           <h3>{{$adsData->first_left_img_url}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>first section left image target url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{Str::limit($adsData->first_left_img_target_url,70)}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->
                      
                               <!------------New Ads Frist Right------------------->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>first section right image url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{$adsData->first_right_img_url}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>first section right image target url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{Str::limit($adsData->first_right_img_target_url,70)}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->

                          <!------------New Ads Secound Right------------------->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>secound section image url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{$adsData->secound_right_img_url}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>secound section image target url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{Str::limit($adsData->secound_right_img_target_url,70)}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->

                      <!------------New Ads hole world------------------->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>Hole world section image url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{$adsData->hole_world_img_url}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>hole world section image target url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{Str::limit($adsData->hole_world_img_target_url,70)}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->

                           <!------------New Ads------------------->
                     <div class="image-url-separet-content d-flex justify-content-between p-3 align-items-center">
                        <div class="left-side-url border-end d-flex justify-content-center">
                           <h3>Our advertisement target url</h3>
                        </div>
                        <div class="right-side-url d-flex justify-content-center ps-3">
                           <h3>{{Str::limit($adsData->our_advertisement_target_url,70)}}</h3>
                        </div>
                     </div><!--list-row image-url-separet-content-->
                     @endforeach
                </div>
            </div><!--row-->
         </div><!--container-->
         
         
         
      </div><!--content-->

{{-- <div class="content position-fixed p-4">
         <div class="container">
            <div class="row d-flex justify-content-center p-4">
               <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                  <div class="title my-5">
                     <h1 class="text-capitalize p-0 fw-bold">
                        View All Ads
                     </h1>
                  </div>
                  <div class="dashboard-content-right d-flex">
                     <div class="reports bg-white rounded d-flex align-items-center">
                        <a href="{{route('create_ads')}}" class="text-decoration-none d-flex align-items-center p-1 px-md-4 py-md-1 mx-2">
                           <i class="fas fa-plus fa-2x fw-normal"></i>
                           <h4 class="m-0 fw-bold mx-3 text-capitalize">Add new Ads</h4>
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
                           <th class="text-capitalize">first section left image url</th>
                           <th class="text-capitalize">first section left image target url</th>
                           <th class="text-capitalize">first section right image url</th>
                           <th class="text-capitalize">first section right image target url</th>
                           <th class="text-capitalize">secound section image url</th>
                           <th class="text-capitalize">secound section image target url</th>
                           <th class="text-capitalize">Hole world section image url</th>
                           <th class="text-capitalize">hole world section image target url</th>
                           <th class="text-capitalize">Our advertisement target url</th>
                           <th class="text-capitalize">create date</th>
                           <th class="text-capitalize">Action</th>
                        </tr>
                        @foreach ($adsDatas as $adsData)
                        <tr class="align-middle">
                           <td class="last-order-item text-uppercase">{{$adsData->first_left_img_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->first_left_img_target_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->first_right_img_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->first_right_img_target_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->secound_right_img_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->secound_right_img_target_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->hole_world_img_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->hole_world_img_target_url}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->our_advertisement_img}}</td>
                           <td class="last-order-item text-uppercase">{{$adsData->our_advertisement_target_url}}</td>
                           <td><h4 class="m-0 fw-bold">{{$adsData->created_at}}</h4></td>
                           <td>
                              <div class="two-icon d-flex justify-content-center">
                                 <a href="{{Route('ads_edit',[$adsData->id])}}">
                                    <div class="delete mx-2 bg-primary p-3 rounded text-white fw-bold d-flex align-items-center">
                                        <i class="fas fa-edit"></i>
                                     </div>
                                </a>
                                <a href="{{Route('ads_delete',[$adsData->id])}}">
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
         </div> --}}

@endsection