@php
    $image = $post['image'];
    $title = $post['title'];
    $location = $post['noi_lam_viec'];
    $route = route('page',['cate_slug' => $post->category?->slug, 'slug' => $post['slug']]);
@endphp
<div class="col small-12 large-4 recruitments">
    <div class="card-grid-2 grid-bd-16 hover-up">
        <div class="card-grid-2-image"><span class="lbl-hot full-time"><span>Đang tuyển dụng</span></span>
            <div class="image-box"><a href="{{$route}}">
                    <figure
                        style="height: 240px; background-position: 50% center; background-image: url('{{$image}}'); background-size: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;"></figure>
                </a></div>
        </div>
        <div class="card-block-info" style="min-height: 130px;"><h5 style="font-weight: 500"><a
                    href="{{$route}}">{{$title}}</a></h5>
            <div class="mt-5"><span class="card-location mr-15">{{$location}}</span></div>
            <div class="card-2-bottom mt-20">
                <div class="row">
                    <div class="col small-6 large-6 mb-2 pb-0"><a class="btn btn-tags-sm mr-5" style="cursor: auto;">{{$post['vi_tri']}}</a></div>
                    <div class="col small-6 large-6 pb-0" style="text-align: end"><span
                            class="card-text-price">{{$post['thu_nhap']}}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
