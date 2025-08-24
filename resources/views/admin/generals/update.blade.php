@extends('admin.layouts.app')
@section('title', 'Thông tin chung')
@section('content')
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Thông tin chung</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!">Thông tin chung</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <form class="theme-form" method="POST"
                          action="{{route('generals.update',['general' => $general])}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @include('admin.components.notification-status')
                        @include($view.'._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
