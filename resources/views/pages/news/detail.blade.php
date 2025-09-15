@extends('layouts.app')
@section('title',  $post['title'])
@push('libraries')
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript'
            src="{{asset('wp-content/plugins/luckywp-table-of-contents/front/assets/main.min.js?ver=2.1.14')}}"
            id='lwptoc-main-js' defer></script>
@endpush
<style>.lwptoc .lwptoc_i {
        border: 1px solid #000000;
    }</style>
@php
    $route = route('page', ['cate_slug'=> $post->category?->slug, 'slug' => $post['slug']]);
@endphp
@section('content')
    <div id="content" class="blog-wrapper blog-single page-wrapper">
        <section class="breadcrumbs-section">
            <div class="container">
                <span><span><a href="/">Trang chủ</a></span> | <span>
                        <a
                            href="{{route('page', ['cate_slug'=> $post->category?->slug])}}">{{$post->category?->name}}</a></span> | <span
                        class="breadcrumb_last" aria-current="page">{{ $post['title'] }}</span></span>
            </div>
        </section>

        <div class="row">
            <div class="col large-9">
                <div class="content program-detail-content">
                    <h1 style="margin-bottom: 0" title="{{ $post['title'] }}">
                        {{ $post['title'] }}</h1>

                    <div class="news-date">
                        <div class="category">
                            {{$post->category?->name}}
                        </div>
                        <div class="news-date-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.75 13.75C1.75 14.0266 1.97344 14.25 2.25 14.25H13.75C14.0266 14.25 14.25 14.0266 14.25 13.75V7.1875H1.75V13.75ZM13.75 2.875H11.125V1.875C11.125 1.80625 11.0688 1.75 11 1.75H10.125C10.0562 1.75 10 1.80625 10 1.875V2.875H6V1.875C6 1.80625 5.94375 1.75 5.875 1.75H5C4.93125 1.75 4.875 1.80625 4.875 1.875V2.875H2.25C1.97344 2.875 1.75 3.09844 1.75 3.375V6.125H14.25V3.375C14.25 3.09844 14.0266 2.875 13.75 2.875Z"
                                    fill="#CE0E19"></path>
                            </svg>
                            <span>
		                    {{date('d/m/Y', strtotime($post['date_publish']))}}		                </span>
                        </div>
                        <div class="postview">
                            <i class="fa fa-eye"></i> {{$post['view']}} lượt xem bài viết
                        </div>
                    </div>

                    <div class="entry-content">

                        <div class="lwptoc program-detail-content lwptoc-baseItems lwptoc-light lwptoc-notInherit"
                             data-smooth-scroll="1" data-smooth-scroll-offset="100" data-lwptoc-initialized="1">
                            <div class="lwptoc_i">
                                <div class="lwptoc_header">
                                    <b class="lwptoc_title">Mục lục</b> <span class="lwptoc_toggle">
                                    <a href="#" class="lwptoc_toggle_label" data-label="hiện">ẩn</a>
                                    </span>
                                </div>
                                {!! $toc !!}
                            </div>
                        </div>

                        <p><em>&nbsp;</em></p>
                        {!! $content !!}
                    </div>
                    <div class="share">
                        <p> Chia sẻ: </p>
                        <div class="social-icons share-icons share-row relative icon-style-fill">
                            <a
                                href="whatsapp://send?text=KH%C3%93A%20H%E1%BB%8CC%20IELTS%20SUMMER%20FAST%20TRACK%202025%3A%20T%C4%82NG%20T%E1%BB%90C%20%C4%90%E1%BB%82%20B%E1%BB%A8T%20PH%C3%81 - https://oea-vietnam.com/khoa-hoc-ielts-summer-fast-track-2025-tang-toc-de-but-pha/"
                                data-action="share/whatsapp/share"
                                class="icon primary button circle tooltip whatsapp show-for-medium"
                                title="Chia sẻ trên WhatApp" aria-label="Chia sẻ trên WhatApp">
                                <i class="icon-whatsapp" style="top: 6px"></i></a>
                            <a
                                href="https://www.facebook.com/sharer.php?u={{$route}}"
                                data-label="Facebook"
                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                rel="noopener noreferrer nofollow" target="_blank"
                                class="icon primary button circle tooltip facebook" title="Chia sẻ trên Facebook"
                                aria-label="Chia sẻ trên Facebook">
                                <i class="icon-facebook" style="top: 6px"></i>
                            </a>
                            <a
                                href="https://twitter.com/share?url={{$route}}"
                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                rel="noopener noreferrer nofollow" target="_blank"
                                class="icon primary button circle tooltip twitter" title="Chia sẻ trên Twitter"
                                aria-label="Chia sẻ trên Twitter">
                                <i class="icon-twitter" style="top: 6px"></i>
                            </a><a
                                href="mailto:enteryour@addresshere.com?subject=KH%C3%93A%20H%E1%BB%8CC%20IELTS%20SUMMER%20FAST%20TRACK%202025%3A%20T%C4%82NG%20T%E1%BB%90C%20%C4%90%E1%BB%82%20B%E1%BB%A8T%20PH%C3%81&amp;body=Check%20this%20out:%20https://oea-vietnam.com/khoa-hoc-ielts-summer-fast-track-2025-tang-toc-de-but-pha/"
                                rel="nofollow" class="icon primary button circle tooltip email"
                                title="Gửi email đến bạn bè" aria-label="Gửi email đến bạn bè">
                                <i class="icon-envelop" style="top: 6px"></i>
                            </a>
                            <a
                                href="https://pinterest.com/pin/create/button/?url={{$route}} ;media={{$post['image']}}&amp;description=KH%C3%93A%20H%E1%BB%8CC%20IELTS%20SUMMER%20FAST%20TRACK%202025%3A%20T%C4%82NG%20T%E1%BB%90C%20%C4%90%E1%BB%82%20B%E1%BB%A8T%20PH%C3%81"
                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                rel="noopener noreferrer nofollow" target="_blank"
                                class="icon primary button circle tooltip pinterest" title="Ghim Pinterest"
                                aria-label="Ghim Pinterest">
                                <i class="icon-pinterest" style="top: 6px"></i>
                            </a>
                            <a
                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{$route}}&amp;title=KH%C3%93A%20H%E1%BB%8CC%20IELTS%20SUMMER%20FAST%20TRACK%202025%3A%20T%C4%82NG%20T%E1%BB%90C%20%C4%90%E1%BB%82%20B%E1%BB%A8T%20PH%C3%81"
                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                rel="noopener noreferrer nofollow" target="_blank"
                                class="icon primary button circle tooltip linkedin" title="Chia sẻ trên LinkedIn"
                                aria-label="Chia sẻ trên LinkedIn">
                                <i class="icon-linkedin" style="top: 6px"></i>
                            </a>
                        </div>
                    </div>

                    <div id="comments" class="comments-area">

{{--                        <span class="title_comment">Bình luận của bạn</span>--}}
{{--                        <div id="formcmmaxweb">--}}

{{--                            <div class="cancel-comment-reply">--}}
{{--                                <small><a rel="nofollow" id="cancel-comment-reply-link"--}}
{{--                                          href="/khoa-hoc-ielts-summer-fast-track-2025-tang-toc-de-but-pha/#respond"--}}
{{--                                          style="display:none;">Nhấp chuột vào đây để hủy trả lời.</a></small>--}}
{{--                            </div>--}}


{{--                            <form action="http://oea-vietnam.com/wp-comments-post.php" method="post" id="commentform"--}}
{{--                                  novalidate="novalidate">--}}


{{--                                <p>--}}
{{--                                    <textarea name="comment" id="comment" cols="50" rows="4" tabindex="4"--}}
{{--                                              placeholder="Hãy viết bình luận của bạn tại đây"></textarea>--}}
{{--                                </p>--}}
{{--                                <div class="name-email">--}}


{{--                                    <p>--}}
{{--                                        <input placeholder="Họ và tên" type="text" name="author" id="author" value=""--}}
{{--                                               tabindex="1" aria-required="true">--}}
{{--                                    </p>--}}
{{--                                    <p>--}}
{{--                                        <input placeholder="Email" type="text" name="email" id="email" value=""--}}
{{--                                               size="22" tabindex="2" aria-required="true">--}}
{{--                                    </p>--}}


{{--                                    <p><input name="submit" type="submit" id="submit" tabindex="5" value="Gửi">--}}
{{--                                        <input type="hidden" name="comment_post_ID" value="8717" id="comment_post_ID">--}}
{{--                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">--}}
{{--                                    </p>--}}

{{--                                </div>--}}


{{--                            </form>--}}

{{--                        </div>--}}
                    </div><!-- #comments .comments-area -->            </div>

            </div>

            <div class="col post-sidebar large-3">
                <div class="is-sticky-column">
                    <div class="is-sticky-column__inner">
                        <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
				<span class="widget-title ">
					<span>
						Tin bài mới nhất					</span>
				</span>
                            <div class="is-divider small">
                            </div>
                            <ul>

                                @foreach($listNewPosts as $item)
                                    <li class="recent-blog-posts-li">
                                        <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                            <div class="flex-col mr-half">
                                                <div class="badge post-date  badge-outline">
                                                    <div class="badge-inner bg-fill"
                                                         style="background: url('{{$item['image']}}'); border:0;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-col flex-grow">
                                                <a href="{{route('page', ['cate_slug' => $item->category?->slug, 'slug' => $item['slug']])}}"
                                                   title="{{$item['title']}}">
                                                    {{$item['title']}} </a>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach

                            </ul>
                        </aside>


                        <div class="register-sidebar text-center">
                            <div class="register-sidebar-title">
                                Đăng ký
                            </div>

                            <div class="wpcf7 js" id="wpcf7-f10-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                       aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="/khoa-hoc-ielts-summer-fast-track-2025-tang-toc-de-but-pha/#wpcf7-f10-o1"
                                      method="post" class="wpcf7-form init" aria-label="Form liên hệ"
                                      novalidate="novalidate" data-status="init">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="10">
                                        <input type="hidden" name="_wpcf7_version" value="5.9.3">
                                        <input type="hidden" name="_wpcf7_locale" value="vi">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f10-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                        <input type="hidden" name="_wpcf7_lang" value="vi">
                                        <input type="hidden" name="_wpcf7_recaptcha_response"
                                               value="0cAFcWeA7bCRkt-8bUR3q8jaMEuGkrWtSti4IfVFOw7mxM6aZe4bfAQXxuaWMi_tNU0F-ttFeu0lSYXZTilWz9tziIFNvRzHeBoAIJG7qF_ts41YU312AqYC9e4q7geF9LOr6KKngl6Vv6a-hvAedtFG-j5U40rkfNZmowVQpdH2M0xh9tD_slFnDrIW-wGR-SHG5B2eU4z_47bZlG1Fd5gHuHLG8oGduxIU2szC1ljUqQe_Q-CvLSGv1toXSpOOUOdVcVUjCQ7ZLoQ7el7Utupj3RehS3fpKgIgo1bHiV1j_h1nSHoASPNa6zWGQpL3pqfcq49JdkGeOIi14eRMlLb3TfA8SBkwg_kGkEMLm5YS3RGqM8B_wybkq4M73cO_pBhtmTCfy_VmEc-La6GRoZeLhtK1sJzCsuNuVkeAhT0seklkHE2O2hUHewn64tkJmAzlf2dFiwEydWhSauFEzVUGxmZsfjQfVKQOjFoYkB74Lmay7XtHqhi91Kuntz79XvzUEFq3Ibqg_VwWGFZbKyO3CKC8LNujGLyMrV4DH9B9_w75EOzb8WSJVTFxyFRzWoGDQbgI5IITf7tHTq-JKOz_AacMMmm_BVoixr1AoqBjN-wp2jbaGPPTXF1abtIBwwp8HAop2KROBqwsAp7VL5pfCYMhFZWgVC3oKcCroScnKRGji6rnKs8MKLhIR4BB3jIX7Ywz-q85oXGyDLlojpW4liqbDgNEZkwMGNlCnYmGGQ7ErvOVKyBwmrLdow85pB1x26CPsAr-KbKhqbXlpnZHn_hyTo2jsTK6Eqf-4i7WOnUuDPX23vKY1W39CIjyQ4vBODDwAUNpGU5CIUKEaap3Mh-5goiNZDoB58lT8iEwKjAPBFIIAvVZleO8H0Am9qACVp4HIvEfdw3KMjktdbpORw70vpO8SkMmyqeAyU-IPWYyU-8-LmeyFsVCgJL-egoAThBaZvsslBctE0Z7Hf257BX97_X7Q7DveAV6AttP3Wb-_rahwng9EqqqoTgxrsCcXhbvkH7zrIvJBiyrSpCSrW6NDdpxRtGqLpv4StMaCGqQc43yJ5-LKoMUKhz0ivX_m2w-31GnY_99O0XBDuL8GIi0my3q6mapQNOoq8ANT-0Dasyr347dfnNB2p9zA4OgXbp4ZRFl1fbwnXezk-eRyvyiU6czQM63OKjCmv62tlh3LpZY-whoX8Ax87cwI6SEaeiy0pWcpJ458S2DMlx164B3YmM15hmz6oGqOkmGPh9updvBRENqyFUxc76f3gsP-da9rvNI9sq81QlMqVzxO4aaXUHLC5p_D2h2otb557qF-GdB4jGI891YAm9BxmVL1AbLwMVoKeUPjJNitML0bNnGNN3yHOCdgm4z3igYC3Rmuge1modeSD4U4cG9IHl6OR-41enYEx44kbEzEP8-5tINs4TcT9Svm5A_lYqT7BEeVlKie2WJo2tjoVdBTsXhT1S4VIMPyqV8_Rd2VRUOixso8qL_BbUO5JA4cBIIthbx18ONhzEfQICCaeY0UbrX7N2On5xw_0rK9t4iC67Oe3HJBwXlHiUeOdh-FwAncv7gB-MQsTrDU">
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
        </div>


        <div class="container related-wrap">

            <h3 class="section-title section-title-normal" style="margin: 40px 0;"><b></b><span
                    class="section-title-main">Bài viết liên quan</span><b></b></h3>


            <div class="box-blog-custom">


                <div class="row large-columns-4 medium-columns-3 small-columns-1">
                    @foreach($listPostSameCategories as $val)
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="{{route('page', ['cate_slug' => $val->category?->slug, 'slug' => $val['slug']])}}"
                                   class="plain">
                                    <div class="box box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:70%;">
                                                <img width="300" height="225"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20225'%3E%3C/svg%3E"
                                                     class="attachment-medium size-medium wp-post-image"
                                                     alt="{{$val['title']}}" decoding="async"
                                                     data-lazy-srcset="{{$val['image']}} 300w, {{$val['image']}} 1024w"
                                                     data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                     data-lazy-src="{{$val['image']}}">
                                                <noscript><img width="300" height="225"
                                                               src="{{$val['image']}}"
                                                               class="attachment-medium size-medium wp-post-image"
                                                               alt="{{$val['title']}}"
                                                               decoding="async"
                                                               srcset="{{$val['image']}} 300w, {{$val['image']}} 1024w"
                                                               sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                                            </div>
                                        </div>
                                        <div class="box-text text-left" style="height: 235.219px;">
                                            <div class="box-text-inner blog-post-inner">
                                                <div class="box-meta">
                                                    <span class="cat">
                                                       {{$val->category?->name}}
                                                    </span>

                                                    <span>
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                            d="M1.75 13.75C1.75 14.0266 1.97344 14.25 2.25 14.25H13.75C14.0266 14.25 14.25 14.0266 14.25 13.75V7.1875H1.75V13.75ZM13.75 2.875H11.125V1.875C11.125 1.80625 11.0688 1.75 11 1.75H10.125C10.0562 1.75 10 1.80625 10 1.875V2.875H6V1.875C6 1.80625 5.94375 1.75 5.875 1.75H5C4.93125 1.75 4.875 1.80625 4.875 1.875V2.875H2.25C1.97344 2.875 1.75 3.09844 1.75 3.375V6.125H14.25V3.375C14.25 3.09844 14.0266 2.875 13.75 2.875Z"
                                                            fill="#7E7E7E"></path>
                                                        </svg>

                                                    {{date('d/m/Y', strtotime($val['date_publish']))}}
                                                    </span>
                                                </div>

                                                <h5 class="post-title is-large ">{{$val['title']}}</h5>
                                                <div class="post-meta is-small op-8">{{$val->getCreatedAtVietnameseAttribute()}}</div>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">{{$val['description']}} </p>


                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
