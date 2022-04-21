@extends('layouts.adminbase')

@section('title', 'Edit Category : ' .$data->title )

@section('content')


        <div class="main-panel" >
            <div class="content-wrapper">
                <h1>Edit Category:{{$data->title}}</h1>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit </h4>
                            <p class="card-description"> </p>
                            <form class="forms-sample" action="/admin/category/update/{{$data->id}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Keywords</label>
                                    <input type="text" class="form-control" id="keywords" name="keywords" value="{{$data->keywords}}">
                                </div>

                                <div class= "form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{$data->description}}">
                                </div>

                                <div class="form-group" >
                                    <label for="exampeInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                        <div class="input-group-append">

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



@endsection
