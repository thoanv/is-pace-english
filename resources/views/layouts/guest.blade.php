<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="#">
    <meta name="keywords"
          content="Hệ thống đăng nhập">
    <meta name="author" content="#">

    <title>Hệ thống đăng nhập</title>

    <link rel="icon" href="{{asset('admin/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    {{-- font awesome --}}
    <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Scripts -->
</head>
<body class="fix-menu">
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
{{ $slot }}
<script type="text/javascript" src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/common-pages.js')}}"></script>
<script>
    var show = $('.showPass-icon');
    var inputpassword = $('.password');
    show.on('click', function () {
        if (inputpassword.attr('type') === 'text') {
            inputpassword.attr('type', 'password');
            show.removeClass("fa-eye");
            show.addClass("fa-eye-slash");
        } else {
            show.addClass("fa-eye");
            show.removeClass("fa-eye-slash");
            inputpassword.attr('type', 'text');
        }
    })

</script>
</body>
</html>
