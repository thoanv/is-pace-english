<div class="card">
    <div class="card-header d-flex align-items-center">
        <h5 class="mb-0">Bộ lọc</h5>
    </div>
    <form method="get" action="{{route($route.'.index')}}">
        <div class="card-block table-border-style mx-3 pb-2">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="key">Từ khóa</label>
                        <input type="text" name="key" id="key" class="form-control" placeholder="..."
                               value="{{ request('key') }}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="admin">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">--Chọn--</option>
                            <option
                                {{ request('status') == \App\Enums\CommonEnum::ACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::ACTIVATED}}">
                                Active
                            </option>
                            <option
                                {{ request('status') == \App\Enums\CommonEnum::UNACTIVATED ? 'selected' : '' }} value="{{\App\Enums\CommonEnum::UNACTIVATED}}">
                                Unactive
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="zone">Vùng</label>
                        <select name="zone" id="zone" class="form-control">
                            <option value="">--Chọn--</option>
                            @foreach($zones as $zo)
                                <option {{ request('zone') == $zo['id'] ? 'selected' : '' }} value="{{$zo['id']}}">{{$zo->getTranslation('vi', 'name')}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm"><i class="feather icon-search"></i>
                        Search
                    </button>
                    <a href="{{route($route.'.index')}}" class="btn btn-inverse text-white btn-sm"><i
                            class="feather icon-refresh-ccw"></i> Refresh</a>
                </div>
            </div>
        </div>
    </form>
</div>
