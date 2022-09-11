@extends('admin.layouts.admin_master')

@section('title')
Data Paket Logistik
@endsection

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="{{route('tambah_paket_logistik')}}" class="btn rounded btn-primary"><span
                                class="fa fa-plus"></span>
                            Tambah Data Paket</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mb-2">
                            <div class="form-group col-md-3">
                                <select type="text" class="form-control" name="" id="">
                                    <option value="">--Pilih Kategori--</option>
                                    <option name="kategori_id" value="">Kategori</option>

                                </select>
                            </div>
                        </div>

                        <div class="row">

                        @foreach($logistik as $v)
                           
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header text-right">
                                        <a href="{{route('edit_paket_logistik',$v->id)}}" class="mr-2" data-placement="bottom"
                                            title="Edit"><span class="fa fa-pencil" style="color:black"></span></a>
                                        <a href="#" class="ml-1" data-toggle="modal" data-target="#DeleteModal"
                                            data-placement="bottom" title="Hapus" onclick="deleteData">
                                            <span class="fa fa-trash" style="color:black"></span></a>
                                        <!-- <button>x</button> -->
                                    </div>
                                    <div class="divider"></div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{asset('public/image/logistik.jpeg')}}" class="w-50"
                                                alt="" srcset="">
                                        </div>
                                        <h6 class="card-title">Paket : {{$v->paket}}</h6>
                                        <p class="card-text">{{$v->dari}} - {{$v->ke}}</p>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <div id="DeleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <form action="" id="deleteForm" method="get">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus data ini?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <p>Apakah anda yakin ingin Menghapus data ini ?</p>
                        <!-- <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button> -->
                        <button type="submit" name="" class="btn btn-danger float-right mr-2" data-dismiss="modal"
                            onclick="formSubmit()">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
    function deleteData(id) {
        var id = id;
        var url = '';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', "{{url('hapus_produk')}}" + "/" + id);
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }

</script>


    @endsection
