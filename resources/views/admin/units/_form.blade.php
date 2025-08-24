
@push('scripts')
    <script type="text/javascript" src="{{asset('admin/js/config-ckeditor.js')}}"></script>
@endpush
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Thông tin chung</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('name') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Tên <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="name" class="form-control {{$errors->has('name') ? 'form-control-danger' : ''}}" value="{{old('name', $data['name'])}}">
                            @if ($errors->has('name'))
                                <div class="col-form-label">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                    </div>

{{--                    <div class="col-lg-6">--}}
{{--                        <div class="form-group {{$errors->has('code') ? 'has-danger' : ''}}">--}}
{{--                            <label for="code" class="col-form-label">Mã <span class="text-danger">*</span></label>--}}
{{--                            <input id="code" type="text" name="code" class="form-control {{$errors->has('code') ? 'form-control-danger' : ''}}" value="{{old('code', $data['code'])}}">--}}
{{--                            @if ($errors->has('code'))--}}
{{--                                <div class="col-form-label">--}}
{{--                                    {{$errors->first('code')}}--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Số điện thoại </label>
                            <input id="phone" type="text" name="phone" class="form-control" value="{{old('phone', $data['phone'])}}">
                            @if ($errors->has('phone'))
                                <div class="col-form-label">
                                    {{$errors->first('phone')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="address" class="col-form-label">Địa chỉ</label>
                            <input id="address" type="text" name="address" class="form-control" value="{{old('address', $data['address'])}}">
                            @if ($errors->has('address'))
                                <div class="col-form-label">
                                    {{$errors->first('address')}}
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
                        <button class="btn btn-success mb-0"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu
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
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" id="checkbox" name="status" value="1"
                                            {{ old('status', $data['status'] == \App\Enums\CommonEnum::ACTIVATED)  ? 'checked' : '' }}>
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
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Hình ảnh</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="file-upload text-center">
                            <div class="upload_image" data-name="image">
                                <input type="hidden" class="image" name="image" value="{{old('image', $data['image'])}}">
                                <img src="{{(old('image', $data['image']) ?? '/admin/images/placeholder.png')}}"
                                     width="180px"
                                     alt="" class="preview-image">
                                @if ($errors->has('image'))
                                    <div class="col-form-label">
                                        {{$errors->first('image')}}
                                    </div>
                                @endif
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
            $("#type").change(function () {
                if ($(this).val() === "zone") {
                    $(".zones select").prop("disabled", true); // Disable select
                    $(".zones .required").hide(); // Disable select
                } else {
                    $(".zones select").prop("disabled", false); // Enable select
                    $(".zones .required").show(); // Disable select
                }
            });
        });
    </script>
@endpush
