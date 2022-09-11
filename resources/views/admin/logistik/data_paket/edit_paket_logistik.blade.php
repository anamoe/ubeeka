@extends('admin.layouts.admin_master')

@section('title')
Edit Data Paket Logistik
@endsection

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h4 class="card-title">Multiple Column</h4> -->
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{url('update_paket_logistik',$id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Dari</label>
                                        <input required type="text" id="dari" class="form-control"
                                            value="{{$logistik->dari}}" name="dari">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Ke</label>
                                        <input required type="text" id="dari" class="form-control"
                                            value="{{$logistik->ke}}" name="ke">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="">Provinsi Tujuan</label>
                                        <select class="form-control" name="provinsi" id="provinsi">
                                            <option value="">--Pilih Provinsi--</option>
                                            <option value="">A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="">Kota Tujuan</label>
                                        <select class="form-control" name="kota" id="kota">
                                            <option value="">--Pilih Kota--</option>
                                            <option value="">A</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="tarif">Tarif</label>
                                        <input required type="number" id="tarif" class="form-control" name="tarif" value="{{$logistik->tarif}}"
                                            placeholder="Tarif">
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Muat (kg)</label>
                                        <input required type="number" id="muat" class="form-control" name="muatan_kg" value="{{$logistik->muatan_kg}}"
                                            placeholder="Muat">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="menir">Menir</label>
                                        <input required type="number" id="menir" class="form-control" name="menir" value="{{$logistik->menir}}"
                                            placeholder="Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_tepung">Rp/Kg Tepung</label>
                                        <input required type="number" id="rp_tepung" class="form-control" name="tepung_kg_rp" value="{{$logistik->tepung_kg_rp}}"
                                            placeholder="Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Rp/sak Menir</label>
                                        <input required type="number" id="rp_menir" class="form-control" name="menir_sak_rp" value="{{$logistik->menir_sak_rp}}"
                                            placeholder="Rp/sak Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Paket</label>
                                        <input required type="text" id="paket" class="form-control" value="{{$logistik->paket}}"
                                             name="paket">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="status"
                                                id="inlineRadio1" value="tampilkan">
                                            <label class="form-check-label" for="inlineRadio1">Tampilkan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="status"
                                                id="inlineRadio2" value="tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak Ditampilkan</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input required class="form-control" type="file" name="foto1" id="foto1">
                                    </div>
                                </div> -->
                                
                                <!-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar Produk 2</label>
                                        <input required class="form-control" type="file" name="foto2" id="foto2">
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Lengkap Produk</label>
                                        <textarea required type="text" id="deskripsi" class="form-control"
                                            name="deskripsi" placeholder="Deskripsi"></textarea>
                                    </div>
                                </div> -->


                                <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn rounded btn-primary me-1 mb-1 mr-2">Simpan</button>
                                    <a href="{{route('data_paket_logistik')}}" class="btn rounded btn-warning me-1 mb-1">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
