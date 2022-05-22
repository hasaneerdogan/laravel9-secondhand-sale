@extends('layouts.adminbase')

@section('title', 'Comment & Reviews')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Comment List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <td class="text-white">Id</td>
                                <td class="text-white">Name</td>
                                <th class="text-white">Subject</th>
                                <th class="text-white">Review</th>
                                <th class="text-white">Rate</th>
                                <th class="text-white">Status</th>
                                <th style="width: 40px" class="text-white">Delete</th>
                                <th style="width: 40px" class="text-white">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <th>{{$rs->id}}</th>
                                        <th>{{$rs->user->name}}</th>
                                        <th>{{$rs->subject}}</th>
                                        <th>{{$rs->review}}</th>
                                        <th>{{$rs->subject}}</th>
                                        <th>{{$rs->rate}}</th>
                                        <th>{{$rs->status}}</th>
                                       <th><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}"
                                              onclick="return confirm('Are You Sure')" class="add btn btn-danger "> Delete</a></th>
                                        <th><a href="{{route('admin.comment.show',['id'=>$rs->id])}}"
                                               onclick="return !window.open(this.href, ' ', 'top=50 left=100 width=1100 , height=700')"
                                               class="add btn btn-success "> Show</a></th>
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
