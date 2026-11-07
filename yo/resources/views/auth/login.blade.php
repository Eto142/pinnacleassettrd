
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fundformeprogram| Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="favicon.png">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body style="background-color: rgb(219, 227, 211)">
    <div class="account-pages my-5 pt-sm-5" style="background-color: rgb(219, 227, 211)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="" style="background-color:#004646">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="" style="color: white">Welcome Back !</h5>
                                        <p style="color: white">Sign in to continue to Fundformeprogram.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a class="auth-logo-light" href="/">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                                <img src="favicon.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>

                                <a class="auth-logo-dark" href="/">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                                <img src="favicon.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <p class="response"></p>
                             

                                   <form class="form-horizontal" action="{{ route('login') }}"  method="POST" >
                                         @csrf
                                      
                                        <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}"  placeholder="Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                       
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                             <input type="password" name="password" class="form-control password-field @error('password') is-invalid @enderror" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="password">
    <button class="btn btn-light password-toggle" type="button" id="password-addon">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0"/>
            <path fill="currentColor" d="M12 7a2 2 0 0 0-2 2a1 1 0 0 0 2 0a1 1 0 0 1 1-1a1 1 0 0 1 1 1a1 1 0 0 0 2 0a2 2 0 0 0-2-2z"/>
        </svg>
    </button>
                                        
                                                                         
                                       @error('password')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror                                                </div>
                                    </div>

                                     <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember-check">
                                                
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                            </label>
                                        </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-success waves-effect waves-light" style="background-color: #004646"  type="submit">  {{ __('Login') }}</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        
                                        <p>Don't have an account ? <a href="{{route('register')}}" class="fw-medium text-primary"> Signup now </a> </p>
                                    </div>

                                    <div class="mt-4 text-center">
                                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                   
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->

    <script>
        $(document).ready(function() {
            $('.password-toggle').on('click', function() {
                var passwordField = $(this).closest('.input-group').find('.password-field');
                var passwordFieldType = passwordField.attr('type');
                
                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                } else {
                    passwordField.attr('type', 'password');
                }
            });
        });
        </script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- validation init -->
    <script src="assets/js/pages/validation.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- Bootstrap Toasts Js -->
    <script src="assets/js/pages/bootstrap-toastr.init.js"></script>

</body>

</html>
<div class="position-fixed top-0 end-0 p-2" style="z-index: 1005">
    <div id="ErrorToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="https://globaltb.online/user/logo.png" alt="" class="me-2" height="18">
            <strong class="me-auto">Error</strong>
            <small>Now..</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="background-color:red;">
            Hello, world! This is a toast message.
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#login_form').on('submit', function(e) {
            e.preventDefault();
            $(".response").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")
            var email = $('#email').val();
            var password = $('#password').val();

            if (email == '' || password == '') {
                $(".toast-body").html('Enter all field');
                $("#ErrorToast").toast("show");
                $(".response").html("")
                return false;
            }
            $.ajax({
                type: "POST",
                url: 'https://speedifymarkets.net/custom-login',
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    //alert('error');
                    $(".response").html(data.content);
                    if (data.content == 'Successful') {
                        $(".response").html(data.message);
                        window.location = data.redirect;

                    } else
                    if (data.content == 'Error') {
                        $(".response").html(data.message);
                        window.location = data.redirect;
                    }
                },
                error: function(data, errorThrown) {
                    Swal.fire('The Internet?', 'Check network connection!', 'question');
                }
            });
        });
    });
</script>

<script>
    function login(id) {
        id.innerHTML = "Verifying account..";
        setTimeout(function() {
            id.innerHTML = "Log in";
        }, 3000);
    }
</script>