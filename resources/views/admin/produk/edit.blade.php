@extends('admin.layouts.admin_master')

@section('content')
<div class="page-title">
    <h3>Edit Data Produk</h3>
    <!-- <p class="text-subtitle text-muted">A good dashboard to display your statistics</p> -->
</div>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h4 class="card-title">Multiple Column</h4> -->
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Produk</label>
                                        <input required type="text" id="nama_produk" class="form-control"
                                            placeholder="Nama Produk" name="nama_produk">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi Singkat</label>
                                        <input required type="text" id="deskripsi_singkat" class="form-control"
                                            placeholder="Deskripsi Singkat" name="deskripsi_singkat">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select required type="text" class="form-control" name="kategori" id="kategori">
                                            <option value="">--Pilih Kategori--</option>
                                            <option value="">Kategori 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Tampilkan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Draft</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input required type="number" id="harga" class="form-control" name="harga"
                                            placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="diskon">Diskon (Opsional)</label>
                                        <input type="text" id="diskon" class="form-control"
                                            name="diskon" placeholder="Diskon">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="stok">Stok Produk</label>
                                        <input type="number" id="stok" class="form-control"
                                            name="stok" placeholder="Stok">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar Produk 1</label>
                                        <input required class="form-control" type="file" name="foto1" id="foto1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar Produk 2</label>
                                        <input required class="form-control" type="file" name="foto2" id="foto2">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="deskripsi_lengkap">Deskripsi Lengkap Produk</label>
                                        <textarea required type="text" id="deskripsi_lengkap" class="form-control"
                                            name="deskripsi_lengkap" placeholder="Deskripsi"></textarea>
                                    </div>
                                </div>
                                

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    <a href="{{route('produk')}}" class="btn btn-warning me-1 mb-1">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
