@extends('user.layouts.master')
@section('toolbar')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">



            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    User Dashboard
                </h1>
                <!--end::Title-->


                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a class="text-muted text-hover-primary">
                            Admin Dashboard </a>
                    </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">


                <!--begin::Secondary button-->
                {{-- <a href="#"
                class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary"
                data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
                Rollover </a> --}}
                <!--end::Secondary button-->

                <!--begin::Primary button-->
                {{-- <a href="#" class="btn btn-sm fw-bold btn-primary"
                data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                Add Target </a> --}}
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
@endsection
@section('content')
    <h2>Welcome to User dashboard</h2>
    Want to come back later? Please <a href="{{ route('user.logout') }}" class="box__textfooter-link">log out</a>.
@endsection
