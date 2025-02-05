@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row mb-2">
            <!-- Page Header -->
            <br><br>
            <div class="col-lg-12">
                <a href="{{route('admin.category.create')}}" class="btn btn-success" style="width:200px">Add Category</a>
            </div>
            <!--End Page Header -->
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Category List
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>parent</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>status</th>
                                    <th style="width: 40px">Edit</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete !! Are You Sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>



    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
