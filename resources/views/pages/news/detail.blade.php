@extends('layouts.app')
@section('title',  $post->translation->title)
@section('content')
    <div class="page-title blog-featured-title featured-title no-overflow">

        <div class="page-title-bg fill">
            <div class="title-bg fill bg-fill bg-top parallax-active"
                style="background-image: url('{{ $post->image??'' }}'); height: 739.667px; transform: translate3d(0px, 12.83px, 0px); backface-visibility: hidden;"
                data-parallax-fade="true" data-parallax="-2" data-parallax-background="" data-parallax-container=".page-title">
            </div>
            <div class="title-overlay fill" style="background-color: rgba(0,0,0,.5)"></div>
        </div>

        <div class="page-title-inner container  flex-row  dark is-large" style="min-height: 300px">
            <div class="flex-col flex-center text-center">
                <!-- <h6 class="entry-category is-xsmall">
                <a href=".//category/tin-tuc-chung/nguoi-scots/" rel="category tag">Người Scots</a>, <a href=".//category/tin-tuc-va-su-kien/" rel="category tag">Tin tức và sự kiện</a></h6> -->
                <h1 class="entry-title">{{ $post->translation?->title??'' }}</h1>
                <!-- <div class="entry-divider is-divider small"></div> -->

            </div>
        </div>
    </div>
    <main id="main" class="">

        <div id="content" class="blog-wrapper blog-single page-wrapper">
            <div class="full-ses">
                <div class="row align-center">
                    <div class="large-12 col">
                        <article id="post-6532"
                            class="post-6532 post type-post status-publish format-standard has-post-thumbnail hentry category-nguoi-scots tag-8namdonghanh tag-abcs tag-hanoi tag-scots-english tag-tienganhmanon tag-tienganhtreem">
                            <div class="article-inner ">
                                <div class="entry-content single-page">
                                    <div class="meta-custom">
                                        {{ $post->created_at?->format('d/m/Y') }}<span class="post-category"> - <a
                                                href="{{ route('page', ['category_slug' => $post->category->translation?->slug??'']) }}"
                                                class="category-link">{{ $post->category->translation?->name??'' }}</a></span>
                                    </div>
                                    <p>
                                        <span style="color: #57b89f;">
                                            <strong><em>{{ $post->translation?->description??'' }}</em></strong>
                                        </span>
                                    </p>
                                    {!! $post->translation?->content !!}
                                </div>
                                <style>
                                    .entry-content img {
                                        max-width: 100%;
                                        height: auto !important;
                                        display: block;
                                    }
                                </style>
                                <div class="post-tags">
                                    <h3>#Tags: </h3>
                                    @php
                                        // Chuyển đổi chuỗi tags thành mảng
                                        $tags = explode(',', trim($post->tags, ','));
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <a href="{{ url('tag/' . trim($tag)) }}" class="tag-link">{{ trim($tag) }}</a>
                                    @endforeach
                                </div>
                                
                                <div id="related-post" class="related-post">

                                    <h3 class="related-post-title">{{ __('messages.bai_viet_lien_quan') }}</h3>
                                    <div class="related-box">
                                       
                                        @if (!empty($relatedPosts) && count($relatedPosts) > 0)
                                        @foreach ($relatedPosts as $relatedPost)
                                            <div class="related-loop">
                                                <div class="box-image">
                                                    <a href="{{ url('news/' . $relatedPost->translation?->slug ?? '') }}">
                                                        <img width="1020" height="380"
                                                            src="{{ $relatedPost->image ?? './wp-content/uploads/2025/03/img-2-1024x381.png' }}"
                                                            class="attachment-large size-large wp-post-image" alt=""
                                                            decoding="async" loading="lazy"
                                                            srcset="{{ $relatedPost->image ?? '' }} 1024w,
                                                                    {{ $relatedPost->image ?? '' }} 300w,
                                                                    {{ $relatedPost->image ?? '' }} 768w,
                                                                    {{ $relatedPost->image ?? '' }} 1536w,
                                                                    {{ $relatedPost->image ?? '' }} 1920w"
                                                            sizes="auto, (max-width: 1020px) 100vw, 1020px">
                                                    </a>
                                                </div>
                                                <span class="post-category-loop">
                                                    <a href="{{ route('page', ['category_slug' => $relatedPost->category?->translation?->slug ?? '']) }}"
                                                        class="category-link">
                                                        {{ $relatedPost->category?->translation?->name ?? '' }}
                                                    </a>
                                                </span>
                                                <div class="related-title">
                                                    <a href="{{ route('page', [
                                                        'category_slug' => $relatedPost->category?->translation?->slug,
                                                        'content_slug' => $relatedPost->translation?->slug,
                                                    ]) }}">
                                                        {{ $relatedPost->translation->title ?? '' }}
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="text-center">{{ __('messages.chua_co_bai_viet_lien_quan') }}</p>
                                    @endif
                                    
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
