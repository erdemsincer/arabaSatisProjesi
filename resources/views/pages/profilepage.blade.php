@extends('layouts.app-layout')
@section('title')
    Profil
@endsection
@section('pageHeader')
    Profil
@endsection
@section('navbar')
    @include('layouts.navigation')
@endsection
@section('sidebar')
    @include('layouts.sidebar')
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Kişisel Bilgiler</h3>
                        <p class="card-title"><b>Adınız:</b></p>
                        <p class="card-title"><b>Soyadınız:</b></p>
                        <p class="card-title"><b>E-Posta Adresiniz:</b></p>
                        <p class="card-title"><b>Hesap Türü:</b></p>
                        <p class="card-title"><b>Hesabınızın Oluşturulma Tarihi:</b></p>
                    </div>

                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h3 class="card-title mb-1">Siparişler</h3>
                            <p class="text-muted mb-1"><b>Sipariş Verildi</b></p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list">
                                    <div class="preview-item border-bottom align-items-center">
                                        <div class="preview-thumbnail" style="width: 100px;height: 80px">
                                            <img class="w-100 h-100 rounded" src="{{asset('coronatemplate/assets/images/car.jpg')}}" style="object-fit: cover;border: 2px solid #191c24" alt="">
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow " >
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">TOGG</h6>
                                                <p class="text-muted mb-0">Mehmet Ali</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">15 dakika önce</p>
                                                <button type="button" class="btn btn-inverse-danger btn-fw btn-rounded" style="font-size: 16px;min-width: 130px;min-height: 40px">İptal Et</button>
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
                        <h3 class="card-title">Verdiğiniz İlanlar</h3>
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
                                        <button type="button" class="btn btn-inverse-info btn-fw btn-rounded mr-2" style="font-size: 16px;min-width: 130px;min-height: 40px">Düzenle</button>
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
        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h3 class="card-title">Mesajlar</h3>
                        </div>
                        <div class="preview-list">
                            <div class="preview-item border-top">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('coronatemplate/assets/images/faces/face6.jpg')}}" alt="image" class="rounded-circle" />
                                </div>
                                <div class="preview-item-content d-flex flex-grow">
                                    <div class="flex-grow">
                                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject">Mahmut</h6>
                                            <p class="text-muted text-small">5 Dakika Önce</p>
                                        </div>
                                        <div class="d-flex flex-row justify-content-between">
                                            <p class="text-muted">El arabası var mı kardeşim?</p>
                                            <button type="button" class="btn btn-inverse-success btn-fw btn-rounded" style="font-size: 16px;min-width: 130px;min-height: 40px">Cevapla</button>
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
    <!-- content-wrapper ends -->
@endsection
