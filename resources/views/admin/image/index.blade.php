@extends('layouts.adminwindow')

@section('title', 'Place Image Gallery List')


@section('content')
    <!-- page content -->

        <h3>{{$place->title}}</h3>
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{route('admin.image.store',['pid'=>$place->id])}}" method="post" enctype="multipart/form-data">
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
                                    <th style="width: 40px">Edit</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Show</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-round btn-primary">Edit</a></td>
                                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-round btn-danger"
                                            onclick="return confirm('Deleting!!! Are you sure ?')">Delete</a></td>
                                        <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-round btn-success">Show</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection
