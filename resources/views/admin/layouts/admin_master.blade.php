<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBEEKA</title>

    <link rel="stylesheet" href="{{asset('public/admin/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/admin/assets/vendors/chartjs/Chart.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('public/admin/assets/images/favicon.svg" type="image/x-icon')}}">

    <link rel="stylesheet" href="{{asset('public/admin/fa/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/fa/css/all.min.css')}}">

    <script src="{{asset('public/admin/fa/js/all.js')}}"></script>
    <script src="{{asset('public/admin/fa/js/all.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="text-center mt-3">
                    <img src="{{asset('public/image/logo_ubeka.png')}}" class="rounded-circle" width="125" height="auto"
                        alt="" srcset="">
                </div>

                @include('admin.layouts.admin_nav')

                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">

            @include('admin.layouts.admin_top')

            <div class="main-content container-fluid">
               @yield('content') 
            </div>

            @include('admin.layouts.admin_footer')
        </div>
    </div>
    <script src="{{asset('public/admin/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/app.js')}}"></script>

    <script src="{{asset('public/admin/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('public/admin/assets/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        
    </script>

    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/admin/js/swal.js')}}"></script>  
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
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
</body>

</html>
