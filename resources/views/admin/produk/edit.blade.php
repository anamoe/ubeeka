@extends('admin.layouts.admin_master')

@section('title')
Edit Data Produk
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
                    <form action="{{url('update_produk',$id)}}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Produk</label>
                                        <input required type="text" id="nama_produk" class="form-control"
                                            placeholder="Nama Produk" name="nama_produk" value="{{$data->nama_produk}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Kandungan</label>
                                        <input required type="text" id="kandungan" class="form-control"
                                            placeholder="kandungan" name="kandungan" value="{{$data->kandungan}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select required type="text" class="form-control" name="kategori" id="kategori">
                                            <!-- <option value="">--Pilih Kategori--</option> -->
                                            @foreach ($kategori as $v)
                                            <option value="{{$v->id}}" {{($v->id==$data->kategori_id)? 'selected':''}}>{{$v->kategori}}</option>
                                            @endforeach
                               
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="status"
                                                id="inlineRadio1" value="tampilkan" {{$data->status == 'tampilkan'? 'checked' : ''}}>
                                            <label class="form-check-label"  for="inlineRadio1">Tampilkan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="status"
                                                id="inlineRadio2" value="tidak" {{$data->status == 'tidak'? 'checked' : ''}}>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Ditampilkan</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input required type="number" id="harga" class="form-control" name="harga" value="{{$data->harga}}"
                                            placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="diskon">Diskon (Opsional)</label>
                                        <input type="text" id="diskon" class="form-control" value="{{$data->diskon}}"
                                            name="diskon" placeholder="Diskon">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="stok">Stok Produk</label>
                                        <input type="number" id="stok" class="form-control"value="{{$data->stok}}"
                                            name="stok" placeholder="Stok">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar Produk 1</label>
                                        <input class="form-control" type="file" name="foto1" id="foto1"src="{{asset('public/admin/produk/'.$v->foto_produk)}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar Produk 2</label>
                                        <input class="form-control" type="file" name="foto2" id="foto2"src="{{asset('public/admin/produk/'.$v->foto_produk2)}}">
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Lengkap Produk</label>
                                        <textarea required type="text" id="deskripsi" class="form-control" value="{{$data->deskripsi}}"
                                            name="deskripsi" placeholder="Deskripsi">{{$data->deskripsi}}</textarea>
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
</div>
@endsection
