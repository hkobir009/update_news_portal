@section('title','Deshboard')
@section('content')
	<div class="content position-fixed p-4">
        <div class="row d-flex justify-content-center">
            <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                <h1 class="my-5 ms-4 text-capitalize p-0 fw-bold">Dashboard</h1>
                <div class="dashboard-content-right d-flex">
                    <div class="calander position-relative bg-white status px-md-4 py-md-3 p-1 mx-2 border rounded">
                        <div class="last-thirty-days d-flex align-items-center">
                            <i class="far fa-calendar-alt"></i>
                            <h4 class="m-0 fw-bold mx-1 mx-sm-3 text-capitalize">last 30 days</h4>
                            <i class="fas fa-chevron-right fa-1x"></i>
                        </div>
                        <div class="more-days position-absolute top-100 bg-white shadow w-100 mt-2 rounded" style="display: none;">
                            <ul class="m-0 p-0">
                                <li class="list-unstyled">
                                    <a class="text-decoration-none py-4 d-block" href="#"><h4 class="m-0 fw-bold mx-3 text-capitalize">last 30 days</h4></a>
                                </li>
                                <li class="list-unstyled">
                                    <a class="text-decoration-none py-4 d-block" href="#"><h4 class="m-0 fw-bold mx-3 text-capitalize">last 6 months</h4></a>
                                </li>
                                <li class="list-unstyled">
                                    <a class="text-decoration-none py-4 d-block" href="#"><h4 class="m-0 fw-bold mx-3 text-capitalize">last 1 year</h4></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="reports d-flex align-items-center bg-white p-1 px-md-4 py-md-3 mx-2 rounded">
                        <i class="fas fa-chart-line"></i>
                        <h4 class="m-0 fw-bold mx-3 text-capitalize">report</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-2">
                <div class="gradient-div">
                    <div class="py-4 rounded d-flex align-items-center justify-content-around">
                        <div class="">
                            <h2 class="fw-medium">1,945</h2>
                            <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                         </div>
                        <div class="curved-line">
                            <i class="fas fa-wave-square"></i>
                        </div>						
                    </div>
                </div>
        </div><!--col-lg-3-->
        <div class="col-lg-3 py-2">
            <div class="gradient-div">
                <div class="py-4 rounded d-flex align-items-center justify-content-around">
                    <div class="">
                        <h2 class="fw-medium">1,945</h2>
                        <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                     </div>
                    <div class="curved-line">
                        <i class="fas fa-wave-square"></i>
                    </div>						
                </div>
            </div>
         </div><!--col-lg-3-->
            <div class="col-lg-3 py-2">
                <div class="gradient-div">
                    <div class="py-4 rounded d-flex align-items-center justify-content-around">
                        <div class="">
                            <h2 class="fw-medium">1,945</h2>
                            <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                         </div>
                        <div class="curved-line">
                            <i class="fas fa-wave-square"></i>
                        </div>						
                    </div>
                </div>
            </div><!--col-lg-3-->
            <div class="col-lg-3 py-2">
                <div class="gradient-div">
                    <div class="py-4 rounded d-flex align-items-center justify-content-around">
                        <div class="">
                            <h2 class="fw-medium">1,945</h2>
                            <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                         </div>
                        <div class="curved-line">
                            <i class="fas fa-wave-square"></i>
                        </div>						
                    </div>
                </div>
             </div><!--col-lg-3-->
        </div><!--row-->
        
        <div class="second-gradient py-3">
            <div class="row">
                <div class="col-lg-3 py-2">
                    <div class="gradient-div">
                        <div class="py-4 rounded d-flex align-items-center justify-content-around">
                            <div class="">
                                <h2 class="fw-medium">1,945</h2>
                                <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                             </div>
                            <div class="curved-line">
                                <i class="fas fa-wave-square"></i>
                            </div>						
                        </div>
                    </div>
                 </div><!--col-lg-3-->
                 <div class="col-lg-3 py-2">
                     <div class="gradient-div">
                         <div class="py-4 rounded d-flex align-items-center justify-content-around">
                             <div class="">
                                 <h2 class="fw-medium">1,945</h2>
                                 <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                              </div>
                             <div class="curved-line">
                                 <i class="fas fa-wave-square"></i>
                             </div>						
                         </div>
                     </div>
                  </div><!--col-lg-3-->
                  <div class="col-lg-3 py-2">
                      <div class="gradient-div">
                          <div class="py-4 rounded d-flex align-items-center justify-content-around">
                              <div class="">
                                  <h2 class="fw-medium">1,945</h2>
                                  <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                               </div>
                              <div class="curved-line">
                                  <i class="fas fa-wave-square"></i>
                              </div>						
                          </div>
                      </div>
                   </div><!--col-lg-3-->
                   <div class="col-lg-3 py-2">
                       <div class="gradient-div">
                           <div class="py-4 rounded d-flex align-items-center justify-content-around">
                               <div class="">
                                   <h2 class="fw-medium">1,945</h2>
                                   <h3 class="fw-bolder text-capitalize">Today Orders</h3>
                                </div>
                               <div class="curved-line">
                                   <i class="fas fa-wave-square"></i>
                               </div>						
                           </div>
                       </div>
                    </div><!--col-lg-3-->
             </div>
        </div>
    </div><!--content-->

    
@endsection