@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

    <div class="container">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-body">
                    <a class="nav-link btn btn-success create-new-button col-sm-3" href="{{route('admin.category.create')}}"> Create New Category</a>
                </div>
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data List</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            </th>
                                            <th class="text-white">Id</th>
                                            <th class="text-white">Parent</th>
                                            <th class="text-white">Title</th>
                                            <th class="text-white">Image</th>
                                            <th class="text-white">Status</th>
                                            <th style="width: 40px" class="text-white">Edit</th>
                                            <th style="width: 40px" class="text-white">Delete</th>
                                            <th style="width: 40px" class="text-white">Show</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)
                                                <tr>
                                                    <th>{{$rs->id}}</th>
                                                    <th>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</th>
                                                    <th>{{$rs->title}}</th>
                                                    <th>
                                                        @if ($rs->image)
                                                            <img src="{{Storage::url($rs->image) }}" style="width: 35px" class="">
                                                        @endif
                                                    </th>
                                                    <th>{{$rs->status}}</th>
                                                    <th><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="add btn btn-primary "> Edit</a></th>
                                                    <th><a href="{{route('admin.category.delete',['id'=>$rs->id])}}" onclick="return confirm('Are You Sure')" class="add btn btn-danger "> Delete</a></th>
                                                    <th><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="add btn btn-success "> Show</a></th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection
