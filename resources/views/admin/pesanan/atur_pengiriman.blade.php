@extends('admin.layouts.admin_master')

@section('title')
Atur Pengiriman
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">


            <div class="card">
                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <img src="{{asset('public/image/logo_ubeka.png')}}" width="50" height="auto" alt="" srcset=""> Ubeeka
                                <small class="float-right">Tanggal : 2/10/2014</small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            Dari
                            <address>
                                <strong>Ubeeka</strong><br>
                                Alamat<br>
                                Telepon : <br>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Untuk
                            <address>
                                <strong>Nama Pemesan</strong><br>
                                Alamat<br>
                                Telepone :<br>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Invoice #007612</b><br>
                            <br>
                            <b>Order ID:</b> 4F3S8J<br>
                            <b>Payment Due:</b> 2/22/2014<br>
                            <b>Account:</b> 968-34567
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Produk</th>
                                        <th>Kode Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Produk 1</td>
                                        <td>455-981-221</td>
                                        <td>aa</td>
                                        <td>Rp. -,</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                    <div class="col-6">
                            <p class="lead">Dikirim Sebelum 2/22/2014</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>Rp. -,</td>
                                    </tr>
                                    <!-- <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$5.80</td>
                                    </tr> -->
                                    <tr>
                                        <th>Total :</th>
                                        <td>Rp. -,</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- accepted payments column -->
                        <div class="col-6">
                            <p class="lead">Pengiriman :</p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Petugas Pengirim</label>
                                    <select class="form-control" name="petugas" id="petugas">
                                        <option value="">--Pilih Petugas--</option>
                                        <option value="">Petugas 1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Kendaraan Pengiriman</label>
                                    <select class="form-control" name="kendaraan" id="kendaraan">
                                        <option value="">--Pilih Kendaraan Pengiriman--</option>
                                        <option value="">Kendaraan 1</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button class="btn rounded btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                            
                            <!-- <img src="../../dist/img/credit/visa.png" alt="Visa">
                            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                            <img src="../../dist/img/credit/american-express.png" alt="American Express">
                            <img src="../../dist/img/credit/paypal2.png" alt="Paypal"> -->
                        </div>
                        <!-- /.col -->
                        
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <!-- <div class="row no-print">
                        <div class="col-12">
                            <a href="" rel="noopener" target="_blank" class="btn rounded btn-secondary"><i
                                    class="fa fa-print"></i> Print</a>
                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generate PDF
                            </button>
                        </div>
                    </div> -->
                </div>
                <!-- /.invoice -->
            </div>

        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->


@endsection
