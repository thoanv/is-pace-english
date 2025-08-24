@extends('admin.layouts.app')
@section('title', 'Danh sách ' .$title)
@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>{{$title}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!}">Danh sách</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('admin.components.notification-status')
        </div>
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="mb-0">Bộ lọc</h5>
                </div>
                <form method="get" action="{{route($route.'.index')}}">
                <div class="card-block table-border-style mx-3 pb-2">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="key">Từ khóa</label>
                                <input type="text" name="key" id="key" class="form-control" placeholder="..." value="{{ request('key') }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="admin">Quản trị </label>
                                <select name="admin" id="admin" class="form-control">
                                    <option value="">--Chọn--</option>
                                    <option {{ request('admin') == \App\Enums\CommonEnum::ACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::ACTIVATED}}">Active</option>
                                    <option {{ request('admin') == \App\Enums\CommonEnum::UNACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::UNACTIVATED}}">Unactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="login">Đăng nhập</label>
                                <select name="login" id="login" class="form-control">
                                    <option value="">--Chọn--</option>
                                    <option {{ request('login') == \App\Enums\CommonEnum::ACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::ACTIVATED}}">Active</option>
                                    <option {{ request('login') == \App\Enums\CommonEnum::UNACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::UNACTIVATED}}">Unactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-success btn-sm"><i class="feather icon-search"></i> Search</button>
                            <a href="{{route($route.'.index')}}" class="btn btn-inverse text-white btn-sm"><i class="feather icon-refresh-ccw"></i> Refresh</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="mb-0">Danh sách</h5>
                    @can('create', \App\Models\User::class)
                    <div class="ml-auto">
                        <a href="{{route($route.'.create')}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i>
                            Thêm mới
                        </a>
                    </div>
                    @endcan
                </div>
                <div class="card-block table-border-style mx-3">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Họ tên</th>
                                <th class="text-center">Hình ảnh</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th class="text-center">Quyền</th>
                                <th class="text-center">Quản trị cao cấp</th>
                                <th class="text-center">Đăng nhập</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lists as $item)
                                <tr>
                                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                    <td>{{$item['name']}}</td>
                                    <td class="text-center">
                                        <img src="{{$item['image']??'/admin/images/default.jpeg'}}" class="img-radius w-25" alt="User-Profile-Image">
                                    </td>
                                    <td>{{$item['email']}}</td>
                                    <td>{{$item['phone']}}</td>
                                    <td class="text-center">
                                        @if($item->is_admin == \App\Enums\CommonEnum::ACTIVATED)
                                            <label class="label label-primary">Quyền admin</label>
                                        @else
                                            @foreach($item->roles as $role)
                                                <label class="label label-primary">{{$role['name']}}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="my-checkbox" class="custom-control-input my-checkbox"
                                                   id="customSwitch_is_admin_{{$item['id']}}"
                                                   data-id="{{$item['id']}}"
                                                   data-api="{{route('enable-column')}}"
                                                   data-table="{{$route}}"
                                                   data-column="is_admin"
                                                {{ $item['is_admin'] == \App\Enums\CommonEnum::ACTIVATED ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customSwitch_is_admin_{{$item['id']}}"></label>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="my-checkbox" class="custom-control-input my-checkbox"
                                                   id="customSwitch_is_login_{{$item['id']}}"
                                                   data-id="{{$item['id']}}"
                                                   data-api="{{route('enable-column')}}"
                                                   data-table="{{$route}}"
                                                   data-column="is_login"
                                                {{ $item['is_login'] == \App\Enums\CommonEnum::ACTIVATED ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customSwitch_is_login_{{$item['id']}}"></label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="icon-btn">
                                            @can('update', $item)
                                                <a href="{{route($route.".edit", $item)}}" class="btn btn-primary btn-outline-primary btn-sm"><i
                                                        class="icofont icofont-pencil-alt-5"></i> Sửa
                                                </a>
                                            @endcan
                                            @can('delete', $item)
                                                <form class="d-inline-block" action="{{ route($route.'.destroy', $item['id']) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-outline-danger btn-sm confirm-button-delete">
                                                        <i class="icofont icofont-garbage"></i> Xóa
                                                    </button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        @include('admin.components.paginate', ['lists' => $lists])
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-body start -->
    </div>
@endsection
