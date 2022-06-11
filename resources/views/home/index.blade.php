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
        <div class="main_title">
            <h2>{{$placelist2[0]->city??null}} <span> Top </span>Places</h2>
        </div>

        <div class="owl-carousel owl-theme list_carousel add_bottom_30">
            @foreach($placelist2 as $rs)
            <div class="item">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="{{route('place',['id'=>$rs->id])}}">
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
    </div>

        <div class="container margin_60">

            <div class="main_title">
            <h2>{{$placelist3[0]->city??null}}<span> Top </span> Places</h2>
        </div>

        <div class="owl-carousel owl-theme list_carousel add_bottom_30">
            @foreach($placelist3 as $rs)
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
                <!-- End box tour -->
            </div>

        </div>
    @endforeach
    </div>
        <!-- /carousel -->
</div>
</div>
</main>

@endsection
