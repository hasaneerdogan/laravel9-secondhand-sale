@extends('layouts.frontbase')

@section('title', $category->title .  ' Products')


@section('content')

    <section>
        <div class="container">
            <div class="row">
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
                                            <div id="{{$rs->title}}" class="panel-collapse collapse">
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

                            </div>
                        </div>


                        <div class="col-sm-9 padding-right">

                                <div class="features_items"><!--features_items-->
                                    @foreach($products as $rs)
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{Storage::url($rs->image) }}" alt="">
                                                    <h2>{{$rs->price}} TL</h2>
                                                    <p>{{$rs->title}}</p>
                                                </div>
                                                <div class="product-overlay">
                                                    <div class="overlay-content">
                                                        <h2>{{$rs->price}} TL</h2>
                                                        <p>{{$rs->title}}</p>
                                                        <a href="{{route('product',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <ul class="pagination">
                                    <li class="active"><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">&raquo;</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
