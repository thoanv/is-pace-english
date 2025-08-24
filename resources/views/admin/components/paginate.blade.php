<div class="row align-items-center" style="padding: 15px 0">
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="dataTables_info" id="jsource-table_info"
             role="status" aria-live="polite">Tổng
            số {{$lists->total()}} bản ghi
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers"
             id="jsource-table_paginate">
            {{$lists->links()}}
        </div>
    </div>
</div>
