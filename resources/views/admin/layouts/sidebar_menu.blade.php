<!-- Start the navigation bar -->
	<div class="sidebar position-fixed">
		<div class="sidebar-content overflow-scroll h-100 mb-5 pb-5">
			<div class="dashboard-menu py-3">
				<a href="{{route('dashboard')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center" >
					<i class="fas fa-desktop pe-3"></i>
					<span class="pe-5 text-capitalize">Dashboard</span>
				</a>
			</div>
						<!-- ------------------------ design accordian----------------------------- -->
			<div class="accordian"id="accordionExample">
				<div class="dashboard-menu accordion-item py-3">
					<a href="#" class="py-3 accordion-button rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseOne">
						<i class="fa-solid fa-earth-europe pe-2"></i>
						<span class="pe-5 text-capitalize">Breaking news</span>
					</a>
    				<div id="collapseOne" class="accordion-collapse collapse  ms-4" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('create_breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
									<i class="fa-solid fa-plus mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">Add news</span>
								</a>
							</div>
						</div>
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center" >
									<i class="fa-solid fa-list mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">News list</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- item two -->
				<div class="dashboard-menu accordion-item py-3">
					<a class="py-3 accordion-button rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center" href="#" data-bs-toggle="collapse" data-bs-target="#collapsetwo">
						<i class="fa-solid fa-bullhorn mx-0 pe-4"></i>
						<span class="pe-5 text-capitalize">Post manage</span>
					</a>
    				<div id="collapsetwo" class="accordion-collapse collapse  ms-4" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('create_post')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
									<i class="fa-solid fa-plus mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">Add post</span>
								</a>
							</div>
						</div>
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('blog_post')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
									<i class="fa-solid fa-list mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">view post</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- item three -->
				<div class="dashboard-menu accordion-item py-3">
					<a class="py-3 accordion-button rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center" href="#" data-bs-toggle="collapse" data-bs-target="#collapsethree">
						<i class="fa-solid fa-align-justify mx-0 pe-3"></i>
						<span class="pe-5 text-capitalize">Category</span>
					</a>
    				<div id="collapsethree" class="accordion-collapse collapse  ms-4" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('create_category')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
									<i class="fa-solid fa-plus mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">Add menu</span>
								</a>
							</div>
						</div>
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('category')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
									<i class="fa-solid fa-list mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">menu list</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="dashboard-menu accordion-item py-3">
					<a class="py-3 accordion-button rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefour">
						<i class="fas fa-tags mx-0 pe-3"></i>
						<span class="pe-5 text-capitalize">tag manage</span>
					</a>
    				<div id="collapsefour" class="accordion-collapse collapse  ms-4" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('create_tag')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
									<i class="fa-solid fa-plus mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">Add tag</span>
								</a>
							</div>
						</div>
						<div class="accordion-body">
							<div class="dashboard-menu">
								<a href="{{route('tag')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
									<i class="fa-solid fa-list mx-0 pe-4"></i>
									<span class="pe-5 text-capitalize">tag list</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- accordian ends here -->
			<div class="dashboard-menu py-3">
				<a href="{{route('breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
					<i class="fa-solid fa-earth-europe pe-3"></i>
					<span class="pe-5 text-capitalize"> Breaking news </span>
				</a>
			</div>
			<div class="dashboard-menu py-3">
				<a href="{{route('breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
					<i class="fas fa-user pe-3"></i>
					<span class="pe-5 text-capitalize">user informetion</span>
				</a>
			</div>
			<div class="dashboard-menu py-3">
				<a href="{{route('breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
					<i class="fa fa-table pe-3"></i>
					<span class="pe-5 text-capitalize">Subscription User</span>
				</a>
			</div>
			<div class="dashboard-menu py-3">
				<a href="{{route('breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
					<i class="fa fa-th pe-3"></i>
					<span class="pe-5 text-capitalize">Post comments</span>
				</a>
			</div>

			<div class="dashboard-menu py-3">
				<a href="{{route('breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
					<i class="fas fa-project-diagram mx-0 pe-4"></i>
					<span class="pe-5 text-capitalize">ads manage</span>
				</a>
			</div>
			<div class="dashboard-menu py-3">
				<a href="{{route('breaking_newses')}}" class="py-3 rounded ps-3 d-block text-white text-decoration-none d-flex align-items-center">
					<i class="fa fa-sliders pe-4"></i>
					<span class="pe-4 text-capitalize">Settings</span>
				</a>
			</div>
		</div>		
	</div>
	<!-- navigation end -->