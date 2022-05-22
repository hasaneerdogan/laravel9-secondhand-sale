@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-body">
                    <a class="nav-link btn btn-success create-new-button col-sm-3" href="{{route('admin.faq.create')}}">Add Question</a>
                </div>

                <div class="content-wrapper">
                    <div class="row ">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title">FAQ List</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <td class="text-white">Id</td>
                                        <th class="text-white">Question</th>
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
                                                <th>{{$rs->question}}</th>
                                                <th>{{$rs->status}}</th>
                                                <th><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="add btn btn-primary "> Edit</a></th>
                                                <th><a href="{{route('admin.faq.delete',['id'=>$rs->id])}}" onclick="return confirm('Are You Sure')" class="add btn btn-danger "> Delete</a></th>
                                                <th><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="add btn btn-success "> Show</a></th>
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



@endsection
