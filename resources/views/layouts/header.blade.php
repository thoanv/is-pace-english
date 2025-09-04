@php
    $info = \App\Models\General::first();
    $menu = \App\Models\Menu::first();
@endphp
<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="top-bar" class="header-top hide-for-sticky hide-for-medium">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                        <li class="header-contact-wrapper">
                            <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                                <li class="">
                                    <a target="_blank" rel="noopener noreferrer"
                                       href=""
                                       title="" class="tooltip">
                                        <i class="icon-map-pin-fill" style="font-size:16px;"></i> <span>
			     	Vị trí			     </span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="mailto:{{$info['email']}}" class="tooltip"
                                       title="{{$info['email']}}">
                                        <i class="icon-envelop" style="font-size:16px;"></i>
                                        <span>{{$info['email']}}</span>
                                    </a>
                                </li>


                                <li class="">
                                    <a href="tel:{{$info['phone']}}" class="tooltip" title="{{$info['phone']}}">
                                        <i class="icon-phone" style="font-size:16px;"></i>
                                        <span>{{$info['phone']}}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav nav-center nav-small  nav-divided">
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-right">
                    <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                    <form method="get" class="searchform" action=""
                                          role="search">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <input type="search" class="search-field mb-0" name="s" value=""
                                                       id="s" placeholder="Tìm kiếm&hellip;"/>
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
                    </ul>
                </div>


            </div>
        </div>
        <div id="masthead" class="header-main nav-dark">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">

                    <!-- Header logo -->
                    <a href="/" title="{{$info['name']}}" rel="home">
                        <img width="1020" height="1020"
                             src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201020%201020'%3E%3C/svg%3E"
                             class="header_logo header-logo" alt="{{$info['name']}}"
                             data-lazy-src="{{$info['logo']}}"/>
                        <noscript><img width="1020" height="1020" src="{{$info['logo']}}"
                                       class="header_logo header-logo"
                                       alt="{{$info['name']}}"/></noscript>
                        <img width="1020" height="1020"
                             src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201020%201020'%3E%3C/svg%3E"
                             class="header-logo-dark" alt="{{$info['name']}}"
                             data-lazy-src="{{$info['logo']}}"/>
                        <noscript><img width="1020" height="1020" src="{{$info['logo']}}"
                                       class="header-logo-dark" alt="{{$info['name']}}"/>
                        </noscript>
                    </a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <div class="header-button"><a href="#" data-open="#main-menu" data-pos="left"
                                                          data-bg="main-menu-overlay" data-color=""
                                                          class="icon primary button round is-small"
                                                          aria-label="Menu" aria-controls="main-menu"
                                                          aria-expanded="false">

                                    <i class="icon-menu"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left
            flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-line-bottom nav-uppercase">
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    @if($menu)
                        <ul class="header-nav header-nav-main nav nav-right  nav-line-bottom nav-uppercase">
                            @if($menu['content'] && !empty($menu['content']))
                                @foreach($menu['content'] as $key => $item)
                                    @if($key < 1)
                                        @php
                                            $cate = \App\Models\Category::find($item['id']);

                                        @endphp
                                        <li id="menu-item-1438{{$key}}"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1438 menu-item-design-default">
                                            <a style="text-transform: uppercase"
                                               href="{{route('page', ['cate_slug' => $cate['slug']])}}"
                                               class="nav-top-link">{{$cate['name']}}</a></li>
                                    @endif
                                @endforeach
                                <li id="menu-item-1438{{$key}}"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1438 menu-item-design-default">
                                    <a href="" class="nav-top-link" style="text-transform: uppercase">E-learning</a>
                                </li>
                                @foreach($menu['content'] as $key => $item)
                                    @if($key > 0)
                                        @php
                                            $cate = \App\Models\Category::find($item['id']);
                                        @endphp
                                        @if($cate['type'] == \App\Enums\CategoryEnum::KHOA_HOC)
                                            <li id="menu-item-1439{{$key}}"
                                                class="menu-item menu-item-type-post_type_archive menu-item-object-programme menu-item-has-children menu-item-1439 menu-item-design-default has-dropdown">
                                                <a href="javascript:void(0)"
                                                   class="nav-top-link" aria-expanded="false"
                                                   style="text-transform: uppercase"
                                                   aria-haspopup="menu">{{$cate['name']}}<i
                                                        class="icon-angle-down"></i></a>
                                                @php
                                                $courses = \App\Models\Course::where('status', \App\Enums\CommonEnum::ACTIVATED)->get();
                                                @endphp
                                                @if(count($courses))
                                                <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                                                    @foreach($courses as $v_course)
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1770"
                                                            style="text-transform: uppercase">
                                                            <a href="{{route('page', ['cate_slug' => $cate['slug'], 'slug' => $v_course['slug']])}}">{{$v_course['name']}}</a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                @endif
                                            </li>
                                        @else
                                            @if (!empty($item['children'] ?? []))
                                                <li id="menu-item-1439{{$key}}"
                                                    class="menu-item menu-item-type-post_type_archive menu-item-object-programme menu-item-has-children menu-item-1439 menu-item-design-default has-dropdown">
                                                    <a href="{{route('page', ['cate_slug' => $cate['slug']])}}"
                                                       class="nav-top-link" aria-expanded="false"
                                                       style="text-transform: uppercase"
                                                       aria-haspopup="menu">{{$cate['name']}}<i
                                                            class="icon-angle-down"></i></a>
                                                    <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                                                        @foreach($item['children'] as $v_c)
                                                            @php
                                                                $cate_c = \App\Models\Category::find($v_c['id']);
                                                            @endphp
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1770"
                                                                style="text-transform: uppercase">
                                                                <a href="{{route('page', ['cate_slug' => $cate_c['slug']])}}">{{$cate_c['name']}}</a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </li>
                                            @else
                                                <li id="menu-item-1438{{$key}}"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1438 menu-item-design-default"
                                                    style="text-transform: uppercase">
                                                    <a href="{{route('page', ['cate_slug' => $cate['slug']])}}"
                                                       class="nav-top-link">{{$cate['name']}}</a></li>
                                            @endif
                                        @endif
                                    @endif

                                @endforeach

                            @endif

                        </ul>
                    @endif
                </div>

            </div>

        </div>

        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
