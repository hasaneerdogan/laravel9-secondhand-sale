@extends('layouts.frontbase')

@section('title',' ORDER ')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                        </div>
                    </div>
                    @include('MyHome.messages')
                    <form id="main-contact-form" action="{{route("shopcart.storeorder")}}"  method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="contact-form">
                                    <h2 class="title text-center">Shipping Information</h2>
                                    <div class="status alert alert-success" style="display: none"></div>

                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}"  placeholder="Name & Surname" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control"  placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" name="phone" class="form-control"  placeholder="Phone" required >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="address" class="form-control"  placeholder="Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="contact-info">
                                    <h2 class="title text-center">Payment Information [{{$total}} TL] </h2>


                                    <div class="form-group col-md-6">
                                        <input type="text" name="holder" class="form-control"  value="Card Holder">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="number" class="form-control"  value="Card Number">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="date" class="form-control"  value="Date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="code" class="form-control"  value="Security Code">
                                    </div>
                                    <div class="form-group col-md-6" >
                                        <input type="hidden" name="total" class="form-control"  value="{{$total}}">
                                    </div>


                                        <div class="form-group col-md-12">
                                            <button type="submit " class="btn btn-primary pull-right">Order</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
