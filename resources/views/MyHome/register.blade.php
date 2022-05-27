@extends('layouts.frontbase')

@section('title','Register |')


@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                @include('auth.register')
            </div>
        </div>

    </div>

@endsection
