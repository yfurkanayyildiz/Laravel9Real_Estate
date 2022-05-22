@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Category List</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Category List
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="/admin">Action</a>
                            </li>
                            <li><a href="/admin">Another action</a>
                            </li>
                            <li><a href="/admin">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="admin">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>description</th>
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
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>{{$rs->image}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                    <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-success btn-sm">Show</a></td>
                                </tr>
                                <button type="button" class="btn btn-primary btn-sm">Small button</button>
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
