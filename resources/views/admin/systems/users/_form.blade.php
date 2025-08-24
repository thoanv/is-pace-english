<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Thông tin chung</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('name') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Họ tên<span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{old('name', $data['name'])}}"
                                   class="form-control {{$errors->has('name') ? 'form-control-danger' : ''}}">
                            @if ($errors->has('name'))
                                <div class="col-form-label">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('email') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" name="email" value="{{old('email', $data['email'])}}" {{isset($data['id']) ? 'disabled' : ''}}
                                   class="form-control {{$errors->has('email') ? 'form-control-danger' : ''}}">
                            @if ($errors->has('email'))
                                <div class="col-form-label">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('phone') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="text" name="phone" value="{{old('phone', $data['phone'])}}" {{isset($data['id']) ? 'disabled' : ''}}
                                   class="form-control {{$errors->has('phone') ? 'form-control-danger' : ''}}">
                            @if ($errors->has('phone'))
                                <div class="col-form-label">
                                    {{$errors->first('phone')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12 roles">
                        <div class="form-group {{$errors->has('role_id') ? 'has-danger' : ''}}">
                            <label for="role_id" class="col-form-label">Nhóm quyền <span class="text-danger">*</span></label>
                            <select class="form-control" id="role_id" name="role_id">
                                <option value="">--Chọn--</option>
                                @foreach($roles as $role)
                                    <option {{old('role_id', $selected == $role['id']) ? 'selected' : ''}} value="{{$role['id']}}">{{$role['name']}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('role_id'))
                                <div class="col-form-label">
                                    {{$errors->first('role_id')}}
                                </div>
                            @endif
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
                            <div class="col-lg-12 mb-2">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" id="checkbox-admin" name="is_admin" value="1" {{ old('is_admin', $data['is_admin'] == \App\Enums\CommonEnum::ACTIVATED)  ? 'checked' : '' }}>
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                        </span>
                                        <span>Quản trị viên cao cấp</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" id="checkbox-login" name="is_login" value="1" {{ old('is_login', $data['is_login'] == \App\Enums\CommonEnum::ACTIVATED)  ? 'checked' : '' }}>
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                        </span>
                                        <span>Đăng nhập</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Hình ảnh</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="file-upload text-center">
                            <div class="upload_image" data-name="image">
                                <input type="hidden" class="image" name="image" value="{{old('image')}}">
                                <img src="{{(old('image') ? old('image') : '/admin/images/placeholder.png')}}"
                                     width="180px"
                                     alt="" class="preview-image">
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
            if ($("#checkbox-admin").is(":checked")) {
                $(".roles").hide();
            }

            $("#checkbox-admin").on("change", function () {
                if ($(this).is(":checked")) {
                    $(".roles").hide();
                } else {
                    $(".roles").show();
                }
            });
        });
    </script>
@endpush
