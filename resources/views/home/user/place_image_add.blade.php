
@extends('layouts.frontbase')

@section('title','User Panel')

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
                    <li>User Panel</li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="row">
                    <div class="col-md-8">
                        <div class="box_style_1">
                            <h3><strong><i class="icon-pencil"></i></strong>{{$place->title}}</h3>
                            <p>
                            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{route('userpanel.image.store',['pid'=>$place->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Title<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="title" required="required" class="form-control col-md-7 col-xs-12" placeholder="Title">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Image<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Upload Image" disabled="">
                                        <div class="btn-group">
                                            <input type="file" name="image" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>

                            </form>
                            <br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Place Image List</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th style="width: 10px">Id</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th style="width: 40px">Delete</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($images as $rs)
                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>{{$rs->title}}</td>
                                                        <td>
                                                            @if($rs->image)
                                                                <img src="{{Storage::url($rs->image)}}" style="height: 80px">
                                                            @endif
                                                        </td>
                                                        <td><a href="{{route('userpanel.image.destroy',['pid'=>$place->id,'id'=>$rs->id])}}" class="btn btn-round btn-danger"
                                                               onclick="return confirm('Deleting!!! Are you sure ?')">Delete</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </p>
                       </div>
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

