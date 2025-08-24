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
                    <h5 class="mb-0">Danh sách</h5>
                    {{-- @can('create', \App\Models\Menu::class)
                        <div class="ml-auto">
                            <a href="{{route($route.'.create')}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i>
                                Thêm mới
                            </a>
                        </div>
                    @endcan --}}
                </div>
                <div class="card-block table-border-style mx-3">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Mã menu</th>
                                <th class="text-center">Tên menu</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lists as $item)
                                <tr>
                                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                    <td class="text-center">
                                        <p class="mb-0">{{$item->key}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="mb-0">{{$item->name}}</p>
                                    </td>
                                    {{-- <td class="text-center">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="my-checkbox" class="custom-control-input"
                                                   id="customSwitch_is_outstanding_{{$item['id']}}"
                                                   data-id="{{$item['id']}}"
                                                   data-api="{{route('enable-column')}}" data-table="{{$route}}"
                                                   data-column="is_outstanding" {{ $item['is_outstanding'] == \App\Enums\CommonEnum::ACTIVATED ? 'checked' : '' }} >
                                            <label class="custom-control-label"
                                                   for="customSwitch_is_outstanding_{{$item['id']}}"></label>
                                        </div>
                                    </td> --}}
                                    <td class="text-center">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="my-checkbox" class="custom-control-input"
                                                   id="customSwitch_status_{{$item['id']}}"
                                                   data-id="{{$item['id']}}"
                                                   data-api="{{route('enable-column')}}" data-table="{{$route}}"
                                                   data-column="status" {{ $item['status'] == \App\Enums\CommonEnum::ACTIVATED ? 'checked' : '' }} >
                                            <label class="custom-control-label"
                                                   for="customSwitch_status_{{$item['id']}}"></label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="icon-btn">
                                                @can('update', $item)
                                                    <a href="{{route($route.".edit", $item)}}" class="btn btn-primary btn-outline-primary btn-sm"><i
                                                            class="icofont icofont-pencil-alt-5"></i> Sửa
                                                    </a>
                                                @endcan
                                                {{-- @can('delete', $item)
                                                    <form class="d-inline-block" action="{{ route($route.'.destroy', $item) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-outline-danger btn-sm confirm-button-delete">
                                                            <i class="icofont icofont-garbage"></i> Xóa
                                                        </button>
                                                    </form>
                                                @endcan --}}
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
