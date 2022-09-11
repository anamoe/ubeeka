@extends('admin.layouts.admin_master')

@section('title')
Tambah Data Paket Logistik
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
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Dari</label>
                                        <input required type="text" id="dari" class="form-control"
                                            value="Jimbe" name="dari">
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Ke</label>
                                        <input required type="text" id="ke" class="form-control"
                                            value="" name="ke">
                                    </div>
                                </div>

                       
                           
                                <!-- <div class="col-md-6 form-group">
                               
                                <label>Provinsi Tujuan Kirim</label>
                                <select required="{{old('provinsi_keberangkatan')}}" name="provinsi_keberangkatans"
                                    id="provinsi_keberangkatan"
                                    class="form-control select2 provinsi_keberangkatan {{$errors->has('id') ? 'is-invalid' : '' }}">

                                    <option selected disabled> -- Pilih Provinsi -- </option>
                                    @foreach($provinsi as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
                                </select>

                                <div class="mb-2">
                                    <label>Kota Tujuan Kirim</label>
                                    <select required="{{old('kota_keberangkatan')}}" name="ke"
                                        class="form-control select2 kota_keberangkatan{{$errors->has('name') ? 'is-invalid' : '' }}">
                                        <option id="kota_keberangkatan" value=""></option>
                                    </select>
                                </div>
                            </div> -->
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="tarif">Tarif</label>
                                        <input required type="number" id="tarif" class="form-control" name="tarif"
                                            placeholder="Tarif">
                                    </div>
                                </div>
                                
                       <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Muat (kg)</label>
                                        <input required type="number" id="muat" class="form-control" name="muatan_kg"
                                            placeholder="Muat">
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
                                        <label for="rp_tepung">Rp/Kg Tepung</label>
                                        <input required type="number" id="rp_tepung" class="form-control" name="tepung_kg_rp"
                                            placeholder="Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Rp/sak Menir</label>
                                        <input required type="number" id="rp_menir" class="form-control" name="menir_sak_rp"
                                            placeholder="Rp/sak Menir">
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Paket</label>
                                        <input required type="text" id="paket" class="form-control"
                                             name="paket">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="status"
                                                id="inlineRadio1" value="tampilkan">
                                            <label class="form-check-label" for="inlineRadio1">Tampilkan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input required class="form-check-input" type="radio" name="status"
                                                id="inlineRadio2" value="tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak Ditampilkan</label>
                                        </div>
                                    </div>

                                </div> -->
                                <!-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input required class="form-control" type="file" name="foto1" id="foto1">
                                    </div>
                                </div> -->
                                
            

                                <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn rounded btn-primary me-1 mb-1 mr-2">Simpan</button>
                                    <a href="{{route('data_paket_logistik')}}" class="btn rounded btn-warning me-1 mb-1">Batal</a>
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
@section('js')

<!-- <script type="text/javascript">
    //fungsi JQUERY
    $(document).on('change', '.provinsi_keberangkatan', function () {

        //mengambil nilai select
        var id = $(this).val();

        //sebagai parent
        var div = $(this).parent();

        //sebagai list
        var option = "";

        //fungsi AJAX

        $.ajax({
            type: 'get',
            url: '{!!URL::to('api/kota')!!}',
            data: {'id': id},
            success: function (data) {

                //list pertama
                option += '<option value="0" selected disable> -- Pilih Kota--</option>';

                //perulangan list
                for (var i = 0; i < data.length; i++) {

                    //proses pembuatan list
                    option += '<option value="' + data[i].id + '">' + data[i].name + '</option>';

                }
                //mengakses class desa
                div.find('.kota_keberangkatan').html(" ");

                //mengganti class desa dengan list
                div.find('.kota_keberangkatan').append(option);

            },
            error: function () {

            }
        });
    });

</script> -->



@endsection
