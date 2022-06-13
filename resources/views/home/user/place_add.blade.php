
@extends('layouts.frontbase')

@section('title','Edit Product')
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>Add Product</h1>
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
                            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{route('userpanel.place.store')}}" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Parent Place</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="category_id" class="form-control">
                                                @foreach($data as $rs)
                                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Title<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="title" required="required" class="form-control col-md-7 col-xs-12" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Keywords<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="keywords" required="required" class="form-control col-md-7 col-xs-12" placeholder="Keywords">
                                        </div>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Detail<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="detail" required="required" class="form-control col-md-7 col-xs-12" placeholder="Detail">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Country<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="country" required="required" class="form-control col-md-7 col-xs-12" placeholder="Country">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >City<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="city" required="required" class="form-control col-md-7 col-xs-12" placeholder="City">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Location<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="location" required="required" class="form-control col-md-7 col-xs-12" placeholder="Location">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Phone<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" required="required" class="form-control col-md-7 col-xs-12" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Working Hours Start<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" required name="working_hours_start">
                                            <option>06:00</option>
                                            <option>07:00</option>
                                            <option>08:00</option>
                                            <option>09:00</option>
                                            <option>10:00</option>
                                            <option>00:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Working Hours End<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" required name="working_hours_end">
                                            <option>18:00</option>
                                            <option>19:00</option>
                                            <option>20:00</option>
                                            <option>21:00</option>
                                            <option>22:00</option>
                                            <option>23:00</option>
                                            <option>00:00</option>
                                            <option>01:00</option>
                                            <option>02:00</option>
                                            <option>03:00</option>
                                            <option>00:00</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Working Days<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" required name="working_days">
                                            <option>Mid-Week</option>
                                            <option>Except Sunday</option>
                                            <option>Always Open </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Description
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="description" class="form-control"  id="description" rows="7"></textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#description' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
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

