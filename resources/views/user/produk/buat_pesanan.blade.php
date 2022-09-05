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
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                                <label class="h4">Data Penerima</label>
                                <div class="form-group col-12">
                                    <label for="cc-payment" class="control-label mb-1">Nama Penerima</label>
                                    <input id="nama_penerima" required name="nama_penerima" type="text"
                                        class="form-control" aria-required="true" aria-invalid="false" value="">
                                </div>
                                <div class="form-group col-12">
                                    <label for="cc-payment" class="control-label mb-1">Nomor Telepon/HP</label>
                                    <input id="no_hp" required name="no_hp" type="number" class="form-control"
                                        aria-required="true" aria-invalid="false" value="">
                                </div>
                                <div class="form-group col-12">
                                    <label for="cc-payment" class="control-label mb-1">Alamat Lengkap</label>
                                    <textarea id="alamat" required name="alamat" type="text" class="form-control"
                                        aria-required="true" aria-invalid="false" value=""></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                            <label class="h4">Produk</label>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="w-75" src="{{asset('public/image/icon/organic-product.png')}}"
                                            alt="">

                                    </div>
                                    <div class="col-sm-3">
                                        <p>produk 1</p>
                                        <p>Kandungan</p>
                                        <p>Jumlah Beli :</p>
                                        <p>Harga :</p>

                                    </div>
                                </div>

                                <div class="text-center">
                                    <p>Total Harga :</p>
                                </div>

                                <hr>
                                <div>
                                <label class="h4">Metode Pembayaran</label> <br>
                                    <div class="form-check form-check-inline">
                                        <input required class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Transfer Bank</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input required class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
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
