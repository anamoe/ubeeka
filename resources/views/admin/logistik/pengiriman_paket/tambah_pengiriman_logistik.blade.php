@extends('admin.layouts.admin_master')

@section('title')
Tambah Pengiriman Paket Logistik
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
                        <form action="{{url('tambah_pengiriman_paket_logistik_post')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Paket Logistik</label>
                                        <select id="paket" name ="paket" class="form-control">
                                <option  selected disabled id ="pakets" name ="paket" value="">~ Pilih Logistik ~</option>
                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="harga">Tarif</label>
                                        <input required type="number" id="tarif" class="form-control" name="tarif"
                                            placeholder="Tarif">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Dari</label>
                                        <input required type="text" id="dari" class="form-control" value=""
                                            name="alamat_asal">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Ke</label>
                                        <input required type="text" id="ke" class="form-control" value=""
                                            name="alamat_tujuan">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="">Provinsi Tujuan</label>
                                        <select class="form-control" name="provinsi" id="provinsi">
                                            <option value="">--Pilih Provinsi--</option>
                                            <option value="">A</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="">Kota Tujuan</label>
                                        <select class="form-control" name="kota" id="kota">
                                            <option value="">--Pilih Kota--</option>
                                            <option value="">A</option>
                                        </select>
                                    </div>
                                </div> -->
                                
                               
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Jumlah Muat</label>
                                        <input required type="number" id="jml_muat" class="form-control" name="jml_muat"
                                            placeholder="Jumlah Muat">
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Muat (kg)</label>
                                        <input required type="number" id="muat" class="form-control" name="muat"
                                            placeholder="Muat">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Total Muat</label>
                                        <input hidden required type="number" id="total_muat" class="form-control" name="total_muat"
                                            placeholder="Total Muat">
                                        <input disabled required type="number" id="total_muats" class="form-control"
                                            placeholder="Total Muat">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="menir">Jumlah Menir</label>
                                        <input required type="number" id="jml_menir" class="form-control" name="jml_menir"
                                            placeholder="Jumlah Menir">
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
                                        <label for="muat">Total Menir</label>
                                        <input hidden required type="number" id="total_menir" class="form-control" name="total_menir"
                                            placeholder="Total Menir">
                                        <input disabled required type="number" id="total_menirs" class="form-control" 
                                            placeholder="Total Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_tepung">Jumlah Rp/Kg Tepung</label>
                                        <input required type="number" id="jml_rp_tepung" class="form-control"
                                            name="jml_rp_tepung" placeholder="Jumlah Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_tepung">Rp/Kg Tepung</label>
                                        <input required type="text" id="rp_tepung" class="form-control"
                                            name="rp_tepung" placeholder="Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="muat">Total Rp/Kg Tepung</label>
                                        <input hidden type="text" id="total_rp_tepung" class="form-control" name="total_rp_tepung"
                                            placeholder="Total Menir">
                                        <input disabled required type="number" id="total_rp_tepungs" class="form-control" 
                                            placeholder="Total Rp/Kg Tepung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Jumlah Rp/sak Menir</label>
                                        <input required type="number" id="jml_rp_menir" class="form-control" name="jml_rp_menir"
                                            placeholder="Jumlah Rp/sak Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Rp/sak Menir</label>
                                        <input required type="number" id="rp_menir" class="form-control" name="rp_menir"
                                            placeholder="Rp/sak Menir">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="rp_menir">Total Rp/sak Menir</label>
                                        <input hidden required type="number" id="total_rp_menir" class="form-control" name="total_rp_menir"
                                            placeholder="Total Rp/Kg Menir">
                                        <input disabled required type="number" id="total_rp_menirs" class="form-control" 
                                            placeholder="Total Rp/Kg Menir">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Ktp Pemesan</label>
                                        <input required class="form-control" type="file" name="ktp" id="ktp">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">Pemesan</label>
                                        <input required class="form-control" type="text" name="pemesan" id="pemesan">
                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn rounded btn-primary me-1 mb-1 mr-2">Simpan</button>
                                    <a href="{{route('pengiriman_paket_logistik')}}"
                                        class="btn rounded btn-warning me-1 mb-1">Batal</a>
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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

$(document).ready(function() {
        getpaket()


    })

async function getpaket() {

axios.get("{{url('api/get-paket')}}").then((res) => {
$("#nama_ikan").empty()


res.data.forEach(function(item, key) {
    console.log(item);
    $('#paket').append($('<option>', {
        value: item.id,
        text: item.paket +' '+ '('+item.dari +'-'+ item.ke+')',
        tarif: item.tarif,
        muatan_kg: item.muatan_kg,
        tepung_kg_rp: item.tepung_kg_rp,
        menir_sak_rp: item.menir_sak_rp,
        menir: item.menir,
        dari : item.dari,
        ke : item.ke,
    }
    
    ));
  
});
});

}
$('#paket').click(() => {
       
        var s= $("#paket option:selected").attr("tarif")
        var me= $("#paket option:selected").attr("menir_sak_rp")
        var te= $("#paket option:selected").attr("tepung_kg_rp")
        var mu= $("#paket option:selected").attr("muatan_kg")
        var menir= $("#paket option:selected").attr("menir")
        var dari= $("#paket option:selected").attr("dari")
        var ke= $("#paket option:selected").attr("ke")
        
        $("#tarif").val(s)
        $("#rp_tepung").val(te)
        $("#muat").val(mu)
        $("#rp_menir").val(me)
        $("#ke").val(ke)
        $("#dari").val(dari)
        $("#menir").val(menir)
    })

    $('#jml_menir').on('change keyup', () => {
        var harga = $('#menir').val()
        var jumlah = $("#jml_menir").val()
        console.log(harga*jumlah)
        $('#total_menir').val(harga * jumlah)
        $('#total_menirs').val(harga * jumlah)  

    })
    $('#jml_muat').on('change keyup', () => {
        var harga = $('#muat').val()
        var jumlah = $("#jml_muat").val()
        console.log(harga*jumlah)
        $('#total_muat').val(harga * jumlah)
        $('#total_muats').val(harga * jumlah)  

    })

    $('#jml_rp_tepung').on('change keyup', () => {
        var harga = $('#rp_tepung').val()
        var jumlah = $("#jml_rp_tepung").val()
        console.log(harga*jumlah)
        $('#total_rp_tepung').val(harga * jumlah)
        $('#total_rp_tepungs').val(harga * jumlah)  

    })

    $('#jml_rp_menir').on('change keyup', () => {
        var harga = $('#rp_menir').val()
        var jumlah = $("#jml_rp_menir").val()
        console.log(harga*jumlah)
        $('#total_rp_menir').val(harga * jumlah)
        $('#total_rp_menirs').val(harga * jumlah)  

    })
    </script>
@endsection
