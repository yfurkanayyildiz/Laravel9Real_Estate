@extends('layouts.adminbase')

@section('title', 'Add Product')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!--  page-wrapper -->

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Add Product</h1>
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
                        <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Product</label>

                                <select class="form-control select2" name="category_id" style="color: black">
                                    @foreach($data as $rs)
                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="keywords" placeholder="Keywords">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" name="description" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" name="price" value="0">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" type="number" name="quantity" value="0">
                            </div>
                            <div class="form-group">
                                <label>Minimum Quantity</label>
                                <input class="form-control" type="number" name="minquantity" value="0">
                            </div>
                            <div class="form-group">
                                <label>Tax %</label>
                                <input class="form-control" type="number" name="tax" value="0">
                            </div>
                            <div class="form-group">
                                <label>Detail Inf.</label>
                                <textarea class="form-control" id="detail" name="detail"></textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" >
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
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
