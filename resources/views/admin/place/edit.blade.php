
@extends('layouts.adminbase')

@section('title', 'Edit Place:'.$data->title)
@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Place: {{$data->title}}</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="x_title">
                                <h2>Place Elements</h2>
                                <div class="clearfix"></div>
                            </div>

                            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{route('admin.place.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Parent Category</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected" @endif>
                                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                     </div>
                                    <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Title<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="title" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->title}}">
                                    </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Keywords<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="keywords" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->keywords}}">
                                        </div>
                                        </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Description<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" name="description" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->description}}">
                                                    </div>
                                                </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Detail<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="detail" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->detail}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Country<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="country" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->country}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >City<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="city" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->city}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Location<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="location" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->location}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Phone<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->phone}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Working Hours Start<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" required name="working_hours_start">
                                            <option selected>{{$data->working_hours_start}}</option>
                                            <option>06:00</option>
                                            <option>07:00</option>
                                            <option>08:00</option>
                                            <option>09:00</option>
                                            <option>10:00</option>
                                            <option>None</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Working Hours End<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" required name="working_hours_end">
                                            <option selected>{{$data->working_hours_end}}</option>
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
                                            <option>None</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Working Days<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" required name="working_days">
                                            <option selected>{{$data->working_days}}</option>
                                            <option>Mid-Week</option>
                                            <option>Except Sunday</option>
                                            <option>Always Open </option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Status<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="heard" class="form-control" required name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Description
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="description" class="textarea form-control" id="description">
                                            {{$data->description}}
                                        </textarea>
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
                                        <button type="submit" class="btn btn-success">Update Data</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function() {
            $('.textarea').summernote()
        })
    </script>
@endsection
