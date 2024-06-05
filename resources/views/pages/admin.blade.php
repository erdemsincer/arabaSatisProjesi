@extends('layouts.app-layout')
@section('title')
    Admin
@endsection
@section('pageHeader')
    Admin
@endsection
@section('brand')
    <li><h1 class="ml-5 mb-0">Arabam</h1></li>
@endsection
@section('links')
    <div class="d-flex flex-row align-items-center mr-4">
        <a href=""><h4 class="d-flex mt-1 mr-4 mb-0">Marka Ekle</h4></a>
        <a href=""><h4 class="d-flex mt-1 mb-0">Model Ekle</h4></a>
    </div>
@endsection
@section('navbar')
    <style>
        .navbar{
            left: 0px;
        }
        a>h4{
            font-size: 20px
        }
    </style>
    @include('layouts.navigation')

@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Bilgiler</h3>
                        <p class="card-title"><b>Ad:</b></p>
                        <p class="card-title"><b>Soyad:</b></p>
                        <p class="card-title"><b>E-Posta Adresi:</b></p>
                        <p class="card-title"><b>Hesabın Oluşturulma Tarihi:</b></p>
                    </div>

                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h3 class="card-title mb-1">Kullanıcılar</h3>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list">
                                    <div class="preview-item border-bottom align-items-center">
                                        <div class="preview-thumbnail" style="width: 90px;height: 80px;">
                                            <img class="w-100 h-100" src="{{asset('coronatemplate/assets/images/car.jpg')}}" style="object-fit: cover;border: 2px solid #191c24;border-radius: 50% !important;" alt="">
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow " >
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Mehmet Ali</h6>
                                                <p class="text-muted mb-0">mehmet@gmail.com</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <button type="button" class="btn btn-inverse-info btn-fw btn-rounded mr-2" style="font-size: 16px;min-width: 130px;min-height: 40px">Detayları Gör</button>
                                                <button type="button" class="btn btn-inverse-danger btn-fw btn-rounded" style="font-size: 16px;min-width: 130px;min-height: 40px">Sil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Sitedeki İlanlar</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th> Araba </th>
                                    <th> İlana Çıkış Tarihi </th>
                                    <th> Fiyatı </th>
                                    <th> Açıklama </th>
                                    <th> Durumu </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="{{asset('coronatemplate/assets/images/faces/face1.jpg')}}" alt="image" />
                                        <span class="pl-2">Golf</span>
                                    </td>
                                    <td> 14.08.2021 </td>
                                    <td> $14,500 </td>
                                    <td>
                                        Oha çok iyi araba
                                    </td>
                                    <td>
                                        <div class="badge badge-outline-success">İlanda</div>
                                    </td>
                                    <td style="width: 13%" class="p-0">
                                        <button type="button" class="btn btn-inverse-info btn-fw btn-rounded mr-2" style="font-size: 16px;min-width: 130px;min-height: 40px">Detayları Gör</button>
                                    </td>
                                    <td style="width: 13%" class="p-0">
                                        <button type="button" class="btn btn-inverse-danger btn-fw btn-rounded" style="font-size: 16px;min-width: 130px;min-height: 40px">İlandan Kaldır</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->
@endsection
