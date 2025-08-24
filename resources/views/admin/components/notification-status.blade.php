@if (session('success'))
    <div class="row notification-submit">
        <div class="col-lg-12">
            <div class="alert alert-success border-success  mb-0 mt-1">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="row notification-submit">
        <div class="col-lg-12">
            <div class="alert alert-danger border-danger mb-0 mt-1">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif
