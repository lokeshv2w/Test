<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/file-upload/css/fileinput.css') }}">
    
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
    @stack("style")
    
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    {{ config('global.role.admin.adminLogo.f')}}<span>{{ config('global.role.admin.adminLogo.s')}}</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">web apps</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Email</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="emails">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/email/read.html" class="nav-link">Read</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/email/compose.html" class="nav-link">Compose</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item nav-category">Components</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
                            <i class="link-icon" data-feather="layout"></i>
                            <span class="link-title">Table</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item nav-category">Pages</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
                            <i class="link-icon" data-feather="unlock"></i>
                            <span class="link-title">Authentication</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="authPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/auth/login.html" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/auth/register.html" class="nav-link">Register</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Docs</li>
                    <li class="nav-item">
                        <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                            <i class="link-icon" data-feather="hash"></i>
                            <span class="link-title">Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
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
                                        <a href="pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Chat</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Calendar</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Email</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Profile</p>
                                        </a>
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
                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
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
                                <img class="wd-30 ht-30 rounded-circle" src="{{ auth()->user()->userInfo->user_photo ? '/backend/AdminProfile/'.auth()->user()->userInfo->user_photo :  asset('backend/assets/images/user.png') }}" alt="profile">  
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle" src="{{ auth()->user()->userInfo->user_photo ? '/backend/AdminProfile/'.auth()->user()->userInfo->user_photo :  asset('backend/assets/images/user.png') }}" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">{{ auth()->user()->userInfo->username }}</p>
                                        <p class="tx-12 text-muted">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('admin.profile') }}" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="{{ route('admin.profile') }}" class="text-body ms-0">
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
                                        <a href="{{ route('admin.logout') }}" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            @section("content") @show()

            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
                <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
    <!-- End custom js for this page -->
    <script src="{{ asset('backend/assets/file-upload/js/plugins/buffer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/file-upload/js/plugins/filetype.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/file-upload/js/plugins/piexif.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/file-upload/js/plugins/sortable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/file-upload/js/fileinput.js') }}" type="text/javascript"></script>
    @stack("script")
</body>

</html>