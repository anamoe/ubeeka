<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Daftar UBEEKA</title>
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
            <h2 class="mb-2">Daftar ke <span style="color: #fc4300;">UBEEKA</span></h2>
          <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" required id="form1Example11" name="nama" id="nama" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example11">Nama Lengkap</label>
            </div>
            <div class="form-outline mb-4">
              <input type="email" required id="form1Example13" name="email" id="email" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" required id="form1Example23" name="password" id="password" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>
            <div class="form-outline mb-4">
              <input type="password" required id="form1Example24" name="ulang_password" id="ulang_password" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example24">Ulangi Password</label>
            </div>
            <!-- Syarat dan Ketentuan -->
            <div class="form-check mb-3">
                <input required class="form-check-input" type="checkbox" id="form1Example6" name="ketentuan" id="ketentuan" />
                <label class="form-check-label" for="form1Example6"><a href="#">Syarat dan Ketentuan</a></label>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-warning btn-lg btn-block">Daftar</button>
            <div class="d-flex justify-content-around align-items-center mt-4">
                <span>Sudah Punya Akun ?<a href="{{route('login')}}"> Masuk</a></span>
            </div>

            <!-- <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-muted">Atau</p>
            </div>

            <a class="btn btn-primary btn-lg btn-block mb-3" style="background-color: #ed2009" href="#" role="button">
              <i class="fab fa-google me-2"></i>Lanjutkan dengan Google
            </a> -->
            <!-- <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#" role="button">
              <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> -->

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
</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <link rel="stylesheet" href="{{asset('public/login/css/bootstrap-login-form.min.css')}}" />
</head>

<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-image: url('public/image/bg_gradient.jpg'); border-radius: 1rem 0 0 1rem;" >
                <div>
                    <span>Dapatkan Konsultasi Kesehatan, Produk Kesehatan, Produk Herbal</span> 
                </div>
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form>
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="{{asset('public/image/logo_ubeeka.jpeg')}}" class="rounded-circle" width="100" height="auto" alt="...">
                    </div>
  
                    <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke <span style="color: #fc4300;" class="h4 fw-bold mb-0">UBEEKA</span></h4>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-warning btn-lg btn-block" type="button">Login</button>
                    </div>
  
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum Punya Akun? <a href="{{route('register')}}" style="color: #fc4300;">Daftar Disini</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="{{asset('public/login/js/mdb.min.js')}}"></script>
  <script type="text/javascript"></script>
</body>

</html> -->


<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Masuk ke UBEEKA</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <link rel="stylesheet" href="{{asset('public/login/css/bootstrap-login-form.min.css')}}" />
</head>

<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-image: url('public/image/bg_gradient.jpg'); border-radius: 1rem 0 0 1rem">
                <p>
                    INI Adalah Register
                </p>
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form>
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="{{asset('public/image/logo_ubeeka.jpeg')}}" class="rounded-circle" width="100" height="auto" alt="...">
                    </div>
  
                    <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Daftar <span style="color: #fc4300;" class="h4 fw-bold mb-0">UBEEKA</span></h4>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-warning btn-lg btn-block" type="button">Daftar</button>
                    </div>
  
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Sudah Punya Akun? <a href="{{route('login')}}" style="color: #fc4300;">Masuk</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="{{asset('public/login/js/mdb.min.js')}}"></script>
  <script type="text/javascript"></script>
</body>

</html> -->