<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Admin Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/file-upload/toaster/toastr.css') }}">
</head>

<body>
  <div class="main-wrapper">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
              <div class="row">
                <div class="col-md-4 pe-md-0">

                  <div class="auth-side-wrapper">
                    <img src="{{ asset('backend/assets/images/login.png') }}" alt="">
                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">{{ config('global.role.admin.adminLogTitle.f')}}<span> {{ config('global.role.admin.adminLogTitle.s')}}</span></a>
                    <h5 class="text-muted fw-normal mb-4">{{ config('global.role.admin.adminLogContent')}}</h5>
                    <form action="{{ route('admin.login') }}" class="forms-sample" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" autocomplete="current-password" placeholder="Password">
                        @error('password')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                      </div>
                      <!-- @if(Session::has('msg'))
                        <p style="color:red">{{ Session::get('msg') }}</p>
                        @endif -->
                      <!-- <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- core:js -->
  <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/template.js') }}"></script>
  <script src="{{ asset('backend/assets/file-upload/toaster/toastr.min.js') }}" type="text/javascript"></script>
  @if(Session::has('msg'))
    @switch(Session::get('status'))
    
      @case('success')
      <script>
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-top-right"
        }
        toastr.success("{{ Session::get('msg') }}");
      </script>
      @break

      @case('error')
      <script>
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-top-right"
        }
        toastr.error("{{ Session::get('msg') }}");
      </script>
      @break

    @endswitch
  @endif
</body>

</html>