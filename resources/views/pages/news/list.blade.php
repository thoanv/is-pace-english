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
                    @include('components.item-post', ['post' => $item])
                @endforeach

            </div>

            <ul class="page-numbers nav-pagination links text-center">
                {{$lists->links()}}
            </ul>


        </div>
    </section>
    </div>
@endsection
