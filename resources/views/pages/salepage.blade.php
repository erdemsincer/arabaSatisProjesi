@extends('layouts.navigation')
@section('title')
    İlan Ekle
@endsection
@section('pageHeader')
    İlan Ekle
@endsection
@section('content')
    <style>
        select,input,textarea {
            color: rgba(255, 255, 255, 0.87) !important;
        }

        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

    </style>



    <div class="px-4 pt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">İlan Oluştur</h4>
                <form class="forms-sample">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputName1">Marka</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Marka giriniz">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputName1">Model</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Model giriniz">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputName1">Hasar Kaydı</label>
                                    <input type="date" class="form-control" id="exampleInputName1" placeholder="Hasar kaydı giriniz">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectGender">İl</label>
                                    <select class="form-control mySelect" id="exampleSelectGender">
                                        <option value="" selected disabled>Lütfen bir il seçiniz</option>
                                        <option>Elazığ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectGender">İlçe</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option selected disabled>Lütfen bir ilçe seçiniz</option>
                                        <option>Palu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Arabanın Yılı</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Bir yıl giriniz">
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="d-flex form-group flex-column">
                                    <label for="exampleInputEmail3">Renk</label>
                                    <input type="color" class="form-control w-50 mx-auto" style="height: 110px" id="exampleInputEmail3" placeholder="Renk">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Km</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Km giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Garanti</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option selected disabled>Lütfen bir durum seçiniz.</option>
                                        <option value="0">Yok</option>
                                        <option value="1">Var</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectGender">Vites</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option selected disabled>Lütfen bir vites seçiniz.</option>
                                        <option value="0">Manuel</option>
                                        <option value="1">Otamatik</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Yakıt</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option selected disabled>Lütfen bir yakıt seçiniz.</option>
                                        <option value="0">Dizel</option>
                                        <option value="1">Benzin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">İlana Çıkma Tarihi</label>
                                    <input type="date" class="form-control" id="exampleInputPassword4" placeholder="İlana Çıkma Tarihi">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectGender">Durum</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option selected disabled>Lütfen bir durum seçiniz.</option>
                                        <option value="0">Pasif</option>
                                        <option value="1">İlanda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Fiyat</label>
                                    <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Fiyat giriniz">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleTextarea1">Açıklama</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Oluştur</button>
                        <button class="btn btn-dark">İptal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
