@extends('layouts.adminbase')

@section('title',"Show Category: ".$data->title)

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row mb-2">
            <!-- Page Header -->
            <div class="col-sm-3">
                <br><br>
                <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-primary btn-sm" style="width: 250px">Edit</a>

            </div>
            <div class="col-sm-3">
                <br><br>
                <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Delete !! Are You Sure?')" class="btn btn-danger btn-sm" style="width: 250px">Delete</a>

            </div>
            <!--End Page Header -->
        </div>

        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Details
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 110px">id</th>
                            <td>{{$data->id}}</td>
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
                            <th>Descriptions</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>{{$data->image}}</td>
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
                            <th>Update Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->


    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
