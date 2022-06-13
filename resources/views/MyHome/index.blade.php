@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    @include("MyHome.slider")

    <!--sidebar starts---->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @php
                        $mainCategories=\App\Http\Controllers\HomeController::maincategorylist();
                    @endphp
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($mainCategories as $rs)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#{{$rs->title}}">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            {{$rs->title}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="{{$rs->title}}" cla
                                     ss="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            @if(count($rs->children))
                                                @include('MyHome.categorytree',['children'=>$rs->children])
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!--/category-products-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{asset("assets")}}/home_assets/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>
            <!--sidebar ends---->
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->

                    <h2 class="title text-center">Items</h2>
                    @foreach($productlist2 as $rs)
                        <div class="col-sm-4 content-wrapper">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{Storage::url($rs->image) }}" alt="" width="" height="350" />
                                        <h2>{{$rs->price}} TL</h2>
                                        <p>{{$rs->title}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{$rs->price}} TL</h2>
                                            <p>{{$rs->title}}</p>
                                            <p> {!! $rs->detail !!} </p>
                                            <a href="{{route('product',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    @foreach($categorylist as $rs)
                        <li class=""><a href="{{route('admin.category.index',['id'=>$rs->id])}}}" data-toggle="tab">{{$rs -> title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content">
                @foreach($productlist1 as $rs)
                    <div class="tab-pane fade active in" id="tshirt" >
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{Storage::url($rs->image) }}" alt="" />
                                        <h2>{{$rs->price}} TL</h2>
                                        <p>{{$rs->description}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{$rs->price}} TL</h2>
                                            <p>{{$rs->title}}</p>
                                            <p> {!! $rs->detail !!} </p>
                                            <a href="{{route('product',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
    </div><!--/category-tab-->



    </div>
    </div>
    </div>
    </div>


@endsection
