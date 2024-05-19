@extends('layouts.navigation')
@section('title')
    İlanlar
@endsection
@section('pageHeader')
    İlanlar
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>Chevrolet Camaro</b></h4>
                        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel owl-loaded owl-drag" id="owl-carousel-basic">

                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1063px, 0px, 0px); transition: all 0.25s ease 0s; width: 1862px;">

                                    <div class="owl-item" style="width: 255.863px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{asset('coronatemplate/assets/images/dashboard/Img_5.jpg')}}" alt="">
                                        </div>
                                    </div>

                                    <div class="owl-item" style="width: 255.863px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{asset('coronatemplate/assets/images/dashboard/img_6.jpg')}}" alt="">
                                        </div>
                                    </div>

                                    <div class="owl-item" style="width: 255.863px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{asset('coronatemplate/assets/images/dashboard/Rectangle.jpg')}}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="mdi mdi-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="mdi mdi-chevron-right"></i></button></div>
                            <div class="owl-dots disabled"></div>

                        </div>

                        <div class="d-flex pt-4 pb-3">
                            <div class="preview-list w-100">
                                <div class="preview-item p-0">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('coronatemplate/assets/images/faces/face12.jpg')}}" class="rounded-circle" alt="">
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject"><b>Enes Batur</b></h6>
                                                <p class="text-muted text-small">4 Saat Önce</p>
                                            </div>
                                            <p class="text-muted">Kötü bir kaza geçirdim, her arabaya bindiğimde kaza aklıma geliyor, o yüzden satıyorum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row mb-3 ">
                                <div class="col d-flex ml-1">
                                    <i class="mdi mdi-map-marker-radius align-self-start mr-1"></i>

                                    <div class="d-flex flex-column">
                                        <p class="float-right mb-0" style="margin-top: 1.75px">Elazığ</p>
                                        <p class="float-right mb-0">Palu</p>
                                    </div>

                                </div>
                                <div class="col d-flex justify-content-center">
                                    <p class="mb-0" style="margin-top: 1.75px">10.000</p> <i class="mdi mdi-currency-try"></i>
                                </div>
                                <div class="col d-flex justify-content-end mr-1">
                                    <div class="d-flex badge badge-outline-success align-items-center h-75">İlanda</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-0">
                                    <a href="{{route('detail')}}" class="btn btn-info btn-fw btn-rounded float-right mr-3 d-flex align-items-center justify-content-center" style="min-width: 130px;min-height: 40px;">Detayları İncele</a>
                                </div>
                                <div class="col p-0 pt-3 pt-xl-0">
                                    <a class="btn btn-success btn-fw btn-rounded float-left ml-3 d-flex align-items-center justify-content-center" style="min-width: 130px;min-height: 40px;">Sipariş Et</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
