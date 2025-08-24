@push('scripts')
    <script type="text/javascript" src="{{asset('admin/js/config-ckeditor.js')}}"></script>
@endpush
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Thông tin chung</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="parent_id" class="col-form-label">Danh mục cha<span class="text-danger">*</span></label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="">Root</option>
                                @foreach($categories as $key => $value)
                                    <option value="{{$value['id']}}" {{$value['id'] == $data['parent_id'] ? 'selected': ''}}>
                                        @php
                                            $str = '';
                                            for($i = 0; $i< $value->level; $i++){
                                                echo $str;
                                                $str.='-- ';
                                            }
                                        @endphp
                                        {{$value['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="type" class="col-form-label">Loại {{$title}}<span class="text-danger">*</span></label>
                            <select name="type" id="type" class="form-control">
                                @foreach(\App\Enums\CategoryEnum::TypeCategory as $k => $v)
                                    <option {{old('type', $data['type'] == $k) ? 'selected' : ''}} value="{{$k}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('name') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Tên {{$title}} <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control {{$errors->has('name') ? 'form-control-danger' : ''}}" value="{{old('name', $data['name'])}}">
                            @if ($errors->has('name'))
                            <div class="col-form-label">
                                {{$errors->first('name')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label">Mô tả</label>
                            <textarea id="my-editor" name="description">{{old('description', $data['description'])}}</textarea>
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
{{--        <div class="card">--}}
{{--            <div class="card-block">--}}
{{--                <h4 class="sub-title">Hình ảnh</h4>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="file-upload text-center">--}}
{{--                            <div class="upload_image" data-name="image">--}}
{{--                                <input type="hidden" class="image" name="image" value="{{old('image')}}">--}}
{{--                                <img src="{{(old('image') ? old('image') : '/admin/images/placeholder.png')}}"--}}
{{--                                     width="180px"--}}
{{--                                     alt="" class="preview-image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>

