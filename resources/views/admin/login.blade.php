<!-- Bootstrap -->
<link href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="{{asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{asset('assets')}}/admin/build/css/custom.min.css" rel="stylesheet">

<!-- Favicons-->
<link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('assets')}}/img/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('assets')}}/img/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('assets')}}/img/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('assets')}}/img/apple-touch-icon-144x144-precomposed.png">

<!-- GOOGLE WEB FONT -->
<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

<!-- COMMON CSS -->
<link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/vendors.css" rel="stylesheet">

<!-- ALTERNATIVE COLORS CSS -->
<link href="#" id="colors" rel="stylesheet">

<!-- CUSTOM CSS -->
<link href="css/custom.css" rel="stylesheet">


    <section id="hero" class="login">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                    <div id="login">
                        <div class="text-center"><img src="{{asset('assets')}}/img/logo_sticky.png" alt="Image" width="160" height="34"></div>
                        @include('home.messages')
                        <hr>
                        <form action="{{route('loginadmincheck')}}" method="post">
                            @csrf
                            <a href="#0" class="social_bt facebook">Login with Facebook</a>
                            <a href="#0" class="social_bt google">Login with Google</a>
                            <div class="divider"><span>Or</span></div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class=" form-control " placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password"  class=" form-control" placeholder="Password">
                            </div>
                            <p class="small">
                                <a href="#">Forgot Password?</a>
                            </p>
                            <button type="submit" class="btn_full">Sign in</button>
                            <a href="/registeruser" class="btn_full_outline">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="{{asset('assets')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets')}}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('assets')}}/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('assets')}}/admin/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets')}}/admin/build/js/custom.min.js"></script>

    <!-- Common scripts -->
    <script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets')}}/js/common_scripts_min.js"></script>
    <script src="{{asset('assets')}}/js/functions.js"></script>

    <!-- Specific scripts -->
    <script src="{{asset('assets')}}/assets/validate.js"></script>
