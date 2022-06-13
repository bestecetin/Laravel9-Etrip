
@extends('layouts.frontbase')

@section('title','My Places')

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>User Product</h1>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>User Product</li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-10">
                    <div class="box_style_1">
                        <h3><strong><i class="icon-pencil"></i>  <a href="{{route('userpanel.place.create')}}" class="btn btn-info" style="width: 200px">Add Place</a></strong></h3>
                        @include('home.messages')
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>City</th>
                                <th>Image</th>
                                <th>Image Gallery</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->city}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                           onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                            <img src="{{asset('assets')}}/admin/production/images/gallery.png" alt="" style="height: 40px">
                                        </a>
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.place.edit',['id'=>$rs->id])}}" class="btn btn-round btn-primary">Edit</a></td>
                                    <td><a href="{{route('userpanel.place.destroy',['id'=>$rs->id])}}" class="btn btn-round btn-danger"
                                           onclick="return confirm('Deleting!!! Are you sure ?')">Delete</a></td>
                                    <td><a href="{{route('place',['id'=>$rs->id])}}}" class="btn btn-round btn-success">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
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

