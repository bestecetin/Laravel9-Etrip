
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
                                <th>Category</th>
                                <td>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td>{{$data->detail}}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{$data->country}}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{$data->city}}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{$data->location}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Working Hours Start</th>
                                <td>{{$data->working_hours_start}}</td>
                            </tr>
                            <tr>
                                <th>Working Hours End</th>
                                <td>{{$data->working_hours_end}}</td>
                            </tr>
                            <tr>
                                <th>Working Days</th>
                                <td>{{$data->working_days}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{!! $data->description!!}</td>
                            </tr>

                            <tr>
                                <th>Image</th>
                                <td>
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                    @endif
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
                                <th>Admin Note:</th>
                                <td>
                                    <form id="demo-form2"  data-parsley-validate=""  novalidate="" action="{{route('admin.confirm.update',['id'=>$data->id])}}" method="post">
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
