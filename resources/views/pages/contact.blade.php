@extends('layouts.app')
@section('title', 'Liên hệ')
@section('content')
    <section class="section dark" id="section_1171713767">
        <div class="bg section-bg fill bg-fill bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row align-middle" id="row-1796598308">
                <div class="col medium-12 small-12 large-12">
                    <div class="col-inner">
                        <div class="text">

                            <h1 class="about-h2 text-center text-bong">Cơ sở ISPACE ENGLISH</h1>
                            <style>
                                .text > p {
                                    color: rgb(68, 68, 68);
                                }

                                .about-h2 {
                                    color: #223f81 !important;
                                    font-size: 2rem !important;
                                }
                                .box-info{
                                    display: block;
                                    box-shadow: 2px 8px 20px 0 rgba(25, 42, 70, .13) !important;
                                    margin-bottom: 15px;
                                    border: none;
                                    border-radius: 5px;
                                    padding: 16px;
                                }
                                .map iframe{
                                    width: 100%!important;
                                }
                            </style>
                        </div>
                        <p>
                        </p></div>
                </div>
            </div>

            <div class="row">
                @foreach($units as $unit)
                <div class="col medium-6 small-12 large-6">
                    <div class="col-inner  box-info">
                        <div id="text-3089750177" class="text" style="height: 36px;">
                            <p><strong style="line-height: 1.8; color: #221638; font-weight: 800;">
                                    {{$unit['name']}}
                                </strong></p>
                        </div>
                        <div id="text-2317694089" class="text address">
                            <p class="mb-0" style="padding-bottom: 10px">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{$unit['address']}}</p>
                            <p class="mb-0" style="padding-bottom: 10px">
                                <a href="tel: {{$unit['phone']}}">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                    <span> {{$unit['phone']}}</span>
                                </a>
                            </p>
                        </div>
                        <div class="map">
                           {!! $unit['map'] !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>


        <style>
            #section_1171713767 {
                padding-top: 30px;
                padding-bottom: 30px;
                background-color: rgb(255, 255, 255);
            }

            #section_1171713767 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_1171713767 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>
    </section>
    @include('components.form-register')
@endsection
