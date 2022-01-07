
	<input type="checkbox" id="check" style="display: none;">
	<header class="bg-white shadow w-100 position-sticky top-0 py-4 d-flex">
		<div class="header-left d-flex ms-5 align-items-center">	
			<label for="check" class="me-3">
				<i class="fas fa-bars"></i>
			</label>
			<h3 class="m-0 text-uppercase">Dashboard</h3>
			<div class="search ms-3 ms-md-5 ps-md-5 d-flex align-items-center w-100">
				<i class="fas fa-search me-md-3"></i>
				<input type="text" placeholder="Search anything" class="form-control border-0 search-here w-100">
			</div>
		</div>
		       <!------------- header whth details -------------------->
		<div class="header-right justify-content-end d-flex align-items-center">

               <!------------- notification box start from here--------->

			@include('admin.layouts.deshboard_Messege')

            <!------------- notification box start from here--------->

			@include('admin.layouts.deshboard_notification')

			<!-- chat box end -->

			<!--------------------------------------------- contact-box---------------------------------------------------------  -->
			<div class="contact-box-start position-relative">
				<div class="contact-box rounded-circle d-flex justify-content-center align-items-center p-0">
					<div class="profile me-md-4 m-sm-0">
						<img class="img-fluid rounded-circle" src="img/profile.jpg" alt="">
					</div>
					<div class="profile-info">
						<span class="text-danger fw-bold">Admin</span>
						<h4 class="m-0 fw-bold">Abu bin ishtiyak <i class="fas fa-chevron-down fw-bold"></i></h4>
					</div>
				</div>
				<div class="contact-details box-details position-absolute shadow rounded" style="display: none;">
					<div class="toggle-profile-main box-top d-flex flex-column justify-content-evenly">
						<div class="toggle-profile d-flex flex align-items-center px-4 py-5 border-bottom">
							<div class="me-3">
								<img class="img-fluid rounded-circle" src="img/profile.jpg" alt="profile">
							</div>
							<div class="name-mail d-flex flex-column">
								<h3 class="mb-1 text-capitalize fw-bold">Abu bin ishtiyak </h3>
								<span class="text-decoration-none fw-bold">example@gmail.com</span>
							</div>
						</div>
						<div class="contact-settings bg-white">
							<div class="account-info px-5 py-4 border-bottom">
								<div class="user py-3">
									<a href="#user.html" class="d-flex align-items-center text-decoration-none">
										<i class="far fa-user me-3"></i>
										<h4 class="text-capitalize fw-bold mt-1 ms-3">View profile</h4>
									</a>
								</div>
								<div class="user py-3">
									<a href="#" class="d-flex align-items-center text-decoration-none">
										<i class="far fa-user me-3"></i>
										<h4 class="text-capitalize fw-bold mt-1 ms-3">Account setting</h4>
									</a>
								</div>
								<div class="user py-3">
									<a href="#" class="d-flex align-items-center text-decoration-none">
										<i class="far fa-user me-3"></i>
										<h4 class="text-capitalize fw-bold mt-1 ms-3">log activity</h4>
									</a>
								</div>
							</div>
							<div class="account-sign-out px-5 py-4">
								<div class="user py-3">
									<a href="#" class="d-flex align-items-center text-decoration-none">
										<i class="far fa-user me-3"></i>
										<h4 class="text-capitalize fw-bold mt-1 ms-3">sign out</h4>
									</a>
								</div>
							</div>
						</div>	
					</div><!--toggle-profile-->
				</div><!-- user details end -->
			</div><!--messge box end here-->
		</div>
	</header>
	<!-- header area end -->
   