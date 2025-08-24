<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Is Pace')</title>

    <link rel="icon" href="{{asset('admin/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/feather/css/feather.css')}}">
    <!-- font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/icon/ion-icon/css/ionicons.min.css')}}">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/pages/pnotify/notify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/pages/data-table/extensions/autofill/css/autoFill.dataTables.min.css')}}">
{{--    <link rel="stylesheet" type="text/css"--}}
{{--          href="{{asset('admin/pages/data-table/extensions/autofill/css/select.dataTables.min.css')}}">--}}
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}" />
    <!-- mutil select-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/multiselect/css/multi-select.css')}}">
    <!-- Style.css -->
    @stack('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/pages/chart/radial/css/radial.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.mCustomScrollbar.css')}}">

</head>
<body>
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
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('admin.layouts.navigation-top')
        <!-- Page Content -->
        <main>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('admin.layouts.navigation-left')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>

<!-- Switch component js -->
{{--<script type="text/javascript" src="{{asset('admin/bower_components/switchery/dist/switchery.min.js')}}"></script>--}}
<!-- Tags js -->
<script type="text/javascript"
        src="{{asset('admin/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
<!-- Max-length js -->
<script type="text/javascript"
        src="{{asset('admin/bower_components/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/pages/pnotify/notify.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/sweetalert2/sweetalert2.all.min.js')}}"></script>

@stack('libraries')

<!-- Custom js -->
{{-- <script type="text/javascript" src="{{asset('admin/bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')}}"> --}}
{{-- <script type="text/javascript" src="{{asset('admin/bower_components/multiselect/js/jquery.multi-select.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('admin/js/jquery.quicksearch.js')}}"></script> --}}
<script type="text/javascript" src="{{asset('admin/pages/advance-elements/select2-custom.js')}}"></script>

<script src="{{asset('admin/js/pcoded.min.js')}}"></script>
<script src="{{asset('admin/js/vartical-layout.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Select 2 js -->
<script type="text/javascript" src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/setting.js')}}"></script>
<script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
    setTimeout(function () {
        $('.notification-submit').fadeOut('fast');
    }, 5000); // <-- time in milliseconds


</script>
<script>
    $(document).ready(function () {
        $('.js-single').each(function () {
            new Switchery(this,{ disabled: true });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#logout-btn').click(function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('logout') }}",  // Laravel route logout
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"  // Bảo vệ CSRF
                },
                success: function (response) {
                    window.location.href = "{{ url('/') }}"; // Điều hướng về trang chủ
                },
                error: function (xhr) {
                    console.error(xhr.responseText); // In lỗi nếu có
                }
            });
        });
    });
</script>
@stack('scripts')
</body>
</html>
