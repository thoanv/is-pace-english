@extends('layouts.app')
@section('title', $category->translation?->name??'')
@section('content')
    <main id="main" class="">
        <div id="content" role="main" class="content-area">
            {{-- banner --}}
            <section class="section" id="section_887681338">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <div class="section-content relative">
                    <div class="row row-large align-middle align-center" id="row-120434788">
                        <div id="col-1103054514" class="col medium-7 small-12 large-5">
                            <div class="col-inner text-center">
                                <div id="text-697900839" class="text service-ki service-kid">
                                    <h4>{{ $category->translation?->name }}</h4>
                                    <h2 style="color: {{ $course->color }};">
                                        {{ trim(preg_replace('/\s*\(.*?\)/', '', $course->translation?->name)) }}
                                    </h2>
                                    <p>{{ $course->translation?->age}}</p>
                                    <style>
                                        #text-697900839 {
                                            text-align: center;
                                        }
                                    </style>
                                </div>

                                <div id="text-3885564625" class="text">
                                    {!! $course->translation?->description !!}
                                    <style>
                                        #text-3885564625 {
                                            font-size: 1.6rem;
                                            line-height: 1.3;
                                            text-align: center;
                                            color: rgb(19, 76, 129);
                                        }

                                        #text-3885564625>* {
                                            color: rgb(19, 76, 129);
                                        }
                                    </style>

                                </div>

                                <a href="#" target="_self" class="button primary lowercase but-kindypc"
                                    style="border-radius:99px;">
                                    <span>Tìm hiểu thêm</span>
                                </a>

                            </div>

                            <style>
                                #col-1103054514>.col-inner {
                                    padding: 30px 0px 0px 0px;
                                }
                            </style>
                        </div>
                        <div id="col-1411473277" class="col pb-0 medium-5 small-12 large-7">
                            <div class="col-inner">
                                @php
                                    $imgCource  = $course?->image
                                @endphp
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1311776895">
                                    <div class="img-inner dark">
                                        <img fetchpriority="high" decoding="async" width="796" height="542"
                                            src="{{ $imgCource }}{{ $imgCource }}"
                                            class="attachment-original size-original" alt=""
                                            srcset="{{ $imgCource }} 796w, {{ $imgCource }} 300w, {{ $imgCource }} 768w"
                                            sizes="(max-width: 796px) 100vw, 796px">

                                    </div>
                                    <style>
                                        #image_1311776895 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    #section_887681338 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                        background-color: rgb(230, 233, 242);
                    }

                    #section_887681338 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                    }

                    #section_887681338 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                    }
                </style>
            </section>
            {{-- Kết quả --}}
            <section class="section" id="section_17047160">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <div class="section-content relative">
                    <div id="gap-1441465504" class="gap-element clearfix" style="display:block; height:auto;">
                        <style>
                            #gap-1441465504 {
                                padding-top: 40px;
                            }
                        </style>
                    </div>

                    <div class="row row-collapse" id="row-490475462">
                        <div id="col-1428095712" class="col small-12 large-12">
                            <div class="col-inner">
                                <div id="text-4162623700" class="text">
                                    <h2 class="uppercase">
                                        {!!__('messages.course.title_ket_qua')!!}
                                    </h2>

                                    <style>
                                        #text-4162623700 {
                                            text-align: center;
                                            color: #134c81;
                                        }

                                        #text-4162623700>* {
                                            color: #134c81;
                                        }
                                    </style>
                                </div>
                                <div id="gap-1403809851" class="gap-element clearfix" style="display:block; height:auto;">
                                    <style>
                                        #gap-1403809851 {
                                            padding-top: 40px;
                                        }
                                    </style>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row row-collapse align-center row-slider-kq" id="row-422225220">
                        <div id="col-589996151" class="col small-12 large-12">
                            <div class="col-inner">
                                <div class="slider-wrapper relative slider-kq" id="slider-1331991606">
                                    <div class="slider slider-nav-simple slider-nav-large slider-nav-light slider-nav-outside slider-style-normal"
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
                                    "friction": 0.6        }'>
                                        {{--Kết quả đạt được --}}
                                        @foreach ($result as $key => $item)
                                            <div class="row row-collapse align-middle align-center row-kt-nd"
                                                id="row-162507372">
                                                <div id="col-60785051" class="col medium-8 small-11 large-8">
                                                    <div class="col-inner">
                                                        <div class="icon-box featured-box icon-box-center text-center">
                                                            <div class="icon-box-img" style="width: 296px">
                                                                <div class="icon">
                                                                    <div class="icon-inner">
                                                                        <img loading="lazy" decoding="async" width="279"
                                                                            height="160"
                                                                            src="/wp-content/uploads/2025/03/0{{ $key + 1 }}.png"
                                                                            class="attachment-medium size-medium"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-2357062987" class="text active">
                                                                    {!! $item->translation?->description !!}
                                                                    <style>
                                                                        #text-2357062987 {
                                                                            font-size: 1.3rem;
                                                                            text-align: center;
                                                                            color: rgb(19, 76, 129);
                                                                        }

                                                                        #text-2357062987>* {
                                                                            color: rgb(19, 76, 129);
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="col-1800528789" class="col medium-8 small-12 large-8">
                                                    <div class="col-inner">

                                                        <div class="img has-hover x md-x lg-x y md-y lg-y"
                                                            id="image_854953911">
                                                            <div class="img-inner dark">
                                                                <img loading="lazy" decoding="async" width="930"
                                                                    height="469" src="{{ $item->image??'' }}"
                                                                    class="attachment-original size-original" alt=""
                                                                    srcset="{{ $item->image??'' }} 930w, {{ $item->image }} 300w, {{ $item->image??'' }} 768w"
                                                                    sizes="auto, (max-width: 930px) 100vw, 930px">
                                                            </div>

                                                            <style>
                                                                #image_854953911 {
                                                                    width: 100%;
                                                                }
                                                            </style>
                                                        </div>

                                                    </div>

                                                    <style>
                                                        #col-1800528789>.col-inner {
                                                            padding: 20px 10px 0px 10px;
                                                        }

                                                        @media (min-width:550px) {
                                                            #col-1800528789>.col-inner {
                                                                padding: 20px 0px 0px 0px;
                                                            }
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="loading-spin dark large centered"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #section_17047160 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        background-color: rgb(255, 255, 255);
                    }

                    #section_17047160 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                    }

                    #section_17047160 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                    }
                </style>
            </section>
            {{-- Lộ trình học tập --}}
            <section class="section" id="section_1335370979">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <div class="section-content relative">
                    <div id="gap-2053786413" class="gap-element clearfix" style="display:block; height:auto;">
                        <style>
                            #gap-2053786413 {
                                padding-top: 40px;
                            }
                        </style>
                    </div>
                    <div class="row row-collapse" id="row-902287510">
                        <div id="col-1633571461" class="col small-12 large-12">
                            <div class="col-inner">
                                <div id="text-54633260" class="text">
                                    <h2 class="uppercase">{!!__('messages.course.title_lo_trinh')!!}</h2>
                                    </h2>
                                    <style>
                                        #text-54633260 {
                                            text-align: center;
                                            color: #134c81;
                                        }

                                        #text-54633260>* {
                                            color: #134c81;
                                        }
                                    </style>
                                </div>
                                <div id="gap-2050249269" class="gap-element clearfix"
                                    style="display:block; height:auto;">
                                    <style>
                                        #gap-2050249269 {
                                            padding-top: 20px;
                                        }

                                        @media (min-width:550px) {
                                            #gap-2050249269 {
                                                padding-top: 40px;
                                            }
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-collapse row-full-width align-right" id="row-1224089396">
                        {{-- PC --}}
                        <div id="col-691568004" class="col hide-for-small small-12 large-12">
                            <div class="col-inner">
                                <div class="tabbed-content tab-lotrinh">
                                    <ul class="nav nav-pills nav-uppercase nav-size-normal nav-center"
                                        role="tablist">
                                        @php
                                            $learning_path_parent = $learning_path->filter(function ($item) {
                                                return $item->parent_id == null;
                                            })->values();
                                        @endphp
                                        @foreach ($learning_path_parent as $index => $item)
                                            <li style="padding: 15px 0" id="tab-kindy-pro-{{$index}}" class="tab {{ $index === 0 ? 'active' : '' }} has-icon" role="presentation">
                                                <a href="#tab_kindy-pro-{{$index}}" role="tab" aria-selected="true"
                                                    aria-controls="tab_kindy-pro-{{$index}}">
                                                    <span>{{ $item->translation?->title }}</span>
                                                </a>
                                            </li>
                                           
                                        @endforeach
                                    </ul>
                                    <div class="tab-panels">
                                        @foreach ($learning_path_parent as $index => $item)
                                            <div id="tab_kindy-pro-{{$index}}" class="panel {{ $index == 0 ? 'active' : '' }} entry-content" role="tabpanel"
                                                aria-labelledby="tab-kindy-pro-{{$index}}">
                                                <div class="row row-collapse row-full-width" id="row-1194545649{{$index}}">
                                                    <div id="col-955240755{{$index}}" class="col medium-1 small-12 large-1">
                                                        <div class="col-inner">
                                                        </div>
                                                    </div>
                                                    <div id="col-1939866757{{$index}}" class="col medium-11 small-12 large-11">
                                                        <div class="col-inner">
                                                            <div class="slider-wrapper relative" id="slider-1699933369">
                                                                <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-focus"
                                                                    data-flickity-options='{
                                                                    "cellAlign": "left",
                                                                    "imagesLoaded": true,
                                                                    "lazyLoad": 1,
                                                                    "freeScroll": false,
                                                                    "wrapAround": false,
                                                                    "autoPlay": 6000,
                                                                    "pauseAutoPlayOnHover" : true,
                                                                    "prevNextButtons": false,
                                                                    "contain" : true,
                                                                    "adaptiveHeight" : true,
                                                                    "dragThreshold" : 10,
                                                                    "percentPosition": true,
                                                                    "pageDots": true,
                                                                    "rightToLeft": false,
                                                                    "draggable": true,
                                                                    "selectedAttraction": 0.1,
                                                                    "parallax" : 0,
                                                                    "friction": 0.6        }'>
                                                                    @php
                                                                        $learning_path_child = $learning_path->filter(function ($item_children) use ($item) {
                                                                            return $item_children->parent_id == $item->id;
                                                                        });
                                                                    @endphp
                                                                    {{-- Lộ trình học tập --}}
                                                                    @foreach ($learning_path_child as $index => $item_child)
                                                                        <div class="row align-middle row-tab-lotrinh"
                                                                            id="row-721803437{{$index}}">
                                                                            <div id="col-1307288022{{$index}}"
                                                                                class="col small-12 large-12" style="background-color: {{ $course->color }}">
                                                                                <div class="col-inner">
                                                                                    <div class="row align-middle"
                                                                                        id="row-1763715404{{$index}}">

                                                                                        <div id="col-1330797244{{$index}}"
                                                                                            class="col medium-5 small-12 large-5">
                                                                                            <div class="col-inner">


                                                                                                <div id="text-2912677480{{$index}}"
                                                                                                    class="text">

                                                                                                    <h4>{{ $item_child->translation?->title }}</h4>

                                                                                                    <style>
                                                                                                        #text-2912677480{{$index}} {
                                                                                                            font-size: 1.6rem;
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }

                                                                                                        #text-2912677480{{$index}}>* {
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }
                                                                                                    </style>
                                                                                                </div>

                                                                                                <div id="text-2045112427{{$index}}"
                                                                                                    class="text list-thongtinkh">

                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_do_tuoi')}}</strong>
                                                                                                                {{ round($item_child->age??'') }}
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_thoi_gian')}}</strong>
                                                                                                                {{ round($item_child->time??'') }} {{__('messages.course.content_thang')}}
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_so_buoi')}}</strong>
                                                                                                                {{ round($item_child->session_per_week??'') }} {{__('messages.course.content_buoi_tuan')}}
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_buoi_hoc')}}</strong>
                                                                                                                {{ round($item_child->session_time??'') }} {{__('messages.course.content_phut')}}
                                                                                                        </li>
                                                                                                    </ul>

                                                                                                    <style>
                                                                                                        #text-2045112427{{$index}} {
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }

                                                                                                        #text-2045112427{{$index}}>* {
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }
                                                                                                    </style>
                                                                                                </div>

                                                                                            </div>

                                                                                            <style>
                                                                                                #col-1330797244{{$index}}>.col-inner {
                                                                                                    padding: 0px 20px 0px 40px;
                                                                                                }
                                                                                            </style>
                                                                                        </div>



                                                                                        <div id="col-1317652093{{$index}}"
                                                                                            class="col medium-7 small-12 large-7">
                                                                                            <div class="col-inner">


                                                                                                <div class="img has-hover x md-x lg-x y md-y lg-y"
                                                                                                    id="image_637668754{{$index}}">
                                                                                                    <div
                                                                                                        class="img-inner dark">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="1200"
                                                                                                            height="800"
                                                                                                            src="{{ $item_child->image??'' }}"
                                                                                                            class="attachment-original size-original"
                                                                                                            alt=""
                                                                                                            srcset="{{ $item_child->image??'' }} 1200w,
                                                                                                            {{ $item_child->image??'' }} 300w,
                                                                                                            {{ $item_child->image??'' }} 1024w,
                                                                                                                {{ $item_child->image??'' }} 768w"
                                                                                                            sizes="auto, (max-width: 1200px) 100vw, 1200px">
                                                                                                    </div>

                                                                                                    <style>
                                                                                                        #image_637668754{{$index}} {
                                                                                                            width: 100%;
                                                                                                        }
                                                                                                    </style>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                    
                                                                </div>

                                                                <div class="loading-spin dark large centered"></div>

                                                                <style>
                                                                    #slider-1699933369 .flickity-slider>* {
                                                                        max-width: 1285px !important;
                                                                    }
                                                                </style>
                                                            </div>


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- mobile --}}
                        <div id="col-1582768638" class="col show-for-small small-12 large-12">
                            <div class="col-inner">
                                <div class="tabbed-content tab-lotrinh">
                                    <ul class="nav nav-pills nav-uppercase nav-size-normal nav-center"
                                        role="tablist">
                                        @foreach ($learning_path_parent as $index => $item)
                                            <li style="padding: 10px 0" id="tab-kindy-pro-{{$index}}" class="tab {{ $index === 0 ? 'active' : '' }} has-icon" role="presentation"><a
                                                    href="#tab_kindy-pro-{{$index}}" role="tab" aria-selected="true"
                                                    aria-controls="tab_kindy-pro-{{$index}}">
                                                    <span>{{ $item->translation?->title }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-panels">
                                        @foreach ($learning_path_parent as $index => $item)
                                            <div id="tab_kindy-pro-{{$index}}" class="panel {{ $index === 0 ? 'active' : '' }} entry-content" role="tabpanel"
                                                aria-labelledby="tab-kindy-pro-{{$index}}">
                                                <div class="row row-collapse row-full-width" id="row-1599160376{{$index}}">
                                                    <div id="col-618414101{{$index}}" class="col medium-1 small-12 large-1">
                                                        <div class="col-inner">
                                                        </div>
                                                    </div>

                                                    <div id="col-1591643418{{$index}}" class="col medium-11 small-12 large-11">
                                                        <div class="col-inner">
                                                            <div class="slider-wrapper relative" id="slider-268749821{{$index}}">
                                                                <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-focus"
                                                                    data-flickity-options='{
                                                                        "cellAlign": "left",
                                                                        "imagesLoaded": true,
                                                                        "lazyLoad": 1,
                                                                        "freeScroll": false,
                                                                        "wrapAround": false,
                                                                        "autoPlay": 6000,
                                                                        "pauseAutoPlayOnHover" : true,
                                                                        "prevNextButtons": false,
                                                                        "contain" : true,
                                                                        "adaptiveHeight" : true,
                                                                        "dragThreshold" : 10,
                                                                        "percentPosition": true,
                                                                        "pageDots": true,
                                                                        "rightToLeft": false,
                                                                        "draggable": true,
                                                                        "selectedAttraction": 0.1,
                                                                        "parallax" : 0,
                                                                        "friction": 0.6        }'>

                                                                        @php
                                                                            $learning_path_child = $learning_path->filter(function ($item_children) use ($item) {
                                                                                return $item_children->parent_id == $item->id;
                                                                            });
                                                                        @endphp
                                                                    {{-- Lộ trình học tập --}}
                                                                    @foreach ($learning_path_child as $index => $item_child)
                                                                        <div class="row align-middle row-tab-lotrinh"
                                                                            id="row-42124438{{$index}}">
                                                                            <div id="col-943767300{{$index}}"
                                                                                class="col small-12 large-12" style="background-color: {{ $course->color }}">
                                                                                <div class="col-inner">
                                                                                    <div class="row align-middle"
                                                                                        id="row-1907951921{{$index}}">
                                                                                        <div id="col-765674266{{$index}}"
                                                                                            class="col medium-5 small-12 large-5">
                                                                                            <div class="col-inner">
                                                                                                <div id="text-2109065238{{$index}}"
                                                                                                    class="text">

                                                                                                    <h4>{{ $item_child->translation?->title }}</h4>

                                                                                                    <style>
                                                                                                        #text-2109065238{{$index}} {
                                                                                                            font-size: 1.6rem;
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }

                                                                                                        #text-2109065238{{$index}}>* {
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }
                                                                                                    </style>
                                                                                                </div>

                                                                                                <div id="text-4294381553{{$index}}"
                                                                                                    class="text list-thongtinkh">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_do_tuoi')}}</strong>
                                                                                                                {{ round($item_child->age ??'') }}
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_thoi_gian')}}</strong>
                                                                                                                {{ round($item_child->time ??'') }} {{__('messages.course.content_thang')}}
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_so_buoi')}}</strong>
                                                                                                                {{ round($item_child->session_per_week ??'') }} {{__('messages.course.content_buoi_tuan')}}
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>{{__('messages.course.content_buoi_hoc')}}</strong>
                                                                                                                {{ round($item_child->session_time ??'') }} {{__('messages.course.content_phut')}}
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                    <style>
                                                                                                        #text-4294381553{{$index}} {
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }

                                                                                                        #text-4294381553{{$index}}>* {
                                                                                                            color: rgb(255, 255, 255);
                                                                                                        }
                                                                                                    </style>
                                                                                                </div>
                                                                                            </div>
                                                                                            <style>
                                                                                                #col-765674266{{$index}}>.col-inner {
                                                                                                    padding: 0px 20px 0px 40px;
                                                                                                }
                                                                                            </style>
                                                                                        </div>
                                                                                        <div id="col-438779747{{$index}}"
                                                                                            class="col medium-7 small-12 large-7">
                                                                                            <div class="col-inner">
                                                                                                <div class="img has-hover x md-x lg-x y md-y lg-y"
                                                                                                    id="image_1679033736{{$index}}">
                                                                                                    <div
                                                                                                        class="img-inner dark">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="1200"
                                                                                                            height="800"
                                                                                                            src="{{ $item_child->image ??'' }}"
                                                                                                            class="attachment-original size-original"
                                                                                                            alt=""
                                                                                                            srcset="{{ $item_child->image }} 1200w, 
                                                                                                            {{ $item_child->image??''}} 300w,
                                                                                                            {{ $item_child->image??''}} 1024w,
                                                                                                            {{ $item_child->image??''}} 768w"
                                                                                                            sizes="auto, (max-width: 1200px) 100vw, 1200px">
                                                                                                    </div>

                                                                                                    <style>
                                                                                                        #image_1679033736{{$index}} {
                                                                                                            width: 100%;
                                                                                                        }
                                                                                                    </style>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    @endforeach
                                                                    
                                                                </div>

                                                                <div class="loading-spin dark large centered"></div>

                                                                <style>
                                                                    #slider-268749821 .flickity-slider>* {
                                                                        max-width: 1285px !important;
                                                                    }
                                                                </style>
                                                            </div>


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #section_1335370979 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        background-color: rgb(255, 255, 255);
                    }

                    #section_1335370979 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                    }

                    #section_1335370979 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                    }
                </style>
            </section>
            {{-- Phương pháp giảng dạy --}}
            <section class="section" id="section_1749148057">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>

                <div class="section-content relative">
                    <div class="row row-large" id="row-524380609">
                        <div id="col-420149185" class="col hide-for-small small-12 large-12">
                            <div class="col-inner">
                                <div id="text-641727664" class="text">
                                    <h2 class="uppercase"> {!!__('messages.course.title_phuong_phap') !!}</h2>
                                    </h2>
                                    <style>
                                        #text-641727664 {
                                            font-size: 1rem;
                                            text-align: center;
                                            color: #134c81;
                                        }

                                        #text-641727664>* {
                                            color: #134c81;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                        <div id="col-2016695310" class="col show-for-small small-12 large-12">
                            <div class="col-inner">
                                <div id="text-313371421" class="text">
                                    <h2 class="uppercase">{!!__('messages.course.title_phuong_phap') !!}</h2>
                                    <style>
                                        #text-313371421 {
                                            font-size: 1rem;
                                            text-align: center;
                                            color: #134c81;
                                        }

                                        #text-313371421>* {
                                            color: #134c81;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-collapse" id="row-1672338975">
                        {{-- Nội dung PC --}}
                        <div id="col-1862975418" class="col hide-for-small small-12 large-12">
                            <div class="col-inner">
                                <div class="row row-ppday" id="row-1418422942">
                                    @foreach ($method as $index => $item)
                                        <div id="col-733609579{{$index}}" class="col medium-{{ count($method) >= 4 ?'3':'4'}} small-12 large-{{count($method) >= 4?'3':'4'}}">
                                            <div class="col-inner">
                                                <div class="box has-hover   has-hover box-push box-text-bottom">
                                                    <div class="box-image">
                                                        <div class="">
                                                            <img loading="lazy" decoding="async" width="414"
                                                                height="571" src="{{ $item->image??'' }}"
                                                                class="attachment- size-" alt=""
                                                                srcset="{{ $item->image??'' }} 414w,
                                                                {{ $item->image ??''}} 218w"
                                                                sizes="auto, (max-width: 414px) 100vw, 414px">
                                                        </div>
                                                    </div>

                                                    <div class="box-text show-on-hover hover-bounce text-center">
                                                        <div class="box-text-inner">

                                                            <div id="text-921633516{{$index}}" class="text box-title-dd">

                                                                <h4>{{ $item->translation?->title }}</h4>
                                                                <p><span style="color: #a2dce7;">({{ $item->translation?->sub_title }})</span></p>
                                                            </div>

                                                            <div id="text-6316119{{$index}}" class="text pp-hidden">

                                                                <p>{!! $item->translation?->description !!}</p>

                                                                <style>
                                                                    #text-6316119{{$index}} {
                                                                        text-align: center;
                                                                        color: rgb(255, 255, 255);
                                                                    }

                                                                    #text-6316119{{$index}}>* {
                                                                        color: rgb(255, 255, 255);
                                                                    }
                                                                </style>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        {{--Nội dung mobile  --}}
                        <div id="col-273729650" class="col show-for-small small-12 large-12">
                            <div class="col-inner">
                                <div class="slider-wrapper relative" id="slider-176412360">
                                    <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-nav-outside slider-style-normal"
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
                                        "friction": 0.6        }'>
                                        @foreach ($method as $index => $item)
                                            <div class="row row-ppday" id="row-938913034{{$index}}">
                                                <div id="col-1401722945{{$index}}" class="col medium-4 small-12 large-4">
                                                    <div class="col-inner">
                                                        <div class="box has-hover   has-hover box-push box-text-bottom">
                                                            <div class="box-image">
                                                                <div class="">
                                                                    <img loading="lazy" decoding="async" width="414"
                                                                        height="571"
                                                                        src="{{ $item->image??'' }}"
                                                                        class="attachment- size-" alt=""
                                                                        srcset="{{ $item->image??'' }} 414w,
                                                                        {{ $item->image??'' }} 218w"
                                                                        sizes="auto, (max-width: 414px) 100vw, 414px">
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="box-text show-on-hover hover-bounce text-center">
                                                                <div class="box-text-inner">

                                                                    <div id="text-1619454830" class="text box-title-dd">

                                                                        <h4>{{ $item->translation?->title }}</h4>
                                                                        <p><span style="color: #a2dce7;">({{ $item->translation?->sub_title }})</span></p>
                                                                    </div>

                                                                    <div id="text-2001362540{{$index}}" class="text pp-hidden">

                                                                        <p>{!! $item->translation?->description !!}</p>

                                                                        <style>
                                                                            #text-2001362540{{$index}} {
                                                                                text-align: center;
                                                                                color: rgb(255, 255, 255);
                                                                            }

                                                                            #text-2001362540{{$index}}>* {
                                                                                color: rgb(255, 255, 255);
                                                                            }
                                                                        </style>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        @endforeach
                                        
                                    </div>

                                    <div class="loading-spin dark large centered"></div>

                                </div>


                            </div>

                            <style>
                                #col-273729650>.col-inner {
                                    padding: 0px 0px 40px 0px;
                                }
                            </style>
                        </div>
                    </div>
                </div>


                <style>
                    #section_1749148057 {
                        padding-top: 50px;
                        padding-bottom: 50px;
                        background-color: rgb(255, 255, 255);
                    }

                    #section_1749148057 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                    }

                    #section_1749148057 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                    }
                </style>
            </section>
            {{--Giáo trình --}}
            <section class="section dark" id="section_1593704963">
                <div class="bg section-bg fill bg-fill  ">
                </div>
                <div class="section-content relative">
                    <div id="gap-1750301097" class="gap-element clearfix" style="display:block; height:auto;">
                        <style>
                            #gap-1750301097 {
                                padding-top: 30px;
                            }
                        </style>
                    </div>
                    <div class="row row-small" id="row-263561329">
                        <div id="col-1141833638" class="col small-12 large-12">
                            <div class="col-inner">
                                <div id="text-3807845663" class="text">
                                    <h2>{{__('messages.course.title_giao_trinh')}}</h2>
                                    <style>
                                        #text-3807845663 {
                                            font-size: 1rem;
                                            text-align: center;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-large" id="row-1899597081">
                        <div id="col-467969544" class="col medium-6 small-12 large-6">
                            <div class="col-inner">
                                <div id="text-2369199279" class="text">
                                    {{-- <p><strong>Chương trình Tiếng Anh Tiểu học Kids sử dụng giáo trình Wonder, độc
                                        quyền từ Scots English và National Geographic Learning. Với phương châm
                                        &#8220;Đưa thế giới vào lớp học, đưa lớp học ra cuộc sống&#8221;, chương
                                        trình khơi dậy đam mê khám phá, giúp trẻ học tiếng Anh một cách tự nhiên
                                        và đầy hứng thú.</strong></p> --}}
                                    {!! $course_detail?->translation?->description !!}

                                    <style>
                                        #text-2369199279 {
                                            font-size: 1.25rem;
                                            line-height: 1.65;
                                        }
                                    </style>
                                </div>

                                <div class="row row-collapse align-middle" id="row-772325323">
                                    <div id="col-1671926644" class="col medium-4 small-12 large-4">
                                        <div class="col-inner">
                                            <div id="text-2904831980" class="text">
                                                <p style="margin: 0;"><strong>{{__('messages.course.content_doi_tac') }}:</strong></p>
                                                <style>
                                                    #text-2904831980 {
                                                        font-size: 1.25rem;
                                                    }
                                                </style>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="col-954762976" class="col medium-8 small-12 large-8">
                                        <div class="col-inner">
                                            <div class="ux-logo has-hover align-middle ux_logo inline-block"
                                                style="max-width: 100%!important; width: 162.4375px!important">
                                                <div class="ux-logo-link block image-" title=""
                                                    style="padding: 15px;">
                                                    <img decoding="async" src="{{ $course_detail?->partner?->image }}"
                                                        title="" alt="" class="ux-logo-image block"
                                                        style="height:52px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="col-870996033" class="col pb-0 medium-6 small-12 large-6">
                            <div class="col-inner">
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_242073628">
                                    <div class="img-inner dark">
                                        <img loading="lazy" decoding="async" width="709" height="377"
                                            src="{{ $course_detail?->image }}" class="attachment-original size-original"
                                            alt=""
                                            srcset="{{ $course_detail?->image }} 709w, {{ $course_detail?->image }} 300w"
                                            sizes="auto, (max-width: 709px) 100vw, 709px">
                                    </div>
                                    <style>
                                        #image_242073628 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                            <style>
                                #col-870996033>.col-inner {
                                    margin: -30px 0px 0px 0px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <style>
                    #section_1593704963 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }

                    #section_1593704963 .section-bg.bg-loaded {
                        background-image: url(/wp-content/uploads/2025/03/bg-giaottrinh.png);
                    }

                    #section_1593704963 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                    }

                    #section_1593704963 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                    }
                </style>
            </section>

            <div id="gap-1451933122" class="gap-element clearfix" style="display:block; height:auto;">
                <style>
                    #gap-1451933122 {
                        padding-top: 65px;
                    }

                    @media (min-width:550px) {
                        #gap-1451933122 {
                            padding-top: 25px;
                        }
                    }
                </style>
            </div>

            {{-- Vinh danh --}}
            <section class="section" id="section_1588026676">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <div class="section-content relative">
                    <div class="row" id="row-289735990">
                        <div id="col-17371746" class="col pb-0 small-12 large-12">
                            <div class="col-inner">
                                <div id="text-2283295321" class="text title-star">
                                    <h2 class="uppercase">{!! __('messages.vinh_danh') !!}</h2>
                                    
                                    <style>
                                        #text-2283295321 {
                                            text-align: center;
                                            color: #134c81;
                                        }

                                        #text-2283295321>* {
                                            color: #134c81;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="max-width:1440px" id="row-1163756070">
                        <div id="col-149040751" class="col hide-for-small small-12 large-12">
                            <div class="col-inner">
                                <div class="slider-wrapper relative" id="slider-1283426059">
                                    <div class="slider slider-nav-dots-dashes-spaced slider-nav-circle slider-nav-large slider-nav-dark slider-style-focus"
                                        data-flickity-options='{
                                            "cellAlign": "center",
                                            "imagesLoaded": true,
                                            "lazyLoad": 1,
                                            "freeScroll": false,
                                            "wrapAround": true,
                                            "autoPlay": false,
                                            "pauseAutoPlayOnHover" : true,
                                            "prevNextButtons": false,
                                            "contain" : true,
                                            "adaptiveHeight" : true,
                                            "dragThreshold" : 10,
                                            "percentPosition": true,
                                            "pageDots": true,
                                            "rightToLeft": false,
                                            "draggable": true,
                                            "selectedAttraction": 0.1,
                                            "parallax" : 0,
                                            "friction": 0.6        }'>
                                        @foreach ($honoring as $honor)
                                            <div class="banner has-hover banner-text banner-text-2" id="banner-2142590079">
                                                <div class="banner-inner fill">
                                                    <div class="banner-bg fill">
                                                        <div class="bg fill bg-fill " style="background-image: url({{ $honor->image ??'' }})"></div>
                                                    </div>
                                                    <div class="banner-layers container">
                                                        <div class="fill banner-link"></div>
                                                        <div id="text-box-2096605543"
                                                            class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                            <div class="text-box-content text dark">
                                                                <div class="text-inner text-center">
                                                                    <div class="video-button-wrapper"><a
                                                                            href="{{ $honor->link_youtube ??'#' }}"
                                                                            class="button open-video icon circle is-outline is-xlarge"><i
                                                                                class="icon-play"
                                                                                style="font-size:1.5em;"></i>
                                                                            </a>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <style>
                                                                #text-box-2096605543 {
                                                                    width: 60%;
                                                                }

                                                                #text-box-2096605543 .text-box-content {
                                                                    font-size: 100%;
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style>
                                                    #banner-2142590079 {
                                                        padding-top: 190px;
                                                    }

                                                    #banner-2142590079 .bg.bg-loaded {
                                                        /* background-image: url(./wp-content/uploads/2025/03/vd1.png); */
                                                    }

                                                    #banner-2142590079 .ux-shape-divider--top svg {
                                                        height: 150px;
                                                        --divider-top-width: 100%;
                                                    }

                                                    #banner-2142590079 .ux-shape-divider--bottom svg {
                                                        height: 150px;
                                                        --divider-width: 100%;
                                                    }

                                                    @media (min-width:550px) {
                                                        #banner-2142590079 {
                                                            padding-top: 421px;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="loading-spin dark large centered"></div>

                                    <style>
                                        #slider-1283426059 .flickity-slider>* {
                                            max-width: 749px !important;
                                        }
                                    </style>
                                </div>



                            </div>
                        </div>



                        <div id="col-1863071302" class="col show-for-small small-12 large-12">
                            <div class="col-inner">



                                <div class="slider-wrapper relative" id="slider-7599158">
                                    <div class="slider slider-nav-dots-dashes-spaced slider-nav-circle slider-nav-large slider-nav-dark slider-style-focus"
                                        data-flickity-options='{
                                            "cellAlign": "left",
                                            "imagesLoaded": true,
                                            "lazyLoad": 1,
                                            "freeScroll": false,
                                            "wrapAround": true,
                                            "autoPlay": false,
                                            "pauseAutoPlayOnHover" : true,
                                            "prevNextButtons": false,
                                            "contain" : true,
                                            "adaptiveHeight" : true,
                                            "dragThreshold" : 10,
                                            "percentPosition": true,
                                            "pageDots": true,
                                            "rightToLeft": false,
                                            "draggable": true,
                                            "selectedAttraction": 0.1,
                                            "parallax" : 0,
                                            "friction": 0.6        }'>


                                        @foreach ($honoring as $honor)
                                            <div class="banner has-hover banner-text banner-text-2" id="banner-1942117262">
                                                <div class="banner-inner fill">
                                                    <div class="banner-bg fill">
                                                        <div class="bg fill bg-fill " style="background-image: url({{ $honor->image ??'' }})"></div>

                                                    </div>

                                                    <div class="banner-layers container">
                                                        <div class="fill banner-link"></div>

                                                        <div id="text-box-18921647"
                                                            class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                            <div class="text-box-content text dark">

                                                                <div class="text-inner text-center">


                                                                    <div class="video-button-wrapper"><a
                                                                            href="{{ $honor->link_youtube ??'#' }}"
                                                                            class="button open-video icon circle is-outline is-xlarge"><i
                                                                                class="icon-play"
                                                                                style="font-size:1.5em;"></i></a></div>


                                                                </div>
                                                            </div>

                                                            <style>
                                                                #text-box-18921647 {
                                                                    width: 60%;
                                                                }

                                                                #text-box-18921647 .text-box-content {
                                                                    font-size: 100%;
                                                                }
                                                            </style>
                                                        </div>


                                                    </div>
                                                </div>


                                                <style>
                                                    #banner-1942117262 {
                                                        padding-top: 190px;
                                                    }

                                                    #banner-1942117262 .bg.bg-loaded {
                                                        background-image: url(./wp-content/uploads/2025/03/vd1.png);
                                                    }

                                                    #banner-1942117262 .ux-shape-divider--top svg {
                                                        height: 150px;
                                                        --divider-top-width: 100%;
                                                    }

                                                    #banner-1942117262 .ux-shape-divider--bottom svg {
                                                        height: 150px;
                                                        --divider-width: 100%;
                                                    }

                                                    @media (min-width:550px) {
                                                        #banner-1942117262 {
                                                            padding-top: 421px;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="loading-spin dark large centered"></div>

                                    <style>
                                        #slider-7599158 .flickity-slider>* {
                                            max-width: 285px !important;
                                        }
                                    </style>
                                </div>



                            </div>
                        </div>



                    </div>
                    <div id="gap-639781299" class="gap-element clearfix show-for-small" style="display:block; height:auto;">
                        <style>
                            #gap-639781299 {
                                padding-top: 30px;
                            }
                        </style>
                    </div>
                </div>


                <style>
                    #section_1588026676 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_1588026676 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                    }

                    #section_1588026676 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                    }

                    @media (min-width:550px) {
                        #section_1588026676 {
                            padding-top: 60px;
                            padding-bottom: 60px;
                        }
                    }
                </style>
            </section>
            {{-- form đăng kí --}}
            <section class="section form_register" id="section_1389280716">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                {{-- FORM ĐĂNG KÍ --}}
                <div class="section-content relative">
                    <div class="row row-large align-middle align-center" id="row-663043591">
                        <div id="col-1047917082" class="col col-form medium-6 small-12 large-6">
                            <div class="col-inner">
                                <div id="text-3872049993" class="text">
                                    <p><strong>{!! __('messages.tieu_de_form_dang_ki') !!}</strong></p>
                                    <style>
                                        #text-3872049993 {
                                            font-size: 1.3rem;
                                            line-height: 1.3;
                                            text-align: center;
                                            color: rgb(255, 255, 255);
                                        }

                                        #text-3872049993>* {
                                            color: rgb(255, 255, 255);
                                        }

                                        @media (min-width: 550px) {
                                            #text-3872049993 {
                                                font-size: 1.75rem;
                                            }
                                        }
                                    </style>
                                </div>
                                <div class="wpcf7 no-js" id="wpcf7-f6069-p6074-o1" lang="vi" dir="ltr"
                                    data-wpcf7-id="6069">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>

                                    <form id="registrationForm" class="wpcf7-form init" aria-label="Form liên hệ"
                                        novalidate="novalidate" data-status="init">
                                        @csrf
                                        <div class="form-dk">
                                            <div class="">
                                                <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                    <input type="text" name="parent_name"
                                                        placeholder="{{ __('messages.ten_ba_me') }}"
                                                        class="wpcf7-form-control" />
                                                    <span class="error-message text-danger" id="error-parent_name"></span>
                                                </span>
                                            </div>

                                            <div class="">
                                                <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                    <input type="tel" name="parent_phone"
                                                        placeholder="{{ __('messages.sdt_ba_me') }}"
                                                        class="wpcf7-form-control" />
                                                    <span class="error-message text-danger" id="error-parent_phone"></span>
                                                </span>
                                            </div>

                                            <div class="select-order">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-coso">
                                                        <select name="your-province" class="wpcf7-form-control">
                                                            <option value="">{{ __('messages.co_so_gan_nha') }}
                                                            </option>
                                                            @foreach ($province as $pr)
                                                                <option value="{{ $pr->id }}">{{ $pr->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error-message text-danger"
                                                            id="error-your-province"></span>
                                                    </span>

                                                    <span class="wpcf7-form-control-wrap" data-name="khoahoc">
                                                        <select name="course" class="wpcf7-form-control">
                                                            <option value="">{{ __('messages.khoa_hoc_phu_hop') }}
                                                            </option>
                                                            @foreach ($courseAll as $course)
                                                                <option value="{{ $course->id }}">
                                                                    {{ $course->category?->translation?->name }} -
                                                                    {{ $course->translation?->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error-message text-danger" id="error-course"></span>
                                                    </span>
                                                </p>
                                            </div>

                                            <div class="box-btn-button">
                                                <div class="btn-button">
                                                    <p><input id="submitBtn"
                                                            class="wpcf7-form-control wpcf7-submit has-spinner" type="submit"
                                                            value="{{ __('messages.nhan_tu_van') }}" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>

                        <div id="col-2101031557" class="col medium-6 small-12 large-5 small-col-first">
                            <div class="col-inner">
                                <div class="img has-hover bg-ra-42   x md-x lg-x y md-y lg-y" id="image_575115355">
                                    <div class="img-inner dark">
                                        <img loading="lazy" decoding="async" width="553" height="630"
                                            src="wp-content/uploads/2025/02/banner-world.png"
                                            class="attachment-original size-original" alt=""
                                            srcset="https://scotsenglish.edu.vn/wp-content/uploads/2025/02/banner-world.png 553w, https://scotsenglish.edu.vn/wp-content/uploads/2025/02/banner-world-263x300.png 263w"
                                            sizes="auto, (max-width: 553px) 100vw, 553px" />
                                    </div>

                                    <style>
                                        #image_575115355 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- form dki --}}
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.getElementById("submitBtn").addEventListener("click", function(event) {
                            event.preventDefault();

                            let isValid = true;

                            // Xóa thông báo lỗi cũ
                            document.querySelectorAll(".error-message").forEach(el => {
                                el.textContent = "";
                                el.classList.remove("wpcf7-not-valid-tip");
                            });

                            // Lấy dữ liệu từ form
                            let parentName = document.querySelector("input[name='parent_name']").value.trim();
                            let parentPhone = document.querySelector("input[name='parent_phone']").value.trim();
                            let province = document.querySelector("select[name='your-province']").value.trim();
                            let course = document.querySelector("select[name='course']").value.trim();

                            // Kiểm tra từng trường
                            if (!parentName) {
                                let errorEl = document.getElementById("error-parent_name");
                                errorEl.textContent = "Vui lòng nhập tên";
                                errorEl.classList.add("wpcf7-not-valid-tip");
                                isValid = false;
                            }

                            if (!parentPhone) {
                                let errorEl = document.getElementById("error-parent_phone");
                                errorEl.textContent = "Vui lòng nhập số điện thoại";
                                errorEl.classList.add("wpcf7-not-valid-tip");
                                isValid = false;
                            } else if (!/^\d{10,11}$/.test(parentPhone)) {
                                let errorEl = document.getElementById("error-parent_phone");
                                errorEl.textContent = "Số điện thoại không hợp lệ";
                                errorEl.classList.add("wpcf7-not-valid-tip");
                                isValid = false;
                            }

                            if (!province) {
                                let errorEl = document.getElementById("error-your-province");
                                errorEl.textContent = "Vui lòng chọn cơ sở gần nhà";
                                errorEl.classList.add("wpcf7-not-valid-tip");
                                isValid = false;
                            }

                            if (!course) {
                                let errorEl = document.getElementById("error-course");
                                errorEl.textContent = "Vui lòng chọn khóa học phù hợp";
                                errorEl.classList.add("wpcf7-not-valid-tip");
                                isValid = false;
                            }

                            // Nếu hợp lệ thì gửi AJAX
                            if (isValid) {
                                let formData = new FormData(document.getElementById("registrationForm"));
                                fetch("{{ route('Consulting.registration') }}", {
                                        method: "POST",
                                        body: formData,
                                        headers: {
                                            "X-CSRF-TOKEN": document.querySelector("input[name='_token']").value
                                        }
                                    })
                                    .then(response => {
                                        if (!response.ok) {
                                            throw new Error(`HTTP error! Status: ${response.status}`);
                                        }
                                        return response.json();
                                    })
                                    .then(data => {
                                        // Reset form sau khi đăng ký thành công
                                        document.getElementById("registrationForm").reset();
                                        window.location.href = "{{ route('thanks') }}";
                                    })
                                    .catch(error => {
                                        console.error("Lỗi:", error);
                                        alert("Có lỗi xảy ra, vui lòng thử lại!");
                                    });
                            }
                        });
                    });
                </script>
                <style>
                    .error-message {
                        color: red;
                        font-size: 17px;
                        padding: 5px 0;
                    }

                    #section_1389280716 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }

                    #section_1389280716 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                    }

                    #section_1389280716 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                    }

                    @media (min-width: 550px) {
                        #section_1389280716 {
                            padding-top: 60px;
                            padding-bottom: 60px;
                        }
                    }

                    .modal {
                        display: none;
                        position: fixed;
                        z-index: 999;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                    }

                    .modal-content {
                        background-color: white;
                        padding: 20px;
                        border-radius: 10px;
                        width: 300px;
                        text-align: center;
                        margin: 15% auto;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    }

                    .close {
                        color: #aaa;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                        cursor: pointer;
                    }
                </style>
            </section>

        </div>
</main>
@endsection
