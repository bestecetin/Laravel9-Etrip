
@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="{{route('admin.category.create')}}" class="btn btn-info" style="width: 200px">Add Category</a>
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
                            <h2>Category List</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Image</th>
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
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->keywords}}</td>
                                        <td>{{$rs->description}}</td>
                                        <td>{{$rs->image}}</td>
                                        <td>{{$rs->status}}</td>
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
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
