@extends('layouts.adminbase')

@section('title', 'Edit FAQ' )
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <div class="container">
        <div class="main-panel" >
            <div class="content-wrapper">
                <h1>Edit FAQ</h1>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit </h4>
                            <p class="card-description"> </p>
                            <form class="forms-sample" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data"  >
                                @csrf
                                <div class="form-group text-white">
                                    <label for="exampleInputUsername1">Question</label>
                                    <input type="text" class="form-control" id="question" name="question" value="{{$data->question}}" style="color: white">
                                </div>
                                <div class="form-group text-black">
                                    <label for="exampleInputUsername1" class="text-white">Answer</label>
                                    <textarea class="form-control" name="answer" id="answer" style="color: white" >
                                        {!!  $data->answer !!}
                                    </textarea>
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
                                <div class="form-group" >
                                    <label>Select</label>
                                        <select class="form-control text-white" name="status">
                                            <option selected >{{$data->status}} </option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Update FAQ</button>
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
