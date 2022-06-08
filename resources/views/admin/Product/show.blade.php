@extends('layouts.adminbase')

@section('title',"Show Product: ".$data->title)

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row mb-2">
            <!-- Page Header -->
            <div class="col-sm-3">
                <br><br>
                <a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-primary btn-sm" style="width: 250px">Edit</a>

            </div>
            <div class="col-sm-3">
                <br><br>
                <a href="{{route('admin.product.destroy',['id'=>$data->id])}}" onclick="return confirm('Delete !! Are You Sure?')" class="btn btn-danger btn-sm" style="width: 250px">Delete</a>

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
                            <th style="width: 200px">id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{$data->category_id}}</td>
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
                            <th>description</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{$data->quantity}}</td>
                        </tr>
                        <tr>
                            <th>Minimum Quantity</th>
                            <td>{{$data->minquantity}}</td>
                        </tr>
                        <tr>
                            <th>Tax %</th>
                            <td>{{$data->tax}}</td>
                        </tr>
                        <tr>
                            <th>Detail Inf.</th>
                            <td>{{$data->detail}}</td>
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
