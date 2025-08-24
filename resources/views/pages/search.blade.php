@extends('layouts.app')
@section('title', 'Tin tức')
@section('content')
    <main id="main" class="" style="min-height: 300px">

        <div id="content" class="blog-wrapper blog-archive page-wrapper">
            @php
                use App\Models\Category;
                $category_parent = Category::where('parent_id', null)
                ->where('type', 'news')
                ->first();
            @endphp
            <div class="full-ses">
                <div class="row align-center">
                    <div class="large-12 col">
                        <style>
                            .parent-term a {
                                display: inline-block;
                                padding: 8px 12px;
                                text-decoration: none;
                                color: #333;
                                transition: all 0.3s;
                                border-bottom: 2px solid transparent;
                            }

                            .parent-term a:hover {
                                color: #134a81;
                                border-bottom: 2px solid #134a81;
                            }

                            .parent-term a.active {
                                color: #134a81;
                                font-weight: bold;
                                border-bottom: 2px solid #134a81;
                            }
                        </style>
                        {{-- list tin tức --}}
                        <div id="row-1896280927"
                             class="row cus-blog large-columns-3 medium-columns- small-columns-2 row-large row-masonry"
                             data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'
                             style="margin-top: 20px">
                            @foreach ($listPosts as $post)
                                <div class="col post-item">
                                    <div class="col-inner">
                                        <div class="plain">
                                            <div class="box box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:300px;">
                                                        <a
                                                            href="{{ route('page', ['category_slug' => $post->category?->translation?->slug, 'content_slug' => $post->translation?->slug]) }}">
                                                            <img width="300" height="112"
                                                                 src="{{ $post->image ?? '' }}"
                                                                 class="attachment-medium size-medium wp-post-image"
                                                                 alt="" decoding="async" loading="lazy"
                                                                 srcset="{{ $post->image }} 300w,
                                                                 {{ $post->image ?? '' }} 1024w,
                                                                  {{ $post->image ?? '' }} 768w,
                                                                   {{ $post->image ?? '' }} 1536w,
                                                                    {{ $post->image ?? '' }} 1920w"
                                                                 sizes="auto, (max-width: 300px) 100vw, 300px"></a>
                                                    </div>
                                                </div>
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">
                                                        <div class="tern-loop"><a
                                                                href="{{ route('page', ['category_slug' => $post->category?->translation?->slug]) }}"
                                                                title="{{ $post->category?->translation?->name }}">{{ $post->category?->translation?->name }}</a>
                                                        </div>
                                                        <div class="post-title is-large ">
                                                            @if ($post->translation?->title == null)
                                                                <i>No translation available</i>
                                                            @else
                                                                <a
                                                                    href="{{ route('page', ['category_slug' => $post->category?->translation?->slug, 'content_slug' => $post->translation?->slug]) }}">
                                                                    {{ $post->translation?->title }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if($listPosts->count() < 1)
                                <p class="text-center fw-bold" style="font-weight: bold;font-size: x-large;">Nothing
                                    Found</p>
                                <div class="text-center"><span>Sorry, but nothing matched your search terms. Please try again with some different keywords.</span>
                                </div>

                            @endif
                        </div>
                        {{-- phân trang tin tức --}}
                        <div class="paginate">
                            {{ $listPosts->links() }}
                        </div>
                        <style>
                            .pagination {
                                display: flex;
                                justify-content: center;
                                margin-top: 20px;
                            }

                            .pagination .page-item {
                                list-style: none;
                                margin: 0 5px;
                            }

                            .pagination .page-link {
                                padding: 10px 14px;
                                border-radius: 13px !important;;
                                text-decoration: none;
                                transition: 0.3s;
                                font-weight: bold;
                                font-size: 18px;
                            }

                            .pagination .page-link:hover {
                                background-color: #57b89f !important;
                                color: #fff;
                            }

                            .pagination .active .page-link {
                                background-color: #57b89f !important;
                                color: #fff !important;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
