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
                        <h3 class="text-center">Buat Pesanan</h3>
                    </div>
                    <hr>
                    <form action="{{url('user_post_bayar',$kode_transaksi)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label class="h4">Data Penerima</label>
                                <div class="form-group col-12">
                                    <label for="cc-payment" class="control-label mb-1">Nama Penerima</label>
                                    <input id="nama_penerima" required name="nama_penerima" type="text"
                                        class="form-control" aria-required="true" aria-invalid="false" value="{{$user->name}}">
                                </div>
                                <div class="form-group col-12">
                                    <label for="cc-payment" class="control-label mb-1">Nomor Telepon/HP</label>
                                    <input id="no_hp" required name="no_hp" type="number" class="form-control"
                                        aria-required="true" aria-invalid="false" value="{{$user->no_hp}}">
                                </div>
                                <div class="form-group col-12">
                                    <label for="cc-payment" class="control-label mb-1">Alamat Lengkap</label>
                                    <textarea id="alamat" required name="alamat" type="text" class="form-control"
                                        aria-required="true" aria-invalid="false" value="">{{$user->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                            <label class="h4">Produk</label>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="w-75" src="{{asset('public/admin/produk/'.$fproduk->foto_produk)}}"
                                            alt="">

                                    </div>
                                    <div class="col-sm-3">
                                        <p>{{$produk->nama_produk}}</p>
                                        <!-- <p>Kandungan :{{$produk->nama_produk}}</p> -->
                                        <p>Jumlah Beli :{{$produk->jumlah}}</p>
                                        <p>Harga:@currency($produk->harga)</p>

                                    </div>
                                </div>

                                <div class="text-center">
                                    <p>Total Harga :@currency($transaksi->total)</p>
                                </div>

                                <hr>
                                <div>
                                <label class="h4">Metode Pembayaran</label> <br>
                                    <div class="form-check form-check-inline">
                                        <input required class="form-check-input" type="radio" name="metode_bayar"
                                            id="inlineRadio1" value="Transfer Bank">
                                        <label class="form-check-label" for="inlineRadio1">Transfer Bank</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input required class="form-check-input" type="radio" name="metode_bayar"
                                            id="inlineRadio2" value="Scan Qrcode">
                                        <label class="form-check-label" for="inlineRadio2">Scan Qrcode</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                <span id="payment-button-amount">Buat Pesanan</span>
                                <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div> <!-- .card -->

</div>


@endsection
