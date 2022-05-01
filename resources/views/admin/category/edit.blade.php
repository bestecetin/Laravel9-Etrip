
@extends('layouts.adminbase')

@section('title', 'Edit Category:'.$data->title)


@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Category: {{$data->title}}</h3>
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
                                <h2>Category Elements</h2>
                                <div class="clearfix"></div>
                            </div>

                            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post">

                                <div class="form-group">
                                    @csrf
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
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Image<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Upload Image" disabled="">
                                                          <div class="btn-group">
                                                              <input type="file" name="image" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage"/>
                                                         </div>
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
