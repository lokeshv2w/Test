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
    <link rel="stylesheet" href="{{ asset('backend/assets/file-upload/toaster/toastr.css') }}"> 
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
    @stack("style")
    
</head>

<body>
    <div class="main-wrapper">

        <!-- sidebar start -->
        @include('admin.includes.sidebar')
        <!-- sidebar end -->

        <div class="page-wrapper">

            <!-- header content area start -->
            @include('admin.includes.header')
            <!-- header content area end -->

            <!-- main content area start -->
            @section("content") @show()
            <!-- main content area end -->

            <!-- footer content area start -->
            @include('admin.includes.footer')
            <!-- footer content area end -->

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
    <script src="{{ asset('backend/assets/file-upload/toaster/toastr.min.js') }}" type="text/javascript"></script>
    @stack("script")
</body>

</html>