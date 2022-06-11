<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.ansonika.com/citytours/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 14:35:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Beste Çetin">
    <link rel="icon" href="@yield("icon")" type="image/x-icon">


    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- COMMON CSS -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/vendors.css" rel="stylesheet">

    <!-- ALTERNATIVE COLORS CSS -->
    <link href="#" id="colors" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{asset('assets')}}/css/custom.css" rel="stylesheet">
    <!-- REVOLUTION SLIDER CSS -->
    <link href="{{asset('assets')}}/layerslider/css/layerslider.css" rel="stylesheet">
    @yield("head")
</head>

<body>
@include("home.header")

@section('slider')
@show


@yield('content')


@include("home.footer")

@yield('foot')
<!-- Common scripts -->
<script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets')}}/js/common_scripts_min.js"></script>
<script src="{{asset('assets')}}/js/functions.js"></script>

<!-- Specific scripts -->
<script src="{{asset('assets')}}/assets/validate.js"></script>
<!-- Specific scripts -->
<script src="{{asset('assets')}}/js/jquery-migrate.min.js"></script>
<script src="{{asset('assets')}}/layerslider/js/greensock.js"></script>
<script src="{{asset('assets')}}/layerslider/js/layerslider.transitions.js"></script>
<script src="{{asset('assets')}}/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1170,
            skinsPath: 'layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>

</body>
</html>
