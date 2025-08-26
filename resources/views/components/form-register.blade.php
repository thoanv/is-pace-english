@php
 $units = \App\Models\Unit::where('status', \App\Enums\CommonEnum::ACTIVATED)->get();
@endphp
<section class="section form-register">
    <div class="row">
        <div class="col small-12 large-6"></div>
        <div class="col small-12 large-6">
            <div class="col-inner">
                <div class="home-form">
                    <div class="wpcf7 js" id="wpcf7-f10-p1168-o1">
                        <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                               aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form id="ajaxForm" action="{{route('form-register')}}" method="post" class="wpcf7-form init"
                              aria-label="Form liên hệ" novalidate="novalidate" data-status="init">
                            @csrf
                            <div class="form-dk" style="background: unset!important;">
                                <h3 style="text-align: center" class="text-bong">Đăng ký tư vấn
                                </h3>
                                <div class="form-item">
                                    <p><span class="wpcf7-form-control-wrap" data-name="hoten">
                                                <input size="40"
                                                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                       aria-required="true"
                                                       aria-invalid="false"
                                                       placeholder="Họ và tên"
                                                       value=""
                                                       type="text"
                                                       name="hoten" style="margin-bottom: 0">
                                        <small style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;" class="text-danger error-hoten"></small>
                                        </span>
                                    </p>
                                </div>

                                <div class="form-item">
                                    <p><span class="wpcf7-form-control-wrap" data-name="sdt">
                                            <input size=""
                                                   class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                   aria-required="true"
                                                   aria-invalid="false"
                                                   placeholder="Số điện thoại"
                                                   value=""
                                                   type="tel"
                                                   name="sdt" style="margin-bottom: 0">
                                        <small style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;" class="text-danger error-sdt"></small>
                                        </span>
                                    </p>
                                </div>

                                <div class="form-item">
                                    <select class="form-control form-select" name="dotuoi" style="margin-bottom: 0">
                                        <option value="">Độ tuổi con</option>
                                        <option value="">Từ 3 - 5 tuổi</option>
                                        <option value="">Từ 6 - 11 tuổi</option>
                                        <option value="">Trên tuổi</option>
                                    </select>
                                    <small style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;" class="text-danger error-dotuoi"></small>
                                </div>
                                <div class="form-item">
                                    <select class="form-control form-select" name="coso" style="margin-bottom: 0">
                                        <option value="">Cơ sở i-Space</option>
                                        @foreach($units as $unit)
                                            <option value="{{$unit['id']}}">{{$unit['name']}}</option>
                                        @endforeach
                                    </select>
                                    <small style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;" class="text-danger error-coso"></small>
                                </div>
                                <div class="text-center">
                                    <p>
                                        <button type="button"
                                            class="form-registers button wpcf7-form-control has-spinner wpcf7-submit primary lowercase btn-custom"
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
    <style>
        .form-register {
            background: url('/images/bg-register.png') top right no-repeat;
            padding: 150px 30px 75px;
        }
    </style>
    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const btn = document.querySelector(".form-registers"); // nút bấm
                const form = document.getElementById("ajaxForm");      // form cha

                if (btn && form) {
                    btn.addEventListener("click", function (e) {
                        e.preventDefault(); // chặn reload trang

                        // --- validate ---
                        let isValid = true;
                        document.querySelectorAll(".text-danger").forEach(el => el.textContent = "");

                        let hoten  = form.querySelector("input[name='hoten']").value.trim();
                        let sdt    = form.querySelector("input[name='sdt']").value.trim();
                        let dotuoi = form.querySelector("select[name='dotuoi']").value;
                        let coso   = form.querySelector("select[name='coso']").value;

                        if (hoten === "") {
                            form.querySelector(".error-hoten").textContent = "Vui lòng nhập họ và tên";
                            isValid = false;
                        }

                        let phoneRegex = /^[0-9]{9,11}$/;
                        if (sdt === "") {
                            form.querySelector(".error-sdt").textContent = "Vui lòng nhập số điện thoại";
                            isValid = false;
                        } else if (!phoneRegex.test(sdt)) {
                            form.querySelector(".error-sdt").textContent = "Số điện thoại không hợp lệ (9-11 số)";
                            isValid = false;
                        }

                        if (dotuoi === "") {
                            form.querySelector(".error-dotuoi").textContent = "Vui lòng chọn độ tuổi";
                            isValid = false;
                        }

                        if (coso === "") {
                            form.querySelector(".error-coso").textContent = "Vui lòng chọn cơ sở";
                            isValid = false;
                        }

                        if (!isValid) return;

                        // --- gửi ajax bằng fetch ---
                        let formData = new FormData(form);

                        fetch(form.action, {
                            method: "POST",
                            body: formData,
                            headers: {
                                "X-Requested-With": "XMLHttpRequest"
                            }
                        })
                            .then(res => res.json())
                            .then(data => {
                                document.getElementById("formMessage").innerHTML =
                                    `<div class="alert alert-success">Đăng ký thành công!</div>`;
                                form.reset();
                            })
                            .catch(err => {
                                document.getElementById("formMessage").innerHTML =
                                    `<div class="alert alert-danger">Có lỗi xảy ra, vui lòng thử lại.</div>`;
                            });
                    });
                }
            });

        </script>

    @endpush
</section>
