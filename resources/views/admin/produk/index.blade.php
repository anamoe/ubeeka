@extends('admin.layouts.admin_master')

@section('content')
<div class="page-title">
    <h3>Produk</h3>
    <!-- <p class="text-subtitle text-muted">A good dashboard to display your statistics</p> -->
</div>
<section class="section">
    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('tambah_produk')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive mt-2">
                <div class="form-group col-md-4">
                    <select type="text" class="form-control" name="" id="">
                        <option value="">--Pilih Kategori--</option>
                        <option value="">Kategori 1</option>
                        <option value="">Kategori 2</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header text-right">
                                <a href="{{route('edit_produk')}}" class="mr-2" data-placement="bottom" title="Edit"><span class="fa fa-pencil" style="color:black"></span></a>
                                <a href="#" class="ml-1" data-toggle="modal" data-target="#DeleteModal" data-placement="bottom" title="Hapus"
                                                onclick="">
                                    <span class="fa fa-trash" style="color:black"></span></a>
                                <!-- <button>x</button> -->
                            </div>
                            <div class="divider"></div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('public/image/logo_ubeka.png')}}" class="w-50" alt="" srcset="">
                                </div>
                                <h5 class="card-title">Nama Produk</h5>
                                <p class="card-text">Deskripsi</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            <div class="card-footer">
                                <p class="card-text">Rp. ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header text-right">
                                <a href="#" class="mr-2"><span class="fa fa-pencil" style="color:black"></span></a>
                                <a href="#" class="ml-1"><span class="fa fa-trash" style="color:black"></span></a>
                                <!-- <button>x</button> -->
                            </div>
                            <div class="divider"></div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('public/image/logo_ubeka.png')}}" class="w-50" alt="" srcset="">
                                </div>
                                <h5 class="card-title">Nama Produk</h5>
                                <p class="card-text">Deskripsi</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            <div class="card-footer">
                                <p class="card-text">Rp. ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header text-right">
                                <a href="#" class="mr-2"><span class="fa fa-pencil" style="color:black"></span></a>
                                <a href="#" class="ml-1"><span class="fa fa-trash" style="color:black"></span></a>
                                <!-- <button>x</button> -->
                            </div>
                            <div class="divider"></div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('public/image/logo_ubeka.png')}}" class="w-50" alt="" srcset="">
                                </div>
                                <h5 class="card-title">Nama Produk</h5>
                                <p class="card-text">Deskripsi</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            <div class="card-footer">
                                <p class="card-text">Rp. ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header text-right">
                                <a href="#" class="mr-2"><span class="fa fa-pencil" style="color:black"></span></a>
                                <a href="#" class="ml-1"><span class="fa fa-trash" style="color:black"></span></a>
                                <!-- <button>x</button> -->
                            </div>
                            <div class="divider"></div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('public/image/logo_ubeka.png')}}" class="w-50" alt="" srcset="">
                                </div>
                                <h5 class="card-title">Nama Produk</h5>
                                <p class="card-text">Deskripsi</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            <div class="card-footer">
                                <p class="card-text">Rp. ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header text-right">
                                <a href="#" class="mr-2"><span class="fa fa-pencil" style="color:black"></span></a>
                                <a href="#" class="ml-1"><span class="fa fa-trash" style="color:black"></span></a>
                                <!-- <button>x</button> -->
                            </div>
                            <div class="divider"></div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('public/image/logo_ubeka.png')}}" class="w-50" alt="" srcset="">
                                </div>
                                <h5 class="card-title">Nama Produk</h5>
                                <p class="card-text">Deskripsi</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            <div class="card-footer">
                                <p class="card-text">Rp. ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header text-right">
                                <a href="#" class="mr-2"><span class="fa fa-pencil" style="color:black"></span></a>
                                <a href="#" class="ml-1"><span class="fa fa-trash" style="color:black"></span></a>
                                <!-- <button>x</button> -->
                            </div>
                            <div class="divider"></div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('public/image/logo_ubeka.png')}}" class="w-50" alt="" srcset="">
                                </div>
                                <h5 class="card-title">Nama Produk</h5>
                                <p class="card-text">Deskripsi</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            <div class="card-footer">
                                <p class="card-text">Rp. ...</p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

</section>

<div id="DeleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">

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

<!-- <script type="text/javascript">
    function deleteData(id) {
        var id = id;
        var url = '';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }

</script> -->

@endsection
