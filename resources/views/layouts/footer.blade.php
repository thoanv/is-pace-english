@php
    use App\Models\Course;
    use App\Models\Unit;
    use App\Enums\CommonEnum;
    use App\Models\General;
    $info = General::first();
    $courses = Course::where('status', CommonEnum::ACTIVATED)->take(5)->get();
    $units = Unit::where('status', CommonEnum::ACTIVATED)->take(5)->get()
@endphp
<div style="background: #FFF">
    <footer id="footer" class="footer-wrapper">
        <section class="section dark" id="section_2098355080">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row" id="row-813072494">
                    <div id="col-1795204613" class="col small-12 large-12">
                        <div class="col-inner">
                            <div id="text-2496347881" class="text">
                                <img class="alignnone wp-image-1175"
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20161%20161'%3E%3C/svg%3E"
                                     alt="" width="161" height="161"
                                     data-lazy-src="{{$info['logo']}}"/>
                                <noscript><img class="alignnone wp-image-1175" src="{{$info['logo']}}"
                                               alt="" width="161" height="161"/></noscript>

                                <style>
                                    #text-2496347881 {
                                        text-align: center;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="row-1129464619">
                    <div id="col-1529524144" class="col medium-12 small-12 large-4">
                        <div class="col-inner">
                            <div id="text-2367817872" class="text footer-title">


                                <p style="text-align: left; color: #FFF">{{$info['name']}}</p>

                                <style>
                                    #text-2367817872 {
                                        text-align: center;
                                    }
                                </style>
                            </div>

                            <div id="text-1616233076" class="text">


                                <div style="text-align: justify;">
                                    {!! $info['come_to_us'] !!}
                                </div>


                                <style>
                                    #text-1616233076 {
                                        text-align: center;
                                    }
                                </style>
                            </div>


                        </div>
                    </div>
                    <div id="col-208834609" class="col medium-12 small-12 large-8">
                        <div class="col-inner">
                            <div class="row" id="row-1473871751">
                                <div id="col-1629847113" class="col medium-4 small-12 large-4">
                                    <div class="col-inner">
                                        <div id="text-2546593823" class="text footer-title">
                                            <p><strong>HỌC TIẾNG ANH</strong></p>
                                        </div>

                                        <ul>
                                            @foreach($courses as $item)
                                                <li><a href="{{route('page', ['cate_slug' => $item->category?->slug, 'slug' => $item['slug']])}}">{{$item['name']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div id="col-231212081" class="col medium-4 small-12 large-4">
                                    @foreach($units as $key =>  $unit)
                                        <div class="col-inner">
                                            <div id="text-3089750177" class="text footer-title">
                                                <p><strong>Cơ sở {{$key+1}}: {{$unit['name']}}</strong></p>
                                            </div>
                                            <div id="text-2317694089" class="text address ft-icon">


                                                <p style="color: #FFF">{{$unit['address']}}</p>

                                            </div>

                                            <div id="text-614833993" class="text phone ft-icon">


                                                <p style="color: #FFF"><a href="tel:{{$unit['phone']}}">{{$unit['phone']}}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>


                                <div id="col-1351091402" class="col medium-4 small-12 large-4">
                                    <div class="col-inner">


                                        <div id="text-1658597944" class="text footer-title">


                                            <p><strong>Follow Us</strong></p>

                                            <style>
                                                #text-1658597944 {
                                                    line-height: 2;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>


                </div>
                <div class="row" id="row-1861338212">


                    <div id="col-1671181050" class="col padding-bot small-12 large-12">
                        <div class="col-inner">


                            <div class="is-divider divider clearfix"
                                 style="max-width:100%;height:1px;background-color:rgb(251, 251, 251);"></div>
                            <div id="text-1506926233" class="text mg0">
                                Copyright {{date('Y')}} © <strong><a href="/">iSPace English</a></strong>
                                <style>
                                    #text-1506926233 {
                                        text-align: center;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_2098355080 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: rgba(31, 62, 153, 0);
                }

                #section_2098355080 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_2098355080 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>

        <div class="absolute-footer dark medium-text-center small-text-center">
            <div class="container clearfix">


                <div class="footer-primary pull-left">
                    <div class="copyright-footer">
                        Copyright {{date('Y')}} © <strong>iSpace English</strong></div>
                </div>
            </div>
        </div>

    </footer>

</div>
