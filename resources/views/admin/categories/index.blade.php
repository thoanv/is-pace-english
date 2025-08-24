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
{{--            <div class="card">--}}
{{--                <div class="card-header d-flex align-items-center">--}}
{{--                    <h5 class="mb-0">Bộ lọc</h5>--}}
{{--                </div>--}}
{{--                <form method="get" action="{{route($route.'.index')}}">--}}
{{--                    <div class="card-block table-border-style mx-3 pb-2">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="key">Từ khóa</label>--}}
{{--                                    <input type="text" name="key" id="key" class="form-control" placeholder="..."--}}
{{--                                           value="{{ request('key') }}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="admin">Trạng thái</label>--}}
{{--                                    <select name="status" id="status" class="form-control">--}}
{{--                                        <option value="">--Chọn--</option>--}}
{{--                                        <option--}}
{{--                                            {{ request('status') == \App\Enums\CommonEnum::ACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::ACTIVATED}}">--}}
{{--                                            Active--}}
{{--                                        </option>--}}
{{--                                        <option--}}
{{--                                            {{ request('status') == \App\Enums\CommonEnum::UNACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::UNACTIVATED}}">--}}
{{--                                            Unactive--}}
{{--                                        </option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            --}}{{--                            <div class="col-lg-4">--}}
{{--                            --}}{{--                                <div class="form-group">--}}
{{--                            --}}{{--                                    <label for="login">Đăng nhập</label>--}}
{{--                            --}}{{--                                    <select name="login" id="login" class="form-control">--}}
{{--                            --}}{{--                                        <option value="">--Chọn--</option>--}}
{{--                            --}}{{--                                        <option {{ request('login') == \App\Enums\CommonEnum::ACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::ACTIVATED}}">Active</option>--}}
{{--                            --}}{{--                                        <option {{ request('login') == \App\Enums\CommonEnum::UNACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::UNACTIVATED}}">Unactive</option>--}}
{{--                            --}}{{--                                    </select>--}}
{{--                            --}}{{--                                </div>--}}
{{--                            --}}{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <button type="submit" class="btn btn-success btn-sm"><i class="feather icon-search"></i>--}}
{{--                                    Search--}}
{{--                                </button>--}}
{{--                                <a href="{{route($route.'.index')}}" class="btn btn-inverse text-white btn-sm"><i--}}
{{--                                        class="feather icon-refresh-ccw"></i> Refresh</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="mb-0">Danh sách</h5>
                    @can('create', \App\Models\Categories\Category::class)
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
                                <th class="text-center">Tên</th>
                                <th class="text-center">Danh mục cha</th>
                                <th class="text-center">Loại</th>
                                <th class="text-center">Tạo bởi</th>
                                {{-- <th class="text-center">Nổi bật</th> --}}
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @dd($lists) --}}
                            @foreach($lists as $item)
                                <tr>
                                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td>
                                            @php
                                                $str = '';
                                                for($i = 0; $i< $item->level; $i++){
                                                    echo $str;
                                                    $str.='-- ';
                                                }
                                            @endphp
                                            {{$item->name ?? ''}}
                                        </td>
                                        <td class="text-center"><label class="badge badge-md bg-info">{{$item->parent?$item->parent->name: ''}}</label></td>
                                    <td class="text-center"><label class="badge badge-md bg-info">{{\App\Enums\CategoryEnum::TypeCategory[$item['type']]}}</label></td>
                                    <td class="text-center">
                                        @if($item->owner)
                                            <p class="mb-0">{{$item->owner->name}}</p>
                                            <p class="mb-0">{{\Carbon\Carbon::parse($item['created_at'])->format('H:i d/m/Y')}}</p>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @can('update', $item)
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="my-checkbox" class="custom-control-input"
                                                   id="customSwitch_status_{{$item['id']}}"
                                                   data-id="{{$item['id']}}"
                                                   data-api="{{route('enable-column')}}" data-table="{{$route}}"
                                                   data-column="status" {{ $item['status'] == \App\Enums\CommonEnum::ACTIVATED ? 'checked' : '' }} >
                                            <label class="custom-control-label"
                                                   for="customSwitch_status_{{$item['id']}}"></label>
                                        </div>
                                        @endcan
                                    </td>
                                    <td class="text-center">
                                        <div class="icon-btn">
                                            @can('update', $item)
                                                <a href="{{route($route.".edit", ['category' => $item])}}"
                                                   class="btn btn-primary btn-outline-primary btn-sm"
                                                   data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa"><i
                                                        class="icofont icofont-pencil-alt-5"></i>
                                                </a>
                                            @endcan
                                            @can('delete', $item)
                                                <form class="d-inline-block"
                                                      action="{{ route($route.'.destroy', $item['id']) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa"
                                                            class="btn btn-danger btn-outline-danger btn-sm confirm-button-delete">
                                                        <i class="icofont icofont-garbage"></i>
                                                    </button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
{{--                        @include('admin.components.paginate', ['lists' => $lists])--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-body start -->
    </div>
@endsection
