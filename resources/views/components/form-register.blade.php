@php
    $units = \App\Models\Unit::where('status', \App\Enums\CommonEnum::ACTIVATED)->get();
@endphp
<section class="section dark" id="section_1626926351">
    <div class="bg section-bg fill bg-fill bg-loaded">
    </div>
    <div class="section-content relative">
        <div class="row align-middle" id="row-2170850">
            <div class="col medium-6 small-12 large-6">
                <div class="img has-hover img-radius x md-x lg-x y md-y lg-y" id="image_5252338">
                    <div class="img-inner box-shadow-2 box-shadow-2-hover dark">
                <img src="/images/ing_tu_van.png" lass="attachment-large size-large entered lazyloaded" alt="tư vấn">
                    </div>
                </div>
            </div>
            <div class="col small-12 large-6">
                <div class="col-inner">
                    <div class="home-form">
                        <div class="wpcf7 js" id="wpcf7-f10-p1168-o1">
                            <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                   aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form id="ajaxForm" action="{{route('form-register')}}" method="post" class="wpcf7-form init"
                                  aria-label="Form liên hệ" novalidate="novalidate" data-status="init">
                                @csrf
                                <div class="form-dk" style="background: unset!important;">
                                    <h3 style="text-align: center" class="text-bong">Đăng ký tư vấn
                                    </h3>
                                    <div class="form-item">
                                        <p><span class="wpcf7-form-control-wrap" data-name="hoten">
                                                <input size="40"
                                                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                       aria-required="true"
                                                       aria-invalid="false"
                                                       placeholder="Họ và tên học sinh"
                                                       value=""
                                                       type="text"
                                                       name="hoten" style="margin-bottom: 0">
                                        <small
                                            style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                            class="text-danger error-hoten"></small>
                                        </span>
                                        </p>
                                    </div>

                                    <div class="form-item">
                                        <p><span class="wpcf7-form-control-wrap" data-name="sdt">
                                            <input size=""
                                                   class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                   aria-required="true"
                                                   aria-invalid="false"
                                                   placeholder="Số điện thoại phụ huynh"
                                                   value=""
                                                   type="tel"
                                                   name="sdt" style="margin-bottom: 0">
                                        <small
                                            style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                            class="text-danger error-sdt"></small>
                                        </span>
                                        </p>
                                    </div>

                                    <div class="form-item">
                                        <select class="form-control form-select" name="dotuoi" style="margin-bottom: 0">
                                            <option value="">Độ tuổi con</option>
                                            <option value="">Từ 3 - 5 tuổi</option>
                                            <option value="">Từ 6 - 11 tuổi</option>
                                            <option value="">Trên tuổi</option>
                                        </select>
                                        <small
                                            style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                            class="text-danger error-dotuoi"></small>
                                    </div>
                                    <div class="form-item">
                                        <select class="form-control form-select" name="coso" style="margin-bottom: 0">
                                            <option value="">Cơ sở i-Space</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit['id']}}">{{$unit['name']}}</option>
                                            @endforeach
                                        </select>
                                        <small
                                            style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                            class="text-danger error-coso"></small>
                                    </div>
                                    <div class="text-center">
                                        <p>
                                            <button type="button"
                                                    class="form-registers button wpcf7-form-control has-spinner wpcf7-submit primary lowercase btn-custom"
                                                    style="border-radius:99px"><br>
                                                <span>Đăng ký</span><br>
                                            </button>
                                            <span class="wpcf7-spinner"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <style>
                #row-2170850 > .col > .col-inner {
                    padding: 30px 0px 0px 0px;
                }
            </style>
        </div>
    </div>


    <style>
        #section_1626926351 {
            padding-top: 69px;
            padding-bottom: 69px;
        }

        #section_1626926351 .section-bg.bg-loaded {
            background-image: url('/images/bg-register.png');
        }

        #section_1626926351 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
        }

        #section_1626926351 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
        }
    </style>
</section>
