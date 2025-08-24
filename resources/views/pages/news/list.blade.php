@extends('layouts.app')
@section('title', 'Tin tức')
@section('content')
    <div id="content" class="blog-wrapper single blog-single page-wrapper">
    <section class="breadcrumbs-section">
        <div class="container">
            <span>
                <span>
                    <a href="/">Trang chủ</a>
                </span>
                | <span>
                    <a href=""><strong>Tin tức và sự kiện</strong></a>
                </span>
            </span>
        </div>
    </section>
    <section class="news" style="margin-bottom: 50px;">
        <div class="container">
            <div class="news-title">
                {{$cate['name']}}
            </div>
            <div class="row hazo_list_news">
                @foreach($lists as $item)
                    @php
                        $image = $item['image'];
                        $title = $item['title'];
                    @endphp
                    <div class="col large-4 small-12 medium-6 gini_archive_template">
                        <div class="news-box box has-hover">
                            <a href="{{route('page', ['cate_slug' => $item->category?->slug, 'slug' => $item['slug']])}}">
                                <div class="box-image">
                                    <div class="image-cover image-zoom" style="padding-top: 75%;">
                                        <img width="1200" height="628"
                                             src="{{$image}}"
                                             class="attachment-full size-full wp-post-image entered lazyloaded"
                                             alt="{{$title}}" decoding="async"
                                             data-lazy-srcset="{{$image}} 1200w, {{$image}} 300w, {{$image}} 1024w"
                                             data-lazy-sizes="(max-width: 1200px) 100vw, 1200px"
                                             data-lazy-src="{{$image}}"
                                             data-ll-status="loaded" sizes="(max-width: 1200px) 100vw, 1200px"
                                             srcset="{{$image}} 1200w, {{$image}} 300w, {{$image}} 1024w">
                                        <noscript><img width="1200" height="628"
                                                       src="{{$image}}"
                                                       class="attachment-full size-full wp-post-image"
                                                       alt="{{$title}}" decoding="async"
                                                       srcset="{{$image}} 1200w, {{$image}} 300w, {{$image}} 1024w"
                                                       sizes="(max-width: 1200px) 100vw, 1200px"/></noscript>

                                    </div>
                                </div>

                                <div class="box-text">
                                    <div class="news-date">
                                        <div class="category">
                                            {{$item->category?->name}}
                                        </div>
                                        <div class="news-date-item">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.75 13.75C1.75 14.0266 1.97344 14.25 2.25 14.25H13.75C14.0266 14.25 14.25 14.0266 14.25 13.75V7.1875H1.75V13.75ZM13.75 2.875H11.125V1.875C11.125 1.80625 11.0688 1.75 11 1.75H10.125C10.0562 1.75 10 1.80625 10 1.875V2.875H6V1.875C6 1.80625 5.94375 1.75 5.875 1.75H5C4.93125 1.75 4.875 1.80625 4.875 1.875V2.875H2.25C1.97344 2.875 1.75 3.09844 1.75 3.375V6.125H14.25V3.375C14.25 3.09844 14.0266 2.875 13.75 2.875Z"
                                                    fill="#CE0E19"></path>
                                            </svg>
                                            <span>
                        {{date('d/m/Y', strtotime('date_publish'))}}		                </span>
                                        </div>
                                        <div class="postview">
                                            <i class="fa fa-eye"></i> {{$item['view']}} lượt xem
                                        </div>
                                    </div>

                                    <h3>
                                        {{$title}} </h3>
                                    <div class="desc">
                                        {{$item['description']}}
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                @endforeach

            </div>

            <ul class="page-numbers nav-pagination links text-center">
                {{$lists->links()}}
            </ul>


        </div>
    </section>
    </div>
@endsection
