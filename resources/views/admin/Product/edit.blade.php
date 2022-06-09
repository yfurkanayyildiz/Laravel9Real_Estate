@extends('layouts.adminbase')

@section('title', 'Edit Product :'.$data->title)
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Product: {{$data->title}}</h1>
            </div>
            <!--End Page Header -->
        </div>

        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Product Elements
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select class="form-control select2" name="category_id" style="color: black">
                                    @foreach($datalist as $rs)

                                        <option value="{{$rs->id}}" @if($rs->id == $data->category_id)    selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" name="price" value="{{$data->price}}">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" type="number" name="quantity" value="{{$data->quantity}}">
                            </div>
                            <div class="form-group">
                                <label>Minimum Quantity</label>
                                <input class="form-control" type="number" name="minquantity" value="{{$data->minquantity}}">
                            </div>
                            <div class="form-group">
                                <label>Tax %</label>
                                <input class="form-control" type="number" name="tax" value="{{$data->tax}}">
                            </div>
                            <div class="form-group">
                                <label>Detail Inf.</label>
                                <textarea class="textarea" id="detail" name="detail">
                                    {{$data->detail}}
                                </textarea>

                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" >
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->


    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function (){
            //Summernote
            $('.textarea').summernote()
        })
    </script>

@endsection
