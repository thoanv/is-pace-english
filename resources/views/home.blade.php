@extends('layouts.app')
@section('title', 'Is Pace')
@section('content')
    <div id="content" role="main" class="content-area">
        <section class="section" id="section_1876643903">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="slider-wrapper relative home-slider" id="slider-2112147658"
                     style="background-color:rgb(0, 42, 66);">
                    <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                         data-flickity-options='{
								"cellAlign": "center",
								"imagesLoaded": true,
								"lazyLoad": 1,
								"freeScroll": false,
								"wrapAround": true,
								"autoPlay": 6000,
								"pauseAutoPlayOnHover" : true,
								"prevNextButtons": true,
								"contain" : true,
								"adaptiveHeight" : true,
								"dragThreshold" : 10,
								"percentPosition": true,
								"pageDots": true,
								"rightToLeft": false,
								"draggable": true,
								"selectedAttraction": 0.1,
								"parallax" : 0,
								"friction": 0.6        }'
                    >
                        @foreach($slides as $key => $slide)

                            <div class="banner has-hover" id="banner-482679248{{$key}}">
                                @if($slide['link'])
                                <a href="{{$slide['link']}}" target="_blank">
                                @endif
                                <div class="banner-inner fill">

                                    <div class="banner-bg fill">
                                        <div class="bg fill bg-fill "></div>
                                    </div>
                                    <div class="banner-layers container">
                                        <div class="fill banner-link"></div>
                                        @if($slide['link'])
                                            <div id="text-box-966456746{{$key}}"
                                                 class="text-box banner-layer x15 md-x10 lg-x15 y75 md-y60 lg-y60 res-text">
                                                <div class="text-box-content text dark">

{{--                                                    <div class="text-inner text-center">--}}

{{--                                                        <a rel="noopener noreferrer" href="{{$slide['link']}}"--}}
{{--                                                           target="_blank" class="button white btn-custom"--}}
{{--                                                           style="border-radius:99px;">--}}
{{--                                                            <span>TÌM HIỂU THÊM</span>--}}
{{--                                                        </a>--}}

{{--                                                    </div>--}}
                                                </div>

                                                <style>
                                                    #text-box-966456746{{$key}}         {
                                                        width: 62%;
                                                    }

                                                    #text-box-966456746{{$key}} .text-box-content {
                                                        font-size: 100%;
                                                    }

                                                    @media (min-width: 550px) {
                                                        #text-box-966456746{{$key}}         {
                                                            width: 40%;
                                                        }
                                                    }

                                                    @media (min-width: 850px) {
                                                        #text-box-966456746{{$key}}         {
                                                            width: 24%;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                    @if($slide['link'])
                                </a>
                                @endif
                                <style>
                                    #banner-482679248{{$key}}         {
                                        padding-top: 700px;
                                    }

                                    #banner-482679248{{$key}} .bg.bg-loaded {
                                        background-image: url('{{$slide['image']}}');
                                    }

                                    #banner-482679248{{$key}} .ux-shape-divider--top svg {
                                        height: 150px;
                                        --divider-top-width: 100%;
                                    }

                                    #banner-482679248{{$key}} .ux-shape-divider--bottom svg {
                                        height: 150px;
                                        --divider-width: 100%;
                                    }

                                    @media (min-width: 550px) {
                                        #banner-482679248{{$key}}         {
                                            padding-top: 700px;
                                        }
                                    }
                                </style>
                            </div>

                        @endforeach

                    </div>

                    <div class="loading-spin dark large centered"></div>

                </div>


                <div class="slider-botom">

                    <p>
{{--                        <svg viewBox="0 0 1920 205" fill="none" xmlns="http://www.w3.org/2000/svg"> Đã xóa:--}}
{{--                            <path d="M0 0C748.498 184.586 1168.9 184.445 1920 0V205H0V0Z" fill="white"/>--}}
{{--                        </svg>--}}
                    </p>
                        <br/>
                </div>

            </div>


            <style>
                #section_1876643903 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                #section_1876643903 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_1876643903 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }

                @media (min-width: 550px) {
                    #section_1876643903 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                }
            </style>
        </section>
        <section class="section home-about" id="section_417320324" style="margin-top: 35px;">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row row-large align-middle">
                    <div class="col medium-12 small-12 large-12" data-animate="fadeInLeft">
                        <div class="col-inner text-center">
                            <div id="text-977406082" class="text heading-title text-center">
                                <h2 class="text-bong">Giới thiệu về ISPACE ENGLISH</h2>
                            </div>
                            <div class="text-223f81">{!! $general['come_to_us'] !!}</div>
                        </div>
                    </div>
                </div>
                <div class="row row-large align-middle" id="row-474204746">
                    <div id="col-120865468" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_256186464">
                                <div class="img-inner dark" style="border-radius: 8px">
                                    <img width="500" height="500"
                                         src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                         class="attachment-original size-original" alt="{{$general['name']}}"
                                         decoding="async"
                                         data-lazy-srcset="{{$general['image_left']}} 500w, {{$general['image_left']}} 300w, {{$general['image_left']}} 150w"
                                         data-lazy-sizes="(max-width: 500px) 100vw, 500px"
                                         data-lazy-src="{{$general['image_left']}}"/>
                                    <noscript><img width="500" height="500"
                                                   src="{{$general['image_left']}}"
                                                   class="attachment-original size-original"
                                                   alt="{{$general['name']}}" decoding="async"
                                                   srcset="{{$general['image_left']}} 500w, {{$general['image_left']}} 300w, {{$general['image_left']}} 150w"
                                                   sizes="(max-width: 500px) 100vw, 500px"/></noscript>
                                </div>

                                <style>
                                    #image_256186464 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                    <div id="col-605122882" class="col medium-6 small-12 large-6" data-animate="fadeInRight">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_256186463">
                                <div class="img-inner dark" style="border-radius: 8px">
                                    <img width="500" height="500"
                                         src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                         class="attachment-original size-original" alt="{{$general['name']}}"
                                         decoding="async"
                                         data-lazy-srcset="{{$general['image_right']}} 500w, {{$general['image_right']}} 300w, {{$general['image_right']}} 150w"
                                         data-lazy-sizes="(max-width: 500px) 100vw, 500px"
                                         data-lazy-src="{{$general['image_right']}}"/>
                                    <noscript><img width="500" height="500"
                                                   src="{{$general['image_right']}}"
                                                   class="attachment-original size-original"
                                                   alt="{{$general['name']}}" decoding="async"
                                                   srcset="{{$general['image_right']}} 500w, {{$general['image_right']}} 300w, {{$general['image_right']}} 150w"
                                                   sizes="(max-width: 500px) 100vw, 500px"/></noscript>
                                </div>

                                <style>
                                    #image_256186463 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>


                </div>
                @php
                    $about = \App\Models\Category::where([['status', \App\Enums\CommonEnum::ACTIVATED], ['type', \App\Enums\CategoryEnum::GIOI_THIEU]])->whereNull('parent_id')->first();
                @endphp
                @if($about)
                    <div class="row row-large align-middle">
                        <div class="col medium-12 small-12 large-12 text-center" data-animate="fadeInLeft">
                            <a href="{{route('page', ['cate_slug'=> $about['slug']])}}"
                               class="button primary lowercase btn-custom" style="border-radius:99px;">
                                <span>Tìm hiểu thêm</span>
                            </a>
                        </div>
                    </div>
                @endif
            </div>


            <style>
                #section_417320324 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                #section_417320324 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_417320324 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>

        </section>
        <section class="section bg-primary dark" id="section_1212125858">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">

                <div class="row" id="row-768891800">

                    <div id="col-1902353207" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="container section-title-container main-title"><h3
                                    class="section-title section-title-center"><b></b><span
                                        class="section-title-main">Khóa học đa dạng phù hợp cho mọi lứa tuổi</span><b></b>
                                </h3></div>
                            <div
                                class="row large-columns-3 medium-columns- small-columns-1 slider row-slider slider-nav-circle slider-nav-outside slider-nav-light slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                @foreach($courses as $course)
                                    <div class="col programme-item post-item">
                                        <div class="program-box-wrap">
                                            <div class="program-box box has-hover">

                                                <div class="program-box-img box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:65%;">
                                                        <img width="300" height="234"
                                                             src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20234'%3E%3C/svg%3E"
                                                             class="attachment-medium size-medium wp-post-image"
                                                             alt="{{$course['name']}}" decoding="async"
                                                             data-lazy-src="{{$course['image']}}"/>
                                                        <noscript><img width="300" height="234"
                                                                       src="{{$course['image']}}g"
                                                                       class="attachment-medium size-medium wp-post-image"
                                                                       alt="{{$course['name']}}" decoding="async"/>
                                                        </noscript>
                                                    </div>

                                                </div>
                                                <div class="program-box-content text-center">
                                                    <h3 class="cut-text">
                                                        {{$course['name']}} </h3>
                                                    <div class="desc">
                                                        {{$course['description']}}
                                                    </div>

                                                    <a href="{{route('page', ['cate_slug'=>$course->category?->slug, 'slug' => $course['slug']])}}"
                                                       class="button primary lowercase btn-custom"
                                                       style="border-radius:99px;">
                                                        <span>Xem chương trình</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                @endforeach
                            </div>
                            <div id="gap-222045088" class="gap-element clearfix"
                                 style="display:block; height:auto;">

                                <style>
                                    #gap-222045088 {
                                        padding-top: 30px;
                                    }
                                </style>
                            </div>

                        </div>

                        <style>
                            #col-1902353207 > .col-inner {
                                margin: 30px 0px 0px 0px;
                            }
                        </style>
                    </div>


                </div>
            </div>


            <style>
                #section_1212125858 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }

                #section_1212125858 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_1212125858 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>
        <div class="row" id="row-725075836">
            <div id="col-811636745" class="col small-12 large-12">
                <div class="col-inner">
                    <div class="container section-title-container main-title">
                        <h3
                            class="section-title section-title-center"><b></b><span class="section-title-main">Đội ngũ giáo viên bản ngữ & Việt Nam giàu kinh nghiệm</span><b></b>
                        </h3>
                    </div>
                    <div class="row large-columns-4 medium-columns-3 small-columns-1">
                        @foreach($teachers as $teacher)
                            <div class="col team-item post-item">
                                <div class="team-box-wrap">
                                    <div class="team-box">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:100%;">
                                                <img width="300" height="225"
                                                     src="{{$teacher['image']}}"
                                                     class="attachment-medium size-medium wp-post-image" alt="{{$teacher['name']}}"/>
                                                <noscript><img width="300" height="225"
                                                               src="{{$teacher['image']}}"
                                                               class="attachment-medium size-medium wp-post-image"
                                                               alt="" decoding="async"
                                                               srcset="{{$teacher['image']}} 300w, {{$teacher['image']}} 1024w"
                                                               sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                                            </div>
                                        </div>
                                        <div class="team-box-content">
                                            <div class="position">
                                                Giáo viên
                                            </div>
                                            <h4>{{$teacher['name']}}</h4>
                                            <div class="desc content-teacher">
                                                {!! $teacher['description'] !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <style>
                    #col-811636745 > .col-inner {
                        margin: 30px 0px 0px 0px;
                    }
                    .content-teacher p{
                        margin-bottom: 5px;
                    }
                </style>
            </div>


            <div id="col-232267773" class="col small-12 large-12">
                <div class="col-inner text-center">
                    <div class="container section-title-container main-title"><h3
                            class="section-title section-title-center"><b></b><span class="section-title-main">Tin tức &amp; Sự kiện</span><b></b>
                        </h3>
                    </div>
                    <div class="row">
                        @foreach($posts as $post)
                            @include('components.item-post', ['post' => $post])
                        @endforeach
                    </div>

                    @php
                        $cate = \App\Models\Category::where([['status', \App\Enums\CommonEnum::ACTIVATED], ['type', \App\Enums\CategoryEnum::TIN_TUC]])->whereNull('parent_id')->first();
                    @endphp
                    @if($cate)
                        <a href="{{route('page', ['cate_slug' => $cate['slug']])}}" target="_self"
                           class="button primary lowercase btn-custom"
                           style="border-radius:99px;">
                            <span>Xem chi tiết</span>
                        </a>
                    @endif
                </div>

                <style>
                    #col-232267773 > .col-inner {
                        margin: 30px 0px 0px 0px;
                    }
                </style>
            </div>
        </div>

        <div class="row" id="row-2033504995">
            <div id="col-32583027" class="col small-12 large-12">
                <div class="col-inner text-left">
                    <div class="container section-title-container main-title"><h3
                            class="section-title section-title-center"><b></b><span class="section-title-main">Hoạt động nổi bật</span><b></b>
                        </h3>
                    </div>
                    <div class="row" id="row-1461239073">
                        @foreach($activities as $key => $activitiy)
                            <div id="col-69249228{{$key}}" class="col medium-4 small-12 large-4">
                                <div class="col-inner">
                                    <p class="mb-0">
                                        <iframe loading="lazy" title="YouTube video player"
                                                src="{{$activitiy['link']}}" width="560" height="315"
                                                frameborder="0" allowfullscreen="allowfullscreen"
                                                data-rocket-lazyload="fitvidscompatible"
                                                data-lazy-src="{{$activitiy['link']}}"
                                                data-ll-status="loaded" class="entered lazyloaded"></iframe>
                                        <noscript>
                                            <iframe title="YouTube video player"
                                                    src="https://www.youtube.com/embed/3-jnB5VeFe0"
                                                    width="560" height="315" frameborder="0"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                        </noscript>
                                        <br>

                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="row" id="row-938961927">

                        <div id="col-835506278" class="col padding-bot small-12 large-12">
                            <div class="col-inner text-center">
                                <a href="/khoanh-khac-oea/" target="_self" class="button primary lowercase btn-custom"
                                   style="border-radius:99px;">
                                    <span>Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.form-register')
    </div>
@endsection
