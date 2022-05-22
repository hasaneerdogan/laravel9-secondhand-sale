@extends('layouts.frontbase')

@section('title','About Us | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                {!! $setting->aboutus !!}
            </div>
        </div>

    </div>

@endsection
