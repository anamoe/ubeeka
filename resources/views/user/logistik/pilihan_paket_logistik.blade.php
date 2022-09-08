@extends('user.layouts.user_master')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <!-- <div class="card-header">
            <strong class="card-title">Credit Card</strong>
        </div> -->
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center">Paket Logistik</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row mb-3">
                            <h5 class=" wow fadeInUp" data-wow-delay="0.3s">Cek Ongkos Kirim Logistik (/ton)</h5>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                                <label for="">Dari</label>
                                <div class="form-group">
                                    <select class="form-control" name="" id="">
                                        <option value="">--Pilih Kota--</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                                <label for="">Tujuan</label>
                                <div class="form-group">
                                    <select class="form-control" name="" id="">
                                        <option value="">--Pilih Kota--</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                                <label for="">Ongkos Kirim (/ton)</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="biaya" id="biaya" hidden>
                                    <input type="text" class="form-control" disabled value="">
                                </div>
                            </div>

                        </div>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="price-item">
                                    <div class="border-bottom p-4 mb-4">
                                        <h5 class="text-primary mb-1">Paket A</h5>
                                        <h1 class="display-5 mb-0">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp.</small>200.000<small
                                                class="align-bottom"
                                                style="font-size: 16px; line-height: 40px;"></small>
                                        </h1>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <p><i class="fa fa-check text-success me-3"></i>Ada A</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada B</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada C</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada D</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada E</p>
                                        <a class="btn-slide mt-2" href="{{route('user_detail_paket_logistik')}}"><i
                                                class="fa fa-arrow-right"></i><span>Detail Paket</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="price-item">
                                    <div class="border-bottom p-4 mb-4">
                                        <h5 class="text-primary mb-1">Paket B</h5>
                                        <h1 class="display-5 mb-0">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp.</small>300.000<small
                                                class="align-bottom"
                                                style="font-size: 16px; line-height: 40px;"></small>
                                        </h1>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <p><i class="fa fa-check text-success me-3"></i>Ada A</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada B</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada C</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada D</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada E</p>
                                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Detail
                                                Paket</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="price-item">
                                    <div class="border-bottom p-4 mb-4">
                                        <h5 class="text-primary mb-1">Paket C</h5>
                                        <h1 class="display-5 mb-0">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp.</small>500.000<small
                                                class="align-bottom"
                                                style="font-size: 16px; line-height: 40px;"></small>
                                        </h1>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <p><i class="fa fa-check text-success me-3"></i>Ada A</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada B</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada C</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada D</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Ada E</p>
                                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Detail
                                                Paket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- .card -->
</div>


@endsection
