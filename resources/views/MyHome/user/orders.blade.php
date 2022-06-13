@extends('layouts.frontbase')

@section('title',' User Order Lists')

@section('content')

        <div class="container">
            <div class="row">
                <div class="bg">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="contact-form">
                                <h2 class="title text-center">User Menu</h2>
                                <div class="status alert alert-success" style="display: none"></div>
                                @include('MyHome.user.usermenu')
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="table table-bordered">
                                <h2 class="title text-center">User Orders List</h2>
                                <table class="table">
                                    <thead>
                                    <td class="text-white">Name</td>
                                    <td class="text-white">Phone</td>
                                    <th class="text-white">Email</th>
                                    <th class="text-white">Address</th>
                                    <th class="text-white">Status</th>
                                    <th style="width: 40px" class="text-white">Cancel</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <th>{{$rs->id}}</th>
                                            <th>{{$rs->name}}</th>

                                            <th>{{$rs->phone}}</th>
                                            <th>{{$rs->email}}</th>
                                            <th>{{$rs->address}}</th>
                                            <th>{{$rs->status}}</th>
                                            <th>
                                                <a href="{{route('userpanel.orderdetail',['id'=>$rs->id])}}">
                                                    Show Detail
                                                </a>
                                            </th>
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
