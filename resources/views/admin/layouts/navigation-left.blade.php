<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        {{--        <ul class="pcoded-item pcoded-left-item">--}}
        {{--            <li class="">--}}
        {{--                <a href="{{route('dashboard')}}">--}}
        {{--                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>--}}
        {{--                    <span class="pcoded-mtext">Dashboard</span>--}}
        {{--                </a>--}}
        {{--            </li>--}}
        {{--        </ul> --}}
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{route('dashboard')}}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            {{--            @can('viewAny', \App\Models\Menu::class)--}}
            {{--                <li class="{{ Request::is('admin/menus*') ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('menus.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Menu</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
            @can('viewAny', \App\Models\Category::class)
                <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
                    <a href="{{route('categories.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                        <span class="pcoded-mtext">Danh mục</span>
                    </a>
                </li>
            @endcan
            @can('viewAny', \App\Models\Post::class)
                <li class="{{ Request::is('admin/posts*') ? 'active' : '' }}">
                    <a href="{{route('posts.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                        <span class="pcoded-mtext">Tin tức & Sự kiện</span>
                    </a>
                </li>
            @endcan
            @can('viewAny', \App\Models\Course::class)
                <li class="{{ Request::is('admin/courses*') ? 'active' : '' }}">
                    <a href="{{route('courses.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                        <span class="pcoded-mtext">Khóa học</span>
                    </a>
                </li>
            @endcan
            @can('viewAny', \App\Models\Unit::class)
                <li class="{{ Request::is('admin/units*') ? 'active' : '' }}">
                    <a href="{{route('units.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-heart"></i></span>
                        <span class="pcoded-mtext">Cơ sở</span>
                    </a>
                </li>
            @endcan
            @can('viewAny', \App\Models\Teacher::class)
                <li class="{{ Request::is('admin/teachers*') ? 'active' : '' }}">
                    <a href="{{route('teachers.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">Giáo viên</span>
                    </a>
                </li>
            @endcan
            @can('viewAny', \App\Models\Activity::class)
                <li class="{{ Request::is('admin/activities*') ? 'active' : '' }}">
                    <a href="{{route('activities.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-activity"></i></span>
                        <span class="pcoded-mtext">Hoạt động</span>
                    </a>
                </li>
            @endcan
            {{--            @can('viewAny', \App\Models\Partner::class)--}}
            {{--                <li class="{{ Request::is('admin/partners*') ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('partners.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Đối tác</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
            {{--            @can('viewAny', \App\Models\Center::class)--}}
            {{--                <li class="{{ Request::is('admin/centers*') ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('centers.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="feather icon-server"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Trung tâm</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
            {{--            @php--}}
            {{--                $feelings = auth()->user()->can('viewAny', \App\Models\Feelings\Feeling::class);--}}
            {{--                $feelingGroups = auth()->user()->can('viewAny', \App\Models\Feelings\FeelingGroup::class);--}}
            {{--            @endphp--}}
            {{--            @if($feelings || $feelingGroups)--}}
            {{--                <li class="pcoded-hasmenu {{ (Request::is('admin/feelings*') || Request::is('admin/feeling-groups*')) ? 'active pcoded-trigger' : '' }} ">--}}
            {{--                    <a href="javascript:void(0)">--}}
            {{--                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Cảm nghĩ về SE</span>--}}
            {{--                    </a>--}}
            {{--                    <ul class="pcoded-submenu">--}}
            {{--                        @if($feelings)--}}
            {{--                            <li class="{{ Request::is('admin/feelings*') ? 'active' : '' }}">--}}
            {{--                                <a href="{{route('feelings.index')}}">--}}
            {{--                                    <span class="pcoded-mtext">Danh sách</span>--}}
            {{--                                </a>--}}
            {{--                            </li>--}}
            {{--                        @endif--}}
            {{--                        @if($feelingGroups)--}}
            {{--                            <li class="{{ Request::is('admin/feeling-groups*') ? 'active' : '' }}">--}}
            {{--                                <a href="{{route('feeling-groups.index')}}">--}}
            {{--                                    <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>--}}
            {{--                                    <span class="pcoded-mtext">Nhóm</span>--}}
            {{--                                </a>--}}
            {{--                            </li>--}}
            {{--                        @endif--}}

            {{--                    </ul>--}}
            {{--                </li>--}}
            {{--            @endif--}}
            {{--            @can('viewAny', \App\Models\Post::class)--}}
            {{--                <li class="{{ Request::is('admin/posts*') ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('posts.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Tin tức</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
            {{--            @can('viewAny', \App\Models\Course::class)--}}
            {{--                <li class="{{ (Request::is('admin/courses*') || Request::is('admin/course-details*')) ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('courses.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="feather icon-tv"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Khóa học</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
            {{--            @can('viewAny', \App\Models\Honour::class)--}}
            {{--                <li class="{{ Request::is('admin/honours*') ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('honours.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="fa fa-star-half-o"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Vinh danh</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
            {{--            @can('viewAny', \App\Models\Activities::class)--}}
            {{--                <li class="{{ Request::is('admin/activities*') ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('activities.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="fa fa-graduation-cap"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Hoạt động tại cơ sở</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
            {{--            @can('viewAny', \App\Models\Consultation::class)--}}
            {{--                <li class="{{ Request::is('admin/consultation*') ? 'active' : '' }}">--}}
            {{--                    <a href="{{route('consultation.index')}}">--}}
            {{--                        <span class="pcoded-micon"><i class="fa fa-volume-control-phone"></i></span>--}}
            {{--                        <span class="pcoded-mtext">Liên hệ tư vấn</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            @endcan--}}
        </ul>
        <div class="pcoded-navigatio-lavel">Cài đặt</div>
        <ul class="pcoded-item pcoded-left-item">
            @can('update', \App\Models\General::find(1))
                <li class="{{ Request::is('admin/generals/*') ? 'active' : '' }}">
                    <a href="{{route('generals.edit', ['general' => 1])}}">
                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                        <span class="pcoded-mtext">Thông tin chung</span>
                    </a>
                </li>
            @endcan
            @can('viewAny', \App\Models\Menu::class)
                <li class="{{ Request::is('admin/menus*') ? 'active' : '' }}">
                    <a href="{{route('menus.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                        <span class="pcoded-mtext">Menu</span>
                    </a>
                </li>
            @endcan
                @can('viewAny', \App\Models\Slide::class)
                    <li class="{{ Request::is('admin/slides*') ? 'active' : '' }}">
                        <a href="{{route('slides.index')}}">
                            <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                            <span class="pcoded-mtext">Slide</span>
                        </a>
                    </li>
                @endcan
        </ul>
        <div class="pcoded-navigatio-lavel">Hệ thống</div>
        <ul class="pcoded-item pcoded-left-item">
            @can('viewAny', \App\Models\User::class)
                <li class="{{ Request::is('admin/systems/users*') ? 'active' : '' }}">
                    <a href="{{route('users.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                        <span class="pcoded-mtext">Quản trị viên</span>
                    </a>
                </li>
            @endcan
            @can('viewAny', \App\Models\Systems\Role::class)
                <li class="{{ Request::is('admin/systems/roles*') ? 'active' : '' }}">
                    <a href="{{route('roles.index')}}">
                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                        <span class="pcoded-mtext">Nhóm quyền</span>
                    </a>
                </li>
            @endcan
            {{--            <li class="{{ Request::is('admin/change-password*') ? 'active' : '' }}">--}}
            {{--                <a href="{{route('change-password')}}">--}}
            {{--                    <span class="pcoded-micon"><i class="feather icon-lock"></i></span>--}}
            {{--                    <span class="pcoded-mtext">Đổi mật khẩu</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}
        </ul>
    </div>
</nav>
