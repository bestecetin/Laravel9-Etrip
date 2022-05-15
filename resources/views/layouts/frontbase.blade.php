<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/citytours/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 14:35:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>@yield("title")</title>

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

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/rev-slider-files/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/rev-slider-files/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/rev-slider-files/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/rev-slider-files/css/navigation.css">

    <!-- ALTERNATIVE COLORS CSS -->
    <link href="#" id="colors" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{asset('assets')}}/css/custom.css" rel="stylesheet">
 @yield("head")
</head>

<body>
@include("home.header")
@show

@section('slider')

@show

@yield('content')


@include("home.footer")
@yield('foot')
</body>
</html>
