@extends('layouts.frontbase')

@section('title',' User Comments')

@section('content')

        <div class="container">
            <div class="row">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title text-center">User Comments</h2>
                        </div>
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
                                <h2 class="title text-center">User Comments</h2>
                                <table class="table">
                                    <thead>
                                    <td class="text-white">Id</td>
                                    <td class="text-white">Name</td>
                                    <td class="text-white">Product</td>
                                    <th class="text-white">Subject</th>
                                    <th class="text-white">Review</th>
                                    <th class="text-white">Rate</th>
                                    <th class="text-white">Status</th>
                                    <th style="width: 40px" class="text-white">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $rs)
                                        <tr>
                                            <th>{{$rs->id}}</th>
                                            <th>{{$rs->user->name}}</th>
                                            <th><a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></th>
                                            <th>{{$rs->subject}}</th>
                                            <th>{{$rs->review}}</th>
                                            <th>{{$rs->rate}}</th>
                                            <th>{{$rs->status}}</th>
                                            <th>
                                                <a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"
                                                   onclick="return confirm('Are You Sure')" class="add btn btn-danger ">
                                                    Delete
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
