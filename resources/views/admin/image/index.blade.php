@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')

@section('content')
    <h3>{{$product->title}}</h3>
    <hr>
    <!--  page-wrapper -->
    <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <label>Title:</label>
                </div>
                <div class="col-md-6">
                    <label><input class="form-control" name="title" placeholder="Title"></label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>

    <div >



        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 style="text-align:center;">Product Image List</h3>
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
                                    <th>Image</th>
                                    <th style="width: 40px">Update</th>
                                    <th style="width: 40px">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete !! Are You Sure?')">Delete</a></td>
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
