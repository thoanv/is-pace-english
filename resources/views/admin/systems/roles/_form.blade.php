<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Thông tin chung</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('name') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Tên<span class="text-danger">*</span></label>
                            <input type="text" name="name"
                                   class="form-control {{$errors->has('name') ? 'form-control-danger' : ''}}" value="{{old('name', $data['name'])}}">
                            @if ($errors->has('name'))
                                <div class="col-form-label">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Danh sách quyền</h4>
                <div class="row">
                    @foreach($typePermissions as $typePermission)
                        <div class="col-lg-12  group-per ">
                            <div class="border-bottom mb-2">
                            <h5 class="sub-title-permission d-flex">
                                <div class="checkbox-fade fade-in-primary mr-0">
                                    <label>
                                        <input type="checkbox" class="select-all-group">
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span>{{$typePermission['name']}}</span>
                                    </label>
                                </div>

                            </h5>
                            <div class="mb-2 pb-1 list-permissions ml-4">
                                @foreach($typePermission->permissions as $permission)
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input class="permission-checkbox" type="checkbox" name="selectPermissions[]" {{in_array($permission['id'], $permissionSelects) ? 'checked' : ''}}
                                                   value="{{$permission['id']}}">
                                            <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                    </span>
                                            <span>{{$permission['value']}}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    @endforeach
                    @if ($errors->has('selectPermissions'))
                        <div class="col-lg-12 has-danger">
                            <div class="col-form-label">
                                {{$errors->first('selectPermissions')}}
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <style>
        .sub-title-permission {
            font-size: 16px;
            padding-bottom: 10px;
        }

        .list-permissions .checkbox-fade {
            margin-right: 35px;
        }
    </style>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Chức năng</h4>
                <div class="row">
                    <div class="col-lg-12 button-page text-center">
                        <button type="submit" class="btn btn-success mb-0"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu
                        </button>
                        <a href="{{route($route.'.index')}}" class="btn btn-danger mb-0"><i class="fa fa-arrow-left" aria-hidden="true"></i> Thoát
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Cài đặt</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group row mb-0">
                            <div class="col-lg-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" id="checkbox" name="status" value="1" {{ old('status', $data['status'] == \App\Enums\CommonEnum::ACTIVATED)  ? 'checked' : '' }}>
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                        </span>
                                        <span>Trạng thái</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function () {
            // Khi checkbox "Chọn tất cả" thay đổi
            $('.select-all-group').change(function () {
                let group = $(this).closest('.group-per'); // Lấy nhóm hiện tại
                group.find('.permission-checkbox').prop('checked', $(this).prop('checked'));
            });

            // Khi checkbox con thay đổi
            $('.permission-checkbox').change(function () {
                let group = $(this).closest('.group-per'); // Lấy nhóm hiện tại
                let total = group.find('.permission-checkbox').length; // Tổng số checkbox con
                let checked = group.find('.permission-checkbox:checked').length; // Số checkbox con được chọn

                // Nếu có ít nhất 1 checkbox con được chọn => Chọn checkbox cha
                if (checked > 0) {
                    group.find('.select-all-group').prop('checked', true);
                }
                // Nếu không còn checkbox con nào được chọn => Bỏ chọn checkbox cha
                else {
                    group.find('.select-all-group').prop('checked', false);
                }
            });

            $(".select-all-group").each(function () {
                let $group = $(this).closest(".group-per");
                let $allCheckboxes = $group.find(".permission-checkbox");

                if ($allCheckboxes.length === $allCheckboxes.filter(":checked").length) {
                    $(this).prop("checked", true);
                }
            });
        });

    </script>
@endpush
