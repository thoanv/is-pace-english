<x-guest-layout>
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form method="POST" action="{{ route('login') }}" class="md-float-material form-material">
                        @csrf

                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <img class="w-50" src="/admin/images/logo.png" alt="logo.png">
                                        </div>
                                        <h3 class="text-center">Hệ thống đăng nhập</h3>
                                    </div>
                                </div>
                                @error('phone')
                                <div class="form-group form-primary">
                                    <div class="alert pl-0 mb-1 text-danger">
                                         {{ $message }}
                                    </div>
                                </div>
                                @enderror
                                <div class="form-group form-primary">
                                    <label>Email</label>
                                    <input type="text" name="email" :value="old('email')" required autofocus
                                           autocomplete="email" class="form-control"
                                           placeholder="...">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary" >
                                    <label>Mật khẩu</label>
                                    <div class="" style="position: relative">
                                        <input class="form-control password"
                                               placeholder="..."
                                               type="password"
                                               name="password"
                                               required autocomplete="current-password">
                                        <span style="position: absolute;font-size: 20px;right: 0px;padding: 0 15px;;height: 100%;top: 0;cursor: pointer;color: #aaa; justify-content: center; align-items: center;display: flex;">
                                            <i class="fa fa-eye-slash showPass-icon"></i>
                                        </span>
                                    </div>
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>

                                            </label>

                                        </div>
{{--                                        <div class="forgot-phone text-right f-right">--}}
{{--                                            <a href="#" class="text-right f-w-600"> Forgot--}}
{{--                                                Password?</a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                                class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                            Đăng nhập
                                        </button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="/"><b class="f-w-600">Back
                                                    to website</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <section>

    </section>
</x-guest-layout>
