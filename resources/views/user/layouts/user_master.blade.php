<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ubeeka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('public/landing_page/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/landing_page/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('public/landing_page/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('public/landing_page/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin/assets/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('user.layouts.user_nav')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    @yield('content')
   
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('user.layouts.user_footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/landing_page/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/landing_page/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/landing_page/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('public/landing_page/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('public/landing_page/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('public/landing_page/js/main.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/swal.js')}}"></script>  
    <script src="{{asset('public/admin/assets/select2/js/select2.full.min.js')}}"></script>
    
<script type="text/javascript">
    $(document).ready(function() {

        @if(session()->has('message'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{session()->get('message')}}",
        })
        @endif


    });
    </script>
        <script>
        $(".select2").select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

       

    </script>
           
   
   @yield('js')
   

</body>

</html>
