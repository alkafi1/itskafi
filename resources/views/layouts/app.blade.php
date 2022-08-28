<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/feature.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('backend/assets/css/demo3/style.min.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_navbar.html -->
		<div class="horizontal-menu">
			<nav class="navbar top-navbar">
				<div class="container">
					<div class="navbar-content">
						<a href="#" class="navbar-brand">
							Noble<span>UI</span>
						</a>
						<form class="search-form">
							<div class="input-group">
                <div class="input-group-text">
                  <i data-feather="search"></i>
                </div>
								<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
							</div>
						</form>
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="languageDropdown">
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
								</div>
							</li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="grid"></i>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                    <p class="mb-0 fw-bold">Web Apps</p>
                    <a href="javascript:;" class="text-muted">Edit</a>
                  </div>
                  <div class="row g-0 p-1">
                    <div class="col-3 text-center">
                      <a href="../apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="../apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="../email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i><p class="tx-12">Profile</p></a>
                    </div>
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="mail"></i>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                    <p>9 New Messages</p>
                    <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="p-1">
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="../../../assets/images/faces/face2.jpg" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Leonardo Payne</p>
                          <p class="tx-12 text-muted">Project status</p>
                        </div>
                        <p class="tx-12 text-muted">2 min ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="../../../assets/images/faces/face3.jpg" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Carl Henson</p>
                          <p class="tx-12 text-muted">Client meeting</p>
                        </div>
                        <p class="tx-12 text-muted">30 min ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="../../../assets/images/faces/face4.jpg" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Jensen Combs</p>
                          <p class="tx-12 text-muted">Project updates</p>
                        </div>
                        <p class="tx-12 text-muted">1 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="../../../assets/images/faces/face5.jpg" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Amiah Burton</p>
                          <p class="tx-12 text-muted">Project deatline</p>
                        </div>
                        <p class="tx-12 text-muted">2 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="../../../assets/images/faces/face6.jpg" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Yaretzi Mayo</p>
                          <p class="tx-12 text-muted">New record</p>
                        </div>
                        <p class="tx-12 text-muted">5 hrs ago</p>
                      </div>	
                    </a>
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="bell"></i>
                  <div class="indicator">
                    <div class="circle"></div>
                  </div>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                    <p>6 New Notifications</p>
                    <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="p-1">
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="gift"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>New Order Recieved</p>
                        <p class="tx-12 text-muted">30 min ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="alert-circle"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>Server Limit Reached!</p>
                        <p class="tx-12 text-muted">1 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="../../../assets/images/faces/face6.jpg" alt="userr">
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>New customer registered</p>
                        <p class="tx-12 text-muted">2 sec ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="layers"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>Apps are ready for update</p>
                        <p class="tx-12 text-muted">5 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="download"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>Download completed</p>
                        <p class="tx-12 text-muted">6 hrs ago</p>
                      </div>	
                    </a>
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{--  <img class="wd-30 ht-30 rounded-circle" src="{{ ( Auth::user()->image != '' ?' asset('/uploads/users') }}/{{ Auth::user()->image }}':'Avatar::create(Auth::user()->name)->toBase64()' )}}" alt="profile">  --}}
                  @if (Auth::user()->image)
                    <img class="wd-30 ht-30 rounded-circle" src="{{ asset('/uploads/users')}}/{{ Auth::user()->image }} " alt="profile">
                    @else
                    <img class="wd-30 ht-30 rounded-circle" src=" {{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="profile">
                  @endif
                  
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                  <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                    <div class="mb-3">
                      {{--  <img class="wd-80 ht-80 rounded-circle" src="{{ Avatar::create(Auth::user()->name)->toBase64(); }}" alt="">  --}}
                      @if (Auth::user()->image)
                        <img class="wd-80 ht-80 rounded-circle" src="{{ asset('/uploads/users')}}/{{ Auth::user()->image }} " alt="profile">
                        @else
                        <img class="wd-80 ht-80 rounded-circle" src=" {{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="profile">
                      @endif
                    </div>
                    <div class="text-center">
                      <p class="tx-16 fw-bolder">@auth{{ Auth::user()->name }}@endauth</p>
                      <p class="tx-12 text-muted">@auth{{ Auth::user()->email }}@endauth</p>
                    </div>
                  </div>
                  <ul class="list-unstyled p-1">
                    <li class="dropdown-item py-2">
                      <a href="profile.html" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="user"></i>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="dropdown-item py-2">
                      <a href="javascript:;" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="edit"></i>
                        <span>Edit Profile</span>
                      </a>
                    </li>
                    <li class="dropdown-item py-2">
                      <a href="javascript:;" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="repeat"></i>
                        <span>Switch User</span>
                      </a>
                    </li>
                    <li class="dropdown-item py-2">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                      document.getElementById('logout-form').submit();" class="text-body ms-0">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                        <i class="me-2 icon-md" data-feather="log-out"></i>
                        <span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
						</ul>
						<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
							<i data-feather="menu"></i>					
						</button>
					</div>
				</div>
			</nav>
			<nav class="bottom-navbar">
				<div class="container">
					<ul class="nav page-navigation">
						
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="mail"></i>
								<span class="menu-title">User</span>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="nav-item"><a class="nav-link" href="{{ route('user') }}">User List</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="mail"></i>
								<span class="menu-title">Banner</span>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="nav-item"><a class="nav-link" href="{{ route('banner') }}">Banner List</a></li>
									<li class="nav-item"><a class="nav-link" href="{{ route('banner.create') }}">Banner Create</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="mail"></i>
								<span class="menu-title">Find Me</span>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="nav-item"><a class="nav-link" href="{{ route('findme') }}">Find Me List</a></li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
		<!-- partial -->
	
		<div class="page-wrapper">
			<div class="page-content">
        @yield('content')
			</div>

			{{--  <!-- partial:../../partials/_footer.html -->
			<footer class="footer border-top">
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com/" target="_blank">NobleUI</a>.</p>
                <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
                </div>
			</footer>
			<!-- partial -->  --}}
	
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
  {{--  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>  --}}
	<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/template.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/feather.min.js') }}"></script>
	<!-- endinject -->
 

	<!-- Custom js for this page -->
  @yield('footer_script')
  <!-- End custom js for this page -->
</body>
</html>