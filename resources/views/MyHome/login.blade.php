@extends('layouts.frontbase')

@section('title','User Login |')


@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                @include('auth.login')
            </div>
        </div>

    </div>

@endsection
