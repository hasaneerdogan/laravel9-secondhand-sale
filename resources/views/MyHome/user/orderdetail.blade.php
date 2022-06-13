@extends('layouts.frontbase')

@section('title',' User Order Detail ')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="contact-form">
                                <h2 class="title text-center">User Menu</h2>
                                <div class="status alert alert-success" style="display: none"></div>
                                @include('MyHome.user.usermenu')
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="contact-info card-body">
                                <h2 class="title text-center"> User Order Detail</h2>
                                <table class="table table-condensed">
                                    <tr>
                                        <th>Name:</th> <td>{{$order->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th> <td>{{$order->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th> <td>{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th> <td>{{$order->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Note:</th> <td>{{$order->note}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th> <td>{{$order->status}}</td>
                                    </tr>

                                </table>
                                <div class="table-responsive cart_info table-bordered">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Item</td>
                                            <td class="description"></td>
                                            <td class="price">Price</td>
                                            <td class="quantity">Quantity</td>
                                            <td class="total">Total</td>
                                            <td>Status</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $orderproducts as $rs)
                                            <tr>
                                                <td class="cart_product">
                                                    <a href=""><img src="{{Storage::url($rs->product->image)}}" alt="" style="height: 60px ; width: 60px"></a>
                                                </td>
                                                <td class="cart_description">
                                                    <h4><a href="">{{$rs->product->title}}</a></h4>
                                                </td>
                                                <td class="cart_price">
                                                    <p>{{$rs->product->price}} TL</p>
                                                </td>
                                                <td class="cart_price">
                                                    <p>{{$rs->quantity}}</p>
                                                </td>
                                                <td class="cart_price">
                                                    <p>{{$rs->amount}}</p>
                                                </td>
                                                <td class="cart_price">
                                                    <p>{{$rs->status}}</p>
                                                </td>
                                                @if($rs->status='New')
                                                    <a href="{{route('userpanel.cancelproduct',['id'=>$rs->id])}}" class="main-btn icon-btn" onclick="return confirm('Are You Sure')">
                                                        <i class="fa fa-close">Cancel</i>
                                                    </a>
                                                @endif

                                                @endforeach

                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets')}}/homeassets/js/jquery.js"></script>
    <script src="{{asset('assets')}}/homeassets/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/homeassets/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('assets')}}/homeassets/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('assets')}}/homeassets/js/main.js"></script>

@endsection
