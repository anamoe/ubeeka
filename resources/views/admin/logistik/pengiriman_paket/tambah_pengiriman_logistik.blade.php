@extends('admin.layouts.admin_master')

@section('title')
Tambah Pengiriman Paket Logistik
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
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Paket Logistik</label>
                                        <select class="form-control" name="provinsi" id="provinsi">
                                            <option value="">--Pilih Paket--</option>
                                            <option value="">A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Dari</label>
                                        <input required type="text" id="dari" class="form-control" value="Jimbe"
                                            name="dari">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
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
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="harga">Tarif</label>
                                        <input required type="number" id="harga" class="form-control" name="harga"
                                            placeholder="Tarif">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Jumlah Muat</label>
                                        <input required type="number" id="jml_muat" class="form-control" name="jml_muat"
                                            placeholder="Jumlah Muat">
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Muat (kg)</label>
                                        <input required type="number" id="muat" class="form-control" name="muat"
                                            placeholder="Muat">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Total Muat</label>
                                        <input hidden required type="number" id="total_muat" class="form-control" name="total_muat"
                                            placeholder="Total Muat">
                                        <input disabled required type="number" id="total_muat" class="form-control" name="total_muat"
                                            placeholder="Total Muat">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="menir">Jumlah Menir</label>
                                        <input required type="number" id="jml_menir" class="form-control" name="jml_menir"
                                            placeholder="Jumlah Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="menir">Menir</label>
                                        <input required type="number" id="menir" class="form-control" name="menir"
                                            placeholder="Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Total Menir</label>
                                        <input hidden required type="number" id="total_menir" class="form-control" name="total_menir"
                                            placeholder="Total Menir">
                                        <input disabled required type="number" id="total_menir" class="form-control" name="total_menir"
                                            placeholder="Total Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_tepung">Jumlah Rp/Kg Tepung</label>
                                        <input required type="number" id="jml_rp_tepung" class="form-control"
                                            name="jml_rp_tepung" placeholder="Jumlah Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_tepung">Rp/Kg Tepung</label>
                                        <input required type="number" id="rp_tepung" class="form-control"
                                            name="rp_tepung" placeholder="Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Total Rp/Kg Tepung</label>
                                        <input hidden required type="number" id="total_rp_tepung" class="form-control" name="total_rp_tepung"
                                            placeholder="Total Menir">
                                        <input disabled required type="number" id="total_rp_tepung" class="form-control" name="total_rp_tepung"
                                            placeholder="Total Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Jumlah Rp/sak Menir</label>
                                        <input required type="number" id="jml_rp_menir" class="form-control" name="jml_rp_menir"
                                            placeholder="Jumlah Rp/sak Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Rp/sak Menir</label>
                                        <input required type="number" id="rp_menir" class="form-control" name="rp_menir"
                                            placeholder="Rp/sak Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Total Rp/sak Menir</label>
                                        <input hidden required type="number" id="total_rp_menir" class="form-control" name="total_rp_menir"
                                            placeholder="Total Rp/Kg Menir">
                                        <input disabled required type="number" id="total_rp_menir" class="form-control" name="total_rp_menir"
                                            placeholder="Total Rp/Kg Menir">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Ktp Pemesan</label>
                                        <input required class="form-control" type="file" name="ktp" id="ktp">
                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn rounded btn-primary me-1 mb-1 mr-2">Simpan</button>
                                    <a href="{{route('pengiriman_paket_logistik')}}"
                                        class="btn rounded btn-warning me-1 mb-1">Batal</a>
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
