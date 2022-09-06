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
                        <h3 class="text-center">Keranjang</h3>
                    </div>
                    <hr>
                    <div class="form-check mb-4">
                        <input class="form-check-input" style="width:2rem; height:2rem;" type="checkbox" value=""
                            id="centang_semua">&nbsp;
                        <label class="h4 form-check-label mt-2" for="centang_semua">Pilih Semua</label>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item p-4">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input check" style="width:2rem; height:2rem;"
                                            type="checkbox" value="" id="centang_barang">&nbsp;
                                        <!-- <label class="h4 form-check-label mt-2" for="centang_barang">Produk</label> -->
                                    </div>
                                    <div class="overflow-hidden mb-4 text-center">
                                        <img class="img-fluid w-25" src="{{asset('public/image/icon/bag.png')}}" alt="">
                                    </div>
                                    <h5 class="mb-2">Nama Produk</h5>
                                    <span>Kandungan</span><br>
                                    <span>Stok</span>
                                    <div class="row">
                                        <div class="col-6">
                                        </div>
                                        <div class="col-6">
                                            <span style="font-size:14px;">Harga : Rp. 20.000</span>
                                        </div>

                                    </div>
                                    <div>
                                        <h6>Jumlah</h6>
                                        <div class="center col-md-3">
                                            <div class="input-group ">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-outline-danger btn-number"
                                                        data-type="minus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="text" id="jumlah" name="quant[1]"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-outline-secondary btn-number"
                                                        data-type="plus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- <p>Harga</p> -->
                                    <a class="btn-slide mt-3" href="#"><i
                                            class="fa fa-arrow-right"></i><span>Detail</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item p-4">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input check" style="width:2rem; height:2rem;"
                                            type="checkbox" value="" id="centang_barang">&nbsp;
                                        <!-- <label class="h4 form-check-label mt-2" for="centang_barang">Produk</label> -->
                                    </div>
                                    <div class="overflow-hidden mb-4 text-center">
                                        <img class="img-fluid w-25" src="{{asset('public/image/icon/bag.png')}}" alt="">
                                    </div>
                                    <h5 class="mb-2">Nama Produk</h5>
                                    <span>Kandungan</span><br>
                                    <span>Stok</span>
                                    <div class="row">
                                        <div class="col-6">
                                        </div>
                                        <div class="col-6">
                                            <span style="font-size:14px;">Harga : Rp. 20.000</span>
                                        </div>

                                    </div>
                                    <div>
                                        <h6>Jumlah</h6>
                                        <div class="center col-md-3">
                                            <div class="input-group ">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-outline-danger btn-number"
                                                        data-type="minus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="text" id="jumlah" name="quant[1]"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-outline-secondary btn-number"
                                                        data-type="plus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- <p>Harga</p> -->
                                    <a class="btn-slide mt-3" href="#"><i
                                            class="fa fa-arrow-right"></i><span>Detail</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item p-4">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input check" style="width:2rem; height:2rem;"
                                            type="checkbox" value="" id="centang_barang">&nbsp;
                                        <!-- <label class="h4 form-check-label mt-2" for="centang_barang">Produk</label> -->
                                    </div>
                                    <div class="overflow-hidden mb-4 text-center">
                                        <img class="img-fluid w-25" src="{{asset('public/image/icon/bag.png')}}" alt="">
                                    </div>
                                    <h5 class="mb-2">Nama Produk</h5>
                                    <span>Kandungan</span><br>
                                    <span>Stok</span>
                                    <div class="row">
                                        <div class="col-6">
                                        </div>
                                        <div class="col-6">
                                            <span style="font-size:14px;">Harga : Rp. 20.000</span>
                                        </div>

                                    </div>
                                    <div>
                                        <h6>Jumlah</h6>
                                        <div class="center col-md-3">
                                            <div class="input-group ">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-outline-danger btn-number"
                                                        data-type="minus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-minus">-</span>
                                                    </button>
                                                </span>
                                                <input type="text" id="jumlah" name="quant[1]"
                                                    class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-outline-secondary btn-number"
                                                        data-type="plus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- <p>Harga</p> -->
                                    <a class="btn-slide mt-3" href="#"><i
                                            class="fa fa-arrow-right"></i><span>Detail</span></a>
                                </div>
                            </div>
                           
                        </div>

                        <div class="row pt-5 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="col-6">
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <p>Total Harga :</p>
                                </div>

                                <hr>
                            </div>
                        </div>
                        <div class="mt-4 text-center wow fadeInUp" data-wow-delay="0.5s">
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
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script>
    $("#centang_semua").click(function () {
        $(".check").prop('checked', $(this).prop('checked'));
    });

</script>
<script>
    function beli() {

        $("#beliform").submit()

    }
    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());

        var jml = $('#jumlah').val();
        var jlmt = parseInt(jml) + 1;

        $('#jumlah_post').val(jlmt);
        console.log($('#jumlah').val());
        if (!isNaN(currentVal)) {


            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();

                    var totalm = $('#jumlah').val() * $('#harga').val();
                    console.log(totalm);
                    $('#harga2').val(totalm);
                    $('#harga_post').val(totalm);
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();

                    var total = $('#jumlah').val() * $('#harga').val();
                    console.log(total);

                    $('#harga2').val(total);
                    $('#harga_post').val(total);
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function () {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

</script>
</script>

@endsection
