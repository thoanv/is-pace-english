@php
    $units = \App\Models\Unit::where('status', \App\Enums\CommonEnum::ACTIVATED)->get();
@endphp
<section class="section dark" id="section_1626926351">
    <div class="bg section-bg fill bg-fill bg-loaded">
    </div>
    <div class="section-content relative">
        <div class="row align-middle" id="row-2170850">
            <div class="col medium-6 small-12 large-6">
                <div class="img has-hover img-radius x md-x lg-x y md-y lg-y" id="image_5252338">
                    <div class="img-inner box-shadow-2 box-shadow-2-hover dark">
                        <img src="/images/ing_tu_van.png" lass="attachment-large size-large entered lazyloaded"
                             alt="tư vấn">
                    </div>
                </div>
            </div>
            <div class="col small-12 large-6">
                <div class="col-inner">
                    <div class="home-form">
                        <div class="wpcf7 js" id="wpcf7-f10-p1168-o1">
                            <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                   aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form id="ajaxForm" action="{{route('form-register')}}" method="post"
                                  class="wpcf7-form init"
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
                                                       placeholder="Họ và tên học sinh"
                                                       value=""
                                                       type="text"
                                                       id="hoten"
                                                       name="hoten" style="margin-bottom: 0">
                                                    <small id="hotenError"
                                                        style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                                        class="text-danger error-hoten"></small>
                                        </span>
                                        </p>
                                    </div>

                                    <div class="form-item">
                                        <p><span class="wpcf7-form-control-wrap" data-name="sdt">
                                            <input size=""
                                                   class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                   aria-required="true"
                                                   aria-invalid="false"
                                                   placeholder="Số điện thoại phụ huynh"
                                                   value=""
                                                   id="sdt"
                                                   type="tel"
                                                   name="sdt" style="margin-bottom: 0">
                                                    <small id="sdtError"
                                                        style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                                        class="text-danger error-sdt"></small>
                                        </span>
                                        </p>
                                    </div>

                                    <div class="form-item">
                                        <select class="form-control form-select" id="dotuoi" name="dotuoi" style="margin-bottom: 0">
                                            <option value="">Độ tuổi con</option>
                                            <option value="Từ 3 - 5 tuổi">Từ 3 - 5 tuổi</option>
                                            <option value="Từ 6 - 11 tuổi">Từ 6 - 11 tuổi</option>
                                            <option value="Trên 11 tuổi">Trên 11 tuổi</option>
                                        </select>
                                            <small id ="dotuoiError"
                                                style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                                class="text-danger error-dotuoi"></small>
                                    </div>
                                    <div class="form-item">
                                        <select class="form-control form-select" id="coso" name="coso" style="margin-bottom: 0">
                                            <option value="">Cơ sở i-Space</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit['id']}}">{{$unit['name']}}</option>
                                            @endforeach
                                        </select>

                                        <small id ="cosoError"
                                               style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                               class="text-danger error-coso"></small>

                                    </div>
                                    <div class="form-item">
                                        <div class="row ">
                                            <div class="col small-6 large-7">
                                                <p><span class="wpcf7-form-control-wrap" data-name="captcha">
                                            <input
                                                class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text"
                                                placeholder="Mã Captcha"
                                                value=""
                                                type="text"
                                                id="captcha"
                                                name="captcha" style="margin-bottom: 0">
                                                            <small id="captchaError"
                                                                style="color: red; font-style: italic; font-weight: 500; margin-left: 13px; margin-bottom: 5px;"
                                                                class="text-danger error-captcha"></small>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="col small-6 large-5">
                                                <div class="captcha"
                                                     style="display: flex;align-items: center;">
                                                    <span class="mr-2"
                                                          style="border: 1px solid #223f81; padding: 1px; border-radius: 6px;">{!! captcha_img() !!}</span>
                                                    <a href="javascript:void(0)" class="btn-reload" style="color: #223f81;
    margin-left: 10px;" onclick="getCaptcha()"><i
                                                            class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p>
                                            <button type="button" id="btnSubmit" onclick="submitForm()"
                                                    class="form-registers button wpcf7-form-control primary lowercase btn-custom"
                                                    style="border-radius:99px">Đăng ký
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


            <style>
                #row-2170850 > .col > .col-inner {
                    padding: 30px 0px 0px 0px;
                }
            </style>
        </div>
    </div>


    <style>
        #section_1626926351 {
            padding-top: 69px;
            padding-bottom: 69px;
        }

        #section_1626926351 .section-bg.bg-loaded {
            background-image: url('/images/bg-register.png');
        }

        #section_1626926351 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
        }

        #section_1626926351 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
        }
    </style>

</section>
@push('scripts')
    <script>
        async function submitForm() {
            const btn = document.getElementById("btnSubmit");
            btn.disabled = true;
            btn.textContent = "Đang gửi...";
            let is_submit = true;
            if (!validateHoten()) {
                is_submit = false;
            }
            if (!validateSdt()) {
                is_submit = false;
            }
            if (!validateDotuoi()) {
                is_submit = false;
            }
            if (!validateCoSo()) {
                is_submit = false;
            }
            if (!validateCapCha()) {
                is_submit = false;
            }
            if(!is_submit) return;
            const form = document.getElementById("ajaxForm");
            const formData = new FormData(form);
            try {
                const response = await fetch("{{route('form-register')}}", {
                    method: "POST",
                    body: formData
                });

                const result = await  response.json(); // nếu server trả về JSON
                console.log("Kết quả từ server:", result);
                if (result.status === "error") {
                    // Có lỗi validate, hiển thị ra form
                    if (result.errors.captcha) {
                        document.getElementById("captchaError").textContent = result.errors.captcha[0];
                    }
                    getCaptcha();
                    return;
                }
                if (result.status === "success") {
                    alert('Đăng ký thông tin thành công');
                    // Nếu muốn reset form:
                    document.getElementById("ajaxForm").reset();
                    getCaptcha();
                }
            } catch (error) {
                console.error("Lỗi khi submit:", error);
            }finally {
                btn.disabled = false;
                btn.textContent = "Đăng ký"; // Trả lại text ban đầu
            }
        }
        function validateHoten() {
            const hotenInput = document.getElementById("hoten");
            const hotenError = document.getElementById("hotenError");
            const hoten = hotenInput.value.trim();

            if (hoten === "") {
                hotenError.textContent = "Vui lòng nhập họ tên";
                hotenInput.classList.add("error-hoten");
                return false;
            }

            hotenError.textContent = "";
            hotenInput.classList.remove("error-hoten");
            return true;
        }
        document.getElementById("hoten").addEventListener("input", () => {
            validateHoten();
        });
        function validateSdt() {
            const sdtInput = document.getElementById("sdt");
            const sdtError = document.getElementById("sdtError");
            let sdt = sdtInput.value.trim();

            // Regex kiểm tra số điện thoại Việt Nam
            const regex = /^(0|\+84)([3|5|7|8|9])([0-9]{8})$/;

            if (sdt === "") {
                sdtError.textContent = "Vui lòng nhập số điện thoại";
                sdtInput.classList.add("error-sdt");
                return false;
            } else if (!regex.test(sdt)) {
                sdtError.textContent = "Số điện thoại không hợp lệ";
                sdtInput.classList.add("error-sdt");
                return false;
            }

            sdtError.textContent = "";
            sdtInput.classList.remove("error-sdt");
            return true;
        }

        // Gắn sự kiện input giống validateHoten
        document.getElementById("sdt").addEventListener("input", () => {
            validateSdt();
        });
        function validateDotuoi() {
            const dotuoiSelect = document.getElementById("dotuoi");
            const dotuoiError = document.getElementById("dotuoiError");
            const dotuoi = dotuoiSelect.value;

            if (dotuoi === "") {
                dotuoiError.textContent = "Vui lòng chọn độ tuổi";
                dotuoiSelect.classList.add("error-dotuoi");
                return false;
            }

            dotuoiError.textContent = "";
            dotuoiSelect.classList.remove("error-dotuoi");
            return true;
        }

        // Gắn sự kiện onchange để validate khi user chọn
        document.getElementById("dotuoi").addEventListener("change", () => {
            validateDotuoi();
        });

        document.getElementById("sdt").addEventListener("input", () => {
            validateSdt();
        });
        function validateCoSo() {
            const cosoSelect = document.getElementById("coso");
            const cosoError = document.getElementById("cosoError");
            const coso = cosoSelect.value;

            if (coso === "") {
                cosoError.textContent = "Vui lòng chọn cơ sở";
                cosoSelect.classList.add("error-coso");
                return false;
            }

            cosoError.textContent = "";
            cosoSelect.classList.remove("error-coso");
            return true;
        }

        // Gắn sự kiện onchange để validate khi user chọn
        document.getElementById("coso").addEventListener("change", () => {
            validateCoSo();
        });
        function validateCapCha() {
            const captchaSelect = document.getElementById("captcha");
            const captchaError = document.getElementById("captchaError");
            const captcha = captchaSelect.value;

            if (captcha === "") {
                captchaError.textContent = "Vui lòng nhập mã Captcha";
                captchaSelect.classList.add("error-captcha");
                return false;
            }

            captchaError.textContent = "";
            captchaSelect.classList.remove("error-captcha");
            return true;
        }

        // Gắn sự kiện onchange để validate khi user chọn
        document.getElementById("captcha").addEventListener("change", () => {
            validateCapCha();
        });
    </script>
@endpush
