
@extends('layouts.frontbase')

@section('title',$setting->title )

@section('description',$setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('slider')
    @include('home.slider')
@endsection
@section('content')
    <div class="white_bg">
        <div class="container margin_60">
            <div class="row small-gutters categories_grid">
                <div class="col-sm-12 col-md-6">
                    <a href="all_tours_list.html">
                        <img src="{{asset('assets')}}/img/img_cat_home_1.jpg" alt="" class="img-fluid">
                        <div class="wrapper">
                            <h2>Special Offers</h2>
                            <p>1150 Locations</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="row small-gutters mt-md-0 mt-sm-2">
                        <div class="col-sm-6">
                            <a href="all_tours_list.html">
                                <img src="{{asset('assets')}}/img/img_cat_home_2.jpg" alt="" class="img-fluid">
                                <div class="wrapper">
                                    <h2>Tours</h2>
                                    <p>800 Locations</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="all_hotels_list.html">
                                <img src="{{asset('assets')}}/img/img_cat_home_3.jpg" alt="" class="img-fluid">
                                <div class="wrapper">
                                    <h2>Hotels</h2>
                                    <p>650 Locations</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 mt-sm-2">
                            <a href="all_restaurants_list.html">
                                <img src="{{asset('assets')}}/img/img_cat_home_4.jpg" alt="" class="img-fluid">
                                <div class="wrapper">
                                    <h2>Restaurants</h2>
                                    <p>1132 Locations</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/categories_grid-->
        </div>
        <!-- /container -->
    </div>
    <!-- /white_bg -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>{{$placelist2[0]->city??null}} <span> Top </span>Places</h2>
        </div>

        <div class="owl-carousel owl-theme list_carousel add_bottom_30">
            @foreach($placelist2 as $rs)
            <div class="item">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="{{Storage::url($rs->image)}}" style="height:200px;width:400px" class="img-fluid" alt="image">
                            <div class="short_info">
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$rs->title}}</strong> {{$rs->city}}</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                        </div>
                        <!-- end rating -->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
        @endforeach
            <!-- /item -->

        </div>
        <!-- /carousel -->

        <p class="text-center add_bottom_30">
            <a href="all_tours_list.html" class="btn_1">View all Tours</a>
        </p>

        <hr class="mt-5 mb-5">

        <div class="main_title">
            <h2>{{$placelist3[0]->city??null}}<span> Top </span> Places</h2>
        </div>

        <div class="owl-carousel owl-theme list_carousel add_bottom_30">
            @foreach($placelist3 as $rs)
            <div class="item">
                <div class="hotel_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_hotel.html">
                            <img src="{{Storage::url($rs->image)}}" style="height:200px;width:400px" class="img-fluid" alt="image">
                            <div class="short_info">
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$rs->title}}</strong> {{$rs->city}}</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                        </div>
                        <!-- end rating -->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            @endforeach
        </div>
        <!-- /carousel -->

        <p class="text-center nopadding">
            <a href="all_hotels_list.html" class="btn_1">View all Hotels</a>
        </p>

    </div>
    <!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>Plan <span>Your Tour</span> Easly</h2>
                <p>
                    Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                </p>
            </div>
            <div class="row feature_home_2">
                <div class="col-md-4 text-center">
                    <img src="{{asset('assets')}}/img/adventure_icon_1.svg" alt="" width="75" height="75">
                    <h3>Itineraries studied in detail</h3>
                    <p>Suscipit invenire petentium per in. Ne magna assueverit vel. Vix movet perfecto facilisis in, ius ad maiorum corrumpit, his esse docendi in.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('assets')}}/img/adventure_icon_2.svg" alt="" width="75" height="75">
                    <h3>Room and food included</h3>
                    <p> Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant tractatos ius an, in vis fabulas percipitur, est audiam phaedrum electram ex.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('assets')}}/img/adventure_icon_3.svg" alt="" width="75" height="75">
                    <h3>Everything organized</h3>
                    <p>Integre vivendo percipitur eam in, graece suavitate cu vel. Per inani persius accumsan no. An case duis option est, pro ad fastidii contentiones.</p>
                </div>
            </div>

            <div class="banner_2">
                <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div>
                        <h3>Your Perfect<br>Tour Experience</h3>
                        <p>Activities and accommodations</p>
                        <a href="all_tours_list.html" class="btn_1">Read more</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner_2 -->

        </div>
        <!-- End container -->
    </div>
    <!-- End white_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>Lates <span>Blog</span> News</h2>
            <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="{{asset('assets')}}/img/news_home_1.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Mark Twain</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Pri oportere scribentur eu</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="{{asset('assets')}}/img/news_home_2.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Jhon Doe</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Duo eius postea suscipit ad</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="{{asset('assets')}}/img/news_home_3.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Luca Robinson</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Elitr mandamus cu has</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="{{asset('assets')}}/img/news_home_4.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Paula Rodrigez</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Id est adhuc ignota delenit</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
        </div>
        <!-- /row -->
        <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
    </div>
    <!-- End container -->
    <script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets')}}/js/common_scripts_min.js"></script>
    <script src="{{asset('assets')}}/js/functions.js"></script>

@endsection
