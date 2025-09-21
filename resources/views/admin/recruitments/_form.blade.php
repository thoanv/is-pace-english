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
                        <div class="form-group {{$errors->has('title') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Tiêu đề <span class="text-danger">*</span></label>
                            <input id="name" placeholder="Trưởng phòng kinh doanh" type="text" name="title" class="form-control {{$errors->has('title') ? 'form-control-danger' : ''}}" value="{{old('title', $data['title'])}}">
                            @if ($errors->has('title'))
                                <div class="col-form-label">
                                    {{$errors->first('title')}}
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
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('vi_tri') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Vị trí <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="vi_tri" placeholder="Trưởng phòng, phó phòng, nhân viên, ..." class="form-control {{$errors->has('vi_tri') ? 'form-control-danger' : ''}}" value="{{old('vi_tri', $data['vi_tri'])}}">
                            @if ($errors->has('vi_tri'))
                                <div class="col-form-label">
                                    {{$errors->first('vi_tri')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('bang_cap') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Bằng cấp <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="bang_cap" placeholder="Đại học, cao đẳng, ..." class="form-control {{$errors->has('bang_cap') ? 'form-control-danger' : ''}}" value="{{old('bang_cap', $data['bang_cap'])}}">
                            @if ($errors->has('bang_cap'))
                                <div class="col-form-label">
                                    {{$errors->first('bang_cap')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('thu_nhap') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Thu nhập <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="thu_nhap" placeholder="10 triệu - thỏa thuận"
                                   class="form-control {{$errors->has('thu_nhap') ? 'form-control-danger' : ''}}"
                                   value="{{old('thu_nhap', $data['thu_nhap'])}}">
                            @if ($errors->has('thu_nhap'))
                                <div class="col-form-label">
                                    {{$errors->first('thu_nhap')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('hinh_thuc_lam_viec') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Hình thức <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="hinh_thuc_lam_viec" placeholder="Làm tại văn phòng"
                                   class="form-control {{$errors->has('hinh_thuc_lam_viec') ? 'form-control-danger' : ''}}"
                                   value="{{old('hinh_thuc_lam_viec', $data['hinh_thuc_lam_viec'])}}">
                            @if ($errors->has('hinh_thuc_lam_viec'))
                                <div class="col-form-label">
                                    {{$errors->first('hinh_thuc_lam_viec')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('noi_lam_viec') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Nơi làm việc <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="noi_lam_viec" placeholder="Hà nội"
                                   class="form-control {{$errors->has('noi_lam_viec') ? 'form-control-danger' : ''}}"
                                   value="{{old('noi_lam_viec', $data['noi_lam_viec'])}}">
                            @if ($errors->has('noi_lam_viec'))
                                <div class="col-form-label">
                                    {{$errors->first('noi_lam_viec')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('kinh_nghiem') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Kinh nghiệm <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="kinh_nghiem" placeholder="Mới tốt nghiệp, Trên 1 năm,..."
                                   class="form-control {{$errors->has('kinh_nghiem') ? 'form-control-danger' : ''}}"
                                   value="{{old('kinh_nghiem', $data['kinh_nghiem'])}}">
                            @if ($errors->has('kinh_nghiem'))
                                <div class="col-form-label">
                                    {{$errors->first('kinh_nghiem')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group {{$errors->has('lam_viec') ? 'has-danger' : ''}}">
                            <label for="name" class="col-form-label">Làm việc <span class="text-danger">*</span></label>
                            <input id="name" type="text" name="lam_viec" placeholder="Toàn thời gian, ..."
                                   class="form-control {{$errors->has('lam_viec') ? 'form-control-danger' : ''}}"
                                   value="{{old('lam_viec', $data['lam_viec'])}}">
                            @if ($errors->has('lam_viec'))
                                <div class="col-form-label">
                                    {{$errors->first('lam_viec')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="type" class="col-form-label">Thời gian xuất bản</label>
                            <input class="form-control" type="datetime-local"  name="date_publish" value="{{ old('date_publish', $data['date_publish'] ?? now()->format('Y-m-d\TH:i')) }}"/>
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
    </div>
</div>

