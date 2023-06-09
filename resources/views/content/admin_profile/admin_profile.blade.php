@extends('layouts/layoutMaster')

@section('title', 'Admin Profile - Profile')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
@endsection

<!-- Page -->
@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
@endsection




@section('page-script')
    <script src="{{ asset('assets/js/pages-profile.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Admin Profile /</span> Profile
    </h4>


    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="{{ asset('cover_profile_image/' . $admin_profile_details->cover_image) }}" alt="cover image"
                        class="rounded-top ">
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="{{ asset('admin_profile_image/' . $admin_profile_details->admin_image) }}" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ $admin_profile_details->admin_name }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item">
                                        <i class='ti ti-color-swatch'></i> {{ $admin_profile_details->profession }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class='ti ti-map-pin'></i> {{ $admin_profile_details->city }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class='ti ti-calendar'></i> {{ $admin_profile_details->profession_joinend }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Header -->
    {{--
<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-sm-row mb-4">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='ti-xs ti ti-user-check me-1'></i> Profile</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-teams')}}"><i class='ti-xs ti ti-users me-1'></i> Teams</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-projects')}}"><i class='ti-xs ti ti-layout-grid me-1'></i> Projects</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-connections')}}"><i class='ti-xs ti ti-link me-1'></i> Connections</a></li>
    </ul>
  </div>
</div>
<!--/ Navbar pills --> --}}

    <!-- User Profile Content -->
    <div class="row">
        <div class="col-md-12">
            <!-- About User -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="card-text text-uppercase">About</small>
                            <ul class="list-unstyled mb-4 mt-3">
                               

                                <li class="d-flex align-items-center mb-3"><i class="ti ti-crown"></i><span
                                        class="fw-bold mx-2">Role:</span> <span> {{ $admin_profile_details->role }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3"><i class="ti ti-flag"></i><span
                                        class="fw-bold mx-2">Country:</span>
                                    <span>{{ $admin_profile_details->country }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description"></i><span
                                        class="fw-bold mx-2">Languages:</span>
                                    <span>{{ $admin_profile_details->language }}</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <small class="card-text text-uppercase">Contacts</small>
                            <ul class="list-unstyled mb-4 mt-3">
                                <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-call"></i><span
                                        class="fw-bold mx-2">Contact:</span>
                                    <span>{{ $admin_profile_details->contact }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-skype"></i><span
                                        class="fw-bold mx-2">Skype:</span> <span>{{ $admin_profile_details->skype }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3"><i class="ti ti-mail"></i><span
                                        class="fw-bold mx-2">Email:</span> <span>{{ $admin_profile_details->email }}</span>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <!--/ About User -->


        </div>

    </div>
    </div>
    <!--/ User Profile Content -->
@endsection
