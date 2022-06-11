
@extends('layouts.frontbase')

@section('title',$setting->title )

@section('description',$setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('slider')
    <main>
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
                        <a href="place/{{$rs->id}}.html">
                            <img src="{{Storage::url($rs->image)}}" style="height:200px;width:400px" class="img-fluid" alt="image">
                            <div class="short_info">
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$rs->title}}</strong> {{$rs->city}}</h3>
                        @php
                            $avarage=0;
                            $avarage=$rs->comment->average('rate');
                        @endphp
                        <div class="rating">
                            @if($avarage==0)
                                <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>{{$rs->comment->count('id')}}</small></i>
                            @elseif($avarage<1)
                                <i class="icon-frown voted"></i></i><small>{{$rs->comment->count('id')}}</small>
                            @elseif($avarage<2)
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>{{$rs->comment->count('id')}}</small>
                            @elseif($avarage<3)
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>{{$rs->comment->count('id')}}</small>
                            @elseif($avarage<4)
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>{{$rs->comment->count('id')}}</small>
                            @else($avarage<5)
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><small>{{$rs->comment->count('id')}}</small>
                            @endif
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
                        <a href="place/{{$rs->id}}.html">
                            <img src="{{Storage::url($rs->image)}}" style="height:200px;width:400px" class="img-fluid" alt="image">
                            <div class="short_info">
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                            </div>
                        </a>
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

    <!-- End container -->
</main>

@endsection
