@extends('layouts.frontbase')
@php
    use App\Models\Setting;
    $setting=Setting::first();
@endphp
@section('title', $setting->title ,'Products')
@section('description', $setting->description)
@section('keywords',  $setting->keywords)
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>Search Results</h1>
            </div>
        </div>
    </section>

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a>
                    </li>
                    <li>Search</li>
                </ul>
            </div>
        </div>
        <div class="container margin_60">
            <div class="row">

                <div class="col-lg-9">

                    <div class="row">
                        @foreach($places as $rs)
                            <div class="col-md-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                <div class="tour_container">
                                    <div class="ribbon_3 popular"><span>Popular</span>
                                    </div>
                                    <div class="img_container">
                                        <a href="{{route('place',['id'=>$rs->id])}}">
                                            <img src="{{Storage::url($rs->image)}}" style="height:200px;width:400px" class="img-fluid" alt="image">
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
                                    </div>
                                </div>
                                <!-- End box tour -->
                            </div>
                            <!-- End col-md-6 -->
                        @endforeach
                    </div>
                    <!-- End row -->


                </div>
                <!-- End col lg 9 -->
            </div>
            <!-- End row -->
        </div>
    </main>

@endsection
