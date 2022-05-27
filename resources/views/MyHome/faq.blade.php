@extends('layouts.frontbase')

@section('title','Frequantly Asked Question | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection


@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Frequantly Asked Question</h2>
                </div>
                <div class="container">
                    <div id="accordion">
                    @foreach($datalist as $rs)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                       <h3>{{$rs->question}}</h3>
                                    </a>
                                </div>
                                <div id="{{$loop->iteration}}" class="collapse show" data-parent="#{{$loop->iteration}}">
                                    <div class="card-body">
                                        {{$rs->answer}}
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

