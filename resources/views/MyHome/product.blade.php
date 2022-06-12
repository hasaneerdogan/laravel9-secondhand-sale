@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <div class="stretch-card  ">
        <div class="container">
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
                    @php
                        $average = $data->comment->average('rate')
                    @endphp
                    <a href="">{{$data->comment->count('id')}} Reviews</a>

                    <div  class="product-rating">
                        {{number_format($average,1)}}
                        <i class="fa fa-star @if($average <1) -o empty @endif"></i>
                        <i class="fa fa-star @if($average <2) -o empty @endif"></i>
                        <i class="fa fa-star @if($average<3) -o empty @endif"></i>
                        <i class="fa fa-star @if($average<4) -o empty @endif"></i>
                        <i class="fa fa-star @if($average<5) -o empty @endif"></i>
                    </div>


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
                    <li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
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
                    <div class="col-sm-6">
                        @include('MyHome.messages')
                        <p><b>Write Your Review</b></p>
                        <form action="{{route('storecomment')}}" method="post">
                            @csrf
                            <input class="input" type="hidden" name="product_id" value="{{$data->id}}">
                            <span>
                                <input type="text" name="subject" placeholder="Subject">
                                <input type="email" placeholder="Email Address">
                            </span>
                            <textarea class="input" name="review" placeholder="Your Review"></textarea>
                            <div class="stars">
                                <strong class="text-uppercase">Your Rate:</strong>
                                <input type="radio" id="star1" name="rate" value="1"> <label for="star1"></label>
                                <input type="radio" id="star2" name="rate" value="2"> <label for="star2"></label>
                                <input type="radio" id="star3" name="rate" value="3"> <label for="star3"></label>
                                <input type="radio" id="star4" name="rate" value="4"> <label for="star4"></label>
                                <input type="radio" id="star5" name="rate" value="5"> <label for="star5"></label>
                           </div>
                            @auth
                            <button type="submit" class="btn btn-default pull-right">
                                Submit
                            </button>
                            @else
                            <a href="/login" class="btn-primary"> For Submit Your Review Please Login</a>
                            @endauth
                        </form>
                    </div>
                </div>


                    <div class="col-sm-6">
                        @foreach($reviews as $rs)
                            <div class="single-review">
                                <div class="review-heading">
                                    <div><a href="#"><i class="fa fa-user-o"></i> {{$rs->user->name}}</a></div>
                                    <div><a href="#"><i class="fa fa-clock-o"></i> {{$rs->created_at}}</a></div>
                                    <div class="review-rating pull-right">
                                        <i class="fa fa-star @if($rs->rate<1) -o empty @endif"></i>
                                        <i class="fa fa-star @if($rs->rate<2) -o empty @endif"></i>
                                        <i class="fa fa-star @if($rs->rate<3) -o empty @endif"></i>
                                        <i class="fa fa-star @if($rs->rate<4) -o empty @endif"></i>
                                        <i class="fa fa-star @if($rs->rate<5) -o empty @endif"></i>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

            </div>
        </div><!--/category-tab-->
        </div>

        <script src="{{asset('assets')}}/home_assets/jquery.js"></script>
        <script src="{{asset('assets')}}/home_assets/price-range.js"></script>
        <script src="{{asset('assets')}}/home_assets/jquery.scrollUp.min.js"></script>
        <script src="{{asset('assets')}}/home_assets/bootstrap.min.js"></script>
        <script src="{{asset('assets')}}/home_assets/jquery.prettyPhoto.js"></script>
        <script src="{{asset('assets')}}/home_assets/main.js"></script>



@endsection
