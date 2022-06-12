@extends('layouts.frontbase')

@section('title',' User Shopcart ')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title text-center">User Shopcart</h2>
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
                            <div class="contact-info">
                                <h2 class="title text-center">User Shopcart</h2>
                                <div class="table-responsive cart_info">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Item</td>
                                            <td class="description"></td>
                                            <td class="price">Price</td>
                                            <td class="quantity">Quantity</td>
                                            <td class="total">Total</td>
                                            <td></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($total=0)
                                        @foreach( $data as $rs)
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
                                                <td class="cart_quantity">
                                                    <div class="cart_quantity_button">
                                                        <form action="{{route('shopcart.update',['id'=>$rs->id])}}" method="post">
                                                            @csrf
                                                            <input name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                                                        </form>
                                                    </div>
                                                    <div class="card-body">
                                                        <a class="product-delete" href="{{route('shopcart.destroy',['id'=>$rs->id])}}"
                                                           onclick="return confirm('Are You Sure')" class="add btn btn-danger "> [X]
                                                        </a>
                                                    </div>

                                                </td>

                                                @php($total += $rs->product->price * $rs->quantity)
                                                @endforeach
                                                <td class="cart_total">
                                                    <p class="cart_total_price">{{$total}}TL</p>
                                                </td>
                                                <td class="cart_delete">
                                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                                </td>
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
