
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> Login</title>
    <script type="text/javascript">
        window.onbeforeunload = function () {}
        this.history.forward(1);
    </script>
    <meta Http-Equiv="Cache-Control" Content="no-cache" />
    <meta Http-Equiv="Pragma" Content="no-cache" />
    <meta Http-Equiv="Expires" Content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link type="image/x-icon" href="assets/images/logo.png" rel="shortcut icon" />

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="Scripts/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet" />

    <!-- Custom styles for this template-->
        <link href="Scripts/vendor/css/sb-admin-2.min.css" rel="stylesheet" />
        <link href="Scripts/vendor/css/compile.css" rel="stylesheet" />
    <!-- Bootstrap core JavaScript-->

    <script src="/Scripts/vendor/jquery/jquery.min.js"></script>
    <script src="/Scripts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/Scripts/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/Scripts/vendor/js/sb-admin-2.min.js"></script>
    <script src="/Scripts/jquery.validate.min.js" type="text/javascript"></script>

    <!-- Start of Zendesk Chat code -->
    
    <!-- End of Zendesk Chat code -->

   
</head>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e7b33723adf4bf6a2ac1d22fecefed6ddc19a2d9';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

<body class="bg-gradient-primary">

    <script>
        function changeLanguage(element) {
            var selectedLang = $(element).attr('data-name');
            setCookie("cultureName", selectedLang, 1);
            location.reload(true);
        }
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>

    <div class="container-nca spc-xs">
        <div class="row justify-content-center   align-content-center main-row">
            <div class="col-xl-12 col-lg-12 col-md-12 " style="padding-right:0px;">
                <div class="card o-hidden border-0 shadow-desk">
                    <div class="card-body p-0">
                        <div class="row login-row">
                            <div class="col-lg-12 bg-login-image login-form-col">
                                <div class="login-form-container ">
                                    <div class="language-selector">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                <span class="dropdown-icon"></span>
                                                <span class="language-label pl-2 font-weight-bold">EN</span>
                                            </button>

                                            

                                        </div>
                                    </div>

                                    <div class="p-5-nca form-wrapper">
                                        

<style>
    .login_global_logo {
        width: 340px;
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .login_icm_logo {
        width: 220px;
        margin-bottom: 0.5rem;
    }
    @media screen and (max-width: 200px) {
        .rem35 {
            padding-left: 0rem !important;
            padding-right: 0rem !important;
        }
    }
</style>
<form class="form-horizontal" action="{{ route('login') }}"  method="POST" >
    @csrf
 
        <h3 class="text-center">
                <div class="text-center mt-5 pt-3">
                     <a href="/"> <img class="login_icm_logo" src="assets/images/logo.png" alt="" /></a>
                    <div class="h4 text-gray-900 mb-0">
                        Sign in
                    </div>
                </div>
        </h3>
    </div>
    <div id="error_block" class="error-sc">
        
        <span class="field-validation-valid" data-valmsg-for="captcha" data-valmsg-replace="true"></span>
        <span class="field-validation-valid" data-valmsg-for="login_password" data-valmsg-replace="true"></span>
    </div>
    <span id="reauth-email" class="reauth-email"></span>
    <div class="form-group rem35 mt-10">
        <div class="d-flex" style="position:relative;">
            <style>
            .form-ic:focus {
                border-bottom: 1px solid #34E834 !important;
            }

            </style>
            <input type="email" id="inpLogin" name="email" class="form-control form-ic" placeholder="Email" value="{{ old('email') }}" maxlength="75" required />
            <span class="icon-email">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7329 2.10616L16.1025 1.87516H15.6667H2.33335H1.8975L2.2671 2.10616L8.93377 6.27283L9.00002 6.31424L9.06627 6.27283L15.7329 2.10616ZM15.6667 12.1252H15.7917V12.0002V3.66683V3.4413L15.6004 3.56083L9.00002 7.68609L2.3996 3.56083L2.20835 3.4413V3.66683V12.0002V12.1252H2.33335H15.6667ZM15.6667 0.458496C16.5143 0.458496 17.2084 1.15253 17.2084 2.00016V12.0002C17.2084 12.8478 16.5143 13.5418 15.6667 13.5418H2.33335C1.48572 13.5418 0.791687 12.8478 0.791687 12.0002V2.00016C0.791687 1.15253 1.48572 0.458496 2.33335 0.458496H15.6667Z" fill="#565656" stroke="#353535" stroke-width="0.25" />
                </svg>
            </span>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror    
            <span toggle="#inpLogin" class="toggle-login  d-none" style=""></span>
        </div>
    </div>
    <div class="form-group rem35 mt-5">
        <div class="d-flex" style="position:relative;">
            <input id="inpPassword" type="password" class="form-control form-ic required" placeholder="Password" name="password" value="" maxlength="75" />
            <span class="icon-password">
                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1429 5.85735V4.28592C10.1404 3.45315 9.80849 2.6552 9.21962 2.06634C8.63076 1.47747 7.83281 1.14555 7.00004 1.14307C6.16726 1.14555 5.36931 1.47747 4.78045 2.06634C4.19159 2.6552 3.85966 3.45315 3.85718 4.28592V5.85735" stroke="#565656" stroke-miterlimit="10" stroke-linecap="square" />
                    <path d="M11.7143 7.95264H2.28572C1.41785 7.95264 0.714294 8.65619 0.714294 9.52407V15.286C0.714294 16.1538 1.41785 16.8574 2.28572 16.8574H11.7143C12.5822 16.8574 13.2857 16.1538 13.2857 15.286V9.52407C13.2857 8.65619 12.5822 7.95264 11.7143 7.95264Z" stroke="#565656" stroke-miterlimit="10" stroke-linecap="square" />
                    <path d="M7 13.1909V14.7623" stroke="#565656" stroke-miterlimit="10" stroke-linecap="square" />
                    <path d="M7.00002 13.1907C7.86789 13.1907 8.57145 12.4872 8.57145 11.6193C8.57145 10.7514 7.86789 10.0479 7.00002 10.0479C6.13214 10.0479 5.42859 10.7514 5.42859 11.6193C5.42859 12.4872 6.13214 13.1907 7.00002 13.1907Z" stroke="#565656" stroke-miterlimit="10" stroke-linecap="square" />
                </svg>
            </span>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror   
            <div class="togglePassword showOrHide" title="Show password"></div>
            <span toggle="#inpPassword" class="toggle-password  d-none"></span>
        </div>
    </div>
    <div class="form-group rem35 mt-2">
        <div class="pl-0 custom-control custom-checkbox regular" style="text-align:right">
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        </div>
    </div>
    <div class="form-group rem35 pt-0">
        <input class="btn btn-block mt-3"   {{ __('Login') }}
               style="color: #000000 !important; background:#34E834; font-weight: bold; font-size: 14px;" type="submit" value="Login" />
    </div>
    <style>
        .g-recaptcha > div {
            margin: 0 auto;
        }

        span#safe {
            position: absolute !important;
        }
    </style>
</form>

<div class="form-group mt-2">
    <div class="text-center mt-1 text-ic">
        <span class="font-weight-bold">
            Don&#39;t have an account?
        </span>
    </div>
    <div class="text-center mt-2 ">
        <style>
            .link-ic:hover {
                color: #34E834;

            }
        </style>
       
        <span class="font-weight-bold text-ic "> </span>
        <a href="{{route('register')}}" class="regular  pr-1">
            <span class="font-weight-regular  link-ic ">Open a Real Account</span>
        </a>
    </div>

</div>


<script type="text/javascript" >

    $.validator.setDefaults({
        ignore: []
    });

    function recaptcha_callback(response) {
        $("#RecaptchaResponse").val(response);
        $('#RecaptchaResponse').valid();
    }

    function recaptcha_expired_callback() {
        $("#RecaptchaResponse").val('');
        $('#RecaptchaResponse').valid();
    }

    window.addEventListener('load', () => {
        
        const $recaptcha = document.querySelector('#g-recaptcha-response');
        if ($recaptcha) {
            $recaptcha.setAttribute('required', 'required');
        }
    })
 
    $(document).ready(function () {

        var isSessionExpiry = 'False' == 'True' ? true : false;
        toggleLogonVisibility(isSessionExpiry);
        localStorage.removeItem('sidebar');
        $("input[name='forgot_pass']").bind('change', function () { $("#forgot_pass_form").validate().element(this) });
        jQuery.validator.messages.required = "";
        $("#loginForm").validate({
            errorClass: "input-validation-error"
        });

        $('#return-to-logon').click(function () {
            window.history.replaceState(null, null, window.location.pathname);
            $('#logon-session-expiry').fadeOut(500);
            setTimeout(function () {
                $('.container-nca.spc-xs').show();
            }, 500);
        });
    });
    function toggleLogonVisibility(isSessionExpiry) {
        if (isSessionExpiry) {
            $('.container-nca.spc-xs').hide();
            $('#logon-session-expiry').css({ 'height': ($(".container-nca.spc-xs").height() + 'px') });
            $('body').css({ 'overflow-y': 'scroll' });
            $('#logon-session-expiry').show();
        }
        else {
            $('#logon-session-expiry').hide();
            $('.container-nca.spc-xs').show();
        }
    }
</script>
<script type="text/javascript" src="/Content/ICMarkets/js/jqueryrotate.2.1.js"></script>
<script type="text/javascript">

    $(".alert").find(".close").on("click", function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).closest(".alert").slideUp(400);
    });

    jQuery(document).ready(function () {
        var degree = Math.random() * 260 + 100;
        var time = degree * (70 + Math.random() * 50);
        var x = 0;
        if (degree % 2 == 0)
            x = degree;
        else
            x = -degree;
        jQuery("#safe").rotate({ animateTo: x, duration: time });
    });

    $('#inpPassword').keypress(function () {
        var degree = Math.random() * 100 + 50;
        var time = degree * (Math.random() * 30);
        var x = 0;
        if (degree % 2 == 0)
            x = degree;
        else
            x = -degree;
        jQuery("#safe").rotate({ animateTo: x, duration: time });
    });

    $('.showOrHide').click(function (e) {
        var target = e.currentTarget;
        $(target).hasClass('show') ? hidePassword($(target)) : showPassword($(target));
    });

    function showPassword(e) {
        e.addClass('show');
        e.attr('title', 'Hide password');
        $('#inpPassword').prop('type', 'text');
    }

    function hidePassword(e) {
        e.removeClass('show');
        e.attr('title', 'Show password');
        $('#inpPassword').prop('type', 'password');
    }

</script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="logon-session-expiry" style="display:none;color:#ffffff;text-align:center">
        <div id="wrap">
            <div id="main" class="container">
                <div class="container flex loginPageHeader">
                    <div class="LogoWrp">
                        <img id="profile-img" style="width:200px;" class="profile-img-card" src="assets/images/logo.png" />
                    </div>
                </div>
            </div>
        </div>
        <h1 class="h2 text-ic mb-0 font-weight-regular" style="margin:10rem 0 0 0; color:black">Your session has timed out.</h1>
        <style>
            .blue-ic {
                color: #1e5da4 !important;
            }
        </style>
        <h1 class="h4 text-ic mb-0" style="margin:2rem 0 0 0"><a class="font-weight-bold green-ic" id="return-to-logon" style="cursor:pointer;font-weight:700">Click here</a> to log in again.</h1>
    </div>
        
</body>
</html>

<script>
    $(document).ready(function () {

        const cultureName = getCookie('cultureName');
        const cultureFlagImage = `/Content/ICMarkets/images/flag-${cultureName}.jpg`;
        $('#selectedLanguageImage').attr('src', cultureFlagImage);
        $('.active-lang span').text(cultureName.toLocaleUpperCase());

        //to persist language name in dropdown after selecting language
        var host = window.location.hostname;
        if (host.includes("ictrading")) {
            $("#dropdownMenuButton").find("img").attr('src', cultureFlagImage);
        }
        $("#dropdownMenuButton").find("span.language-label").text(cultureName.toLocaleUpperCase());

        let langDropDownIsOpen = false;
        $('.active-lang').on('click', function (e) {
            e.stopPropagation();
            if (!langDropDownIsOpen) {
                $('.lang-list-dropdown').show();
                langDropDownIsOpen = true;
            }
            else {
                $('.lang-list-dropdown').hide();
                langDropDownIsOpen = false;
            }
        });
        $('body').on('click', function () {
            $('.lang-list-dropdown').hide();
            langDropDownIsOpen = false;
        });
        $('.lang-list-dropdown ul li').on('click', function () {
            var getFlagImgSrc = $(this).find('img').attr('src');
            var getCountryName = $(this).attr('data-name');
            $('.active-lang > span').text(getCountryName);
            $('.active-lang > img').attr('src', getFlagImgSrc);
        });

        if (window.location != window.parent.location) {
            $(".language-selector").hide()
        }
    });
</script>