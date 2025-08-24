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
                            <label for="name" class="col-form-label">Tên {{$title}} <span class="text-danger">*</span></label>
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
                            <label for="category_id" class="col-form-label">Danh mục<span class="text-danger">*</span></label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $key => $value)
                                    <option value="{{$value['id']}}" {{$value['id'] == $data['category_id'] ? 'selected': ''}}>
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
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('description') ? 'has-danger' : ''}}">
                            <label type="description" class="col-form-label">Mô tả ngắn <span class="text-danger">*</span></label>
                            <textarea id="description" name="description" class="form-control">{{old('description', $data['description'])}}</textarea>
                            @if ($errors->has('description'))
                                <div class="col-form-label">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('content') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Nội dung <span class="text-danger">*</span></label>
                            <textarea id="my-editor" name="content">{{old('content', $data['content'])}}</textarea>
                            @if ($errors->has('content'))
                                <div class="col-form-label">
                                    {{$errors->first('content')}}
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
                <h4 class="sub-title">Ảnh đại diện <span class="text-danger">*</span></h4>
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

        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Ảnh Cover <span class="text-danger">*</span></h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="file-upload text-center">
                            <div class="upload_image" data-name="cover">
                                <input type="hidden" class="cover" name="cover" value="{{old('cover', $data['cover'])}}">
                                <img src="{{(old('cover', $data['cover']) ?? '/admin/images/placeholder.png')}}"
                                     width="180px"
                                     alt="" class="preview-cover">
                                @if ($errors->has('cover'))
                                    <div class="col-form-label">
                                        {{$errors->first('cover')}}
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

