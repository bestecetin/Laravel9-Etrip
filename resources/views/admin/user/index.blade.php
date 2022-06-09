
@extends('layouts.adminbase')

@section('title', 'User List')


@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>User List</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th style="width: 40px">Show</th>
                                    <th style="width: 40px">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>
                                            @foreach($rs->roles as $role)
                                                {{$role->name}}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-round btn-success"
                                               onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                                Show
                                            </a>
                                        </td>
                                        <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-round btn-danger"
                                            onclick="return confirm('Deleting!!! Are you sure ?')">Delete</a></td>
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
