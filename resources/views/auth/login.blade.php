<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Masuk UBEEKA</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{asset('public/login/css/bootstrap-login-form.min.css')}}" />
</head>

<body>
  <!-- Start your project here-->

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
  </style>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="{{asset('public/image/logo_ubeeka.jpeg')}}" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert" id="notif">

                                    <span data-notify="icon" class="fa fa-bell"></span>
                                    <span data-notify="title">Gagal</span> <br>
                                    <span data-notify="message">{{session()->get('error')}}</span>
                                </div>
                                @endif
            <h2 class="mb-2">Masuk ke <span style="color: #eb1207;">UBEEKA</span></h2>
            <form  action="{{route('postlogin')}}" method="POST" enctype="multipart/form-data">
              @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" required id="form1Example13" name="email" id="email" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" required id="form1Example23" name="password" id="password" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input 
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="form1Example3"
                  checked
                />
                <label class="form-check-label" for="form1Example3">Ingat Saya</label>
              </div>
              <a href="#">Lupa Password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-warning btn-lg btn-block">Masuk</button>

            <!-- <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-muted">Atau</p>
            </div>

            <a class="btn btn-primary btn-lg btn-block" style="background-color: #ed2009" href="#" role="button">
              <i class="fab fa-google me-2"></i>Lanjutkan dengan Google
            </a> -->
            <!-- <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#" role="button">
              <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> -->
            <div class="d-flex justify-content-around align-items-center mt-4 mb-3">
                <span>Belum Punya Akun ?<a href="{{route('register')}}"> Daftar Disini</a></span>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{asset('public/login/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

  <script src="{{asset('public/admin/assets/js/swal.js')}}"></script>  
    
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


