<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Sign Up</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template, Real Estate Management Admin Template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="{{url('assets_new')}}/images/favicon.ico">

     <!-- Vendor css (Require in all Page) -->
     <link href="{{url('assets_new')}}/css/vendor.min.css" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="{{url('assets_new')}}/css/icons.min.css" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="{{url('assets_new')}}/css/app.min.css" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
     <script src="{{url('assets_new')}}/js/config.min.js"></script>

</head>

<body class="authentication-bg">

     <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-5">
                         <div class="card auth-card">
                              <div class="card-body px-3 py-5">
                                   
                                   <h2 class="fw-bold text-uppercase text-center fs-18">Sign Up</h2>
                                   <p class="text-muted text-center mt-1 mb-4">Enter your email address and password to access.</p>
                                     <x-auth-session-status class="mb-4" :status="session('status')" />
                                   <div class="px-4">
                                        <form method="POST" action="{{ route('register') }}" >
                                            @csrf
                                            <div class="mb-3">
                                                  <label class="form-label" for="example-email">Nama</label>
                                                  <input type="text" id="example-email" name="name" class="form-control bg-light bg-opacity-50 border-light py-2" placeholder="Enter your name">
                                                  <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                             </div>
                                             <div class="mb-3">
                                                  <label class="form-label" for="example-email">Email</label>
                                                  <input type="email" id="example-email" name="email" class="form-control bg-light bg-opacity-50 border-light py-2" placeholder="Enter your email">
                                                  <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                             </div>
                                             <div class="mb-3">
                                                  <!-- <a href="auth-password.html" class="float-end text-muted text-unline-dashed ms-1">Reset password</a> -->
                                                  <label class="form-label" for="example-password">Password</label>
                                                  <input type="password" id="example-password" name="password" class="form-control bg-light bg-opacity-50 border-light py-2" placeholder="Enter your password">
                                                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                             </div>
                                             <div class="mb-3">
                                                  <!-- <a href="auth-password.html" class="float-end text-muted text-unline-dashed ms-1">Reset password</a> -->
                                                  <label class="form-label" for="example-password">Konfirmasi Password</label>
                                                  <input type="password" id="example-password" name="password_confirmation" class="form-control bg-light bg-opacity-50 border-light py-2" placeholder="Enter your password">
                                                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                             </div>
                                             <!-- <div class="mb-3">
                                                  <div class="form-check">
                                                       <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                       <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                                  </div>
                                             </div> -->

                                             <div class="mb-1 text-center d-grid">
                                                  <button class="btn btn-danger py-2 fw-medium" type="submit">Sign Up</button>
                                             </div>
                                        </form>

                                        <!-- <p class="mt-3 fw-semibold no-span">OR sign with</p>

                                        <div class="text-center">
                                             <a href="javascript:void(0);" class="btn btn-outline-light shadow-none"><i class='bx bxl-google fs-20'></i></a>
                                             <a href="javascript:void(0);" class="btn btn-outline-light shadow-none"><i class='ri-facebook-fill fs-20'></i></a>
                                             <a href="javascript:void(0);" class="btn btn-outline-light shadow-none"><i class='bx bxl-github fs-20'></i></a>
                                        </div> -->
                                   </div> <!-- end col -->
                              </div> <!-- end card-body -->
                         </div> <!-- end card -->

                         <p class="mb-0 text-center text-white">{{ __('Already registered?') }} <a href="{{ route('login') }}" class="text-reset text-unline-dashed fw-bold ms-1">Sign In</a></p>

                    </div> <!-- end col -->
               </div> <!-- end row -->
          </div>
     </div>

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="{{url('assets_new')}}/js/vendor.js"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{url('assets_new')}}/js/app.js"></script>


</body>

</html>