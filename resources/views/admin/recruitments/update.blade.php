@extends('admin.layouts.app')
@section('title', 'Cập nhật '. $title)
@section('content')
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Cập nhật {{$title}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{route($route.'.index')}}">Danh sách</a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!">Cập nhật</a>
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

                    <form action="{{route($route.'.update', $data)}}" method="POST"
                          class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"  enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @include($view.'._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
