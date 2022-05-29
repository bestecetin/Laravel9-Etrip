
@extends('layouts.frontbase')

@section('title','Frequently Asked Questions '.$setting->title )

@section('description',$setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>Frequently Asked Questions</h1>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a>
                    </li>
                    <li><a href="{{route('faq')}}">Frequently Asked Questions</a>
                    </li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->
        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-9" id="faq">
                    <div id="accordion" class="accordion_styled">
                        @foreach($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">{{$rs->question}}<i class="indicator icon-plus float-right"></i></a>
                                </h4>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $rs->answer !!}
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                    <!--End payment -->
                 </div>
            </div>
        </div>
    </main>

@endsection

