<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>E-COM - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="icon" href="{!! asset('backend/cart logo.png') !!}"/>
    <!-- Select2 -->
{{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery-ui.css')}}">


    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- FilePond Css -->
    <link href="{{asset('assets/css/filepond.css')}}" rel="stylesheet" />

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

    <!-- Toastr Css -->
    <link href="{{asset('/assets/css/toastr.min.css')}}" rel="stylesheet" />

    {{--    <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet" />--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" />
    <style>
        tr td button {
            border: none !important;
            padding: 0 !important;
            background: transparent !important;
        }
    </style>
    @stack('css')
</head>

<body data-topbar="dark" data-layout="horizontal">

<!-- Begin page -->
<div id="layout-wrapper">

@include('partials.topbar.index')

@include('partials.navbar.index')

<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

{{--                <head>--}}

{{--                    <meta charset="utf-8" />--}}
{{--                    <title>New Look Engineering Dashboard</title>--}}
{{--                    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--                    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />--}}
{{--                    <meta content="Themesbrand" name="author" />--}}
{{--                    <!-- App favicon -->--}}
{{--                    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">--}}

{{--                    <!-- DataTables -->--}}
{{--                    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--                    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}

{{--                    <!-- Responsive datatable examples -->--}}
{{--                    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}

{{--                    <!-- Bootstrap Css -->--}}
{{--                    <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--                    <link rel="stylesheet" href="{{asset('assets/css/tagsinput.css')}}">--}}


{{--                    <!-- Icons Css -->--}}
{{--                    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--                    <!-- App Css-->--}}
{{--                    <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--                    @toastr_css--}}
{{--                    <!-- FilePond Css -->--}}
{{--                    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />--}}

{{--                    <!-- FilePond Css -->--}}
{{--                    <link href="{{ asset('assets/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />--}}

{{--                    <!-- JAVASCRIPT -->--}}
{{--                    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>--}}

{{--                    @stack('css')--}}
{{--                </head>--}}
