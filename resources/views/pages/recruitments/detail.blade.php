@extends('layouts.app')
@section('title',  $post['title'])
<style>.lwptoc .lwptoc_i {
        border: 1px solid #000000;
    }</style>
@php
    $route = route('page', ['cate_slug'=> $post->category?->slug, 'slug' => $post['slug']]);
    $info = \App\Models\General::first();
@endphp
@section('content')
    <div class="main">
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-image-single"><img
                        src="/images/tuyen_dung_bg.jpg" alt="iSpace English">
                </div>
                <div class="row">
                    <div class="col small-12 large-8">
                        <h3 style="font-size: 28px;
    line-height: 35px;">{{$post['title']}}</h3>
                        <div class="mt-0 mb-15">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                 class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                      d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32"></circle>
                            </svg>
                            <span class="text-muted font-xs">{{$post['noi_lam_viec']}}</span></div>
                    </div>
                    <div class="col small-12 large-4">
                        <div class="btn btn-apply-icon btn-apply">
                            <strong>Đăng ký ứng tuyển</strong>
                            <p class="mb-1">Hãy gửi mail cho chúng tôi</p>
                            <a class="btn-mail-hr" href="mailto:{{$info['mail-hr']}}">Tại đây</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-15">
            <div class="container">
                <div class="row">
                    <div class="col small-12 large-8">
                        <div class="job-overview"><h5 class="border-bottom pb-15 mb-30">Thông tin tuyển dụng</h5>
                            <div>
                                <div class="row">
                                    <div class="col small-12 large-6 d-flex mt-10 padding-bottom">
                                        <div class="sidebar-icon-item">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                <rect width="448" height="320" x="32" y="64" fill="none"
                                                      stroke-linejoin="round" stroke-width="32" rx="32" ry="32"></rect>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                                      d="M304 448l-8-64h-80l-8 64h96z"></path>
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32" d="M368 448H144"></path>
                                                <path
                                                    d="M32 304v48a32.09 32.09 0 0032 32h384a32.09 32.09 0 0032-32v-48zm224 64a16 16 0 1116-16 16 16 0 01-16 16z"></path>
                                            </svg>
                                        </div>
                                        <div class="sidebar-text-info ml-10"><span
                                                class="text-description jobtype-icon mb-10">Vị trí</span><strong
                                                class="small-heading">{{$post['vi_tri']}}</strong></div>
                                    </div>
                                    <div class="col small-12 large-6 d-flex mt-10 padding-bottom">
                                        <div class="sidebar-icon-item">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                        </div>
                                        <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Nơi làm việc</span><strong
                                                class="small-heading">{{$post['noi_lam_viec']}}</strong></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col small-12 large-6 d-flex mt-10 padding-bottom">
                                        <div class="sidebar-icon-item">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M32 192L256 64l224 128-224 128L32 192z"></path>
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M112 240v128l144 80 144-80V240m80 128V192M256 320v128"></path>
                                            </svg>
                                        </div>
                                        <div class="sidebar-text-info ml-10"><span
                                                class="text-description salary-icon mb-10">Bằng cấp</span><strong
                                                class="small-heading">{{$post['bang_cap']}}</strong></div>
                                    </div>
                                    <div class="col small-12 large-6 d-flex mt-10 padding-bottom">
                                        <div class="sidebar-icon-item">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                <circle cx="256" cy="160" r="128" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32"></circle>
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M143.65 227.82L48 400l86.86-.42a16 16 0 0113.82 7.8L192 480l88.33-194.32"></path>
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M366.54 224L464 400l-86.86-.42a16 16 0 00-13.82 7.8L320 480l-64-140.8"></path>
                                                <circle cx="256" cy="160" r="64" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                        </div>
                                        <div class="sidebar-text-info ml-10"><span
                                                class="text-description experience-icon mb-10">Kinh nghiệm</span><strong
                                                class="small-heading">{{$post['kinh_nghiem']}}</strong></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col small-12 large-6 d-flex mt-10 padding-bottom">
                                        <div class="sidebar-icon-item">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                <rect width="416" height="288" x="48" y="144" fill="none"
                                                      stroke-linejoin="round" stroke-width="32" rx="48" ry="48"></rect>
                                                <path fill="none" stroke-linejoin="round" stroke-width="32"
                                                      d="M411.36 144v-30A50 50 0 00352 64.9L88.64 109.85A50 50 0 0048 159v49"></path>
                                                <path d="M368 320a32 32 0 1132-32 32 32 0 01-32 32z"></path>
                                            </svg>
                                        </div>
                                        <div class="sidebar-text-info ml-10"><span
                                                class="text-description salary-icon mb-10">Thu nhập</span><strong
                                                class="small-heading">{{$post['thu_nhap']}}</strong></div>
                                    </div>
                                    <div class="col small-12 large-6 d-flex mt-10 padding-bottom">
                                        <div class="sidebar-icon-item">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"></path>
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69"></path>
                                            </svg>
                                        </div>
                                        <div class="sidebar-text-info ml-10"><span
                                                class="text-description salary-icon mb-10">Hình thức</span><strong
                                                class="small-heading">{{$post['hinh_thuc_lam_viec']}}</strong></div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col small-12 large-6 d-flex mt-10 padding-bottom">
                                        <div class="sidebar-icon-item">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                <path fill="none" stroke-miterlimit="10" stroke-width="32"
                                                      d="M256 64C150 64 64 150 64 256s86 192 192 192 192-86 192-192S362 64 256 64z"></path>
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32" d="M256 128v144h96"></path>
                                            </svg>
                                        </div>
                                        <div class="sidebar-text-info ml-10"><span
                                                class="text-description salary-icon mb-10">Làm việc</span><strong
                                                class="small-heading">{{$post['lam_viec']}}</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-single">
                            <div class="renderHTML">
                                {!! $post['content'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="col small-12 large-4 pl-40 pl-lg-15 mt-lg-30">
                        <div>
                            <div class="sidebar-border">
                                <div class="sidebar-heading">
                                    <div class="avatar-sidebar">
                                        <figure><img alt="jobBox" src="/images/tuyen_dung.png"></figure>
                                        <div class="sidebar-info"><span class="sidebar-company">
                                                i-Space English</span>
                                            </div>
                                    </div>
                                </div>
                                <div class="sidebar-list-job">
                                    <table>
                                        <tr>
                                            <td style="background-color: unset"  class="text-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 512 512" class="icon" height="16" width="16"
                                                     xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;">
                                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="32"
                                                          d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                    <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"></circle>
                                                </svg>
                                            </td>
                                            <td style="background-color: unset">
                                                <span class="text-muted" style="color: #223f81; font-size: 14px !important;"
                                                >{{$info['address']}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  class="text-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 512 512" class="icon" height="16" width="16"
                                                     xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;">
                                                    <path fill="none" stroke-miterlimit="10" stroke-width="32"
                                                          d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z"></path>
                                                </svg>
                                            </td>
                                            <td><a style="color: #223f81" href="tel:{{$info['phone']}}" class="text-muted">Phone: {{$info['phone']}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 512 512" class="icon" height="16" width="16"
                                                     xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;">
                                                    <rect width="416" height="320" x="48" y="96" fill="none"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="32" rx="40" ry="40"></rect>
                                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="32" d="M112 160l144 112 144-112"></path>
                                                </svg>
                                            </td>
                                            <td><a href="mailto:{{$info['email']}}" class="text-muted" style="color: #223f81">Email:
                                                    {{$info['email']}}</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-border"><h6 class="f-18">Việc làm liên quan</h6>
                            <div class="sidebar-list-job">
                                <ul style=" list-style-type: none;">
                                    @foreach($listNewPosts as $item)
                                        @php
                                            $routeItem = route('page', ['cate_slug'=> $item->category?->slug, 'slug' => $item['slug']]);
                                        @endphp
                                    <li>
                                        <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                            <div class="image"><a
                                                    href="{{$routeItem}}"><img
                                                        alt="GIÁO VIÊN TIẾNG ANH "
                                                        src="{{$item['image']}}"
                                                        width="100" height="50" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></a></div>
                                            <div class="info-text"><h5 class="font-md font-bold color-brand-1">{{$item['title']}}</a></h5>
                                                <div class="mt-0">
                                                    <span class="card-location" style="padding-left: 0">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                         viewBox="0 0 512 512" height="1em" width="1em"
                                                         xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px;">
                                                        <path fill="none" stroke-miterlimit="10" stroke-width="32"
                                                              d="M256 64C150 64 64 150 64 256s86 192 192 192 192-86 192-192S362 64 256 64z"></path>
                                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="32" d="M256 128v144h96"></path>
                                                    </svg>
                                                    {{$item['lam_viec']}}
                                                        </span>
                                                    <span
                                                        class="card-location">
                                                            <svg stroke="currentColor" fill="currentColor"
                                                                 stroke-width="0" viewBox="0 0 512 512" height="1em"
                                                                 width="1em" xmlns="http://www.w3.org/2000/svg"
                                                                 style="margin-top: -4px;">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="32"
                                                      d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32"></circle>
                                                    </svg>
                                                        {{$item['noi_lam_viec']}}</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <style>
        .banner-hero.banner-image-single {
            padding: 20px 0;
        }

        .banner-hero {
            padding: 0 65px 0 15px;
            position: relative;
            max-width: 1770px;
            margin: 0 auto;
        }

        .banner-hero.banner-image-single img {
            width: 100%;
            border-radius: 16px;
        }

        .mb-15 {
            margin-bottom: 15px !important;
        }

        .icon {
            color: #6c757d !important;
            margin-right: 2px;
        }

        .font-xs {
            font-weight: 500 !important;
            font-size: 12px !important;
            line-height: 18px !important;
        }

        @media (min-width: 992px) {
            .text-lg-end {
                text-align: right !important;
            }
        }

        .btn-apply-big.btn-apply-icon {
            padding-left: 50px;
            background-position: 21px 17px;
        }

        .btn-apply-big {
            border-radius: 30px;
        }

        .btn-apply-big {
            padding: 18px 30px;
            width: auto;
        }

        .btn-apply-big {
            background-color: #223f81;
            color: #fff;
            padding: 18px 35px;
            border-radius: 4px;
        }

        .btn-apply-icon {
            background-image: url(/_next/static/media/apply.167bd1dd.svg);
            background-position: 15px 11px;
            background-repeat: no-repeat;
            padding-left: 40px;
        }

        .btn-apply {
            background-color: #223f81;
            color: #fff;
            padding: 12px 20px;
            border-radius: 4px;
        }

        .job-overview {
            border: thin solid #e0e6f7;
            border-radius: 8px;
            padding: 20px 30px 30px;
            margin-bottom: 50px;
        }

        .mb-30 {
            margin-bottom: 30px !important;
        }

        .pb-15 {
            padding-bottom: 15px !important;
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .job-overview .sidebar-icon-item {
            font-size: 18px;
            color: #a0abb8;
            min-width: 20px;
            position: relative;
        }

        .job-overview .sidebar-icon-item svg {
            position: absolute;
            top: 5px;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .mt-10 {
            margin-top: 10px !important;
        }

        img, svg {
            vertical-align: middle;
        }

        .job-overview .sidebar-text-info {
            display: flex;
        }

        .ml-10 {
            margin-left: 10px !important;
        }

        .job-overview .text-description {
            font-size: 16px;
            color: #66789c;
            line-height: 24px;
            font-weight: 400;
        }

        .text-description {
            font-size: 14px;
            color: #66789c;
            line-height: 22px;
            display: inline-block;
            width: 50%;
            min-width: 120px;
            max-width: 120px;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .job-overview .sidebar-text-info .small-heading {
            width: 100%;
            display: inline-block;
            font-size: 16px;
            line-height: 24px;
            font-weight: 500;
        }

        .d-flex {
            display: flex;
        }

        .padding-bottom {
            padding-bottom: 10px;
        }

        .content-single h3, .content-single h4, .content-single h5 {
            margin-top: 20px;
            color: #4f5e64;
            font-weight: 700;
            margin-bottom: 20px;
        }

        strong {
            font-weight: 700;
        }

        .content-single ul {
            padding-left: 30px;
            line-height: 32px;
            font-size: 16px;
            color: #4f5e64;
            list-style: disc;
        }

        .sidebar-border, .sidebar-shadow {
            border: 1px solid #e0e6f7;
            padding: 25px;
            border-radius: 8px;
            background-color: #fff;
            margin-bottom: 40px;
        }

        .sidebar-border .sidebar-heading, .sidebar-shadow .sidebar-heading {
            display: inline-block;
            width: 100%;
        }

        .sidebar-border .sidebar-heading .avatar-sidebar figure, .sidebar-shadow .sidebar-heading .avatar-sidebar figure {
            float: left;
        }

        .sidebar-border .sidebar-heading .avatar-sidebar figure img, .sidebar-shadow .sidebar-heading .avatar-sidebar figure img {
            border-radius: 10px;
        }

        .sidebar-border .sidebar-heading .avatar-sidebar .sidebar-info, .sidebar-shadow .sidebar-heading .avatar-sidebar .sidebar-info {
            display: block;
            /*padding-left: 100px;*/
            position: relative;
            text-align: center;
        }

        .sidebar-border .sidebar-heading .avatar-sidebar .sidebar-info .sidebar-company, .sidebar-shadow .sidebar-heading .avatar-sidebar .sidebar-info .sidebar-company {
            font-size: 22px;
            line-height: 18px;
            font-weight: 700;
            display: block;
            padding-top: 5px;
        }

        .card-location {
            font-size: 15px;
            color: #a0abb8;
            display: inline-block;
            padding: 0 0 0 20px;
            line-height: 24px;
        }

        .sidebar-list-job {
            border-top: 1px solid rgba(6, 18, 36, .1);
            display: inline-block;
            width: 100%;
            padding: 25px 0 0;
            margin: 20px 0 0;
        }

        .card-list-4 {
            position: relative;
            display: flex;
            width: 100%;
            padding: 0 0 15px;
            margin-bottom: 0;
            border-bottom: 1px solid #e0e6f7;
        }

        .hover-up, .hover-up:hover {
            transition: all .25s cubic-bezier(.02, .01, .47, 1);
        }

        .animate__fadeIn {
            animation-name: fadeIn;
        }

        .animate__animated {
            animation-duration: 1s;
            animation-duration: var(--animate-duration);
            animation-fill-mode: both;
        }

        .card-list-4 .image {
            min-width: 60px;
            padding-right: 10px;
        }

        .card-list-4 .info-text {
            width: 100%;
            margin-top: -4px;
        }

        .color-brand-1 {
            color: #023064 !important;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-md {
            font-size: 16px !important;
            line-height: 24px !important;
        }

        .card-briefcase {
        }

        .card-location {
            font-size: 12px;
            color: #a0abb8;
            display: inline-block;
            padding: 0 0 0 20px;
            line-height: 24px;
        }

        .card-briefcase, .card-time {
            font-size: 12px;
            color: #a0abb8;
            display: inline-block;
            padding: 0 15px;
        }

        .card-briefcase, .card-time {
            font-size: 12px;
            color: #a0abb8;
            display: inline-block;
            padding: 0 15px;
        }
        .btn-mail-hr{
            background: red;
            color: #FFF;
            padding: 10px 16px;
            border-radius: 6px;
            display: block;
            text-align: center;
        }
    </style>
@endsection
