@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')


        <div class="main-panel" >
            <div class="content-wrapper">
                <h1>Add Category</h1>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Default form</h4>
                            <p class="card-description"> Basic form layout </p>
                            <form class="forms-sample" action="/admin/category/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="title">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Keywords</label>
                                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="keywords">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                                </div>

                                <div class="form-group" >
                                    <label for="exampeInputFile">File upload</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Image</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group" >
                                    <label>Select</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                </div>





                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



@endsection
