@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
                <div class="card-body">
                    <h2>{{$product->title}}</h2>
                    <div class="card-body">
                        <p class="card-description"> </p>
                        <form class="forms-sample" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Title</label>
                                <input type="text" class="form-control text-white" id="title" name="title" required >
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image" class="file-upload-default" required>
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                    <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                </div>
                            </div>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Save</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
        </div>


            <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product Image List</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    </th>
                                    <th class="text-white">Id</th>
                                    <th class="text-white">Title</th>
                                    <th class="text-white">Image</th>
                                    <th style="width: 40px" class="text-white">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr>
                                            <th>{{$rs->id}}</th>
                                            <th>{{$rs->title}}</th>
                                            <th>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image) }}" style="width: 35px" class="">
                                            @endif
                                            </th>
                                            <th><a href="{{route('admin.image.delete',['pid'=>$product->id,'id'=>$rs->id])}}" onclick="return confirm('Are You Sure')" class="add btn btn-danger "> Delete</a></th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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

