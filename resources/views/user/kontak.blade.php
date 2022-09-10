@extends('user.layouts.user_master')


@section('content')
<style>
    .page-header {
        background: linear-gradient(rgba(6, 3, 21, .5), rgba(6, 3, 21, .5)), url(public/image/logistik2.jpeg) center center no-repeat;
        background-size: cover;
    }

</style>
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Kontak Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol> -->
        </nav>
    </div>
</div>
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container contact-page py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">Pertanyaan</h6>
                <p class="mb-5">Tanyakan sesuatu kepada kami bila anda menemukan keraguan</p>
                <div class="d-flex align-items-center">
                    <i class="fa fa-phone fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Telepon untuk Pertanyaan</h6>
                        <h3 class="text-primary m-0">+62 8223 543 4277</h3>
                    </div>
                </div>
                <br>
                <div class="bg-light p-4">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Nama Lengkap"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-12">
                                <input type="number" class="form-control border-0" placeholder="Nomor Telepon"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Pertanyaan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn rounded-1 btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                <div class="position-relative h-100">
                <div id="map" style="width: 100%; height: 600px; border-radius: 3px;">
                </div>
                    <!-- <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                </div>
            </div>
        </div>
    </div>
</div>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv-h2II7DbFQkpL9pDxNRq3GWXqS5Epts&callback=initialize"
    type="text/javascript"></script>

<script>
    function initialize() {
        var bounds = new google.maps.LatLngBounds();
        var peta = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: -8.146226,
                lng: 112.0303033
            },
            zoom: 9.5
        });
        var infoWindow = new google.maps.InfoWindow(),
            marker, i;

    }

</script>
@endsection
