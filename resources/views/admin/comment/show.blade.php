
@extends('layouts.adminwindow')

@section('title', 'Show Message:'.$data->title)


@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Detail Message Data</h2>
                            <div class="clearfix"></div>
                        </div>

                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Place</th>
                                    <td>{{$data->place->title}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->IP}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
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
                                    <th>Admin Note:</th>
                                    <td>
                                        <form id="demo-form2"  data-parsley-validate=""  novalidate="" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-success">Update Comment</button>
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
