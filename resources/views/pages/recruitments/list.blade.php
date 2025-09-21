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
                    <a href=""><strong>{{$cate['name']}}</strong></a>
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

                        @include('components.item-recruitment', ['post' => $item])
                    @endforeach

                </div>

                <ul class="page-numbers nav-pagination links text-center">
                    {{$lists->links()}}
                </ul>


            </div>
        </section>
    </div>
    <style>
        .card-grid-2.grid-bd-16 {
            background-color: #fff;
            border-radius: 16px;
        }
        .card-grid-2 {
            border-radius: 8px;
            border: 1px solid #e0e6f7;
            overflow: hidden;
            margin-bottom: 24px;
            position: relative;
            background: #f8faff;
        }
        .hover-up, .hover-up:hover {
            transition: all .25s
            cubic-bezier(.02, .01, .47, 1);
        }
        .card-grid-2 .card-grid-2-image {
            position: relative;
            padding: 10px;
        }
        .card-grid-2.grid-bd-16 .lbl-hot {
            position: absolute;
            top: 25px;
            left: 25px;
            display: flex
        ;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0 10px;
            height: 24px;
            background: #223f81;
            border-radius: 5px;
            color: #fff;
            min-width: 42px;
            font-size: 12px;
            line-height: 18px;
        }
        .card-grid-2 a {
            text-decoration: none;
            color: #223f81;
        }
        .card-grid-2 a:hover {
            color: #223f81;
        }
        .card-grid-2 .card-grid-2-image figure {
            display: block;
        }
        .card-grid-2 .card-block-info {
            display: inline-block;
            width: 100%;
            padding: 5px 10px 20px;
        }
        .card-location {
            font-size: 12px;
            color: #a0abb8;
            display: inline-block;
            padding: 0 0 0 20px;
            background: url('https://jobs.ames.edu.vn/_next/static/media/location.4b4589e6.svg') no-repeat 0 6px;
            line-height: 24px;
        }
        .btn-tags-sm {
            padding: 6px 18px;
            border-radius: 5px;
            min-width: 42px;
            font-size: 13px;
            line-height: 18px;
            background-color: rgba(81, 146, 255, .12);
        }
        .card-grid-2 .card-block-info .card-2-bottom {
            position: relative;
        }
        .mt-20 {
            margin-top: 20px !important;
        }
        .card-grid-2 .card-block-info .card-2-bottom .btn-tags-sm {
            margin-bottom: 5px;
        }
        .card-grid-2.grid-bd-16 .card-block-info .card-text-price {
            font-size: 16px;
            line-height: 26px;
        }
        .card-grid-2 .card-block-info .card-text-price {
            color:  #223f81;
            font-family: Plus Jakarta Sans, sans-serif;
            font-weight: 700;
        }
    </style>
@endsection
