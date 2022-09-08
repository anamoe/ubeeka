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
                            @foreach($logistik as $v)
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="price-item">
                                    <div class="border-bottom p-4 mb-4">
                                        <h5 class="text-primary mb-1">{{$v->paket}}</h5>
                                        <h1 class="display-5 mb-0">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;"></small>@currency($v->tarif)<small
                                                class="align-bottom"
                                                style="font-size: 16px; line-height: 40px;"></small>
                                        </h1>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <p><i class="fa fa-check text-success me-3"></i>Dari {{$v->alamat_asal}} Ke {{$v->alamat_tujuan}}</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Muatan : @currency($v->muatan_kg)</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Tepung/kg Rp : @currency($v->tepung_kg_rp)</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Menir/sak Rp : @currency($v->menir_sak_rp)</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Menir : @currency($v->menir)</p>
                                        <a class="btn-slide mt-2" href="{{url('user_detail_paket_logistik',$v->id)}}"><i
                                                class="fa fa-arrow-right"></i><span>Detail Paket</span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                  
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- .card -->
</div>


@endsection
