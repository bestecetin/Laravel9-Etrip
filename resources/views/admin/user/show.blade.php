
@extends('layouts.adminwindow')

@section('title', 'User Detail:'.$data->title)


@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Detail User Detail</h2>
                            <div class="clearfix"></div>
                        </div>

                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                               onclick="return confirm('Deleting!!! Are you sure ?')">[x]</a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Add Role to User</th>
                                    <td>
                                        <form id="demo-form2"  data-parsley-validate=""  novalidate="" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                        @csrf
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach

                                            </select>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-success">Add Role</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>

                    </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
