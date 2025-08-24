@extends('layouts.app')
@section('title',  $course['name'])
@section('image', $course['image'])
@section('canonical', route('page',['cate_slug' => $cate['slug'], 'slug' => $course['slug']]))
{{--@push('styles')--}}
{{--    <link rel="stylesheet" href="https://oea-vietnam.com/wp-content/cache/min/1/4e6420ad1c521dc5e26814d9277a6723.css"--}}
{{--          data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'"--}}
{{--          onerror="this.removeAttribute('data-rocket-async')" media="all" data-minify="1">--}}
{{--@endpush--}}
@section('content')
    <main class="single-program single">
        <div class="banner-detail">
            <div class="banner-detail-img">
                <img src="{{$course['cover']}}" alt="{{$course['name']}}"
                     data-lazy-src="{{$course['cover']}}"
                     data-ll-status="loaded" class="entered lazyloaded">
                <noscript><img src="{{$course['cover']}}" alt="{{$course['name']}}"></noscript>
            </div>
            <div class="container dark">
                <div class="banner-detail-content">
                    @php
                        $count = 0;
                        $out = preg_replace_callback('/\s+/', function($m) use (&$count) {
                            $count++;
                            return ($count % 2 === 0) ? "<br>\n" : ' ';
                        }, trim($course['name']));
                    @endphp
                    <h1>
                        {!! $out !!} <br>
                        OEA Pre-school </h1>
                </div>
            </div>
        </div>
        <section class="breadcrumbs-section" style="background-color: var(--color-blue-2);">
            <div class="container">
                <span>
                    <span><a href="/">Trang chủ</a></span>
                    ● <span class="breadcrumb_last" aria-current="page">{{$cate['name']}}</span>
                </span>
            </div>
        </section>
        <section class="program-detail wow fadeInUp" data-wow-delay="2s" data-wow-duration="2s">
            <div class="container">
                <div class="row row-divider">

                    <div class="col large-9">
                        <div class="program-detail-content entry-content">
                            <h2>{{$cate['name']}}</h2>
                            <p></p>
                            <div class="lwptoc program-detail-content lwptoc-baseItems lwptoc-light lwptoc-notInherit"
                                 data-smooth-scroll="1" data-smooth-scroll-offset="100" data-lwptoc-initialized="1">
                                <div class="lwptoc_i">
                                    <div class="lwptoc_header">
                                        <b class="lwptoc_title">Mục lục</b> <span class="lwptoc_toggle">
                                    <a href="#" class="lwptoc_toggle_label" data-label="hiện">ẩn</a>            </span>
                                    </div>
                                    <div class="lwptoc_items lwptoc_items-visible">
                                        <div class="lwptoc_itemWrap">
                                            <div class="lwptoc_item"><a href="#Gioi_thieu_khoa_hoc">
                                                    <span class="lwptoc_item_label">Giới thiệu khóa học:</span>
                                                </a>
                                            </div>
                                            <div class="lwptoc_item"><a href="#Noi_dung_khoa_hoc">
                                                    <span class="lwptoc_item_label">Nội dung khóa học:</span>
                                                </a>
                                            </div>
                                            <div class="lwptoc_item"><a href="#Phuong_phap_day_va_hoc_tai_OEA_Vietnam">
                                                    <span class="lwptoc_item_label">Phương pháp dạy và học tại OEA Vietnam:</span>
                                                </a>
                                            </div>
                                            <div class="lwptoc_item"><a href="#Thoi_luong_va_mo_hinh_lop_hoc">
                                                    <span
                                                        class="lwptoc_item_label">Thời lượng và mô hình lớp học:</span>
                                                </a>
                                            </div>
                                            <div class="lwptoc_item"><a href="#Cau_truc_khoa_hoc">
                                                    <span class="lwptoc_item_label">Cấu trúc khóa học:</span>
                                                </a>
                                            </div>
                                            <div class="lwptoc_item"><a href="#Quy_trinh_nhap_hoc">
                                                    <span class="lwptoc_item_label">Quy trình nhập học:</span>
                                                </a>
                                            </div>
                                            <div class="lwptoc_item"><a href="#Ly_do_ban_nen_chon_OEA_Vietnam">
                                                    <span
                                                        class="lwptoc_item_label">Lý do bạn nên chọn OEA Vietnam:</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="conten-course">
                                {!! $course['content'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="col large-3">

                        <div class="sidebar">
                            <div class="sidebar-title">
                                Học Tiếng Anh
                            </div>
                            @foreach($courses as $item)
                            <div class="sidebar-box">
                                <div class="sidebar-box-img">
                                    <a href="{{route('page', ['cate_slug' => $item->category?->slug, 'slug'=> $item['slug']])}}">
                                        <img width="300" height="234"
                                             src="{{$item['image']}}"
                                             class="attachment-full size-full wp-post-image entered lazyloaded"
                                             alt="{{$item['name']}}" decoding="async"
                                             data-lazy-src="{{$item['image']}}"
                                             data-ll-status="loaded">
                                        <noscript><img width="300" height="234"
                                                       src="{{$item['image']}}"
                                                       class="attachment-full size-full wp-post-image"
                                                       alt="{{$item['name']}}" decoding="async"/>
                                        </noscript>
                                    </a>
                                </div>
                                <div class="sidebar-box-content text-center">
                                    <div class="sidebar-box-content-title">
                                        <a href="{{route('page', ['cate_slug' => $item->category?->slug, 'slug'=> $item['slug']])}}">
                                            {{$item['name']}} </a>
                                    </div>
                                    <div class="sidebar-box-content-desc">
                                        {!! $item['description'] !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="register-sidebar text-center">
                            <div class="register-sidebar-title">
                                Đăng ký
                            </div>
                            <div class="wpcf7 js" id="wpcf7-f10-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                       aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="/programme/tieng-anh-mau-giao/#wpcf7-f10-o1" method="post"
                                      class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate"
                                      data-status="init">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="10">
                                        <input type="hidden" name="_wpcf7_version" value="5.9.3">
                                        <input type="hidden" name="_wpcf7_locale" value="vi">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f10-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                        <input type="hidden" name="_wpcf7_lang" value="vi">
                                        <input type="hidden" name="_wpcf7_recaptcha_response"
                                               value="03AFcWeA4HPk2zG4J3-uM_ZB0FLkTB27zqr0ehSSE01BBvel8v8_rmtWrvzaPoFT0oRKW34FakXIo-lNMbHaLDDIvUqr2nWkhDVzl4NkCNllsle09UkxBpN3FbXFnD_uhVyScEsUu59kyF6adt1vnho3o8iuGFvDNZyUcAoA2gz7q-yns9m7arlQ_ZzSX2LCYFTVFiy6eMbriFyjtyDJCFDl1v-s1dyfJ2skKyDpkkkeUI5I5YJp-DLQRq6S_gQTPxMES16Kp8e5sfzBixVYttkYI86bd94HJgyjhRjHnPb1YnhfnHUl2eMOqJFmjodMAYroPDezBfxEFrNz4V_vDDHHbzLcwEKuc2Va0JnlTh17eZCC1vTP5GjK5zujSPDYVu74fyeleZlUwYTW6nLSRxx2xKGcSnH9H6cbIy10uVk_CmaEHFWgacBJs15Mj9eIF8NXBRA7jcU6lQPy19g4KAZtAUXdL_AT__UtGmiaaFlGHUiMMsBN7_fCC3_NCZZqP_NU2JZlnbVbFdGMgAZvmyhs4sBRlC7H-wQmhK_cn7L-dsGbQjsaSVS_GNXSrkz0wnAsvTxupp-OSd-7luMIVvAEsr39HpfuhC1qxIGu3Ar01GmW0TTnAG_T6ybTt5qsxfz-5m-KJb12Ku_6O01shAdyLRsv9nKFDWtL-_yex1DNLW_ZQuCqMzbwfiIAGxkE7wXw0hsAtrmL4BcO78nFfUrPjA1b4BcpdIHGqN6DEqmmxwaax4Xbg3FooZR1rVjWH7xJqJr2f75IsHdm_dL5YwwsD2nf9s-AOtkd6YMLShrpm02VhHsJqUkSdafHR1NmNE_6V8ktP5mw_XFcFPw8B6Y6Z5AyywOTgMES_6Z8EKbnKqceXYTHTaw14M3nCchHD9xB1_hq-vo0V6zK7CyDfSE3GTD8Ey8zVeO-lcnlXEWJYKsMys2scYEPYDnW8XpsWg90xelpKvXjT2om5SSCXivyOeDA3lIuiPRB488Le5V5GAxilMxY7gfJDFmGmmSyyEj3rCk-hosh4rHCrtibgqgojVJuwLgBy1Qz3lqXBfqsYgC2fAaqELwBdcfvcU5ruYQtBwVaTF8WMCdozNzpPu7zYuzvd0Rmgmc0NTs47neJf_pGoNDabpUy6YW98qa-Weck06qgmhc19jM04psFI6hZBtXLaT8sDZZjmLR7FuNjQIbrIFnJM0zGAS9LLMwSaFXOXrNFfibNwkzqkWyLmyXB5nmoDzz0ZdU4wKIiuxxx3IKBwO87ZMDZvrY7QF-84Qzpyz7BeKa1tdRvGAjHk_enSWqO6YPQ4BU7-FbzGCUwgThI9BZ_3NPv77duNIdngspARTkaLi6M7sN7rWGghyGbYqQrftYYj68lqdbVTOAtKrrW5EFGisUaUd8aFt0A_drzoRCDYk6P-TPx-fthbYAWlJj5pJCXUw0s2Qfwdx3lDKOqaVekTnnEAvzV-x4o6NoRuyP9zBowd0PlbwOx6Il7HUs3lvQCnLbpkbtnUrO02BGp0-_xzjGto0yzDSGZ_ytuejV7GqTrqv0x7fdN5DUIzxmnSNVOVRie_VRRKvP9VUx31FoYrdTcgRw9WAA99_aXVoCwTo1w-AL5Nx-p6BkRln6fntc4cupNbC0KEVn05DzNvMwt9xHq02MhHE02QHkIliH_dZo1FiplsX8srn3PTGqZFiCqWgarDBGxEDCN_MzW6Q3J-zcz6obs3IMfk0M6AuhW18t9zRMeDzEK1v_2YBhd1RFRh9R0qlagJCBsbTepcvak2mFLPT-9BAyo-b1N9ieWb-7TTirLpZTSHVZWslKWDGBPcU4DFG1vc6CDeVcxL4y9erBsbh2cMzFD82XdsB-7QYc_CynjQJMCzyHMj0qfln0jHQz0AbOabr-ygoXdxZoN9tBUuWF9ZJ-P_OTMaO_TLhRKQDWi1nzTCerVg5PG3gs6QphuBk03b2G2DJ35_aBRnG7_hsd4gFEhDgaCHxSE-9frSueShl4CZg4S5hJEl4-PIQZ1cmy174LhY9cJl-VIpF6U4AoAobXRNMOXYQFsZ_SZ53bdVbefQTWrduhqQKuJwoZtv8_VWTwo_KIRtjm2hMTsfXPaC-y1YqE_dQPEJ-6SoekipSNPTicBtHWism7FzZiU7QTTcUEoaqZ4IBUirpbHZwly1CvQkpwKX53rN5KtB_">
                                    </div>
                                    <div class="form-dk">
                                        <h3 style="text-align: center">Đăng ký tư vấn
                                        </h3>
                                        <div class="form-item">
                                            <p><span class="wpcf7-form-control-wrap" data-name="hoten"><input size="40"
                                                                                                              class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                              aria-required="true"
                                                                                                              aria-invalid="false"
                                                                                                              placeholder="Họ và tên"
                                                                                                              value=""
                                                                                                              type="text"
                                                                                                              name="hoten"></span>
                                            </p>
                                        </div>
                                        <div class="form-item">
                                            <p><span class="wpcf7-form-control-wrap" data-name="email"><input size="40"
                                                                                                              class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                                              aria-required="true"
                                                                                                              aria-invalid="false"
                                                                                                              placeholder="Địa chỉ email"
                                                                                                              value=""
                                                                                                              type="email"
                                                                                                              name="email"></span>
                                            </p>
                                        </div>
                                        <div class="form-item">
                                            <p><span class="wpcf7-form-control-wrap" data-name="sdt"><input size=""
                                                                                                            class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="Số điện thoại"
                                                                                                            value=""
                                                                                                            type="tel"
                                                                                                            name="sdt"></span>
                                            </p>
                                        </div>
                                        <div class="form-item">
                                            <p><span class="wpcf7-form-control-wrap" data-name="tinnhan"><textarea
                                                        cols="40" rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false" placeholder="Lời nhắn"
                                                        name="tinnhan"></textarea></span>
                                            </p>
                                        </div>
                                        <div class="text-center">
                                            <p>
                                                <button
                                                    class="button wpcf7-form-control has-spinner wpcf7-submit primary lowercase btn-custom"
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

            </div>
        </section>
    </main>
@endsection
