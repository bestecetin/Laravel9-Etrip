
@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{Storage::url($data->image)}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{$data->title}}</h1>
                        <span>{{$data->location}}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>{{$data->category->title}}</li>
                    <li>{{$data->title}}</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8" id="single_tour_desc">
                    <div id="single_tour_feat">
                        <ul>
                            <li><i class="icon_set_1_icon-4"></i>{{$data->category->title}}</li>
                            <li><i class="icon_set_1_icon-37"></i>{{$data->country}}</li>
                            <li><i class="icon_set_1_icon-41"></i>{{$data->city}}</li>
                            <li>
                                <i class="icon_set_1_icon-83"></i>
                                @if($data->working_hours_start=="00:00" & $data->working_hours_end=="00:00")
                                  Open Now
                                @else
                                    {{$data->working_hours_start}}-{{$data->working_hours_end}}
                                @endif
                            </li>
                            <li><i class="icon_set_1_icon-90"></i>{{$data->phone}}</li>
                        </ul>
                    </div>

                    <p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a></p>
                    <!-- Map button for tablets/mobiles -->

                <div id="Img_carousel" class="slider-pro">
                    <div class="sp-slides">
                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{Storage::url($data->image)}}">
                            </div>
                        @foreach($images as $rs)
                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{Storage::url($rs->image)}}">
                            </div>
                        @endforeach
                    </div>
                    <div class="sp-thumbnails">
                        <img alt="Image" class="sp-thumbnail" src="{{Storage::url($data->image)}}">
                        @foreach($images as $rs)
                        <img alt="Image" class="sp-thumbnail" src="{{Storage::url($rs->image)}}">
                        @endforeach
                    </div>
                </div>
            <hr>
                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-lg-9">
                            <h4>{{$data->title}}</h4>
                            <p>
                                {!!$data->description!!}
                            </p>
                            <h4>Details</h4>
                            <p>
                                {{$data->detail}}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Schedule</h3>
                        </div>
                        @if($data->working_hours_start=="00:00" & $data->working_hours_end=="00:00" & $data->working_days=="Always Open" )
                            <strong>Always Open</strong>
                        @else
                            <div class="col-lg-9">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td>
                                                Monday
                                            </td>
                                            <td>
                                                {{$data->working_hours_start}}-{{$data->working_hours_end}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tuesday
                                            </td>
                                            <td>
                                                {{$data->working_hours_start}}-{{$data->working_hours_end}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Wednesday
                                            </td>
                                            <td>
                                                {{$data->working_hours_start}}-{{$data->working_hours_end}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Thursday
                                            </td>
                                            <td>
                                                <span class="label label-danger">{{$data->working_hours_start}}-{{$data->working_hours_end}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Friday
                                            </td>
                                            <td>
                                                {{$data->working_hours_start}}-{{$data->working_hours_end}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Saturday
                                            </td>
                                            <td>
                                                @if($data->working_days=="Mid-Week" )
                                                    <span class="label label-danger">Closed</span>
                                                @else
                                                    {{$data->working_hours_start}}-{{$data->working_hours_end}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Sunday
                                            </td>
                                            <td>
                                                @if($data->working_days=="Except Sunday"|| $data->working_days=="Mid-Week" )
                                                    <span class="label label-danger">Closed</span>
                                                @else
                                                    {{$data->working_hours_start}}-{{$data->working_hours_end}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong><em>Last Admission</em></strong>
                                            </td>
                                            <td>
                                                <strong>{{$data->working_hours_end}}</strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
            <hr>
            <div class="row">
                <div class="col-lg-3">
                    <h3>Reviews </h3>
                    <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a>
                </div>
                <div class="col-lg-9">
                    <div id="general_rating">11 Reviews
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        </div>
                    </div>
                    <!-- End general_rating -->
                    <div class="row" id="rating_summary">
                        <div class="col-md-6">
                            <ul>
                                <li>Position
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                                <li>Tourist guide
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Price
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                                <li>Quality
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End row -->
                    <hr>
                    <div class="review_strip_single">
                        <img src="{{asset('assets')}}/img/avatar1.jpg" alt="Image" class="rounded-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        </div>
                    </div>
                    <!-- End review strip -->

                    <div class="review_strip_single">
                        <img src="{{asset('assets')}}/img/avatar3.jpg" alt="Image" class="rounded-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        </div>
                    </div>
                    <!-- End review strip -->

                    <div class="review_strip_single last">
                        <img src="{{asset('assets')}}/img/avatar2.jpg" alt="Image" class="rounded-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        </div>
                    </div>
                    <!-- End review strip -->
                </div>
            </div>
        </div>
        </div>
        <!--End  single_tour_desc-->

        </div>
        <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
    <!-- End main -->
    <!-- Common scripts -->
    <script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets')}}/js/common_scripts_min.js"></script>
    <script src="{{asset('assets')}}/js/functions.js"></script>


    <!-- Gallery -->
    <script src="{{asset('assets')}}/js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('#Img_carousel').sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: false,
                smallSize: 500,
                startSlide: 0,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
    </script>

    <!-- Date and time pickers -->
    <script>
        $(function() {
            $('input.date-pick').daterangepicker({
                autoUpdateInput: true,
                parentEl:'.scroll-fix',
                singleDatePicker: true,
                autoApply: true,
                minDate:new Date(),
                showCustomRangeLabel: false,
                locale: {
                    format: 'MM-DD-YYYY'
                }
            }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('DD-MM-YYYY') + ' (predefined range: ' + label + ')');
            });
            $('input.time-pick').timepicker({
                appendWidgetTo: '.scroll-fix-time',
                minuteStep: 15,
                showInpunts: false
            })
        });
    </script>

    <!--Review modal validation -->
    <script src="{{asset('assets')}}/assets/validate.js"></script>


    <!-- Map
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUQKuq-IHkzCt4VoGq2z4XYJ_ip7ZRkws"></script>
    <script src="{{asset('assets')}}/js/map.js"></script>
    <script src="{{asset('assets')}}/js/infobox.js"></script>-->


@endsection


