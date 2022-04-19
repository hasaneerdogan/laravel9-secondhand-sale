@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
 <div class="main-panel">
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
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Keyword</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Edit</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <th>{{$rs->id}}</th>
                                            <th>{{$rs->title}}</th>
                                            <th>{{$rs->keywords}}</th>
                                            <th>{{$rs->description}}</th>
                                            <th>{{$rs->image}}</th>
                                            <th>{{$rs->status}}</th>
                                            <th><a href="/admin/category/edit/{{$rs->id}}" class="add btn btn-primary "> Edit</a></th>
                                            <th><a href="/admin/category/delete/{{$rs->id}}" class="add btn btn-danger "> Delete</a></th>
                                            <th><a href="/admin/category/show/{{$rs->id}}" class="add btn btn-success "> Show</a></th>
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
