@extends('layouts.adminbase')

@section('title', 'Order List')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <td class="text-white">Id</td>
                                <td class="text-white">User</td>
                                <td class="text-white">Name</td>
                                <td class="text-white">Phone</td>
                                <th class="text-white">Email</th>
                                <th class="text-white">Amount</th>
                                <th class="text-white">Note</th>
                                <th class="text-white">Status</th>
                                <th style="width: 40px" class="text-white">Delete</th>
                                <th style="width: 40px" class="text-white">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <th>{{$rs->id}}</th>
                                        <th><a href="{{route('admin.user.show',['id'=>$rs->user_id])}}" onclick="return !window.open(this.href, ' ', 'top=50 left=100 width=1100 , height=700')">
                                                {{$rs->user->name}}</a></th>
                                        <th>{{$rs->name}}</th>
                                        <th>{{$rs->phone}}</th>
                                        <th>{{$rs->email}}</th>
                                        <th>{{$rs->total}} TL</th>
                                        <th>{{$rs->note}}</th>
                                        <th>{{$rs->status}}</th>
                                       <th><a href="{{route('admin.order.cancelorder',['id'=>$rs->id])}}"
                                              onclick="return confirm('Are You Sure')" class="add btn btn-danger "> Cancel</a></th>
                                        <th><a href="{{route('admin.order.show',['id'=>$rs->id])}}"
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
