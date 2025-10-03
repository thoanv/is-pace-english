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
                            </style>
                        </div>
                        <p>
                        </p></div>
                </div>
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
