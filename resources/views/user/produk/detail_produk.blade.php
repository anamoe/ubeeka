@extends('user.layouts.user_master')

@section('content')

<div class="card">
    <div class="card-body ">
        <div class="row">
            <div class="owl-carousel header-carousel position-relative col-12 col-md-6">
                <!-- <h3 class="d-inline-block d-sm-none">Produk 1</h3> -->
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                    <img src="{{asset('public/admin/produk/'.$data->foto_produk)}}" class="w-75 position-relative"
                        alt="Product Image">
                </div>
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                    <img class="w-75 position-relative" src="{{asset('public/admin/produk/'.$data->foto_produk2)}}"
                        alt="Product Image">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">{{$data->nama_produk}}</h3>
                <p>{{$data->kandungan}}</p>

                <hr>
                <h5>Deskripsi</h5>
                <p>
                 {{$data->deskripsi}}
                </p>


                <div class="bg-gray py-2 px-3 mt-4">
                    <h4 class="mb-0">
                    @currency($data->harga)
                    </h4>
                    <!-- <h4 class="mt-0">
                        <small>Ex Tax: $80.00 </small>
                    </h4> -->
                </div>

                <div class="mt-4">
                    <!-- <div class="btn btn-success btn-md btn-flat">
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                        Tambah ke Keranjang
                    </div> -->

                    <div class="btn btn-primary btn-md btn-flat" data-toggle="modal" data-target="#exampleModal{{$data->id}}">
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

<div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Beli Sekarang</h5>
            </div>
            <div class="modal-body">
            <form action="{{route('user_buat_pesanan')}}" method="post" id="beliform" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-sm-3">
                        <img class="w-100" src="{{asset('public/admin/produk/'.$data->foto_produk)}}" alt="">

                    </div>
                    <div class="col-sm-6">
                        <p>{{$data->nama_produk}}</p>
                        <p>{{$data->kandungan}}</p>  
                        <p>  @currency($data->harga)</p>

                        <input type="text" hidden name="nama_produk" value="{{$data->nama_produk}}" >
                        <input type="text" hidden name="harga_satuan" value="{{$data->harga}}" >
                      
                 

                    </div>
                </div>
                <div class="mt-2">
                    Stok :{{$data->stok}}
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
                            <input type="text" id ="jumlah" name="quant[1]" class="form-control input-number" value="1" min="1"
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
                <h6>Total Harga</h6>
                <div class="text-center">
                   
                    <input type="number" hidden id="harga"  class="form-control" value="{{$data->harga}}">
                    <input type="text" hidden name="produk_id" class="form-control" value="{{$data->id}}">

                    <input type="number" disabled id="harga2"  class="form-control" value="">
                    <input type="number" hidden id="harga_post" name="harga_total" class="form-control" >

                    <input type="text" hidden id ="jumlah_post" name="jumlah" class="form-control input-number" >
                </div>
                
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <!-- <a type="button" href="" class="btn btn-primary">Beli Sekarang</a> -->
                <button type="button" class="btn btn-primary" onclick="beli()">Beli Sekarang</button>
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

function beli() {
   
            $("#beliform").submit()
        
    }
    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());

        var jml=$('#jumlah').val();
        var jlmt = parseInt(jml)+ 1;
       
        $('#jumlah_post').val(jlmt);
        console.log($('#jumlah').val());
        if (!isNaN(currentVal)) {

   
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                 
                    var totalm=$('#jumlah').val()*$('#harga').val();
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

                    var total=$('#jumlah').val()*$('#harga').val();
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

@endsection
