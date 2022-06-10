
@extends('layouts.frontbase')

@section('title','User Comment & Reviews')

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>User Profile</h1>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>User Comment</li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="row">
                    <div class="col-md-8">
                        <div class="box_style_1">
                            <h3><strong><i class="icon-pencil"></i></strong>User Comment & Reviews</h3>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Place</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            <a href="{{route('place',['id'=>$rs->place_id])}}">
                                                {{$rs->place->title}}
                                            </a>
                                        </td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>
                                            <a href="{{route('userpanel.reviewsdestroy',['id'=>$rs->id])}}" class="btn btn-round btn-danger"
                                               onclick="return confirm('Deleting!!! Are you sure ?')">Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                       </div>
                    </div>
                <div class="col-md-4">
                    <div class="box_style_1">
                        <span class="tape"></span>
                        <h4><strong>User Menu</strong><span><i class="icon-pin pull-right"></i></span></h4>
                        <p>
                            @include('home.user.user')
                        </p>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->



@endsection

