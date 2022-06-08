@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row mb-2">
            <!-- Page Header -->
            <br><br>
            <div class="col-lg-12">
                <a href="{{route('admin.product.create')}}" class="btn btn-success" style="width:200px">Add Product</a>
            </div>
            <!--End Page Header -->
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Product List
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="{{route('admin.index')}}">Action</a>
                            </li>
                            <li><a href="{{route('admin.index')}}">Another action</a>
                            </li>
                            <li><a href="{{route('admin.index')}}">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{route('admin.index')}}">Separated link</a>
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
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
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
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->quantity}}</td>
                                    <td>
                                        @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete !! Are You Sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
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
