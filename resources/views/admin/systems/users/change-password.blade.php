@extends('admin.layouts.app')
@section('title', 'Đổi mật khẩu')
@push('scripts')
    <script>
        $(document).ready(function () {
            $("#showPassword").change(function () {
                let passwordFields = $("#current_password, #password, #password_confirmation");

                if ($(this).is(":checked")) {
                    passwordFields.attr("type", "text"); // Hiển thị mật khẩu
                } else {
                    passwordFields.attr("type", "password"); // Ẩn mật khẩu
                }
            });
        });
    </script>
@endpush
@section('content')
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Đổi mật khẩu</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!">Đổi mật khẩu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('admin.components.notification-status')
        </div>
        <!-- Page-header end -->

        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{route('change-password-post')}}" method="POST"
                          class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="sub-title">Thông tin chung</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group  {{$errors->has('current_password') ? 'has-danger' : ''}}">
                                                    <label for="current_password" class="col-form-label">Mật khẩu hiện tại <span class="text-danger">*</span></label>
                                                    <input id="current_password" type="password" name="current_password" class="form-control " value="{{old('current_password')}}"  autocomplete="off">
                                                    @if ($errors->has('current_password'))
                                                        <div class="col-form-label">
                                                            {{$errors->first('current_password')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group {{$errors->has('new_password') ? 'has-danger' : ''}}">
                                                    <label for="password" class="col-form-label">Mật khẩu mới <span class="text-danger">*</span></label>
                                                    <input type="password" name="new_password" class="form-control" id="password" value="{{old('new_password')}}" autocomplete="off">
                                                    @if ($errors->has('new_password'))
                                                        <div class="col-form-label">
                                                            {{$errors->first('new_password')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group {{$errors->has('new_password_confirmation') ? 'has-danger' : ''}}">
                                                    <label for="password_confirmation" class="col-form-label">Xác nhận mật khẩu <span class="text-danger">*</span></label>
                                                    <input type="password" name="new_password_confirmation" autocomplete="off" class="form-control" id="password_confirmation" value="{{old('new_password_confirmation')}}">

                                                    @if ($errors->has('new_password_confirmation'))
                                                        <div class="col-form-label">
                                                            {{$errors->first('new_password_confirmation')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group row mb-0">
                                                    <div class="col-lg-12">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" id="showPassword" name="status" value="1">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                                <span>Hiển thị mật khẩu</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="sub-title">Chức năng</h4>
                                        <div class="row">
                                            <div class="col-lg-12 button-page text-center">
                                                <button class="btn btn-success mb-0" fdprocessedid="jcfaig"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu
                                                </button>
                                                <a href="{{route('dashboard')}}" class="btn btn-danger mb-0"><i class="fa fa-arrow-left" aria-hidden="true"></i> Trở về
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
