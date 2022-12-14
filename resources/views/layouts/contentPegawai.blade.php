<body>
	@yield('contentPegawai')
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<div class="navbar-brand">
					&nbsp;&nbsp;&nbsp;&nbsp;<img class="logo" src="../assets/img/logoMPM.png" width="100%">
				</div>

				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/profile/default.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/profile/default.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Pegawai</h4>
												<p class="text-muted">Pegawai@gmail.com</p><a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/profile/default.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<b>Pegawai</b>
									<span class="user-level">Pegawai</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>SCM Dashboard</p>
							</a>
							<div class="collapse" id="dashboard">
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Account Setting</p>
							</a>
							<div class="collapse" id="dashboard">
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="{{ route('logout') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Logout</p>
							</a>
							<div class="collapse" id="dashboard">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<!-- End Sidebar -->
</body>