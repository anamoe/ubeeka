@extends('user.layouts.user_master')

@section('content')

<div class="card">
    <div class="card-body ">
        <div class="row">
            <div class="owl-carousel header-carousel position-relative col-12 col-md-6">
                <!-- <h3 class="d-inline-block d-sm-none">Produk 1</h3> -->
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                    <img src="{{asset('public/image/icon/organic-product.png')}}" class="w-75 position-relative"
                        alt="Product Image">
                </div>
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                    <img class="w-75 position-relative" src="{{asset('public/image/icon/products_1.png')}}"
                        alt="Product Image">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">Produk 1</h3>
                <p>Keterangan Kandungan</p>

                <hr>
                <h5>Deskripsi</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                    vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem
                    elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh,
                    congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius
                    metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum
                    at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque
                    viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat
                    a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non
                    convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat
                    fringilla sollicitudin ultrices vel metus.
                </p>


                <div class="bg-gray py-2 px-3 mt-4">
                    <h4 class="mb-0">
                        Rp. -,
                    </h4>
                    <!-- <h4 class="mt-0">
                        <small>Ex Tax: $80.00 </small>
                    </h4> -->
                </div>

                <div class="mt-4">
                    <div class="btn btn-success btn-md btn-flat">
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                        Tambah ke Keranjang
                    </div>

                    <div class="btn btn-primary btn-md btn-flat" data-toggle="modal" data-target="#exampleModal">
                        <!-- <i class="fas fa-heart fa-lg mr-2"></i> -->
                        Beli Sekarang
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Beli Sekarang</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3">
                        <img class="w-100" src="{{asset('public/image/icon/organic-product.png')}}" alt="">

                    </div>
                    <div class="col-sm-6">
                        <p>produk 1</p>
                        <p>Kandungan</p>

                    </div>
                </div>
                <div class="mt-2">
                    Stok :
                </div>
                <hr>
                <div>
                    <h6>Jumlah</h6>
                    <div class="center col-md-3">
                        <div class="input-group ">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-outline-danger btn-number" data-type="minus"
                                    data-field="quant[1]">
                                    <span class="glyphicon glyphicon-minus">-</span>
                                </button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1"
                                max="100">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus"
                                    data-field="quant[1]">
                                    <span class="glyphicon glyphicon-plus">+</span>
                                </button>
                            </span>
                        </div>
                        <p></p>
                    </div>
                </div>
                <h6>Harga</h6>
                <div class="text-center">
                    <input type="number" hidden name="harga" class="form-control" value="">
                    <input type="number" disabled name="harga" class="form-control" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a type="button" href="{{route('user_buat_pesanan')}}" class="btn btn-primary">Beli Sekarang</a>
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
    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
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

@endsection
