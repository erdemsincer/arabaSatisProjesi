@extends('layouts.navigation')
@section('title')
    İlan Detayı
@endsection
@section('pageHeader')
    İlan Detayı
@endsection
@section('content')
    <style>
        .item>img {
            min-height: 350px;
            object-fit: cover;
        }
    </style>
    <div class="container mt-5">
        <div class="row">
            <div class="col p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid px-4">
                            <div class="row justify-content-between">
                                <div class="col-5 p-0">
                                    <h4 class="card-title"><b>Chevrolet Camaro</b></h4>
                                </div>
                                <div class="col-auto p-0">
                                    <div class="badge badge-outline-success">İlanda</div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-5 p-0">
                                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel owl-loaded owl-drag" id="owl-carousel-basic">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(-1052px, 0px, 0px); transition: all 0.25s ease 0s; width: 1843px;"><div class="owl-item cloned" style="width: 253.188px; margin-right: 10px;">
                                                    <div class="item">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/dashboard/img_6.jpg" alt="">
                                                    </div>
                                                </div><div class="owl-item cloned" style="width: 253.188px; margin-right: 10px;">
                                                    <div class="item">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/dashboard/Rectangle.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="owl-item" style="width: 253.188px; margin-right: 10px;">
                                                    <div class="item">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/dashboard/Img_5.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="owl-item" style="width: 253.188px; margin-right: 10px;">
                                                    <div class="item">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/dashboard/img_6.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="owl-item active" style="width: 253.188px; margin-right: 10px;">
                                                    <div class="item">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/dashboard/Rectangle.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="owl-item cloned" style="width: 253.188px; margin-right: 10px;">
                                                    <div class="item">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/dashboard/Img_5.jpg" alt="">
                                                    </div>
                                                </div><div class="owl-item cloned" style="width: 253.188px; margin-right: 10px;">
                                                    <div class="item">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/dashboard/img_6.jpg" alt="">
                                                    </div>
                                                </div></div>
                                        </div>

                                        <div class="owl-nav">
                                            <button type="button" role="presentation" class="owl-next"><i class="mdi mdi-chevron-right"></i></button>
                                        </div>

                                        <div class="owl-dots disabled"></div>

                                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="mdi mdi-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="mdi mdi-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div>
                                </div>
                                <div class="col-7">
                                    <div class="container-fluid">
                                        <div class="row mt-2">
                                            <div class="col">
                                                <b>Marka:</b>
                                            </div>
                                            <div class="col">
                                                <b>Model:</b>
                                            </div>
                                            <div class="col">
                                                <b>Renk:</b>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col">
                                                <b>Vites:</b>
                                            </div>
                                            <div class="col">
                                                <b>Yılı:</b>
                                            </div>
                                            <div class="col">
                                                <b>Garanti:</b>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col">
                                                <b>İlan Tarihi:</b>
                                            </div>
                                            <div class="col">
                                                <b>Yakıt:</b>
                                            </div>
                                            <div class="col">
                                                <b>Km:</b>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col">
                                                <b>Hasar Kaydı:</b>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top: 24px">
                                            <div class="col">
                                                <div class="col">
                                                    <b>Açıklama <br> </b>
                                                    <p style="color:#8c95ca;font-size: 16px" >Kötü bir kaza geçirdim, her arabaya bindiğimde kaza aklıma geliyor, o yüzden satıyorum.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-5">
                                    <div class="d-flex pt-4 pb-3">
                                        <div class="preview-list w-100">
                                            <div class="preview-item p-0 align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="preview-thumbnail">
                                                        <img src="http://127.0.0.1:8000/coronatemplate/assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                                                    </div>

                                                    <div class="d-flex preview-item-content ">
                                                        <div class="flex-grow">
                                                            <div class="d-flex d-md-block d-xl-flex justify-content-between" style="padding-top: 10px">
                                                                <h6 class="preview-subject"><b>Enes Batur</b></h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col d-flex justify-content-center">
                                                    <p class="mb-0" style="font-size: 31.5px">10.000</p> <div style="padding-top: 0.25px"><i class="mdi mdi-currency-try icon-md"></i></div>
                                                </div>

                                                <div class="d-flex pr-2">
                                                    <i class="mdi mdi-map-marker-radius align-self-start mr-1"></i>

                                                    <div class="d-flex flex-column">
                                                        <p class="float-right mb-0" style="margin-top: 1.75px">Elazığ</p>
                                                        <p class="float-right mb-0">Palu</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2 float-end p-0">
                                    <a class="btn btn-success btn-fw btn-rounded float-left ml-3 d-flex align-items-center justify-content-center float-right" style="min-width: 130px;min-height: 40px;margin-top: 28px;font-size: 16px">Sipariş Et</a>
                                </div>
                            </div>

                            <div class="row justify-content-start mt-3">
                                <label for="exampleTextarea1" class="ml-1"><b>Satıcıya Mesaj Gönderin</b></label>
                                <textarea class="form-control" placeholder="Mesajınızı buraya yazınız." style="color: rgba(255, 255, 255, 0.87)" id="exampleTextarea1" rows="5"></textarea>
                            </div>

                            <div class="row justify-content-end">
                                <button type="button" class="btn btn-primary btn-rounded btn-fw mt-3" style="min-width: 130px;min-height: 40px;margin-top: 22px"><p class="mb-0" style="font-size: 16px">Gönder</p> </button>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
