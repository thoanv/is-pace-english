<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="{{route('dashboard')}}">
                <img class="img-fluid" style="width: 180px;" src="/admin/images/logo_white.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container">
            <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                                        <span class="input-group-addon search-close"><i
                                                class="feather icon-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i
                                    class="feather icon-search"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li>
                    <a href="/" target="_blank">
                        <i class="feather icon-globe"></i>
                    </a>
                </li>
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/admin/images/avatar-4.jpg" class="img-radius"
                                 alt="User-Profile-Image">
                            <span>{{\Illuminate\Support\Facades\Auth::user()?->name}}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="li-link" data-url="{{ route('logout') }}">
                                <a href="#" id="logout-btn">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        document.querySelectorAll('.li-link').forEach(li => {
            li.addEventListener('click', function (e) {
                e.preventDefault(); // Ngăn link bị gọi 2 lần

                const url = this.getAttribute('data-url');

                if (url.includes("logout")) {
                    document.getElementById('logout-btn').click();
                } else {
                    window.location.href = url;
                }
            });
        });
    </script>

</nav>
