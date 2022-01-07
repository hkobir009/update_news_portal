@extends('admin.layouts.app')
@section('content')
                         <!-- ADD Breaking news -->

<div class="content position-fixed p-4">
    <div class="container">
        <div class="row d-flex justify-content-center p-4">
            <div class="dashbard-content-header d-flex align-items-center justify-content-between">
                <div class="title my-5 ms-4 ">
                    <h1 class="text-capitalize p-0 fw-bold">user list</h1>
                    <em class="text-capitalize p-0 fw-bold">you have total 2834 users</em>
                </div>
                <div class="dashboard-content-right d-flex">
                    <div class="search-bar d-flex align-items-center calander position-relative">
                        <input class=" form-control py-2 p-2 px-3 pe-5" type="text" placeholder="Search by name">
                        <i class="fas fa-search position-absolute top-50"></i>
                    </div>
                    <div class="calander position-relative bg-white status px-md-3 py-md-1 p-1 mx-3 border rounded">
                        <div class="last-thirty-days d-flex align-items-center  py-md-1 p-1">
                            <h4 class="m-0 fw-bold mx-1 mx-sm-4 text-capitalize">status</h4>
                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                        </div>
                        <div class="more-days position-absolute top-100 bg-white shadow w-100 mt-2 rounded" style="display: none;">
                            <ul class="m-0 p-0">
                                <li class="list-unstyled">
                                    <a class="text-decoration-none py-4 d-block" href="#">
                                        <h4 class="m-0 fw-bold mx-3 text-capitalize">last 30 days</h4>
                                    </a>
                                </li>
                                <li class="list-unstyled">
                                    <a class="text-decoration-none py-4 d-block" href="#">
                                        <h4 class="m-0 fw-bold mx-3 text-capitalize">last 6 months</h4>
                                    </a>
                                </li>
                                <li class="list-unstyled">
                                    <a class="text-decoration-none py-4 d-block" href="#">
                                        <h4 class="m-0 fw-bold mx-3 text-capitalize">last 1 year</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                            <th class="text-capitalize"><input class="user-checkbox me-3" type="checkbox">user</th>
                            <th class="text-capitalize">ordered</th>
                            <th class="text-capitalize">phone</th>
                            <th class="text-capitalize country-table">country</th>
                            <th class="text-capitalize last-order-table">last order</th>
                            <th class="text-capitalize">status</th>
                            <th class="text-capitalize position-relative">
                                <i class="fas fa-ellipsis-h"></i>
                                <div class="user-more-days click-one position-absolute top-75 bg-white shadow rounded py-3" style="display: none;">
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                </div>
                                <!--user-more-days-->
                            </th>
                        </tr>
                        <!-- -------------------------------one tr start--------------------------------------- -->
                        <tr class="align-middle position-relative">
                            <td>
                                <div class="d-flex align-items-center my-3 table-user-profile">
                                    <input class="user-checkbox me-3" type="checkbox">
                                    <div class="profile me-3">
                                        <img class="img-fluid rounded-circle" src="img/profile.jpg" alt="">
                                    </div>
                                    <div class="profile-info d-flex flex-column">
                                        <h4 class="m-0 fw-bold">Abu bin ishtiyak</h4>
                                        <div class="user-email mt-2">infoexample@gmail.com</div>
                                    </div>
                                </div>
                                <div class="two-icon d-flex bg-white position-absolute top-50 p-3 d-none">
                                    <i class="me-4 fas fa-envelope"></i>
                                    <i class="ms-4 fas fa-user"></i>
                                </div>
                            </td>
                            <td class="ordered-item text-uppercase">2054 usd</td>
                            <td class="phone-item">1245685787</td>
                            <td class="country-item">united states</td>
                            <td class="last-order-item text-uppercase">10 feb 2021</td>
                            <td class="status-item">active</td>
                            <!-- three dot design strats -->
                            <td class="text-capitalize two position-relative">
                                <i class="fas fa-ellipsis-h"></i>
                                <div class="user-more-days position-absolute click-two top-75 bg-white shadow rounded py-3" style="display: none;">
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="text-decoration-none d-flex justify-content-evenly py-3" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                            <h4>sent email to all</h4>
                                        </a>
                                    </div>
                                </div>
                                <!--user-more-days-->
                            </td>
                        </tr>
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



