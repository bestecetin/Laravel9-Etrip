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
