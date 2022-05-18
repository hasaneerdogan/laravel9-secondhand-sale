@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <div class="stretch-card ">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5 ">
                <div class="view-product">
                    <img src="{{Storage::url($data->image) }}" alt="" style="height: 600px" width="400" />
                </div>
            </div>

        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                <h2>{{$data -> title}}</h2>
                <p>Web ID: 1089772</p>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                        <span>
                            <del>
                                <h4 style="color: red">{{$data -> price*1.20}} TL </h4>
                            </del>
                            <span>{{$data->price}} TL </span>
                        </span>
									<label>Quantity:</label>
									<input type="text" value="{{$data->stock}}" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Detail:</b> {{$data->description}}</p>
                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
        </div>
    </div><!--/product-details-->

    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">Details</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details" >
                <div class="text-area">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-area " name="detail">
                                <p>{!!  $data->detail !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade active in" id="reviews" >
                <div class="col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p><b>Write Your Review</b></p>

                    <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                        <textarea name="" ></textarea>
                        <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                        <button type="button" class="btn btn-default pull-right">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div><!--/category-tab-->

    <script src="{{asset('assets')}}/adminasset/jquery.js"></script>
    <script src="{{asset('assets')}}/adminasset/price-range.js"></script>
    <script src="{{asset('assets')}}/adminasset/jquery.scrollUp.min.js"></script>
    <script src="{{asset('assets')}}/adminasset/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/adminasset/jquery.prettyPhoto.js"></script>
    <script src="{{asset('assets')}}/adminasset/main.js"></script>


@endsection
