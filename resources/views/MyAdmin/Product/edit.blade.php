@extends('layouts.adminbase')

@section('title', 'Edit Product : ' .$data->title )

@section('content')


        <div class="main-panel" >
            <div class="content-wrapper">
                <h1>Edit Product:{{$data->title}}</h1>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit </h4>
                            <p class="card-description"> </p>
                            <form class="forms-sample" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data"  >
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>

                                    <select class="form-control select2" name="category_id" style="">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" style="color: white" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Keywords</label>
                                    <input type="text" class="form-control" id="keywords" name="keywords" value="{{$data->keywords}}" style="color: white" required>
                                </div>

                                <div class= "form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{$data->description}}" style="color: white" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Price TL</label>
                                    <input type="number" class="form-control text-white" id="price" name="price" value="{{$data->price}}" style="color: white" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Tax %</label>
                                    <input type="number" class="form-control text-white" id="tax" name="tax" value="{{$data->tax}}" style="color: white" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Detail</label>
                                    <textarea class="form-control" name="detail" style="color: white" value="{{$data->detail}}" required>
                                    </textarea>
                                </div>

                                <div class="input-group-append">
                                    <div class="form-group">
                                        <label>File upload</label>
                                            <input type="file" name="image" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" >
                                    <label>Select</label>
                                        <select class="form-control" name="status">
                                            <option selected >{{$data->status}} </option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Update Data</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- plugins:js -->
            <script src="{{asset('assets')}}/adminasset/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="{{asset('assets')}}/adminasset/vendors/select2/select2.min.js"></script>
            <script src="{{asset('assets')}}/adminasset/vendors/typeahead.js/typeahead.bundle.min.js"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="{{asset('assets')}}/adminasset/js/off-canvas.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/hoverable-collapse.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/misc.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/settings.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="{{asset('assets')}}/adminasset/js/file-upload.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/typeahead.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/select2.js"></script>
            <!-- End custom js for this page -->



@endsection
