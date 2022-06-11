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

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="{{asset('assets')}}/rev-slider-files/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('assets')}}/rev-slider-files/js/extensions/revolution.addon.slicey.min.js"></script>

<script>
    var tpj = jQuery;
    var revapi45;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_45_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_45_1");
        } else {
            revapi45 = tpj("#rev_slider_45_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "bullet-bar",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 50,
                        space: 5,
                        tmp: ''
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
        if (revapi45) revapi45.revSliderSlicey();
    });
</script>
</body>
</html>
