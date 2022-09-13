@extends('admin.layouts.admin_master')

@section('title')
Setting Courosel
@endsection

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="#" class="btn rounded btn-primary" data-toggle="modal" data-target="#TambahModal"
                            style="color:white;"><span class="fa fa-plus"></span> Tambah
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header text-right">
                                        <a href="#" class="mr-2" data-toggle="modal" data-target="#EditModal"
                                            data-placement="bottom" title="Edit" onclick="deleteData">
                                            <span class="fa fa-pencil" style="color:black"></span></a>
                                        <a href="#" class="ml-1" data-toggle="modal" data-target="#DeleteModal"
                                            data-placement="bottom" title="Hapus" onclick="deleteData">
                                            <span class="fa fa-trash" style="color:black"></span></a>
                                        <!-- <button>x</button> -->
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{asset('public/image/logistik1.jpeg')}}" class="w-75" alt=""
                                                srcset="">
                                        </div><br>
                                        <h6 class="card-title">Gambar : 1</h6>
                                        <p class="card-text">Keterangan 1</p>
                                        <p class="card-text">Keterangan 2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah-->
<div class="modal fade" id="TambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Courosel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input class="form-control" type="file" name="gambar" id="gambar" placeholder="Gambar">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan 1</label>
                        <input class="form-control" type="text" name="keterangan_1" id="keterangan_1"
                            placeholder="Keterangan 1">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan 2</label>
                        <input class="form-control" type="text" name="keterangan_2" id="keterangan_2"
                            placeholder="Keterangan 2">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn rounded btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn rounded btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Courosel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input class="form-control" type="file" name="gambar" id="gambar" placeholder="Gambar">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan 1</label>
                        <input class="form-control" type="text" name="keterangan_1" id="keterangan_1"
                            placeholder="Keterangan 1">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan 2</label>
                        <input class="form-control" type="text" name="keterangan_2" id="keterangan_2"
                            placeholder="Keterangan 2">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn rounded btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn rounded btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>


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
                    <button type="submit" name="" class="btn rounded btn-danger float-right mr-2" data-dismiss="modal"
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
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }

</script>
@endsection
