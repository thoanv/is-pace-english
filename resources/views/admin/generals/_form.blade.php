@push('scripts')
    <script type="text/javascript" src="{{asset('admin/js/config-ckeditor.js')}}"></script>
@endpush
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title mb-1">Logo Footer</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="file-upload text-center">
                            <div class="upload_image" data-name="logo_white">
                                <input type="hidden" class="logo_white" name="logo_white" data-bs-original-title=""
                                       title="" value="{{$general['logo_white']}}">
                                <img src="{{ $general['logo_white']?? '/admin/images/placeholder.png'}}" width="180px"
                                     alt="" class="preview-logo_white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title mb-1">Logo Header</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="file-upload text-center">
                            <div class="upload_image" data-name="logo">
                                <input type="hidden" class="logo" name="logo"
                                       value="{{$general['logo']}}" data-bs-original-title="" title="">
                                <img src="{{ $general['logo']?? '/admin/images/placeholder.png'}}" width="180px"
                                     alt="" class="preview-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Favicon</h4>
                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="file-upload text-center">
                            <div class="upload_image" data-name="favicon">
                                <input type="hidden" class="favicon" name="favicon" value="{{$general['favicon']}}"
                                       data-bs-original-title="" title="">
                                <img src="{{ $general['favicon']?? '/admin/images/placeholder.png'}}" width="180px"
                                     alt="" class="preview-favicon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title mb-1">Thumbnail</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="file-upload text-center">
                            <div class="upload_image" data-name="thumbnail">
                                <input type="hidden" class="thumbnail" name="thumbnail" value="{{$general['favicon']}}"
                                       data-bs-original-title="" title="">
                                <img src="{{ $general['thumbnail']?? '/admin/images/placeholder.png'}}" width="180px"
                                     alt="" class="preview-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-md-12 text-center py-3">
                @can('update', \App\Models\General::find(1))
                    <button class="btn btn-square btn-primary" type="submit" data-bs-original-title="" title="">Cập
                        nhật
                    </button>
                @endcan
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title mb-1">Thông tin chung</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group ">
                            <label for="name" class="col-form-label">Tên công ty</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$general['name']}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Địa chỉ Email</label>
                            <input type="text" name="email" class="form-control" id="email"
                                   value="{{$general['email']}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" id="phone"
                                   value="{{$general['phone']}}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="address" class="col-form-label">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" id="address"
                                   value="{{$general['address']}}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Bản đồ</label>
                            <textarea class="form-control" id="" rows="5" name="map">{{$general['map']}}</textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title mb-1">SEO</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="meta_keywords" class="col-form-label">Keywords</label>
                            <textarea class="form-control" id="meta_keywords" rows="5"
                                      name="meta_keywords">{{$general['meta_keywords']}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="meta_description" class="col-form-label">Description</label>
                            <textarea class="form-control" id="meta_description" rows="5"
                                      name="meta_description">{{$general['meta_description']}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title mb-1">Mạng xã hội</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="facebook" class="col-form-label">Facebook</label>
                            <input type="text" name="facebook" class="form-control" id="facebook"
                                   value="{{$general['facebook']}}" placeholder="https://www.facebook.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="google" class="col-form-label">Google</label>
                            <input type="text" name="google" class="form-control" id="google"
                                   value="{{$general['google']}}" placeholder="https://www.google.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="youtube" class="col-form-label">Youtube</label>
                            <input type="text" name="youtube" class="form-control" id="youtube"
                                   value="{{$general['youtube']}}" placeholder="https://www.youtube.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="twitter" class="col-form-label">Twitter</label>
                            <input type="text" name="twitter" class="form-control" id="twitter"
                                   value="{{$general['twitter']}}" placeholder="https://www.twitter.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="pinterest" class="col-form-label">Pinterest</label>
                            <input type="text" name="pinterest" class="form-control" id="pinterest"
                                   value="{{$general['pinterest']}}" placeholder="https://www.pinterest.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="instagram" class="col-form-label">Instagram</label>
                            <input type="text" name="instagram" class="form-control" id="instagram"
                                   value="{{$general['instagram']}}" placeholder="https://www.instagram.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="instagram" class="col-form-label">TikTok</label>
                            <input type="text" name="tiktok" class="form-control" id="instagram"
                                   value="{{$general['tiktok']}}" placeholder="https://www.tiktok.com">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title mb-1">Về với chúng tôi</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control" id="my-editor" rows="5"
                                      name="come_to_us">{{$general['come_to_us']}}</textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="sub-title mb-1">Ảnh trái</h4>
                        <div class="file-upload">
                            <div class="upload_image" data-name="image_left">
                                <input type="hidden" class="image_left" name="image_left" value="{{$general['image_left']}}"
                                       data-bs-original-title="" title="">
                                <img src="{{ $general['image_left']?? '/admin/images/placeholder.png'}}" width="180px"
                                     alt="" class="preview-image_left">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="sub-title mb-1">Ảnh phải</h4>
                        <div class="file-upload">
                            <div class="upload_image" data-name="image_right">
                                <input type="hidden" class="image_right" name="image_right" value="{{$general['image_right']}}"
                                       data-bs-original-title="" title="">
                                <img src="{{ $general['image_right']?? '/admin/images/placeholder.png'}}" width="180px"
                                     alt="" class="preview-image_right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
