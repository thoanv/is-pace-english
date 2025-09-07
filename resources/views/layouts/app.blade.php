@php
    $info = \App\Models\General::first();
    $menu = \App\Models\Menu::first();
@endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
            var href = document.location.href;
            if (!href.match(/[?&]nowprocket/)) {
                if (href.indexOf("?") == -1) {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "?nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "?nowprocket=1#")
                    }
                } else {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "&nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "&nowprocket=1#")
                    }
                }
            }
        }</script>
    <title>@yield('title', 'Is Pace')</title>

    <link rel="canonical" href="@yield('canonical', route('home'))"/>

    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="{{$info['meta_description']}}"/>
    <meta property="og:keyword" content="{{$info['meta_keyword']}}"/>
    <meta property="og:url" content="@yield('canonical', route('home'))"/>
    <meta property="og:site_name" content="{{$info['site_name']}}"/>
    <meta property="article:modified_time" content=""/>
    <meta property="og:image" content="@yield('image', $info['thumbnail'])"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="{{$info['meta_description']}}"/>
    <meta name="twitter:keyword" content="{{$info['meta_keyword']}}"/>
    <meta name="twitter:title" content="@yield('title')"/>

    <link rel="icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap"
          media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap"/>
    </noscript>
    <link rel="preload" href="{{asset('wp-content/cache/min/1/5d1a03a9692abe096ff5863deef595f3.css')}}"
          data-rocket-async="style"
          as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"
          media="all" data-minify="1"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel='prefetch' href="{{asset('wp-content/themes/flatsome/assets/js/chunk.countup.js?ver=3.16.2')}}"/>
    <link rel='prefetch'
          href="{{asset('wp-content/themes/flatsome/assets/js/chunk.sticky-sidebar.js?ver=3.16.2')}}"/>
    <link rel='prefetch' href="{{asset('wp-content/themes/flatsome/assets/js/chunk.tooltips.js?ver=3.16.2')}}"/>
    <link rel='prefetch'
          href="{{asset('wp-content/themes/flatsome/assets/js/chunk.vendors-popups.js?ver=3.16.2')}}"/>
    <link rel='prefetch'
          href="{{asset('wp-content/themes/flatsome/assets/js/chunk.vendors-slider.js?ver=3.16.2')}}"/>
    <script type="text/javascript">
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        (function (w) {
            "use strict";
            if (!w.loadCSS) {
                w.loadCSS = function () {
                }
            }
            var rp = loadCSS.relpreload = {};
            rp.support = (function () {
                var ret;
                try {
                    ret = w.document.createElement("link").relList.supports("preload")
                } catch (e) {
                    ret = !1
                }
                return function () {
                    return ret
                }
            })();
            rp.bindMediaToggle = function (link) {
                var finalMedia = link.media || "all";

                function enableStylesheet() {
                    link.media = finalMedia
                }

                if (link.addEventListener) {
                    link.addEventListener("load", enableStylesheet)
                } else if (link.attachEvent) {
                    link.attachEvent("onload", enableStylesheet)
                }
                setTimeout(function () {
                    link.rel = "stylesheet";
                    link.media = "only x"
                });
                setTimeout(enableStylesheet, 3000)
            };
            rp.poly = function () {
                if (rp.support()) {
                    return
                }
                var links = w.document.getElementsByTagName("link");
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
                        link.setAttribute("data-loadcss", !0);
                        rp.bindMediaToggle(link)
                    }
                }
            };
            if (!rp.support()) {
                rp.poly();
                var run = w.setInterval(rp.poly, 500);
                if (w.addEventListener) {
                    w.addEventListener("load", function () {
                        rp.poly();
                        w.clearInterval(run)
                    })
                } else if (w.attachEvent) {
                    w.attachEvent("onload", function () {
                        rp.poly();
                        w.clearInterval(run)
                    })
                }
            }
            if (typeof exports !== "undefined") {
                exports.loadCSS = loadCSS
            } else {
                w.loadCSS = loadCSS
            }
        }(typeof global !== "undefined" ? global : this))
    </script>
    @stack('styles')

</head>
<body
    class="home page-template page-template-page-blank single  page-template-page-blank-php page page-id-1168 header-shadow lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
<a class="skip-link screen-reader-text" href="#main">Chuyển đến nội dung</a>

<div id="wrapper">
    @include('layouts.header')

    <main id="main" class="">

        @yield('content')

    </main>
    @include('layouts.footer')
</div>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">

        <div class="logo-custom">
            <!-- Header logo -->
            <a href="/" title="{{$info['name']}}" rel="home">
                <img width="1020" height="1020"
                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201020%201020'%3E%3C/svg%3E"
                     class="header_logo header-logo" alt="{{$info['name']}}"
                     data-lazy-src="{{$info['logo']}}"/>
                <noscript><img width="1020" height="1020" src="{{$info['logo']}}"
                               class="header_logo header-logo" alt="{{$info['name']}}"/>
                </noscript>
                <img width="1020" height="1020"
                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201020%201020'%3E%3C/svg%3E"
                     class="header-logo-dark" alt="iS-Pace"
                     data-lazy-src="{{$info['logo']}}"/>
                <noscript><img width="1020" height="1020" src="{{$info['logo']}}"
                               class="header-logo-dark" alt="{{$info['name']}}"/></noscript>
            </a>
        </div>
        <style>
            .mobile-sidebar .logo-custom img {
                width: 150px;
            }

            .mobile-sidebar .logo-custom {
                display: flex;
                justify-content: center;
                padding-left: 0 !important;
                padding-top: 0;
                margin-top: 20px 0;
            }
        </style>


        <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
            <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                        <form method="get" class="searchform" action="" role="search">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value="" id="s"
                                           placeholder="Tìm kiếm&hellip;"/>
                                </div>
                                <div class="flex-col">
                                    <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                            aria-label="Gửi đi">
                                        <i class="icon-search"></i></button>
                                </div>
                            </div>
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                </div>
            </li>
            @if($menu && $menu['content'] && !empty($menu['content']))
                @foreach($menu['content'] as $key => $item)
                    @if($key < 1)
                        @php
                            $cate = \App\Models\Category::find($item['id']);
                        @endphp
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1438"><a
                                href="{{route('page', ['cate_slug' => $cate['slug']])}}">{{$cate['name']}}</a></li>
                    @endif
                @endforeach
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1438"><a
                        href="">E-learning</a></li>

                @foreach($menu['content'] as $key => $item)
                    @if($key > 0)
                        @php
                            $cate = \App\Models\Category::find($item['id']);
                        @endphp
                        @if($cate['type'] == \App\Enums\CategoryEnum::KHOA_HOC)
                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-programme menu-item-has-children menu-item-1439">
                                <a href="javascript:void(0)">{{$cate['name']}}</a>
                                @php
                                    $courses = \App\Models\Course::where('status', \App\Enums\CommonEnum::ACTIVATED)->get();
                                @endphp
                                @if(count($courses))
                                <ul class="sub-menu nav-sidebar-ul children">
                                    @foreach($courses as $v_course)
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1770">
                                            <a
                                                href="{{route('page', ['cate_slug' => $cate['slug'], 'slug' => $v_course['slug']])}}">{{$v_course['name']}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                                    @endif
                            </li>
                        @else
                            @if (!empty($item['children'] ?? []))
                                <li class="menu-item menu-item-type-post_type_archive menu-item-object-programme menu-item-has-children menu-item-1439">
                                    <a href="{{route('page', ['cate_slug' => $cate['slug']])}}">{{$cate['name']}}</a>
                                    <ul class="sub-menu nav-sidebar-ul children">
                                        @foreach($item['children'] as $v_c)
                                            @php
                                                $cate_c = \App\Models\Category::find($v_c['id']);
                                            @endphp
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1770">
                                                <a
                                                    href="{{route('page', ['cate_slug' => $cate_c['slug']])}}">{{$cate_c['name']}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @else
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2142"><a
                                        href="{{route('page', ['cate_slug' => $cate['slug']])}}">{{$cate['name']}}</a>
                                </li>
                            @endif
                        @endif
                    @endif
                @endforeach
            @endif
        </ul>


    </div>


</div>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>

<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">


    <div class="sidebar-menu no-scrollbar ">

        <div class="logo-custom">
            <!-- Header logo -->
            <a href="/" title="{{$info['name']}}" rel="home">
                <img width="1020" height="1020"
                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201020%201020'%3E%3C/svg%3E"
                     class="header_logo header-logo" alt="{{$info['name']}}"
                     data-lazy-src="{{$info['logo']}}"/>
                <noscript><img width="1020" height="1020" src="{{$info['logo']}}"
                               class="header_logo header-logo" alt="{{$info['name']}}"/>
                </noscript>
                <img width="1020" height="1020"
                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201020%201020'%3E%3C/svg%3E"
                     class="header-logo-dark" alt="{{$info['name']}}"
                     data-lazy-src="{{$info['logo']}}"/>
                <noscript><img width="1020" height="1020" src="{{$info['logo']}}"
                               class="header-logo-dark" alt="{{$info['name']}}"/></noscript>
            </a>
        </div>
        <style>
            .mobile-sidebar .logo-custom img {
                width: 150px;
            }

            .mobile-sidebar .logo-custom {
                display: flex;
                justify-content: center;
                padding-left: 0 !important;
                padding-top: 0;
                margin-top: 20px 0;
            }
        </style>


        <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
            <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                        <form method="get" class="searchform" action="" role="search">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value="" id="s"
                                           placeholder="Tìm kiếm&hellip;"/>
                                </div>
                                <div class="flex-col">
                                    <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                            aria-label="Gửi đi">
                                        <i class="icon-search"></i></button>
                                </div>
                            </div>
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                </div>
            </li>
            @if($menu && $menu['content'] && !empty($menu['content']))
                @foreach($menu['content'] as $key => $item)
                    @if($key < 1)
                        @php
                            $cate = \App\Models\Category::find($item['id']);
                        @endphp
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1438"><a
                                href="{{route('page', ['cate_slug' => $cate['slug']])}}">{{$cate['name']}}</a></li>
                    @endif
                @endforeach
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1438"><a
                        href="">E-learning</a></li>

                @foreach($menu['content'] as $key => $item)
                    @if($key > 0)
                        @php
                            $cate = \App\Models\Category::find($item['id']);
                        @endphp
                        @if($cate['type'] == \App\Enums\CategoryEnum::KHOA_HOC)
                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-programme menu-item-has-children menu-item-1439">
                                <a href="">{{$cate['name']}}</a>
                                @php
                                    $courses = \App\Models\Course::where('status', \App\Enums\CommonEnum::ACTIVATED)->get();
                                @endphp
                                @if(count($courses))
                                    <ul class="sub-menu nav-sidebar-ul children">
                                        @foreach($courses as $v_course)

                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1770">
                                                <a
                                                    href="{{route('page', ['cate_slug' => $cate['slug'], 'slug' => $v_course['slug']])}}">{{$v_course['name']}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                @endif
                            </li>
                        @else
                            @if (!empty($item['children'] ?? []))
                                <li class="menu-item menu-item-type-post_type_archive menu-item-object-programme menu-item-has-children menu-item-1439">
                                    <a href="{{route('page', ['cate_slug' => $cate['slug']])}}">{{$cate['name']}}</a>
                                    <ul class="sub-menu nav-sidebar-ul children">
                                        @foreach($item['children'] as $v_c)
                                            @php
                                                $cate_c = \App\Models\Category::find($v_c['id']);
                                            @endphp
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1770">
                                                <a
                                                    href="{{route('page', ['cate_slug' => $cate_c['slug']])}}">{{$cate_c['name']}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @else
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2142"><a
                                        href="{{route('page', ['cate_slug' => $cate['slug']])}}">{{$cate['name']}}</a>
                                </li>
                            @endif
                        @endif
                    @endif
                @endforeach
            @endif
        </ul>


    </div>


</div>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<div class="contact-box-bottom">
    <a class="contact-box-wrapper nut-chat-zalo" href="https://zalo.me/{{$info['phone']}}" rel="nofollow"
       target="_blank">
        <div class="contact-icon-box" style="border: none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 161.5 161.5">
                <path
                    d="M504.54,431.79h14.31c19.66,0,31.15,2.89,41.35,8.36a56.65,56.65,0,0,1,23.65,23.65c5.47,10.2,8.36,21.69,8.36,41.35V519.4c0,19.66-2.89,31.15-8.36,41.35a56.65,56.65,0,0,1-23.65,23.65c-10.2,5.47-21.69,8.36-41.35,8.36H504.6c-19.66,0-31.15-2.89-41.35-8.36a56.65,56.65,0,0,1-23.65-23.65c-5.47-10.2-8.36-21.69-8.36-41.35V505.14c0-19.66,2.89-31.15,8.36-41.35a56.65,56.65,0,0,1,23.65-23.65C473.39,434.68,484.94,431.79,504.54,431.79Z"
                    transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path>
                <path
                    d="M592.21,517v2.35c0,19.66-2.89,31.15-8.35,41.35a56.65,56.65,0,0,1-23.65,23.65c-10.2,5.47-21.69,8.36-41.35,8.36H504.6c-16.09,0-26.7-1.93-35.62-5.63L454.29,572Z"
                    transform="translate(-431.25 -431.25)"
                    style="fill:#001a33;opacity:0.11999999731779099;isolation:isolate"></path>
                <path
                    d="M455.92,572.51c7.53.83,16.94-1.31,23.62-4.56,29,16,74.38,15.27,101.84-2.3q1.6-2.4,3-5c5.49-10.24,8.39-21.77,8.39-41.5v-14.3c0-19.73-2.9-31.26-8.39-41.5a56.86,56.86,0,0,0-23.74-23.74c-10.24-5.49-21.77-8.39-41.5-8.39H504.76c-16.8,0-27.71,2.12-36.88,6.15q-.75.67-1.47,1.37c-26.89,25.92-28.93,82.11-6.13,112.64l.08.14c3.51,5.18.12,14.24-5.18,19.55C454.32,571.89,454.63,572.39,455.92,572.51Z"
                    transform="translate(-431.25 -431.25)" style="fill:#fff"></path>
                <path
                    d="M497.35,486.34H465.84v6.76h21.87l-21.56,26.72a6.06,6.06,0,0,0-1.17,4v1.72h29.73a2.73,2.73,0,0,0,2.7-2.7v-3.62h-23l20.27-25.43,1.11-1.35.12-.18a8,8,0,0,0,1.41-5Z"
                    transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path>
                <path d="M537.47,525.54H542v-39.2h-6.76v36.92A2.27,2.27,0,0,0,537.47,525.54Z"
                      transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path>
                <path
                    d="M514.37,495.07a15.36,15.36,0,1,0,15.36,15.36A15.36,15.36,0,0,0,514.37,495.07Zm0,24.39a9,9,0,1,1,9-9A9,9,0,0,1,514.37,519.46Z"
                    transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path>
                <path
                    d="M561.92,494.82A15.48,15.48,0,1,0,577.4,510.3,15.5,15.5,0,0,0,561.92,494.82Zm0,24.64a9.09,9.09,0,1,1,9.09-9.09A9.07,9.07,0,0,1,561.92,519.46Z"
                    transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path>
                <path d="M526.17,525.54h3.62V495.93h-6.33v27A2.72,2.72,0,0,0,526.17,525.54Z"
                      transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path>
            </svg>
        </div>
        <div class="contact-info">
            <b>Chat Zalo</b>
        </div>
    </a>
</div>
<a href="tel:{{$info['phone']}}" id="callnowbutton"
   class="call-now-button  cnb-zoom-100  cnb-zindex-10  cnb-text  cnb-single cnb-right cnb-displaymode cnb-displaymode-always"
   style="background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PHBhdGggZD0iTTI3LjAxMzU1LDIzLjQ4ODU5bC0xLjc1MywxLjc1MzA1YTUuMDAxLDUuMDAxLDAsMCwxLTUuMTk5MjgsMS4xODI0M2MtMS45NzE5My0uNjkzNzItNC44NzMzNS0yLjM2NDM4LTguNDM4NDgtNS45Mjk1UzYuMzg3LDE0LjAyOCw1LjY5MzMsMTIuMDU2MTVBNS4wMDA3OCw1LjAwMDc4LDAsMCwxLDYuODc1NzMsNi44NTY4N0w4LjYyODc4LDUuMTAzNzZhMSwxLDAsMCwxLDEuNDE0MzEuMDAwMTJsMi44MjgsMi44Mjg4QTEsMSwwLDAsMSwxMi44NzEsOS4zNDY4TDExLjA2NDcsMTEuMTUzYTEuMDAzOCwxLjAwMzgsMCwwLDAtLjA4MjEsMS4zMjE3MSw0MC43NDI3OCw0MC43NDI3OCwwLDAsMCw0LjA3NjI0LDQuNTgzNzQsNDAuNzQxNDMsNDAuNzQxNDMsMCwwLDAsNC41ODM3NCw0LjA3NjIzLDEuMDAzNzksMS4wMDM3OSwwLDAsMCwxLjMyMTcxLS4wODIwOWwxLjgwNjIyLTEuODA2MjdhMSwxLDAsMCwxLDEuNDE0MTItLjAwMDEybDIuODI4OCwyLjgyOEExLjAwMDA3LDEuMDAwMDcsMCwwLDEsMjcuMDEzNTUsMjMuNDg4NTlaIiBmaWxsPSIjZmZmZmZmIi8+PC9zdmc+); background-color:#ce0e19;"><span>{{$info['phone']}}</span></a>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4')}}" id='jquery-core-js' defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0')}}" id='jquery-migrate-js'
        defer></script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/plugins/hazo-tools/public/assets/js/aio-tools-publicbbf5.js?ver=1747902484')}}"
        id='aio-tools-js' defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-content/plugins/pixelyoursite/dist/scripts/jquery.bind-first-0.2.3.min0757.js?ver=6.2.4')}}"
        id='jquery-bind-first-js' defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-content/plugins/pixelyoursite/dist/scripts/js.cookie-2.1.3.min4c71.js?ver=2.1.3')}}"
        id='js-cookie-pys-js' defer></script>
{{--<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'--}}
{{--        src="{{asset('wp-content/cache/min/1/wp-content/plugins/pixelyoursite/dist/scripts/publicbbf5.js?ver=1747902484')}}"--}}
{{--        id='pys-js' defer></script>--}}

<script type="text/javascript">window.addEventListener('DOMContentLoaded', function () {
        (function ($) {
            "use strict";
            $(document).ready(function () {
                "use strict";
                var progressPath = document.querySelector('.progress-wrap path');
                var pathLength = progressPath.getTotalLength();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
                progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
                progressPath.style.strokeDashoffset = pathLength;
                progressPath.getBoundingClientRect();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
                var updateProgress = function () {
                    var scroll = $(window).scrollTop();
                    var height = $(document).height() - $(window).height();
                    var progress = pathLength - (scroll * pathLength / height);
                    progressPath.style.strokeDashoffset = progress;
                }
                updateProgress();
                $(window).scroll(updateProgress);
                var offset = 50;
                var duration = 550;
                jQuery(window).on('scroll', function () {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.progress-wrap').addClass('active-progress');
                    } else {
                        jQuery('.progress-wrap').removeClass('active-progress');
                    }
                });
                jQuery('.progress-wrap').on('click', function (event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                })


            });

        })(jQuery);
    });
</script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/plugins/hazo-tools/cf7alert/js/cf7simplepopup-corebbf5.js?ver=1747902484')}}"
        id='cf7simplepopup-js-js' defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-content/plugins/hazo-tools/cf7alert/js/sweetalert2.all.min7c72.js?ver=1753837845')}}"
        id='sweetalert-js'
        defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-content/plugins/soulmatch/js/jquery.matchHeight-min0757.js?ver=6.2.4')}}" id='matchheight-js'
        defer></script>
<script type='text/javascript' id='soulmatch-js-extra'>
    /* <![CDATA[ */
    var soulmatch_data = {
        "options": [{
            "selector": ".box-blog-post .box-text",
            "byrow": "0"
        }, {"selector": ".news__feature-wrapper .box-text", "byrow": "0"}, {
            "selector": "footer .footer-title",
            "byrow": "0"
        }, {"selector": ".testi-item-content .inner", "byrow": "0"}]
    };
    /* ]]> */
</script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/plugins/soulmatch/soulmatchbbf5.js?ver=1747902484')}}"
        id='soulmatch-js'
        defer></script>
<script type="text/javascript" data-rocket-type='text/javascript' id='soulmatch-js-after'>
    var soulmatch_after = "";
</script>
<script type="text/javascript" data-rocket-type='text/javascript' id='rocket-browser-checker-js-after'>
    "use strict";
    var _createClass = function () {
        function defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
            }
        }

        return function (Constructor, protoProps, staticProps) {
            return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
        }
    }();

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    var RocketBrowserCompatibilityChecker = function () {
        function RocketBrowserCompatibilityChecker(options) {
            _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options
        }

        return _createClass(RocketBrowserCompatibilityChecker, [{
            key: "_checkPassiveOption", value: function (self) {
                try {
                    var options = {
                        get passive() {
                            return !(self.passiveSupported = !0)
                        }
                    };
                    window.addEventListener("test", null, options), window.removeEventListener("test", null, options)
                } catch (err) {
                    self.passiveSupported = !1
                }
            }
        }, {
            key: "initRequestIdleCallback", value: function () {
                !1 in window && (window.requestIdleCallback = function (cb) {
                    var start = Date.now();
                    return setTimeout(function () {
                        cb({
                            didTimeout: !1, timeRemaining: function () {
                                return Math.max(0, 50 - (Date.now() - start))
                            }
                        })
                    }, 1)
                }), !1 in window && (window.cancelIdleCallback = function (id) {
                    return clearTimeout(id)
                })
            }
        }, {
            key: "isDataSaverModeOn", value: function () {
                return "connection" in navigator && !0 === navigator.connection.saveData
            }
        }, {
            key: "supportsLinkPrefetch", value: function () {
                var elem = document.createElement("link");
                return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
            }
        }, {
            key: "isSlowConnection", value: function () {
                return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
            }
        }]), RocketBrowserCompatibilityChecker
    }();
</script>
<script type='text/javascript' id='rocket-preload-links-js-extra'>
    /* <![CDATA[ */
    var RocketPreloadLinksConfig = {
        "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/",
        "usesTrailingSlash": "1",
        "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php",
        "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm",
        "siteUrl": "https:\/\/ispaceenglish.edu.vn",
        "onHoverDelay": "100",
        "rateThrottle": "3"
    };
    /* ]]> */
</script>
<script type="text/javascript" data-rocket-type='text/javascript' id='rocket-preload-links-js-after'>
    (function () {
        "use strict";
        var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        }, e = function () {
            function i(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (e, t, n) {
                return t && i(e.prototype, t), n && i(e, n), e
            }
        }();

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        var t = function () {
            function n(e, t) {
                i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0
            }

            return e(n, [{
                key: "init", value: function () {
                    !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = {
                        excludeUris: RegExp(this.config.excludeUris, "i"),
                        images: RegExp(".(" + this.config.imageExt + ")$", "i"),
                        fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")
                    }, this._initListeners(this))
                }
            }, {
                key: "_initListeners", value: function (e) {
                    -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
                }
            }, {
                key: "listener", value: function (e) {
                    var t = e.target.closest("a"), n = this._prepareUrl(t);
                    if (null !== n) switch (e.type) {
                        case"mousedown":
                        case"touchstart":
                            this._addPrefetchLink(n);
                            break;
                        case"mouseover":
                            this._earlyPrefetch(t, n, "mouseout")
                    }
                }
            }, {
                key: "_earlyPrefetch", value: function (t, e, n) {
                    var i = this, r = setTimeout(function () {
                        if (r = null, 0 === i.numOnHover) setTimeout(function () {
                            return i.numOnHover = 0
                        }, 1e3); else if (i.numOnHover > i.config.rateThrottle) return;
                        i.numOnHover++, i._addPrefetchLink(e)
                    }, this.config.onHoverDelay);
                    t.addEventListener(n, function e() {
                        t.removeEventListener(n, e, {passive: !0}), null !== r && (clearTimeout(r), r = null)
                    }, {passive: !0})
                }
            }, {
                key: "_addPrefetchLink", value: function (i) {
                    return this.prefetched.add(i.href), new Promise(function (e, t) {
                        var n = document.createElement("link");
                        n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n)
                    }).catch(function () {
                    })
                }
            }, {
                key: "_prepareUrl", value: function (e) {
                    if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null;
                    var t = e.href.substring(0, this.config.siteUrl.length), n = this._getPathname(e.href, t),
                        i = {original: e.href, protocol: e.protocol, origin: t, pathname: n, href: t + n};
                    return this._isLinkOk(i) ? i : null
                }
            }, {
                key: "_getPathname", value: function (e, t) {
                    var n = t ? e.substring(this.config.siteUrl.length) : e;
                    return n.startsWith("index.html") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n
                }
            }, {
                key: "_shouldAddTrailingSlash", value: function (e) {
                    return this.config.usesTrailingSlash && !e.endsWith("index.html") && !this.regex.fileExt.test(e)
                }
            }, {
                key: "_isLinkOk", value: function (e) {
                    return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
                }
            }], [{
                key: "run", value: function () {
                    "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({
                        capture: !0,
                        passive: !0
                    }), RocketPreloadLinksConfig).init()
                }
            }]), n
        }();
        t.run();
    }());
</script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/themes/flatsome-child/assets/js/custombbf5.js?ver=1747902484')}}"
        id='myjs-js' defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2')}}" id='wp-polyfill-inert-js'
        defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11')}}"
        id='regenerator-runtime-js'
        defer></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0')}}" id='wp-polyfill-js'></script>
<script type="text/javascript" data-rocket-type='text/javascript'
        src="{{asset('wp-includes/js/hoverIntent.min3e5a.js?ver=1.10.2')}}" id='hoverIntent-js' defer></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
    /* <![CDATA[ */
    var flatsomeVars = {
        "theme": {"version": "3.16.2"},
        "ajaxurl": "",
        "rtl": "",
        "sticky_height": "70",
        "assets_url": "https:\/\/ispaceenglish.edu.vn\/wp-content\/themes\/flatsome\/assets\/js\/",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {"can_edit_pages": false},
        "i18n": {"mainMenu": "Menu ch\u00ednh", "toggleButton": "Toggle"},
        "options": {
            "cookie_notice_version": "1",
            "swatches_layout": false,
            "swatches_box_select_event": false,
            "swatches_box_behavior_selected": false,
            "swatches_box_update_urls": "1",
            "swatches_box_reset": false,
            "swatches_box_reset_extent": false,
            "swatches_box_reset_time": 300,
            "search_result_latency": "0"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/themes/flatsome/assets/js/flatsomebbf5.js?ver=1747902484')}}"
        id='flatsome-js-js' defer></script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/themes/flatsome/inc/integrations/wp-rocket/flatsome-wp-rocketbbf5.js?ver=1747902484')}}"
        id='flatsome-wp-rocket-js' defer></script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/themes/flatsome/inc/extensions/flatsome-instant-page/flatsome-instant-pagebbf5.js?ver=1747902484')}}"
        id='flatsome-instant-page-js' defer></script>
<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'
        src="{{asset('wp-content/cache/min/1/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-searchbbf5.js?ver=1747902484')}}"
        id='flatsome-live-search-js' defer></script>

{{--<script type="text/javascript" data-minify="1" data-rocket-type='text/javascript'--}}
{{--        src="{{asset('wp-content/cache/min/1/wp-content/plugins/contact-form-7/modules/recaptcha/indexbbf5.js?ver=1747902484')}}"--}}
{{--        id='wpcf7-recaptcha-js' defer></script>--}}
<!--[if IE]>
<script type='text/javascript'
        src="{{asset('https://cdn.jsdelivr.net/npm/intersection-observer-polyfill@0.1.0/dist/IntersectionObserver.js?ver=0.1.0')}}"
        id='intersection-observer-polyfill-js'></script>
<![endif]-->
<script type="text/javascript" data-rocket-type='text/javascript'>
    (function () {
        var expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + 31536000 * 1000);
        document.cookie = "pll_language=vi; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
    }());
</script>
<script>window.lazyLoadOptions = [{
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_loaded: function (element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids()
                        }
                    }
                }
            }
        }
    }, {
        elements_selector: ".rocket-lazyload",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
    }];
    window.addEventListener('LazyLoad::Initialized', function (e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function (mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function (mutation) {
                    for (var i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                            continue
                        }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                            continue
                        }
                        images = mutation.addedNodes[i].getElementsByTagName('img');
                        is_image = mutation.addedNodes[i].tagName == "IMG";
                        iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                        is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                        rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                        image_count += images.length;
                        iframe_count += iframes.length;
                        rocketlazy_count += rocket_lazy.length;
                        if (is_image) {
                            image_count += 1
                        }
                        if (is_iframe) {
                            iframe_count += 1
                        }
                    }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                    lazyLoadInstance.update()
                }
            });
            var b = document.getElementsByTagName("body")[0];
            var config = {childList: !0, subtree: !0};
            observer.observe(b, config)
        }
    }, !1)</script>
<script data-no-minify="1" async
        src="{{asset('wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js')}}"></script>
<script>"use strict";

    function wprRemoveCPCSS() {
        var preload_stylesheets = document.querySelectorAll('link[data-rocket-async="style"][rel="preload"]');
        if (preload_stylesheets && 0 < preload_stylesheets.length) for (var stylesheet_index = 0; stylesheet_index < preload_stylesheets.length; stylesheet_index++) {
            var media = preload_stylesheets[stylesheet_index].getAttribute("media") || "all";
            if (window.matchMedia(media).matches) return void setTimeout(wprRemoveCPCSS, 200)
        }
        var elem = document.getElementById("rocket-critical-css");
        elem && "remove" in elem && elem.remove()
    }

    window.addEventListener ? window.addEventListener("load", wprRemoveCPCSS) : window.attachEvent && window.attachEvent("onload", wprRemoveCPCSS);</script>
<noscript>
    <link rel="stylesheet" href="/wp-content/cache/min/1/5d1a03a9692abe096ff5863deef595f3.css" media="all"
          data-minify="1"/>
</noscript>

@stack('libraries')
@stack('scripts')
<style>
    .text-bong {
        font-weight: 700;
        font-size: 40px;
        text-align: center;
        color: var(--main) !important;
        text-shadow: var(--text-shadow);
        text-transform: uppercase;
    }

    .text-223f81 {
        color: #223f81 !important;
    }

    .form-select {
        box-shadow: none;
        height: 45px;
        padding: 0 40px;
        border: .1rem solid #999;
        border-radius: 3.6rem;
        margin-bottom: 1.4rem;
        font-size: 16px;
    }

    .number-box {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 35px;
        height: 35px;
        background: linear-gradient(180deg, #4ea6ff, #2a7dff);
        color: white;
        font-size: 20px;
        font-weight: bold;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        margin-right: 10px;
    }
    .postss .achievement-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        display: flex;
        gap: 20px;
        padding: 15px;
        margin-bottom: 0;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .postss .achievement-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .postss .image-section {
        flex-shrink: 0;
        width: 180px;
    }

    .postss .image-section img {
        width: 100%;
        height: 175px;
        border-radius: 8px;
        object-fit: cover;
    }

    .postss .content-section {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .postss .title {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        line-height: 1.3;
        text-align: left;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        height: 45px;
        margin-bottom: 0;
    }

    .postss .description {
        font-size: 14px;
        color: #666;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-align: left;
        height: 56px;
        margin-bottom: 0;
    }

    .postss .see-more-btn {
        align-self: flex-start;
        background: none;
        border: none;
        color: #1976d2;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 4px 0;
        transition: color 0.2s ease;
    }

    .postss .see-more-btn:hover {
        color: #1565c0;
        text-decoration: underline;
    }

    .postss .see-more-btn::after {
        content: '→';
        font-size: 12px;
    }

    /* Mobile responsive adjustments */
    @media (max-width: 639px) {
        .postss .achievement-card {
            flex-direction: column;
            padding: 0 0 16px 0;

        }
        .postss .content-section{
            padding: 0 16px;
        }
        .postss .image-section img{
            height: 200px;
            border-radius: 8px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .postss .image-section {
            width: 100%;
        }

        .postss .title {
            font-size: 17px;
            height: 65px;
        }

        .postss .description {
            font-size: 14px;
            -webkit-line-clamp: 4;
            height: 80px;
        }
    }
</style>
</body>
</html>
