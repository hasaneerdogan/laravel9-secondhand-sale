<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="2" class="active"></li>
                    </ol>

                    <div class="carousel-inner">
                        @foreach($sliderdata as $rs)
                            <div class="item {{ $rs->id  == 11 ? 'active':' '}}">
                                <div class="col-sm-6">
                                    <h1><span></span></h1>
                                    <h2>{{$rs->title}}</h2>
                                    <p>{{$rs->description}} </p>
                                    <button type="button" class="btn btn-default get">
                                        <a href="{{route('product',['id'=>$rs->id])}}" style="color: #0b0b0b">
                                            View
                                        </a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{Storage::url($rs->image) }}" class="girl img-responsive" alt="" style="width: 400px;height: 400px" />
                                </div>
                            </div>
                        @endforeach



                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
