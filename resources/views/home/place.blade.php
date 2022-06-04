
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
        @include('home.messages')

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
                    <div id="general_rating">{{$data->comment->count('id')}} Reviews
                       @php
                       $avarage=$data->comment->average('rate');
                        if($avarage==0)
                            $state="Not Yet Rated";
                        elseif($avarage>4)
                            $state="Super";
                        elseif($avarage>3)
                            $state="Excellent";
                        elseif($avarage>2)
                            $state="Good";
                        else
                            $state="Sufficient";
                       @endphp
                    </div>
                    <div id="score_detail"><span>{{number_format($avarage,1)}}</span>{{$state}}<small>(Based on {{$data->comment->count('id')}} reviews)</small>
                    </div>
                    <!-- End general_rating -->
                    <div class="row" id="rating_summary">
                        <div class="col-md-6">
                            <ul>
                                <li><strong>Rate</strong>
                                    <div class="rating">
                                        @if($avarage==0)
                                            <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        @elseif($avarage<1)
                                            <i class="icon-frown voted"></i></i>
                                        @elseif($avarage<2)
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        @elseif($avarage<3)
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        @elseif($avarage<4)
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        @else($avarage<5)
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End row -->
                    <hr>
                    @foreach($reviews as $rs)
                    <div class="review_strip_single">
                        <i class="icon_set_1_icon-70"></i>
                        <small> - {{$rs->created_at}} -</small>
                        <h4>{{$rs->user->name}}</h4>
                            <strong>{{$rs->subject}}</strong>
                            <p>{{$rs->review}} </p>
                        <div class="rating">
                        @if($rs->rate==5)
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                        @elseif($rs->rate==4)
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                        @elseif($rs->rate==3)
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        @elseif($rs->rate==2)
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        @else($rs->rate==1)
                            <i class="icon-frown voted"></i></i>
                        @endif
                        </div>
                    </div>
                @endforeach
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
    <!-- Modal Review -->
    <div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="message-review">
                    </div>
                    <form method="post" action="{{route("storecomment")}}"  id="demo-form2">
                        @csrf
                        <input name="place_id" id="tour_name" type="hidden" value="{{$data->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="subject" id="subject" type="text" placeholder="Subject" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Please review</label>
                                    <select class="form-control" name="rate" id="rate">
                                        <option value="1">Low</option>
                                        <option value="2">Sufficient</option>
                                        <option value="3">Good</option>
                                        <option value="4">Excellent</option>
                                        <option value="5">Super</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="form-group">
                            <textarea name="review" id="review" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="verify_review" class=" form-control" placeholder="Are you human? 3 + 1 =">
                        </div>
                        <div class="form-group">
                            @auth
                                <input type="submit" value="Submit" class="btn_1" >
                            @else
                                <a href="/login" class="btn_1">For Submit Your Review, Please Login</a>
                            @endauth
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal review -->
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


