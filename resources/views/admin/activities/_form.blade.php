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
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="unit_id" class="col-form-label">Cơ sở<span class="text-danger">*</span></label>
                            <select name="unit_id" id="unit_id" class="form-control">
                                <option value="">--Chọn--</option>
                                @foreach($units as $key => $unit)
                                    <option {{old('unit_id', $data['unit_id'] == $unit['id']) ? 'selected' : ''}} value="{{$unit['id']}}">{{$unit['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('link') ? 'has-danger' : ''}}">
                            <label for="link" class="col-form-label">Đường link <span class="text-danger">*</span></label>
                            <input type="text" name="link" class="form-control" id="link" value="{{old('link', $data['link'])}}">
                            @if ($errors->has('link'))
                                <div class="col-form-label">
                                    {{$errors->first('link')}}
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
                            <div class="col-lg-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" id="checkbox" name="is_outstanding" value="1"
                                            {{ old('is_outstanding', $data['is_outstanding'] == \App\Enums\CommonEnum::ACTIVATED)  ? 'checked' : '' }}>
                                        <span class="cr">
                                                                                <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                            </span>
                                        <span>Nổi bật</span>
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

