@extends('layouts.adminbase')

@section('title', 'Add FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <div class="container">
        <div class="main-panel" >
            <div class="content-wrapper">
                <h1>Add Question</h1>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">FAQ </h4>
                            <p class="card-description"> </p>
                            <form class="forms-sample" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group text-white">
                                    <label for="exampleInputUsername1">Question</label>
                                    <input type="text" class="form-control text-white" id="question" name="question" required >
                                </div>

                                <div class="form-group text-black">
                                    <label for="exampleInputText" class="text-white">Answer</label>
                                    <textarea class="form-control" id="answer" name="answer" required>

                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#answer' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>

                                <div class="form-group" required >
                                    <label>Select</label>
                                        <select class="form-control text-white" name="status" >
                                            <option >True</option>
                                            <option >False</option>
                                        </select>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Save</button>
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
