@php
    use App\Enums\CommonEnum;use App\Models\Center;use App\Models\Course;use App\Models\Districts;use App\Models\Province;

    $centerAll = Center::all();
    $courses = Course::where([['status', CommonEnum::ACTIVATED], ['is_outstanding', CommonEnum::ACTIVATED]])->limit(4)->get();
    $province_id = [];
    foreach ($centerAll as $center) {
        array_push($province_id, $center->province_id);
    }

    // lấy được các thành phố có center
    $province_id = array_unique($province_id);
    // Lấy danh sách các tỉnh từ bảng Province
    $provinces = Province::whereIn('id', $province_id)->get();
    // dd( $provinces)
@endphp
{{-- form ưu đãi --}}
<div style="overflow-x: hidden;"
     class="page-template page-template-page-blank page-template-page-blank-php page page-id-6544 page-child parent-pageid-6078 logged-in admin-bar lightbox nav-dropdown-has-arrow mobile-submenu-toggle customize-support">
    <div class="mfp-bg mfp-ready" style="display:none"></div>
    <div class="mfp-wrap mfp-auto-cursor mfp-ready" tabindex="-1" style="display:none; overflow: hidden auto;">
        <div class="mfp-container mfp-s-ready mfp-inline-holder">
            <div class="mfp-content">
                <div id="popupqt" class="lightbox-by-id lightbox-content lightbox-white popup-content"
                     style="max-width:1300px ;padding:0px">
                    <section class="section hide-for-medium has-block tooltipstered" id="section_635454740">
                        <div class="bg section-bg fill bg-fill bg-loaded">
                        </div>
                        <div class="section-content relative">
                            <div class="row row-large row-full-width align-right" id="row-907486783">
                                <div id="col-179917922" class="col medium-5 small-12 large-5">
                                    <div class="col-inner" style="background-color:rgba(255, 255, 255, 0.89);">
                                        <div id="text-81361506" class="text">
                                            <p style="margin-bottom: 20px;"><strong>Đăng ký &amp; Nhận ưu đãi</strong>
                                            </p>
                                            <style>
                                                #text-81361506 {
                                                    font-size: 2.188rem;
                                                    text-align: center;
                                                    color: #134c81;
                                                }

                                                #text-81361506 > * {
                                                    color: #134c81;
                                                }
                                            </style>
                                        </div>
                                        <div class="wpcf7 js" id="wpcf7-f6069-o2" lang="vi" dir="ltr"
                                             data-wpcf7-id="6069">
                                            <div class="screen-reader-response">
                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                <ul></ul>
                                            </div>
                                            <form id="promotionForm-pc" method="POST" action="#">
                                                @csrf
                                                <div class="form-dk">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap" data-name="parent_name">
                                                            <input size="40" maxlength="150"
                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                   autocomplete="name" aria-required="true"
                                                                   aria-invalid="false" placeholder="Tên ba mẹ" value=""
                                                                   type="text" name="parent_name">
                                                            <span id="error-parent_name" class=""></span>
                                                        </span>
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap" data-name="parent_phone">
                                                            <input size="40" maxlength="15"
                                                                   class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required"
                                                                   autocomplete="tel" aria-required="true"
                                                                   aria-invalid="false"
                                                                   placeholder="Số điện thoại ba mẹ"
                                                                   value="" type="tel" name="parent_phone">
                                                            <span id="error-parent_phone" class=""></span>
                                                        </span>
                                                    </p>
                                                    <div class="select-order">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap"
                                                                  data-name="your-province">
                                                                <select class="wpcf7-form-control wpcf7-select"
                                                                        aria-invalid="false" name="your-province">
                                                                    <option value="">{{ __('messages.co_so_gan_nha') }}
                                                                    </option>
                                                                    @foreach ($provinces as $province)
                                                                        <option value="{{$province->id}}">{{ $province->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <span id="error-your-province" class=""></span>
                                                            </span>
                                                            <span class="wpcf7-form-control-wrap" data-name="course">
                                                                <select class="wpcf7-form-control wpcf7-select"
                                                                        aria-invalid="false" name="course">
                                                                    <option value="">{{ __('messages.khoa_hoc_phu_hop') }}
                                                                    </option>
                                                                    @foreach ($courses as $course)
                                                                        <option value="{{$course->id}}">
                                                                            {{ $course->category->translation->name }} -
                                                                            {{ $course->translation?->name === 'IELTS' ? '(Từ 12 tuổi trở lên)' : $course->translation?->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <span id="error-course" class=""></span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="box-btn-button">
                                                        <div class="btn-button" style="width: 100%;">
                                                            {{-- <p>
                                                                <button id="promotionSubmitBtn" class="wpcf7-form-control wpcf7-submit has-spinner" type="submit">
                                                                    Nhận tư vấn
                                                                </button>
                                                            </p> --}}
                                                            <p><input id="promotionSubmitBtn"
                                                                      data-form-id="promotionForm-pc"
                                                                      class="promotionSubmitBtn wpcf7-form-control wpcf7-submit has-spinner"
                                                                      type="submit"
                                                                      value="{{ __('messages.nhan_tu_van') }}"/></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <style>
                                        #col-179917922 > .col-inner {
                                            padding: 30px 30px 30px 30px;
                                            margin: 30px 0px 0px 0px;
                                            border-radius: 30px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                        <style>
                            #section_635454740 {
                                padding-top: 30px;
                                padding-bottom: 30px;
                                min-height: 680px;
                            }

                            #section_635454740 .section-bg.bg-loaded {
                                background-image: url(https://scotsenglish.edu.vn/wp-content/uploads/2025/03/popup-web-opt2.png);
                            }

                            #section_635454740 .section-bg {
                                background-position: 48% 35%;
                            }

                            #section_635454740 .ux-shape-divider--top svg {
                                height: 150px;
                                --divider-top-width: 100%;
                            }

                            #section_635454740 .ux-shape-divider--bottom svg {
                                height: 150px;
                                --divider-width: 100%;
                            }

                            .popup-content {
                                max-width: 1300px !important;
                                border-radius: 50px !important;
                            }

                            .popup-content .section-bg {
                                border-radius: 50px;
                            }

                            .popup-content input.wpcf7-form-control,
                            .popup-content select {
                                border: 2px solid var(--primary-color);
                                height: 64px;
                                background-color: transparent;
                            }

                            .popup-content .box-btn-button {
                                position: relative;
                                bottom: 0;
                            }
                        </style>
                    </section>

                    {{-- mobile --}}
                    <section class="section show-for-medium has-block" id="section_776244750">
                        <div class="bg section-bg fill bg-fill bg-loaded">
                        </div>
                        <div class="section-content relative">
                            <div id="gap-2070273188" class="gap-element clearfix"
                                 style="display:block; height:auto;">
                                <style>
                                    #gap-2070273188 {
                                        padding-top: 200px;
                                    }

                                    @media (min-width: 550px) {
                                        #gap-2070273188 {
                                            padding-top: 300px;
                                        }
                                    }

                                    @media (min-width: 850px) {
                                        #gap-2070273188 {
                                            padding-top: 30px;
                                        }
                                    }
                                </style>
                            </div>

                            <div class="row align-center" id="row-644265855">
                                <div id="col-562808248" class="col medium-11 small-11 large-5">
                                    <div class="col-inner" style="background-color:rgba(255, 255, 255, 0.89);">
                                        <div id="text-3486840000" class="text">
                                            <p style="margin-bottom: 10px;"><strong>Đăng ký &amp; Nhận ưu đãi</strong>
                                            </p>

                                            <style>
                                                #text-3486840000 {
                                                    font-size: 1.35rem;
                                                    text-align: center;
                                                    color: #134c81;
                                                }

                                                #text-3486840000 > * {
                                                    color: #134c81;
                                                }

                                                @media (min-width: 550px) {
                                                    #text-3486840000 {
                                                        font-size: 2.188rem;
                                                    }
                                                }
                                            </style>
                                        </div>
                                        <div class="wpcf7 js" id="wpcf7-f6069-p6074-o3" lang="vi"
                                             dir="ltr" data-wpcf7-id="6069">
                                            <div class="screen-reader-response">
                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                <ul></ul>
                                            </div>
                                            <form id="promotionForm-mb" method="POST" action="#">
                                                @csrf
                                                <div class="form-dk">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap" data-name="parent_name">
                                                            <input size="40" maxlength="150"
                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                   autocomplete="name" aria-required="true"
                                                                   aria-invalid="false" placeholder="Tên ba mẹ" value=""
                                                                   type="text" name="parent_name">
                                                            <span id="error-parent_name" class=""></span>
                                                        </span>
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap" data-name="parent_phone">
                                                            <input size="40" maxlength="15"
                                                                   class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required"
                                                                   autocomplete="tel" aria-required="true"
                                                                   aria-invalid="false"
                                                                   placeholder="Số điện thoại ba mẹ"
                                                                   value="" type="tel" name="parent_phone">
                                                            <span id="error-parent_phone" class=""></span>
                                                        </span>
                                                    </p>
                                                    <div class="select-order">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap"
                                                                  data-name="your-province">
                                                                <select class="wpcf7-form-control wpcf7-select"
                                                                        aria-invalid="false" name="your-province">
                                                                    <option value="">{{ __('messages.co_so_gan_nha') }}
                                                                    </option>
                                                                    @foreach ($provinces as $province)
                                                                        <option value="{{$province->id}}">{{ $province->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <span id="error-your-province" class=""></span>
                                                            </span>
                                                            <span class="wpcf7-form-control-wrap" data-name="course">
                                                                <select class="wpcf7-form-control wpcf7-select"
                                                                        aria-invalid="false" name="course">
                                                                    <option value="">{{ __('messages.khoa_hoc_phu_hop') }}
                                                                    </option>
                                                                    @foreach ($courses as $course)
                                                                        <option value="{{$course->id}}">
                                                                            {{ $course->category->translation->name }} -
                                                                            {{ $course->translation?->name === 'IELTS' ? '(Từ 12 tuổi trở lên)' : $course->translation?->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <span id="error-course" class=""></span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="box-btn-button">
                                                        <div class="btn-button" style="width: 100%;">
                                                            {{-- <p>
                                                                <button id="promotionSubmitBtn" class="wpcf7-form-control wpcf7-submit has-spinner" type="submit">
                                                                    Nhận tư vấn
                                                                </button>
                                                            </p> --}}
                                                            <p><input id="promotionSubmitBtn"
                                                                      data-form-id="promotionForm-mb"
                                                                      class="promotionSubmitBtn wpcf7-form-control wpcf7-submit has-spinner"
                                                                      type="submit"
                                                                      value="{{ __('messages.nhan_tu_van') }}"/></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <style>
                                        #col-562808248 > .col-inner {
                                            padding: 10px 15px 2px 15px;
                                            margin: 0px 0px 0px 0px;
                                            border-radius: 10px;
                                        }

                                        @media (min-width: 550px) {
                                            #col-562808248 > .col-inner {
                                                padding: 30px 30px 30px 30px;
                                                margin: 30px 0px 0px 0px;
                                            }
                                        }

                                        @media (min-width: 850px) {
                                            #col-562808248 > .col-inner {
                                                margin: 30px 0px 0px 0px;
                                            }
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                        <style>
                            #section_776244750 {
                                padding-top: 0px;
                                padding-bottom: 0px;
                            }

                            #section_776244750 .section-bg.bg-loaded {
                                background-image: url(https://scotsenglish.edu.vn/wp-content/uploads/2025/03/popup-mobile.png);
                            }

                            #section_776244750 .section-bg {
                                background-position: 100% 1%;
                            }

                            #section_776244750 .ux-shape-divider--top svg {
                                height: 150px;
                                --divider-top-width: 100%;
                            }

                            #section_776244750 .ux-shape-divider--bottom svg {
                                height: 150px;
                                --divider-width: 100%;
                            }

                            @media (min-width: 550px) {
                                #section_776244750 {
                                    padding-top: 30px;
                                    padding-bottom: 30px;
                                }
                            }

                            @media (max-width: 480px) {
                                .popup-content input.wpcf7-form-control,
                                .popup-content select {
                                    font-size: 15px;
                                    height: 38px;
                                    text-align: center;
                                }
                            }
                        </style>
                    </section>
                </div>
            </div>
            <div class="mfp-preloader">Loading...</div>
        </div>

        <button title="Close (Esc)" type="button" class="mfp-close">
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>


{{-- end form ưu đãi --}}
