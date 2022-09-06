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
                        <h3 class="text-center">Riwayat Pesanan</h3>
                    </div>
                    <hr>
                    <form action="{{url('user_upload_bukti_pembayaran',$kode_transaksi)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
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
                                        @if($transaksi->metode_pembayaran=='Transfer Bank')
                                        <span>Transfer Bank</span> <br>
                                        @else
                                        <span>Scan Qrcode</span>
                                        @endif
                                       
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                            @if($transaksi->metode_pembayaran=='Scan Qrcode')
                            <label class="h4">Scan Qrcode</label>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <img class="w-50" src="{{asset('public/image/qris_ubki.jpeg')}}"
                                            alt="">

                                    </div>
                                    
                                </div>
                                <hr>
                                @else
                                <div>
                                <label class="h4">Tranfer Bank - A.N PT.UBK INTERNATIONAL</label> <br>
                                    <div class="form-check form-check-inline">
                                       <span>Transfer ke Rekening <h2>7999900792</h2></span> <br>
                                    </div>
                                    @endif
                                  
                                        <label for="">Upload Bukti Pembayaran</label>
                                        <input type="file" class="form-control" name="bukti_transaksi">
                                   
                                </div>
                            
                                       
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                <span id="payment-button-amount">Order</span>
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
