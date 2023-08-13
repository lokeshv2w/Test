@extends("admin.layout.app")
@section("title","Admin Dashboard")

@push("style")
    <style>
        .img-xs {
            width: 75px;
            height: 75px;
        }
    </style>
@endpush

@section("content")
<div class="page-content">

    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-6 col-xl-6 left-wrapper">
            <div class="card rounded">

                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-xs rounded-circle" src="{{ auth()->user()->userInfo->user_photo ? '/backend/AdminProfile/'.auth()->user()->userInfo->user_photo :  asset('backend/assets/images/user.png') }}" alt=""> -->
                            <img class="img-xs rounded-circle" src="{{ (!empty(auth()->user()->userInfo->user_photo)) ? url('/backend/AdminProfile/'.auth()->user()->userInfo->user_photo) :  asset('backend/assets/images/user.png') }}" alt="">
                            <div class="ms-2">
                                <p>{{ auth()->user()->userInfo->username }}</p>
                                <p class="tx-11 text-muted">{{ auth()->user()->name }} | {{ auth()->user()->status }}</p>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>Hi! I'm {{ auth()->user()->userInfo->username }} ({{ auth()->user()->role }})...</p>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                        <p class="text-muted">{{ auth()->user()->email }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                        <p class="text-muted">{{ auth()->user()->userInfo->user_address }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                        <p class="text-muted">{{ auth()->user()->userInfo->user_phone }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">City:</label>
                        <p class="text-muted">{{ auth()->user()->userInfo->user_city }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">State:</label>
                        <p class="text-muted">{{ auth()->user()->userInfo->user_state }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Country:</label>
                        <p class="text-muted">{{ auth()->user()->userInfo->user_country }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Role:</label>
                        <p class="text-muted">{{ auth()->user()->role }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Status:</label>
                        <p class="text-muted">{{ auth()->user()->status }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Age:</label>
                        <p class="text-muted">{{ auth()->user()->userInfo->user_age }}</p>
                    </div>

                </div>
            </div>
            <br>
            <div class="card rounded">

                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="img-xs rounded-circle" src="{{ auth()->user()->userInfo->user_photo ? '/backend/AdminProfile/'.auth()->user()->userInfo->user_photo :  asset('backend/assets/images/user.png') }}" alt="">
                            <div class="ms-2">
                                <p>Update Password</p>
                                <p class="tx-11 text-muted">{{ auth()->user()->name }} | {{ auth()->user()->status }}</p>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.updatepassword') }}" class="forms-sample" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" autocomplete="off" placeholder="New Password">
                                @error('password')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="cpassword" name="cpassword" value="{{ old('cpassword') }}" autocomplete="off" placeholder="Confirm Password">
                                @error('cpassword')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update Password</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="d-none d-md-block col-md-6 col-xl-6 left-wrapper">
            <div class="card rounded">

                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="img-xs rounded-circle" src="{{ auth()->user()->userInfo->user_photo ? '/backend/AdminProfile/'.auth()->user()->userInfo->user_photo :  asset('backend/assets/images/user.png') }}" alt="">
                            <div class="ms-2">
                                <p>Update Profile</p>
                                <p class="tx-11 text-muted">{{ auth()->user()->name }} | {{ auth()->user()->status }}</p>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" autocomplete="off" placeholder="Name">
                            @error('name')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">UserName</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ auth()->user()->userInfo->username }}" autocomplete="off" placeholder="UserName">
                            @error('username')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="user_phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="user_phone" name="user_phone" value="{{ auth()->user()->userInfo->user_phone }}" autocomplete="off" placeholder="Phone">
                            @error('user_phone')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="user_address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="user_address" name="user_address" value="{{ auth()->user()->userInfo->user_address }}" placeholder="Address">
                            @error('user_address')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="user_age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="user_age" name="user_age" value="{{ auth()->user()->userInfo->user_age }}" autocomplete="off" placeholder="Age">
                            @error('user_age')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="user_city" class="form-label">City</label>
                            <input type="text" class="form-control" id="user_city" name="user_city" value="{{ auth()->user()->userInfo->user_city }}" autocomplete="off" placeholder="Enter City">
                            @error('user_city')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="user_state" class="form-label">State</label>
                            <input type="text" class="form-control" id="user_state" name="user_state" value="{{ auth()->user()->userInfo->user_state }}" autocomplete="off" placeholder="Enter State">
                            @error('user_state')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="user_country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="user_country" name="user_country" value="{{ auth()->user()->userInfo->user_country }}" autocomplete="off" placeholder="Enter Country">
                            @error('user_country')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="user_photo" class="form-label">Image</label>
                            <input type="file" class="form-control" id="user_photo" name="user_photo" value="{{ old('user_photo') }}" autocomplete="off" placeholder="Enter Country">
                            @error('user_photo')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                            <img class="wd-80 ht-80 rounded-circle" src="/backend/AdminProfile/{{auth()->user()->userInfo->user_photo}}" alt="">
                        </div>
                        

                        <button type="submit" class="btn btn-primary me-2">Update Profile</button>
                    </form>

                </div>
            </div>
        </div>
     </div>
    @endsection
    @push("script")
    <script>
        $(document).ready(function () {
            $('#user_photo1').fileinput({
            uploadUrl: '#',
            //uploadUrl: 'http://localhost/plugins/test-upload',
            initialPreviewAsData: true,
            initialPreview: [
                "https://dummyimage.com/640x360/a0f.png&text=Transport+1",
                "https://dummyimage.com/640x360/3a8.png&text=Transport+2",
                "https://dummyimage.com/640x360/6ff.png&text=Transport+3"
            ],
            initialPreviewConfig: [
                {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1, zoomData: 'https://dummyimage.com/1920x1080/a0f.png&text=Transport+1', description: '<h5>NUMBER 1</h5> The first choice for transport. This is the future.'},
                {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2, zoomData: 'https://dummyimage.com/1920x1080/3a8.png&text=Transport+2', description: '<h5>NUMBER 2</h5> The second choice for transport. This is the future.'},
                {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3, zoomData: 'https://dummyimage.com/1920x1080/6ff.png&text=Transport+3', description: '<h5>NUMBER 3</h5> The third choice for transport. This is the future.'}
            ]
        });
        });
    </script>
    @endpush