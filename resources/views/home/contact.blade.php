
@extends('layouts.frontbase')

@section('title','Contact Us | '.$setting->title )

@section('description',$setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>Contact us</h1>
                <p>{!!$setting->contact!!}</p>
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
                    <li><a href="{{route('contact')}}">Contact</a>
                    </li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8">
                    <div class="form_title">
                        <h3><strong><i class="icon-pencil"></i></strong>Fill the form below</h3>
                    </div>
                    <div class="step">
                        <div id="message-contact"></div>
                        @include('home.messages')
                        <form method="post" action="{{route("storemessage")}}" id="demo-form2">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name & Surname</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name & Surname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea rows="5"  name="message" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                        <label>Human verification</label>
                                        <input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
                                        <input type="submit" value="Submit" class="btn_1" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col-md-8 -->

                <div class="col-md-4">
                    <div class="box_style_1">
                        <span class="tape"></span>
                        <h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
                        <p>
                            {{$setting->address}}
                        </p>
                        <hr>
                        <h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
                        <p>
                            You can reach us!
                        </p>
                        <ul id="contact-info">
                            <li>{{$setting->phone}}</li>
                            <li><a>{{$setting->fax}}</a>
                            <li><a>{{$setting->email}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="box_style_4">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://004542344599" class="phone">{{$setting->phone}}</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </div>
                <!-- End col-md-4 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->

    </main>
    <!-- End main -->



@endsection

